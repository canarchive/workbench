<div class="row">
<div class="box col-md-12">
    <div class="box-inner">
        <?php foreach ($infos as $info) { $type = isset($info['type']) ? $info['type'] : 'common'; ?>
        <?= $this->render('_title', ['name' => isset($info['name']) ? $info['name'] : false]); ?>
        <?= $this->render("_{$type}", ['info' => $info]); ?>
        <?php } ?>
    </div>
</div>
</div>
