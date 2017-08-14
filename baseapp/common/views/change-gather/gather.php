<div class="row">
<div class="box col-md-12">
    <div class="box-inner">
        <?php if (isset($info['name'])) { ?>
        <div data-original-title="" class="box-header well">
            <h2><?= $info['name']; ?></h2>
            <div class="box-icon">
                 <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
            </div>
        </div>
        <?php } ?>
        <div class="box-content">
            <?php foreach ($info['elems'] as $elems) { ?>
            <table class="table table-striped table-bordered responsive">
                <thead><tr>
                    <?php foreach ($elems as $field => $elem) { echo '<th>' . $model->getAttributeLabel($field) . '</th>'; } ?>
                </tr></thead>
                <tbody><tr>
                    <?php foreach ($elems as $field => $elem) { echo $this->getElemView($model, $field, $elem); } ?>
                </tr></tbody>
            </table>
            <?php } ?>
        </div>
    </div>
</div>
<!--/span-->
</div>
