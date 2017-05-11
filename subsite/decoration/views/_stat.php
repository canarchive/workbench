<?php if (strpos($this->context->host, 'tu8zhang') !== false) { ?>
<?php if ($this->context->isMobile) { ?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?83a7f7fc2396e714d27c428326b44a1a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<?php } else { ?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?bec5b98a7cf00bf12417f7507f323808";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<?php } ?>
<?php } elseif (strpos($this->context->host, 'weinaya') !== false || strpos($this->context->host, 'tj-hl') !== false) { ?>
<?php if (!$this->context->isMobile) { ?>
<script>
var _hmt = _hmt || []; (function() { var hm = document.createElement("script"); hm.src = "https://hm.baidu.com/hm.js?bec5b98a7cf00bf12417f7507f323808"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s); })(); </script> 
<script type="text/javascript" charset="utf-8" async src="http://lxbjs.baidu.com/lxb.js?sid=10531188"></script>
<?php } ?>
<?php } else { ?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c6ea26f9c73874fb8e55870b6d2c8361";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<?php } ?>
