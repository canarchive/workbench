<?php
$modelNew = $merchantModel->_newModel('newContact');

$baseInfos = [
    [
        'type' => 'add',
        'addFunc' => 'addContact()',
        'name' => '添加联系人',
        'modelNew' => $modelNew,
        'elems' => [
            [
                'name' => ['sort' => 'change'],
                'mobile' => ['sort' => 'change'],
                'title' => ['sort' => 'change'],
                'orderlist' => ['sort' => 'change'],
                'description' => ['sort' => 'change'],
            ],
        ],
    ],
    [
        'type' => 'list',
        'name' => '联系人列表',
        'modelNew' => $modelNew,
        'infos' => $contactInfos,
        'fields' => $modelNew->gatherListElems,
    ]
];
echo $this->render('@baseapp/common/views/change-gather/gather', ['infos' => $baseInfos]);
?>
<script>
function addContact()
{
    var table = '<?= $modelNew->formName(); ?>';
    var mobile = $('#' + table + '_mobile_0').val();
    if (!mobile) {
        alert('<?= $modelNew->getAttributeLabel('mobile'); ?>内容不能为空');
        return false;
    }
    var data = {
        'merchant_id': '<?= $merchantModel->id; ?>',
        'operation': 'add',
        'table': table,
        'mobile': mobile,
        'description': $('#' + table + '_description_0').val(),
        'name': $('#' + table + '_name_0').val(),
        'title': $('#' + table + '_title_0').val(),
        'orderlist': $('#' + table + '_orderlist_0').val()
    };
    console.log(data);

    addElemByAjax('', data, table + '_infos');
}

</script>
