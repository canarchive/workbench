<?php
$datas = [
    'picDatas' => json_encode(['dataImg' => $info->design_sketch]),
    'info' => $info,
];
echo $this->render('../_show-pic', $datas);

?>
