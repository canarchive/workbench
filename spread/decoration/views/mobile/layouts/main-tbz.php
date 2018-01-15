<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['faviconUrl'] = Yii::getAlias('@asseturl') . '/favicon.ico';
$domainCms = 'http://www.tu8zhang.com';
$urls = [
    'index' => $domainCms,
    'city' => $domainCms . '/beijing/',
    'sample' => $domainCms . '/sample/',
    'merchant' => $domainCms . '/beijing/merchant/',
    'ask' => $domainCms . '/ask_lm_gzsj/',
    'quote' => $domainCms . '/beijing/quote/',
    'desc' => $domainCms . '/desc.html',
    'guestbook' => $domainCms . '/guestbook.html',
    'friendlink' => $domainCms . '/friendlink.html',
    'statement' => $domainCms . '/statement.html',
    'contactus' => $domainCms . '/contactus.html',
];
?>
<?php $this->beginContent('@common/views/base/main.php'); ?>
<link rel="shortcut icon" href="<?= Yii::getAlias('@assetself'); ?>/rabbithouse/webrabbit/images/favicon.ico" type="image/x-icon"/>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 1) {
    //window.location.href = "<?= $this->context->mobileMappingUrl; ?>";
}
</script>
<?= $content; ?>
<?php $this->endContent(); ?>
