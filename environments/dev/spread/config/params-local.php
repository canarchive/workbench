<?php
return [
    'noSendMessage' => true,
    'noCheckGrouponOver' => true,
    'noCheckGrouponSignined' => true,

    'noCheckDecorationOver' => true,
    'noCheckDecorationSignined' => false,//true,
    'mHosts' => [
        'dsyx' => Yii::getAlias('@m.spreadurl'),
    ],
];
