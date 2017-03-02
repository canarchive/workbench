<?php
use yii\helpers\Url;

$this->params['bodyClass'] = 'class="narrow_980"';
?>
<?php $this->beginContent('@gallerycms/views/main-pc.php'); ?>
<div class="header">
    <?= $this->render('@gallerycms/views/plat8/pc/header-top'); ?>
    <?= $this->render('@gallerycms/views/plat8/pc/header-mid', ['noForm' => false]); ?>
    <?= $this->render('@gallerycms/views/plat8/pc/header-nav'); ?>
</div>
<!--<a href="" target="_blank" class="about_nav_bg"></a>-->
<!--<span class="slider_container"></span>-->
<?= $content; ?>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/about_new.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/2a19dc2ac1471a7470fe7187a5537960.js"></script>
<div class="cler"></div>
<?= $this->render('@gallerycms' . '/views/plat8/pc/footer'); ?>

<script src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/js/common_new_forold.js?222" type="text/javascript"></script>
<script type="text/javascript">

var city_id = getCookie('townid', 1);
var current_city = false; //city_arr[city_id];
current_city = current_city ? current_city: '深圳';
jq('#current_city').html(current_city);
var current_tcode = getCookie('tcode', 1);
current_tcode = current_tcode ? current_tcode: 'sz';
jq("#logourl").attr("href", jq("#logourl").attr('href').replace(/www/g, current_tcode));

jq(".nav_fzlink").each(function() {
    var href = jq(this).attr('href');
    if (href.indexOf("sz") > 0) {
        var new_href = href.replace(/sz/g, current_tcode);
    } else if (href.indexOf("www") > 0) {
        var new_href = href.replace(/www/g, current_tcode);
    }
    jq(this).attr("href", new_href);
});

var no_showzwjCity = new Array(558, 959, 952, 1991, 1761, 1446, 1572, 1531, 2019, 1699, 74, 2255, 1106, 1206, 627, 2226, 1632, 1563, 814, 248, 255, 20, 229, 1460, 2763, 1464, 665, 647, 1262, 3009, 2994, 2280, 2939, 1713, 2735, 2687, 842, 2405, 2783, 2448, 2428, 2179, 1940, 2342, 1752, 3118, 218, 940, 2595, 1949, 1333, 1306, 1177, 1386, 1419, 2386, 1929, 3001, 1952, 2986, 3030, 3043, 1577, 1162, 2243, 2575, 176, 1377, 2392, 1639, 1350, 2458, 1501, 951, 637, 1511, 196, 1278, 2039, 190, 962, 1798, 1849, 1964, 653, 2095, 1976, 2494, 48, 876, 235, 1243, 2772, 99, 821, 1983, 2400, 1741, 725, 2308, 2510, 2565, 2518, 2528, 715, 3061, 3147, 3286, 3287);
function to8toInArray(search, array) {
    for (var i in array) {
        if (array[i] == search) {
            return true;
        }
    }
    return false;
}
if (to8toInArray(city_id, no_showzwjCity)) {
    jq("#nevzwjurl").hide();
}

headerFooter.init();

var uid;
jq('#side_slider').slider({
    speed: false,
    moveSlider: true,
    opacity: false,
    markSlider: false,
    time: 20000
},
"side_slider");
</script>
<?php $this->endContent(); ?>
