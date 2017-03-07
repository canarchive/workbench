<?php
$datas = [
    'picDatas' => json_encode(['dataImg' => $info->picture]),
    'infos' => $infos,
    'info' => $info,
];
echo $this->render('../_show-pic', $datas);

?>
