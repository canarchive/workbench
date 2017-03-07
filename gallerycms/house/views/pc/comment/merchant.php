<?php
use gallerycms\components\LinkPager;
$info = $this->context->mDatas['info'];
$this->params['currentNav'] = 'comment';
$this->params['noCommentList'] = true;
?>
<div class="picture file_one">
    <div class="title"><h2><?= $info['name']; ?>业主评论</h2></div>
    <div class="comment">
        <?php //echo $this->render('_comment'); ?>
        <?php $i = 0; foreach ($commentInfos['infos'] as $info) { ?>
        <a name="anchor9816"></a>
        <div class="join clearfix">
            <a name="anchor9816"></a>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/house/platj/img/6ca70-5407.jpg" class="peo" width="69" height="69" />
            <div class="join_box">
                <div class="join_eva clearfix">
                    <span class="span_red fl"><?= $info['ownerInfo']['name']; ?></span>
                    <span class="span_time fl"><?= date('Y年m月d日', $info['created_at']); ?></span>
                    <span class="span_gray fl">装修阶段:</span>
                    <span class="span_good fl"><?= $info['status']; ?></span>
                    <i class="xs_5y fl my_feel4"></i>
                </div>
                <div class="join_infor"><?= $info['content']; ?></div>
                <!--<ul class="clearfix">
                    <li class="my_replay" style="display:block;"><a href="javascript:;" name="toggleReply" title="隐藏回复">回复(<span></span>)</a></li>
                    <li><span class="line"></span></li>
                    <li>
                        <a href="javascript:void(0);" pid="9816" act="yes" num="0" onclick="isSupport($(this));return false;">支持(
                            <span>0</span>)</a></li>
                    <li>
                        <span class="line"></span>
                    </li>
                    <li>
                        <a href="javascript:void(0);" pid="9816" act="no" num="0" onclick="isSupport($(this));return false;">反对(
                            <span>0</span>)</a></li>
                </ul>-->
                <?php //echo $this->render('_list-callback'); ?>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="black2"><?= LinkPager::widget(['pagination' => $commentInfos['pages'], 'activePageCssClass' => 'current']); ?></div>
</div>
