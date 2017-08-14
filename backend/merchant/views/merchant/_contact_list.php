<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('name'); ?></th>
            <th><?= $modelNew->getAttributeLabel('title'); ?></th>
            <th><?= $modelNew->getAttributeLabel('mobile'); ?></th>
        </tr>
    </thead>
    <tbody id="contact_infos">
    <?php foreach ($contactInfos as $model) { ?>
        <tr>
            <td><?= $model->name; ?></td>
            <td><?= $model->title; ?></td>
            <td><?= $model->mobile; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
