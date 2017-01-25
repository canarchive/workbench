<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$cssFiles = ['355e9-6276', 'e6610-7846'];
$jsFiles = ['jquery', 'common'];
$this->params['cssStr'] = $this->render('../_css-aboutus', ['cssFiles' => $cssFiles]);
$this->params['jsStr'] = $this->render('../_js-aboutus', ['jsFiles' => $jsFiles]);
?>
<div class="w970">
    <div class="grid">
        <?= $this->render('_nav', ['navs' => $navs, 'view' => $view]); ?>
        <div class="about_main">
            <div class="legal_notice about_box">
                <div class="about_center_title">
                    <h5 class="noBold">服务条款
                        <span>Terms of Service</span></h5>
                </div>
                <div class="about_center">
                    <strong class="c5c5c">免责条款</strong>
                    <p>欢迎使用<?= Yii::$app->params['siteNameBase']; ?>！任何使用<?= Yii::$app->params['siteNameBase']; ?>的用户均应仔细阅读本声明，用户可选择不使用<?= Yii::$app->params['siteNameBase']; ?>，用户使用<?= Yii::$app->params['siteNameBase']; ?>的行为，包括进入<?= Yii::$app->params['siteNameBase']; ?>主页及各层页面将被视为对本声明全部内容的认可。</p>
                    <br />
                    <p><?= Yii::$app->params['siteNameBase']; ?>所有刊登内容，以及所提供的信息资料，目的是为了更好地服务我们的访问者，本网站不保证所有信息、文本、图形、链接及其它 项目的绝对准确性和完整性，故仅供访问者参照使用。</p>
                    <br />
                    <p><?= Yii::$app->params['siteNameBase']; ?>不担保网络服务一定能满足用户的要求，也不担保网络服务不会中断，对网络服务的及时性、安全性、准确性也都不做担保。对于因不可抗力或<?= Yii::$app->params['siteNameBase']; ?>不能控制的原因造成的网络服务中断或其他缺陷，<?= Yii::$app->params['siteNameBase']; ?>不承担任何责任，但将尽力减少因此而给用户造成的损失和 影响.<?= Yii::$app->params['siteNameBase']; ?>严格保障用户隐私权，对上网用户的个人信息保密，未经上网用户同意不得向他人泄露，但法律另有规定的除外.用户自愿注 册个人信息，用户在注册时提供的所有信息，都是基于自愿，用户有权在任何时候拒绝提供这些信息。注册个人信息的用户同意<?= Yii::$app->params['siteNameBase']; ?>对这些信息进行善意利用。用户明确同意其使用<?= Yii::$app->params['siteNameBase']; ?>网络服务所存在的风险将完全由其自己承担。</p>
                    <br />
                    <p>任何单位或个人认为通过<?= Yii::$app->params['siteNameBase']; ?>的内容（或通过<?= Yii::$app->params['siteNameBase']; ?>到的第三方内容：例如，口袋资源分享）可能涉嫌侵犯其合法权益，应该及时向土 巴兔书面反馈，并提供身份证明、权属证明及详细侵权情况证明，<?= Yii::$app->params['siteNameBase']; ?>在收到上述法律文件后，将会尽快删除被控侵权内容。</p>
                    <br />
                    <p>除<?= Yii::$app->params['siteNameBase']; ?>注明之服务条款外，其它因使用<?= Yii::$app->params['siteNameBase']; ?>而引致之任何意外、疏忽、合约毁坏、诽谤、版权或知识产权侵犯及其所造成的各种损失 （包括因下载而感染电脑病毒），<?= Yii::$app->params['siteNameBase']; ?>概不负责，亦不承担任何法律责任。</p>
                    <br />
                    <p>任何透过<?= Yii::$app->params['siteNameBase']; ?>网页而链接及得到之资讯、产品及服务，<?= Yii::$app->params['siteNameBase']; ?>概不负责，亦不负任何法律责任。</p>
                    <br />
                    <p><?= Yii::$app->params['siteNameBase']; ?>内所有内容并不反映任何<?= Yii::$app->params['siteNameBase']; ?>之意见及观点。</p>
                    <br />
                    <p><?= Yii::$app->params['siteNameBase']; ?>适用于中华人民共和国法律法规规定的其它有关免责规定。</p>
                    <strong class="c5c5c">用户协议</strong>
                    <strong class="c999">1、协议生效条件</strong>
                    <p><?= Yii::$app->params['siteNameBase']; ?>的各项服务的所有权和运作权归<?= Yii::$app->params['siteNameBase']; ?>所有。<?= Yii::$app->params['siteNameBase']; ?>提供的服务将完全按照其发布的章程、服务条款和操作规则严格执行。用户完 全完成注册程序，此协议即时生效，您随之成为<?= Yii::$app->params['siteNameBase']; ?>的注册用户。</p>
                    <strong class="c999">2、注册义务</strong>
                    <p><?= Yii::$app->params['siteNameBase']; ?>通过国际互联网为用户提供网络服务。同时，用户必须：</p>
                    <p class="t_indent">(1)自行配备上网的所需设备，包括个人电脑、调制解调器或其他必备上网装置；</p>
                    <p class="t_indent">(2)自行负担个人上网所支付的与此服务有关的电话费用、网络费用。</p>
                    <p>为了能使用本服务，您同意以下事项∶</p>
                    <p class="t_indent">&nbsp;&nbsp;&nbsp;&nbsp;(a)依本服务注册表的提示提供您本人真实、正确、最新及完整的资料；</p>
                    <p class="t_indent">&nbsp;&nbsp;&nbsp;&nbsp;(b)维持更新您个人用户信息，确保其真实、正确、最新及完整。若您提供任何错误、不实、过时或不完整的资料，并为<?= Yii::$app->params['siteNameBase']; ?>所确知, 或者<?= Yii::$app->params['siteNameBase']; ?>有合理的理由怀疑前述资料为错误、不实、过时或不完整，<?= Yii::$app->params['siteNameBase']; ?>有权暂停或终止您的帐号，并拒绝您于现在和未来使用土巴 兔全部或部分的服务。</p>
                    <p class="t_indent">&nbsp;&nbsp;&nbsp;&nbsp;(c)用户必须同意接受<?= Yii::$app->params['siteNameBase']; ?>通过电子邮件或其他方式向用户发送广告或其他相关商业信息。</p>
                    <strong class="c999">3、隐私制度</strong>
                    <p>尊重用户个人隐私是<?= Yii::$app->params['siteNameBase']; ?>的一项基本政策。所以，作为对用户注册资料分析的补充，<?= Yii::$app->params['siteNameBase']; ?>不会在未经合法用户授权时公开、编辑或透 露其注册资料及保存在<?= Yii::$app->params['siteNameBase']; ?>中的非公开内容。除非有法律许可要求或<?= Yii::$app->params['siteNameBase']; ?>在诚信的基础上认为透露这些信息在以下情况是必要的：</p>
                    <p class="t_indent">(1) 遵守有关法律规定，遵从<?= Yii::$app->params['siteNameBase']; ?>合法服务程序；</p>
                    <p class="t_indent">(2) 保持维护<?= Yii::$app->params['siteNameBase']; ?>的商标所有权；</p>
                    <p class="t_indent">(3) 在紧急情况下竭力维护用户个人和社会大众的隐私安全；</p>
                    <p class="t_indent">(4) 符合其他相关的要求。</p>
                    <strong class="c999">4、用户信息的存储与限制</strong>
                    <p><?= Yii::$app->params['siteNameBase']; ?>不对用户所发布信息的删除或储存失败负责。<?= Yii::$app->params['siteNameBase']; ?>有判定用户的行为是否符合<?= Yii::$app->params['siteNameBase']; ?>服务条款的要求和精神的保留权利，如果用 户违背了服务条款的规定，<?= Yii::$app->params['siteNameBase']; ?>有中断对其提供网络服务的权利。</p>
                    <strong class="c999">5、服务条款的修改</strong>
                    <p><?= Yii::$app->params['siteNameBase']; ?>有权在必要时修改服务条款。<?= Yii::$app->params['siteNameBase']; ?>服务条款一旦发生变动，将会在重要页面上提示所修改的内容。如果不同意所改动的内容，用 户可以主动取消获得的网络服务。如果用户继续享用网络服务，则视为接受服务条款的变动。<?= Yii::$app->params['siteNameBase']; ?>保留随时修改或中断服务而不需照知 用户的权利。<?= Yii::$app->params['siteNameBase']; ?>行使修改或中断服务的权利，不需对用户或第三方负责。</p>
                    <strong class="c999">6、拒绝提供担保</strong>
                    <p>用户对网络服务的使用承担风险。<?= Yii::$app->params['siteNameBase']; ?>对此不作任何类型的担保，不论是明确的或隐含的，但是不对商业性的隐含担保、特定目的和不 违反规定的适当担保作限制。</p>
                    <strong class="c999">7、有限责任</strong>
                    <p><?= Yii::$app->params['siteNameBase']; ?>对任何直接、间接、偶然、特殊及继起的损害不负责任，这些损害可能来自：不正当使用网络服务，在网上购买商品或进行同类型 服务，在网上进行交易，非法使用网络服务或用户传送的信息有所变动。</p>
                    <strong class="c999">8、服务的结束</strong>
                    <p>用户或<?= Yii::$app->params['siteNameBase']; ?>可随时根据实际情况中断一项或多项网络服务。<?= Yii::$app->params['siteNameBase']; ?>不需对任何个人或第三方负责而随时中断服务。用户对后来的条款修 改有异议，或对<?= Yii::$app->params['siteNameBase']; ?>的服务不满，可以行使如下权利：(a)停止使用<?= Yii::$app->params['siteNameBase']; ?>的网络服务；(b) 通告<?= Yii::$app->params['siteNameBase']; ?>停止对该用户的服务.结束用户 服务后，用户使用网络服务的权利马上中止。从那时起，用户没有权利，<?= Yii::$app->params['siteNameBase']; ?>也没有义务传送任何未处理的信息或未完成的服务给用户或第三方。</p>
                    <strong class="c999">9、用户管理</strong>
                    <p>用户单独承担发布内容的责任。用户对服务的使用是根据所有适用于<?= Yii::$app->params['siteNameBase']; ?>的国家法律、地方法律和国际法律标准的。</p>
                    <p>用户必须遵循：</p>
                    <p class="t_indent">(1)从中国境内向外传输技术性资料时必须符合中国有关法规；</p>
                    <p class="t_indent">(2)使用网络服务不作非法用途；</p>
                    <p class="t_indent">(3)不干扰或混乱网络服务；</p>
                    <p class="t_indent">(4)遵守所有使用网络服务的网络协议、规定、程序和惯例。</p>
                    <p class="t_indent">(5)转贴文章或者上传他人设计作品时事先征得原作者同意，并注明"原作者姓名及出处，版权仅归原作者所有"<?= Yii::$app->params['siteNameBase']; ?>对可能由此产 生侵权的直接或间接结果不必承担任何责任。</p>
                    <p class="t_indent">(6)用户须承诺不传输任何非法的、骚扰性的、中伤他人的、辱骂性的、恐吓性的、伤害性的、庸俗的，淫秽等信息资料。另外，用户也不能传输任何教唆他人构成犯罪行为的资料；不能传输助长国内不利条件和涉及国家安全的资料；不能传输任何不符合当地法规, 国家 法律和国际法律的资料。</p>
                    <strong class="c999">10、内容的权利</strong>
                    <p>(1)用户对于其创作并在<?= Yii::$app->params['siteNameBase']; ?>上发布的合法信息依法享有著作权及其相关权利。</p>
                    <p>(2)对于用户通过<?= Yii::$app->params['siteNameBase']; ?>网络服务上传到<?= Yii::$app->params['siteNameBase']; ?>网站上可公开获取区域的任何信息，用户同意<?= Yii::$app->params['siteNameBase']; ?>在全世界范围内具有永久性的、不可撤销的权利和免许可费、可完全转授的权利。<?= Yii::$app->params['siteNameBase']; ?>可将用户通过<?= Yii::$app->params['siteNameBase']; ?>网络服务上传到<?= Yii::$app->params['siteNameBase']; ?>网站上可公开获取区域的任何信息免费 进行复制、修改、改编等以用于<?= Yii::$app->params['siteNameBase']; ?>业务，并可通过各种形式免费使用上述信息</p>
                    <strong class="c999">11、用户的广告宣传</strong>
                    <p>用户在自己发表的信息中加入宣传资料或参与广告策划，在<?= Yii::$app->params['siteNameBase']; ?>的免费服务上展示他们的产品，任何这类促销方法，包括运输货物、付 款、服务、商业条件、担保及与广告有关的描述都只是在相应的用户和广告销售商之间发生。<?= Yii::$app->params['siteNameBase']; ?>不承担任何责任，<?= Yii::$app->params['siteNameBase']; ?>没有义务为 这类广告销售负任何一部分的责任。</p>
                    <strong class="c999">12、法律</strong>
                    <p>网络服务条款要与中华人民共和国的法律解释相一致，用户和<?= Yii::$app->params['siteNameBase']; ?>一致同意服从高等法院所管辖。如发生<?= Yii::$app->params['siteNameBase']; ?>服务条款与中华人民共和国法律相抵触时，则这些条款将完全按法律规定重新解释，而其它条款则依旧保持对用户产生法律效力和影响。</p>
                    <p class="mt20">在任何情况下，<?= Yii::$app->params['siteNameBase']; ?>用户不得利用<?= Yii::$app->params['siteNameBase']; ?>进行违反或可能违反国家法律和法规的言论或行为，否则，<?= Yii::$app->params['siteNameBase']; ?>可在任何时候不经任何事先通知终止向您提供服务。并且用户对自己的言论或行为负责。</p></div>
                <div class="about_center_title">
                    <h5 class="noBold">版权声明
                        <span>Copyright</span></h5>
                </div>
                <div class="about_center">
                    <p class="mt20">深圳市彬讯科技有限公司（以下简称"彬讯公司"）拥有<?= Yii::$app->params['siteNameBase']; ?>网站（www.Tubatu.com）内所有资料的版权。</p>
                    <br/>
                    <p>彬讯公司对其发行的或与合作公司共同发行的包括但不限于产品或服务的全部内容及<?= Yii::$app->params['siteNameBase']; ?>网站上的材料拥有版权等知识产权受法律保护。未经本公司书面许可，任何单位及个人不得以任何方式或理由对上述产品、服务、信息、材料的任何部分进行使用、复制、修改、抄录、传播或与其它产品捆绑使用、销售。</p>
                    <br/>
                    <p>凡侵犯本公司版权等知识产权的，本公司必依法追究其法律责任。</p>
                    <br/>
                    <p>本公司法律事务部受本公司指示，特此郑重法律声明！</p>
                </div>
                <div class="about_center_title">
                    <h5 class="noBold">商标声明
                        <span>Statement of Use</span></h5>
                </div>
                <div class="about_center">
                    <p class="mt20">"<?= Yii::$app->params['siteNameBase']; ?>"、"Tubatu"、"<?= Yii::$app->params['siteNameBase']; ?>Tubatu.com"、"Tubatu.com"和<?= Yii::$app->params['siteNameBase']; ?>LOGO商标或标识均为彬讯公司享有的商品及服务商标和商号未经本公司或商标权人书面许可，任何单位及个人不得以任何方式或理由对该商标的任何部分进行使用、复制、修改、传播、抄录或与其 它产品捆绑使用销售。</p>
                    <br />
                    <p>本公司法律事务部受本公司指示，特此郑重法律声明！</p>
                    <br />
                    <p>凡侵犯本公司商标权的，我公司必依法追究其法律责任。</p>
                </div>
            </div>
        </div>
    </div>
</div>
