<?php
$category = $model->categoryInfo;
$attributeItems = is_object($category) ? $category->getAttributeItems() : false;
$elems = array_chunk($attributeItems, 4);
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2>商品属性信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content">
				<?php foreach ($elems as $subElems) { ?>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
                        <?php foreach ($subElems as $elem) { echo '<th>' . $elem->name . '</th>'; } ?>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php foreach ($subElems as $elem) { echo $elem->getViewStr($model->goodsAttributeInfos, $this); } ?>
                    </tr>
                    </tbody>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
