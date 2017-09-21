<?php

namespace common\models;

use Yii;
use yii\data\ActiveDataProvider;

trait TraitSearch
{
	use TraitSearchTemplate;
	use TraitSearchForm;
	use TraitSearchSearch;
}
