<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['3cdab-6033', '355e9-6276', 'e6610-7846'];
$jsFiles = ['jquery', 'common'];
$this->params['cssStr'] = $this->render('@gallerycms/views/_css', ['cssFiles' => $cssFiles, 'path' => 'plat8']);
$this->params['jsStr'] = $this->render('../_js-aboutus', ['jsFiles' => $jsFiles]);
?>
<div class="w970">
    <div class="grid">
        <?= $this->render('_nav', ['navs' => $navs, 'view' => $view]); ?>
        <div class="about_main">
            <div class="to8to_culture about_box">
                <div class="about_center_title">
                    <h5 class="noBold">核心价值观<span>Core Values</span></h5>
                </div>
                <ul class="core_list">
                    <li class="one_core">
                        <div class="core_text">
                            <p><strong>客户第一：</strong>客户就是上帝，解决客户实际问题是我们的职责</p>
                        </div>
                    </li>
                    <li class="two_core">
                        <div class="core_text more_text">
                            <p><strong>简单可信：</strong>扁平化管理，人人平等，努力创造价值</p>
                        </div>
                    </li>
                    <li class="three_core">
                        <div class="core_text">
                            <p><strong>激情进取：</strong>执着投入，不骄不躁，有志者事竟成</p>
                        </div>
                    </li>
                    <li class="four_core">
                        <div class="core_text">
                            <p><strong>主动协作：</strong>共享共担，独当一面，团结互助</p>
                        </div>
                    </li>
                    <li class="five_core">
                        <div class="core_text">
                            <p><strong>快速有效：</strong>快速响应，动如脱兔，突破性解决问题</p>
                        </div>
                    </li>
                </ul>
                <?php //echo $this->render('_culture-ext'); ?>
            </div>
        </div>
    </div>
</div>
