<?php
echo $this->render('_callback-base', ['model' => $model]);
echo $this->render('_callback-contact', ['merchantModel' => $model, 'contactInfos' => $contactInfos]);

//echo $this->render('_listinfo_interview', ['merchantModel' => $model, 'interviewInfos' => $interviewInfos, 'contactInfos' => $contactInfos]);
echo $this->render('_callback', ['merchantModel' => $model, 'callbackInfos' => $callbackInfos, 'contactInfos' => $contactInfos]);
?>
