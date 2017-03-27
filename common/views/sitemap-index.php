<?php
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$mobileXmlns = '';//$this->context->isMobile ? 'xmlns:mobile="http://www.baidu.com/schemas/sitemap-mobile/1/"' : '';
?>
<sitemapindex>
<?php foreach ($urls as $url) { ?>
<sitemap>
   <loc><?= $url['loc']; ?></loc>
   <lastmod><?= is_string($url['lastmod']) ? $url['lastmod'] : date(DATE_W3C, $url['lastmod']) ?></lastmod>
</sitemap>
<?php } ?>
</sitemapindex>
