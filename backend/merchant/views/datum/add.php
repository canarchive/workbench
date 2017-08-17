<?php
$formContent = $this->render('_form', ['model' => $model]);

echo $this->render('@backend/views/common/change', ['formContent' => $formContent]);
