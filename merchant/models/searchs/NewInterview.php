<?php

namespace merchant\models\searchs;

use merchant\models\NewInterview as NewInterviewModel;

class NewInterview extends NewInterviewModel
{
    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
