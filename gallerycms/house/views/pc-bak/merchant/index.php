<?php echo $this->render('../_merchant-filter', ['merchantSortInfos' => $merchantSortInfos, 'tagInfos' => $tagInfos, 'model' => $model]); ?>
<!--content begin searcy_type showType -->
<div class="sel_box clearfix wrapper">
    <?php echo $this->render('_content', ['infos' => $infos, 'pages' => $pages]); ?>
    <?php echo $this->render('@gallerycms/views/platj/pc/_pic-right'); ?>
</div>
