<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$datas = [
    'picDatas' => json_encode(['dataImg' => $info->picture]),
    'info' => $info,
    'infos' => $infos,
];
?>
<?php echo $this->render('@gallerycms/views/layouts-m/plat8-pic/_show', $datas); ?>
