<?php

$controller = $this->context;
$menuInfos = $controller->menuInfos;

$statusInfos = $model->getStatusInfos();
?>
<thead>
    <tr>
        <th><?= $model->getAttributeLabel('name') . '( ' . $model->getAttributeLabel('id') . ' )'; ?></th>
        <th width='60px'><input type='checkbox' value='' id='check_box' onclick='selectall("mulIds[]");' /></th>
        <th><?= $model->getAttributeLabel('code'); ?></th>
        <th><?= $model->getAttributeLabel('orderlist'); ?></th>
        <th><?= $model->getAttributeLabel('type_code'); ?></th>
        <th><?= $model->getAttributeLabel('status'); ?></th>
        <th><?= $model->getAttributeLabel('description'); ?></th>
        <th></th>
    </tr>
</thead>
<tbody>
    <?php foreach ((array) $infos as $info) { ?>
    <tr id='node-<?= $info['id']; ?>' class="<?= $info['parentNode']; ?>">
        <td style='padding-left:30px;'><?= $info['name'] . '( ' . $info['id'] . ' )'; ?></td>
        <td><input type='checkbox' name='mulIds[]' class="checkbox_ids" value='<?= $info['id']; ?>' /></td>
        <td align='center'><?= $info['code']; ?></td>
        <td align='center'><input name='listorders[<?= $info['id']; ?>]' type='text' style='width:30px;' value='<?= $info['orderlist']; ?>' class='input-text-c'></td>
        <td align='center'><?= $model->getKeyName('type_code', $info['type_code']); ?></td>
        <td align='center'><?= $model->getKeyName('status', $info['status']); ?></td>
        <td align='center'><?= $info['description']; ?></td>
        <td>
        <?php
        foreach ($menuInfos['appMenus'] as $method => $appMenu) {
          if ($appMenu['display'] != 4) continue;
          $url = $appMenu['url'] . '?id=' . $info['id'];
          $urlDelete = 'javascript:confirmurl("' . $url . '", "' . Yii::t('admin-common', 'Confirm delete') . '( ' . $info['name'] . ' )?");';
          $menuUrl = $method == 'delete' ? $urlDelete : $url;
          echo "<a href='{$menuUrl}'>{$appMenu['name']}</a> ";
        }
        ?>
        </td>
    </tr>
    <?php } ?>
</tbody>