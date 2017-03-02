<?php
$this->params['topTitle'] = $this->context->currentCityName . '装修公司实景案例';
$this->params['topTitle1'] = '';
?>
<!--channel begin-->
<!--content begin searcy_type showType -->
<div class="sel_box clearfix wrapper">
    <?php echo $this->render('_content', ['infos' => $infos['infos'], 'pages' => $infos['pages']]); ?>
    <?php echo $this->render('@gallerycms/views/layouts/platj-pic/_pic-right'); ?>
</div>
