<?php

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$mobileXmlns = $this->context->isMobile ? 'xmlns:mobile="http://www.baidu.com/schemas/sitemap-mobile/1/"' : '';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" <?= $mobileXmlns; ?>>
<?php foreach ($urls as $url): ?>
<url>
    <loc><?= yii\helpers\Url::to($url['loc'], true) ?></loc>
    <?php if ($this->context->isMobile) { ?>
    <mobile:mobile type="mobile"/>
    <?php } ?>
    <?php if (isset($url['lastmod'])): ?>
    <lastmod><?= is_string($url['lastmod']) ? $url['lastmod'] : date(DATE_W3C, $url['lastmod']) ?></lastmod>
    <?php endif; ?>
    <?php if (isset($url['changefreq'])): ?>
    <changefreq><?= $url['changefreq'] ?></changefreq>
    <?php endif; ?>
    <?php if (isset($url['priority'])): ?>
    <priority><?= $url['priority'] ?></priority>
    <?php endif; ?>
</url>
<?php endforeach; ?>
</urlset>
