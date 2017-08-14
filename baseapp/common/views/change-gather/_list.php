<?php
$modelNew = $info['modelNew'];
$infos = $info['infos'];
$fields = $info['fields'];
?>
<div class="box-content">
    <table class="table table-striped table-bordered responsive">
        <thead><tr>
            <?php foreach ($fields as $field => $elem) { echo '<th>' . $modelNew->getAttributeLabel($field) . '</th>'; } ?>
        </tr></thead>
        <tbody id="<?= $modelNew->formName() . '_infos'; ?>">
        <?php foreach ($infos as $model) { ?>
            <tr>
                <?php foreach ($fields as $field => $elem) { echo $this->getElemView($model, $field, $elem); } ?>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
