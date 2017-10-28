<?php

namespace common\models;

use Yii;
use subsite\models\Attachment as AttachmentSubsite;

class SubsiteModel extends BaseModel
{
    public static function getDb()
    {
        return Yii::$app->dbSubsite;
    }    

	protected function getAttachmentModel()
	{
		return new AttachmentSubsite();
	}

    public function aTagMobile($view, $showMobile = false)
    {
        $menu = $view->getMenuData('subsite_decoration_user_update');
        $str = $showMobile ? $this->mobile : $this->maskMobile($this->mobile);
        if (!empty($menu)) {
            $url = $menu['url'] . '?id=' . $this->user_id;
            $str = "<a href='{$url}'>{$str}</a>";
        }
        return $str;
    }
}
