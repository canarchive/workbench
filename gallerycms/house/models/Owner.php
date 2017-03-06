<?php

namespace gallerycms\house\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class Owner extends GallerycmsModel
{
    use HouseTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%owner}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_code' => '城市代码',
            'mobile' => '手机号',
            'name' => '名字',
            'client_type' => '来源',
            'signup_at' => '报名时间',
            'signup_ip' => '报名IP',
            'signup_city' => '报名城市',
            'channel_big' => '一级渠道',
            'channel' => '报名渠道',
            'message' => '留言',
            'note' => '备注',
            'keyword' => '关键字',
            'keyword_search' => '搜索关键字',
            'invalid_status' => '无效原因',
            'callback_at' => '第一次回访',
            'callback_again' => '再次回访时间',
            'status' => '状态',
        ];
    }

    public function addOwner($data)
    {
        $ip = Yii::$app->getRequest()->getIP();
        $city = \common\components\IP::find($ip);
        $city = is_array($city) ? implode('-', $city) : $city;
        $time = Yii::$app->params['currentTime'];
        $data = array_merge($data, [
            'signup_at' => $time,
            'created_at' => $time,
            'created_month' => date('Ym', $time),
            'created_day' => date('Ymd', $time),
            'created_hour' => date('H', $time),
            'created_week' => date('W', $time),
            'created_weekday' => date('N', $time),
            'signup_num' => 1,
            'signup_ip' => $ip,
            'signup_city' => $city,
        ]);

        $newModel = $this->_newModel('owner', true, $data);
        $insert = $newModel->insert(true, $data);
        if (!$insert) {
            return false;
        }

        return $newModel;
    }

    public function insert($runValidation = true, $attributes = null)
    {
        if (($primaryKeys = $this->getDb()->schema->insert($this->tableName(), $attributes)) === false) {
            return false;
        }
        foreach ($primaryKeys as $name => $value) {
            $id = $this->getTableSchema()->columns[$name]->phpTypecast($value);
            $this->setAttribute($name, $id);
            $values[$name] = $id;
        }

        $changedAttributes = array_fill_keys(array_keys($values), null);
        $this->setOldAttributes($values);
        return true;
    }        

    public function getInvalidStatusInfos()
    {
        $datas = [
            '' => '未知',
            'ok' => '有效',
            'no_call' => '空号',
            'double' => '重复报名',
            'noneed' => '无房',
            'booked' => '已定好',
            'no_service' => '地区未开通',
            'no_near' => '郊区',
        ];

        return $datas;
    }

    public function getStatusInfos()
    {
        $datas = [
            '0' => '未回访',
            '1' => '跟进',
            '2' => '期房跟进',
            '3' => '已派单',
            '4' => '废单',
        ];
        return $datas;
    }

    public function getCallbackAgainInfos()
    {
        $datas = [
            0 => '',
            1 => '再次回访',
        ];

        return $datas;
    }

    public function getSignupChannelInfos()
    {
        $datas = [
            'semthird' => '第三方SEM',
            'semspider' => 'SEM抓取',
        ];
        return $datas;
    }

    public function updateAfterInsert($cInfo)
    {
        //if (!empty($cInfo['channel']) || !empty($cInfo['keyword'] || !empty($cInfo['keywork_search']))) {
        if (empty($this->merchant_id)) {
            $this->merchant_id = isset($cInfo['merchant_id']) ? $cInfo['merchant_id'] : 0;
        }
            $this->channel = isset($cInfo['channel']) ? $cInfo['channel'] : '';
            $this->keyword = isset($cInfo['keyword']) ? $cInfo['keyword'] : '';
            $this->keyword_search = isset($cInfo['keyword_search']) ? $cInfo['keyword_search'] : '';
            $this->sem_account = isset($cInfo['sem_account']) ? $cInfo['sem_account'] : '';
            $this->plan_id = isset($cInfo['plan_id']) ? $cInfo['plan_id'] : 0;
            $this->unit_id = isset($cInfo['unit_id']) ? $cInfo['unit_id'] : 0;
            
            $this->city_code = isset($cInfo['city_code']) ? $cInfo['city_code'] : strval($this->city_code);
        //}
        //print_r($this->toArray());exit();
        $this->statisticRecord($this->toArray(), 'signup');
        $this->update(false);
        return ;
    }

    public function addHandle()
    {
        $validator = new \common\validators\MobileValidator();
        $valid =  $validator->validate($this->mobile);
        if (empty($valid)) {
            $this->addError('mobile', '手机号有误');
            return false;
        }

        $exist = self::findOne(['mobile' => $this->mobile]);
        if ($exist) {
            $this->addError('mobile', '手机号已存在');
            return false;
        }

        $data = [
            'mobile' => $this->mobile,
            'name' => $this->name,
            'city_code' => $this->city_code,
            'position' => '',
            //'channel_big' => 'seo',
            'note' => $this->note,
            'message' => '',
            'city_input' => '',
            'client_type' => 'pc',
            'area_input' => 0,
            'channel' => $this->channel,
        ];
        $decorationOwner = $this->addOwner($data);

        return $decorationOwner;
    }

	protected function _formatInfos($infos)
	{
		foreach ($infos as $key => & $info) {
			if (!$info['view_at']) {
				$info['mobile'] = substr_replace($info['mobile'], '******', 3, 6);
			}
		}

		return $infos;
	}
}
