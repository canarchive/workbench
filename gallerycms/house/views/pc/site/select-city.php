<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['3cdab-6033', '355e9-6276', 'e6610-7846', 'city'];
$jsFiles = ['jquery', 'common'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8']);
$this->params['jsStr'] = $this->render('../_js-aboutus', ['jsFiles' => $jsFiles]);
?>
<script>
//window.location.href = "<?= "/{$this->context->currentCityCode}/"; ?>";
</script>

<div class="choose_city">
    <!--热门城市-->
    <div class="rmcs" id="Div1">
        <div class="title_type1">热门城市</div>
        <div class="xzcs_dt">
            <?php foreach (Yii::$app->params['companyInfos'] as $cInfo) { ?>
            <span>
                <a href="<?= "/{$cInfo['code']}/"; ?>" title="<?= $cInfo['name']; ?>装修网"><?= $cInfo['name']; ?></a></span>
            <?php } ?>
            <div class="rm_gkt">共开通了<i><?= count(Yii::$app->params['companyInfos']); ?></i>个城市站</div>
        </div>
    </div>
    <?php //echo $this->render('_city-mul'); ?>
</div>
<?php //echo $this->render('_city-info'); ?>
