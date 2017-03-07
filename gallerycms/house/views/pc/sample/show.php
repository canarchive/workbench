<?php
$datas = [
    'picDatas' => json_encode(['dataImg' => $info->picture]),
    'info' => $info,
    'infos' => $infos,
];
echo $this->render('../_show-pic', $datas);

?>
