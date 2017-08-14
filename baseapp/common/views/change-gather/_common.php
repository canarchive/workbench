<?php
$model = $info['model'];
?>
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
