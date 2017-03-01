                <div id='bcwt' style='display:none'>
                    <iframe src="" name="send" id="send" style="display:none;"></iframe>
                    <form action="ask_post.php" method="post" enctype="multipart/form-data" class="border" id="bucong" target="send">
                        <input type="hidden" name="action" value="editask">
                        <input type="hidden" name="ask_id" value="6377526">
                        <input type="hidden" name="uid" value="650943">
                        <input type="hidden" id="popwinid" value="answer">
                        <div class="bg_f8f8f8 p20">
                            <p class="ask_two_p">您的问题我们已经收到啦，专业人士正在积极帮您回答，稍等一下哦！您还可以
                                <a class="ask_arrow_two" href="javascript:void(0)">补充问题
                                    <i class="ask_arrow_green_up"></i></a>
                            </p>
                            <textarea class="ask_textarea_h100" style="display:none" name="direction" id="direction">详细说明问题的情况，可获得更准确的回答</textarea>
                            <div class="insert_img" style="display:none">
                                <input type="file" class="input_file" name="filename" id="filename" />
                                <div class="insert_img_modle clear">
                                    <span class="col_l">
                                        <i class="ico_pic"></i>
                                        <a href="javascript:void(0)">插入图片</a></span>
                                    <span class="col_l" style="display:none">
                                        <i>
                                        </i>
                                        <a type="button" class="ask_btn_green ml10" value="">删除</a></span>
                                    <span class="col_r">
                                        <span>还可以输入
                                            <label>1500</label>文字</span>
                                        <input onclick="answerTijiao2();" type="button" class="btn_green ml10" value="确认提交"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id='btjd' style='display:none;'>
                    <iframe src="" name="send" id="send" style="display:none;"></iframe>
                    <form action="ask_post.php" method="post" enctype="multipart/form-data" class="border" id="jiedawt" target="send">
                        <input type="hidden" name="action" value="addanswer">
                        <input type="hidden" name="ask_id" value="6377526">
                        <input type="hidden" id="popwinid" value="answer">
                        <div class="bg_f8f8f8 p20 bg_f8f8f82" style="display: none;margin-top:40px;">
                            <h3 class="title">我来帮他解答</h3>
                            <textarea class="ask_textarea_h100" name="content" id="content">为问友提供尽可能准确、详细和有效的回答，被采纳后将获得5积分哦~</textarea>
                            <div class="insert_img">
                                <input type="file" class="input_file" name="filename" id="filename" style="display: none;" />
                                <div class="insert_img_modle clear">
                                    <span class="col_l">
                                        <i class="ico_pic"></i>
                                        <a href="javascript:void(0)" id='denglu'>插入图片</a></span>
                                    <span class="col_l" style="display:none">
                                        <i>
                                        </i>
                                        <a href="javascript:void(0)" class="ask_btn_green ml10">删除</a></span>
                                    <span class="col_r">
                                        <span>还可以输入
                                            <label>1500</label>文字</span>
                                        <input onclick="answerTijiao();" type="button" class="btn_green ml10" id='tijiao' value="提交答案"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <i class="ico_green_ask"></i>
                <a href="" rel="nofollow" target="_blank" class="hot-hb-redian" style="position: absolute;right: 50px;top: 15px;">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/house/plat8/img/77a4f-4217.jpg" alt="" width="90" height="106"></a>
