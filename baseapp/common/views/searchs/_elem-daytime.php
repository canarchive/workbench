<?php
$format = isset($elem['format']) ? $elem['format'] : 'YYYY-MM-DD HH:mm:ss';
?>
<label class="control-label col-md-1"><?= $elem['name']; ?></label>
<div class="col-md-2">
    <input class="form-control" type="text" id="<?= $elem['field']; ?>" name="<?= $elem['field']; ?>" >
    <script type="text/javascript">
        $(function () {
            $('#<?= $elem['field']; ?>').datetimepicker({locale: 'zh-CN', format: '<?= $format; ?>'});
        });
    </script>
</div>
<?php if (isset($elem['end'])) { $elemEnd = $elem['end']; $formatEnd = isset($elemEnd['format']) ? 'YYYY-MM-DD HH:mm:ss'; ?>
<div class="col-md-2">
    <input class="form-control" type="text" id="<?= $elemEnd['field']; ?>" name="<?= $elemEnd['field']; ?>" >
    <script type="text/javascript">
        $(function () {
            $('#<?= $elemEnd['field']; ?>').datetimepicker({locale: 'zh-CN', format: '<?= $formatEnd; ?>'});
        });
    </script>
</div>
<?php } ?>
