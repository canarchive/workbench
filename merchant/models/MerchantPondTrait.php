<?php

namespace merchant\models;

trait MerchantPondTrait
{
    public $is_write = true;

    public function import()
    {   
        $datas = $this->_importDatas(true);
        if ($datas === false) {
            return ;
        }
        $attachment = $datas['attachment'];
        $datas = $datas['datas'];
        //print_r($datas);exit();

        $i = 0;
        $message = '';
        $file = $attachment->name;
        $titleData = [];
        foreach ($datas as $subDatas) {
            foreach ($subDatas as $key => $data) {
                if ($key == 1) { 
                    $titleData = $data;
                    continue; 
                }
                $mData = $this->getDataFromSource('merchant', $data, $file, $titleData);
                $mData = array_merge($mData, [
                    'sort' => 'decoration',
                    'saleman_id' => $this->saleman_id,
                    'saleman_id_first' => $this->saleman_id,
                    'msg' => $file,
                ]);
                //print_r($mData);
                $mId = $this->addMerchantInfo($mData);
                if ($mId) {
                    $cData = $this->getDataFromSource('contact', $data, $file, $titleData);
                    $cData['merchant_id'] = $mId;
                    //print_r($cData);
                    $this->addContactInfo($cData);
                    $i++;
                } else {
                    $message .= "'{$mData['name']}',";
                }
            }
        }
        $message = empty($message) ? '' : '录入失败的信息：' . $message;
        return ['number' => $i, 'message' => $message];
    }

    public function getDataFromSource($type, $data, $file, $titleData)
    {
        $elems = $this->_fieldElem($type);
        $info = [];
        foreach ($elems as $field => $elem) {
            if (!is_array($elem)) {
                $info[$field] = isset($data[$elem]) ? trim($data[$elem]) : '';
            } else {
                $str = '';
                foreach ($elem as $sElem) {
                    if (!isset($data[$sElem])) {
                        continue;
                    }
                    $value = trim($data[$sElem]);
                    if (empty($value)) {
                        continue;
                    }
                    $title = isset($titleData[$sElem]) ? $titleData[$sElem] : '';
                    $value = empty($title) ? $value : $title . '：' . $value;
                    $str .= $value . '-#-';
                }
                $str = trim($str, '-#-');
                $info[$field] = $str;
            }
        }
        //print_r($info);
        return $info;
    }

    protected function _fieldElem($type)
    {
        $this->is_write = true;
        $elems =[
           'merchant' => [
                'name' => 'A',
                'address' => 'Z',
                'description' => ['Z'],
            ],
            'contact' => [
                'name' => 'B',
                'mobile' => 'C',
                'title' => 'L',
                'description' => ['D'],
            ],
        ];
        return $elems[$type];
    }

    public function addMerchantInfo($data)
    {
        if (empty($data['name'])) {
            return false;
        }
        $info = $this->find()->where(['name' => $data['name']])->one();
        if (empty($info)) {
            $info = new self($data);
            echo 'New-' . $data['name'] . "<br />\n";
        } else {
            $str = $data['address'] . '-' . $data['description'];
            $oldStr = $info['address'] . '-' . $info['description'];
            if ($str != $oldStr) {
                $info->description = $info->description . "=|=新录入:{$str}";
                echo 'Old-' . $info->name . '-' . $info->description . "<br />\n";
            }
        }
        $r = $this->is_write ? $info->save(false) : false;
        return empty($info->id) ? 1 : $info['id'];
    }

    public function addContactInfo($data)
    {
        if (empty($data['name']) && empty($data['mobile']) && empty($data['description'])) {
            return ;
        }
        $cModel = new Contact();
        $info = $cModel->find()->where(['mobile' => $data['mobile'], 'merchant_id' => $data['merchant_id']])->one();
        if (empty($info)) {
            echo 'New-' . $data['name'] .  '-' . $data['merchant_id'] . "<br />\n";
            $info = new Contact($data);
        } else {
            unset($data['merchant_id']);
            $str = implode('-', $data);
            $oldStr = implode('-', [$info['name'], $info['mobile'], $info['title'], $info['description']]);
            if ($str != $oldStr) {
                $info->description = $info->description . "=|=新录入:{$str}";
                echo $str . "<br />\n";
                echo $oldStr . "<br />\n";
                echo 'Old-' . $info->name . '-' . $info->description . "<br />\n";
            }
        }
        $cr = $this->is_write ? $info->save(false) : '';
        return ;
    }
}
