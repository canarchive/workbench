<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'components/arrow', 'provider/pd-nav', 'provider/pd-common', 'provider/pd-index',
	'provider/pd-channel',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'provider/pd-common', 'provider/pd-index',
];
$this->params['currentNav'] = 'realcase';
$this->params['friendLink'] = true;
$this->context->mobileMappingUrl = Url::to(['/house/mobile-realcase/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<div class="banner"></div>
<div class="pd-main">
    <div class="pd-main-body pd-channel">
        <div class="crumbs"></div>
        <!-- 实景案例 -->
        <div class="pd-realcase active">
            <div class="pd-rc-case">
                <div class="pd-showcase">
                    <?php foreach ($infos as $info) { ?>
					<a href="<?= Url::to(['/house/realcase/show', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
                        <div class="case-item">
							<div><img class="case-img" src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
								    <!--<p class="ch-case-title"><?= $info['ownerInfo']['brief']; ?></p>-->
                                    <p class="ch-case-info">
									<span role="construction"><?= $info['ownerInfo']['brief']; ?></span>
										<!--<span role="style"><?= $info['ownerInfo']['style']; ?></span>
										<span role="detail"><?= $info['ownerInfo']['decoration_type'] . $info['ownerInfo']['decoration_price']; ?>万</span>-->
                                    </p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
									<p class="ch-dat-fork"><?= rand(1000,9999); ?></p></div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                <!--<div class="page">
                    <p>
                        <a class="btnpage on">1</a>
                        <a class="btnpage" href="/realcase/p_2/">2</a>
                        <a class="btnpage" href="/realcase/p_3/">3</a>
                        <a class="btnpage" href="/realcase/p_4/">4</a>
                        <a class="btnpage" href="/realcase/p_5/">5</a>
                        <a href="/realcase/p_2/">下一页</a>
                        <a href="/realcase/p_11/">末页</a>
                    </p>
                </div>-->
            </div>
        </div>
        <div id="pd-fault-footer"></div>
    </div>
</div>
<?php echo $this->render('../common/_pop_mask', []); ?>
<?php echo $this->render('../common/_signup', ['type' => 'realcase-index-bottom']); ?>
