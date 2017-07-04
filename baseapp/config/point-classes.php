<?php
return [
    'merchant' => '\baseapp\merchant\models\Merchant',
    'service' => '\baseapp\merchant\models\Service',
    'merchant-user' => '\merchant\models\User',
    'merchant-role' => '\merchant\models\Role',
    'company' => '\baseapp\passport\models\Company',

    // spread
    'account' => '\spread\models\Account',
    'plan' => '\spread\models\Plan',
    'unit' => '\spread\models\Unit',
    'template' => '\spread\models\Template',

	// shop flower
	'tag-sort-shopf' => '\shop\flower\models\TagSort',
	'shop-sort-flower' => '\shop\flower\models\Sort',
];

