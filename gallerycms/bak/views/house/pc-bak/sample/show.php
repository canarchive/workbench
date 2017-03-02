<?php
$datas = [
    'picDatas' => json_encode(['dataImg' => $info->picture]),
    'info' => $info,
];
echo $this->render('../_show-pic', $datas);

?>
