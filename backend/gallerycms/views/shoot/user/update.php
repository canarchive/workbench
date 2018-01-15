<?php
$extContent = '';//$this->render('_listinfo_house', ['modelUser' => $model, 'houseInfos' => $houseInfos, 'userMerchantInfos' => $userMerchantInfos]);
$datas['extContent'] = $extContent;

echo $this->render('@baseapp/spread/views/user/update', $datas);
?>
