<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
$this->params['cssFiles'] = [
    'askbase-m-question', 'askbase-m-common.min',
];
$this->params['jsFiles'] = [
    'askbase-m-jquery.min', 'askbase-m-componentsh5',
];
?>
<?= $this->render('@gallerycms/house/views/mobile/_header'); ?>
<article>
<header><h1>质量问题：</h1></header>
<section>
    <p>1.装修是一项特别复杂的工程，工艺要求比较高，也受很多因素影响，比如户型、天气等等。也难免会出现瑕疵；出现瑕疵时业主您可以直接要求施工方进行整改</p>
    <p>2.装修公司不解决问题怎么办：首先，装修涉及的人员多，工艺复杂，很多问题其实是由沟通不畅导致，建议先跟装修公司多多沟通。其次，也可打客服电话反映情况，平台会做相应处理。</p>
</section>
<article>
    <header>
        <h1>工程延期：</h1></header>
    <section>
        <p>1.装修是个复杂的工程，大家都知道慢工出细活，如果您不急着入住的话，工期其实并不是越短越好。</p>
        <p>2.业主工程变更情况下，工期发生变动，施工方需要对工人进行再次排期调度，工期可能影响比较大。</p>
        <p>3.工程不受天气、政策、物业、材料延误方面的影响情况下，都不会出现工期延期，如果出现这些不可抗拒的原因，工期需要顺延。</p>
    </section>
</article>
<article>
    <header>
        <h1>增项漏项：</h1></header>
    <section>
        <p>装修工程比较难精准预估，业主需求发生变化也很正常，提醒一点：发生工程变更时，一定要白纸黑子双方确认签字，交易不要只停留在口头上，否则后期出了纠纷不好说。</p>
    </section>
</article>
<article>
    <header>
        <h1>延期配送：</h1></header>
    <section>
        <p>我们主材申请现在很火爆，可能会出现延误情况，但是一般不会影响到整体工期，如果延期也有相应赔付措施。</p>
    </section>
</article>
<article>
    <header>
        <h1>资金托管&质检服务：</h1></header>
    <section>
        <p>1.业主签署“装修保”之后，平台会提供资金托管和免费的第三方质检服务，服务包括5次质检验收，分别为：材料验收、水电验收、泥木验收、油漆验收、竣工验收，通过5个节点全程把控装修质量。每次验收业主需要在个人账户提前预约申请，质检验收之后出具验收单。</p>
        <p>2. 如果装修竣工一个月内业主对装修不满意，可暂缓拖管款转账到装修公司，直到业主满意；如果竣工一个月业主没有任何反应，平台会默认业主对装修满意，将托管款转账给装修公司。</p>
    </section>
</article>
<article>
    <header>
        <h1>局改问题：</h1></header>
    <section>
        <p>因平台装修服务申请火爆，我们目前对整装装修业主优先提供服务，局改的业主在短期时间没那么快提供服务，敬请谅解。</p>
    </section>
</article>
<article>
    <header>
        <h1>量房服务：</h1></header>
    <section>
        <p>平台的宗旨是按照业主的要求选派多家性价比最优、位置最近的服务方提供服务，可以货比多家，因平台的申请量太大，也从而会造成有0家或少家服务方提供服务，平台会优先服务于一个月之内需要整屋装修的业主，只要通过平台优先完善信息，即可锁定装修名额。</p>
    </section>
</article>
