<div class="friend_welcome wrap_mar clear">
    <span>友情链接</span>
    <p class="welcome fr">欢迎pr≥4，快照三日内的媒体、行业网站或综合门户网站与我们交换友情链接 联系QQ：3191265960</p></div>
<ul class="friendLian wrap_mar clear">
    <?php foreach ($fInfos as $fInfo) { ?>
    <li>
        <a href="<?= $fInfo['url']; ?>" title="<?= $fInfo['name']; ?>"><?= $fInfo['name']; ?></a></li>
    <?php } ?>
</ul>
