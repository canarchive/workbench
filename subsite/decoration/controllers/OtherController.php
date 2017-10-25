<?php

namespace subsite\decoration\controllers;

use Yii;
use subsite\decoration\models\SignupForm;
use spread\models\Template;

class OtherController extends Controller
{
    public $merchantInfo;
    public $returnUrl;
    public function actionStyle()
    {
        $style = Yii::$app->request->get('dstyle');
        $data = $this->getStyleInfos($style);
        //$this->downPic();
        return $this->render('dstyle', ['data' => $data]);   
    }

    protected function getStyleInfos($style = '')
    {

        $datas = [
            'jo' => [
                'code' => 'jo',
                'name' => '简欧风',
                'desc' => '简化了的欧式风格，摒弃欧式风过于复杂的装饰和线条',
                'brief' => '整体体现欧式风格精髓，但更注重实用性，且融入现代的生活元素，整体配色多以象牙白，御品黄等浅色调为主',
                'elems' => ['欧式墙纸', '大理石地砖', '丝绒家具', '铁艺装饰', '画作'],
                'img' => 'jianou',
            ],
            'jy' => [
                'code' => 'jy',
                'name' => '现代简约风',
                'desc' => '简约而不简单，通过对设计元素的简化和碰撞，达到凸显个性，不受拘束的效果',
                'brief' => '强调功能性设计，线条简约流畅，色彩对比强烈  由于现代简约风格线条简单、装饰元素少，对软装搭配要求较高',
                'elems' => ['玻璃', '不锈钢', '金属灯罩', '金属灯罩'],
                'img' => 'xiandaijianyue',
            ],
            'ms' => [
                'code' => 'ms',
                'name' => '现代美式风',
                'desc' => '美式风格，根植于欧洲文化，结合美国地大物博，崇尚自由的生活方式，形成宽大，舒适，糅杂各种文化的风格特色。而现代美式则相对传统美式更加年轻化，家具选择更有包容性',
                'brief' => '大量使用实木元素，崇尚古典韵味，同时注重实用性和舒适性，从而营造一种自然明快的生活环境  家具搭配具有历史感，多使用仿古艺元素，体现一种怀旧气息',
                'elems' => ['实木家具', '壁炉', '线板墙', '仿古地砖', '格子窗户', '怀旧装饰'],
                'img' => 'xinmeishi',
            ],
            'zs' => [
                'code' => 'zs',
                'name' => '新中式风',
                'desc' => '将传统中式元素和现代元素加以结合的装修风格',
                'brief' => '讲究对称和纲常，以阴阳平衡概念调和室内生态  讲究空间的层次感，注重使用屏风、窗棂、木门等进行隔断',
                'elems' => ['中国画', '屏风', '陶艺', '新中式宫灯'],
                'img' => 'xinzhongshi',
            ],
        ];
        return isset($datas[$style]) ? $datas[$style] : $datas['jo'];
    }

    public function downPic()
    {
        $datas = $this->styleInfos;
        //echo "wget -O {$j}.jpg {$url}<br />";
        $str = '';
        $i = 1;
        $urlBase = 'http://s1.17house.com/newweb/m/newSem/manner/images/';
        foreach ($datas as $code => $data) {
            $elems = $data['elems'];
            foreach ($elems as $eKey => $eName) {
                $num = $eKey + 1;
                $eUrl = "{$urlBase}selectStyle{$i}/{$num}.jpg";
                $str .= "wget -O elem-{$code}-{$num}.jpg {$eUrl}<br />";
            }
            foreach ([2, 3, 4] as $index1) {
                foreach ([1, 2, 3, 4] as $index2) {
                    $eUrl = "{$urlBase}{$data['img']}/{$index1}/{$index2}.jpg";
                    $str .= "wget -O show_{$code}_{$index1}_{$index2}.jpg {$eUrl}<br />";
                }
            }
            $i++;
        }
        echo $str;
    }
}
