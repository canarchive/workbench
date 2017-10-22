<?php

$listUrl = $this->getMenuUrl('listinfo');
$addUrl = $this->getMenuUrl('add');
?>
<thead>
    <tr>
        <th><?= $model->getAttributeLabel('name') . '( ' . $model->getAttributeLabel('id') . ' )'; ?></th>
        <th><?= $model->getAttributeLabel('code'); ?></th>
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
        <td align='center'><?= $info['code']; ?></td>
        <td align='center'><?= $model->getKeyName('type_code', $info['type_code']); ?></td>
        <td align='center'><?= $model->getKeyName('status', $info['status']); ?></td>
        <td align='center'><?= $info['description']; ?></td>
        <td>
        <?php
            $opeStr = '';
            if (!empty($listUrl)) {
				$opeStr .= "<a href='{$listUrl}?category_code={$info['code']}'>商品列表</a>    ";
			}
            if (!empty($addUrl)) {
				$opeStr .= "<a href='{$addUrl}?category_code={$info['code']}'>添加商品</a>    ";
			}
			echo $opeStr;
        ?>
        </td>
    </tr>
    <?php } ?>
</tbody>
