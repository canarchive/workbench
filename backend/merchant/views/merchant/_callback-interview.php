<?php
$modelNew = $merchantModel->_newModel('interview');

$baseInfos = [
    [
        'type' => 'add',
        'addFunc' => 'addInterview()',
        'name' => '添加面谈',
        'modelNew' => $modelNew,
        'elems' => [
            [
                'contact_id' => ['sort' => 'change', 'type' => 'dropdown', 'elemInfos' => $modelNew->getPointInfos('merchant-contact', ['where' => ['merchant_id' => $merchantModel->id]])],
                'saleman_interview' => ['sort' => 'change', 'type' => 'dropdown', 'elemInfos' => $modelNew->getPointInfos('saleman')],
                'interview_at' => ['sort' => 'change', 'type' => 'timestamp'],
                'note_pre' => ['sort' => 'change', 'type' => 'textarea'],
            ],
        ],
    ],
    [
        'type' => 'list',
        'name' => '面谈列表',
        'modelNew' => $modelNew,
        'infos' => $interviewInfos,
        'fields' => $modelNew->getGatherListElems(['merchant_id' => $merchantModel->id]),
    ]
];
echo $this->render('@baseapp/common/views/change-gather/gather', ['infos' => $baseInfos]);
?>
<script>
function addInterview()
{
    var table = '<?= $modelNew->formName(); ?>';
    var interview_at = $('#' + table + '_interview_at_0').val();
    if (!interview_at) {
        alert('<?= $modelNew->getAttributeLabel('interver_at'); ?>内容不能为空');
        return false;
    }
    var data = {
        'merchant_id': '<?= $merchantModel->id; ?>',
        'saleman_id': <?= $merchantModel->saleman_id; ?>,
        'operation': 'add',
        'table': table,
        'interview_at': interview_at,
        'saleman_interview': $('#' + table + '_saleman_interview_0').val(),
        'note_pre': $('#' + table + '_note_pre_0').val(),
        'contact_id': $('#' + table + '_contact_id_0').val()
    };

    addElemByAjax('', data, table + '_infos');
}
</script>
