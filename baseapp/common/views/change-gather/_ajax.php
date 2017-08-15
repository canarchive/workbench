<?php
$elems = $model->gatherListElems;
?>
<tr>
    <?php foreach ($elems as $field => $elem) { echo $this->getElemView($model, $field, $elem); } ?>
</tr>
