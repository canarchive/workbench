<?php
$formContent = $this->render('_form-import', ['model' => $model, 'import' => true]);

if (!is_null($number)) {
    echo "<h3>导入有效数据 '{$number}' 条</h3>";
}
echo $this->render('@backend/views/common/change', ['formContent' => $formContent]);
