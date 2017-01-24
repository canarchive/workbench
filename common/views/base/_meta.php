<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="with=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="applicable-device" content="mobile" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="format-detection" content="address=no">
<meta name="format-detection" content="telephone=no">
<meta content="false" name="twcClient" id="twcClient" />
<?php if ($this->context->isMobile) { ?>
<link rel="canonical" href="<?= $this->context->pcMappingUrl; ?>">
<?php } else { ?>
<meta http-equiv="mobile-agent" content="format=xhtml;url=<?= $this->context->mobileMappingUrl; ?>" />
<meta http-equiv="mobile-agent" content="format=html5;url=<?= $this->context->mobileMappingUrl; ?>" />
<meta http-equiv="mobile-agent" content="format=wml;url=<?= $this->context->mobileMappingUrl; ?>" />
<?php } ?>
