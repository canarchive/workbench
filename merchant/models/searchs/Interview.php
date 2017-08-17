<?php

namespace merchant\models\searchs;

use merchant\models\Interview as InterviewModel;

class Interview extends InterviewModel
{
    public $interview_at_start;
    public $interview_at_end;

    public function rules()
    {
        return [
            [['merchant_id', 'interview_at_start', 'interview_at_end', 'status'], 'safe'],
        ];
    }

    public function _searchElems()
    {
        return [
            ['field' => 'merchant_id', 'type' => 'common'],
            ['field' => 'status', 'type' => 'common'],
            ['field' => 'interview_at', 'type' => 'rangeTime'],
        ];
    }

    public function _searchDatas()
    {
        $list = [
            //$this->_sKeyParam(['field' => 'status']),
        ];
        $form = [
        [
            $this->_sStartParam(['field' => 'interview_at']),
        ]
        ];
        return ['list' => $list, 'form' => $form];
    }
}
