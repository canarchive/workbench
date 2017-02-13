<div class="p_howLiao wrapper" style="margin-top:-8px;">
    <ul class="ul_nav clearfix">
        <li class="li_hover hover_select" id="li_hover1">同区域的装修公司</li>
    </ul>
    <div class="how_con">
        <ul class="howLiao_list clearfix" id="howLiao_list1" style="display:block;">
   
            <?php $i = 1; foreach ($infos as $info) { $elemClass = $i <= 3 ? 'red' : 'gray'; ?>
            <li>
                <a href="<?= "/{$info['city_code']}/sj_{$info['code']}/"; ?>" title="<?= $info['name']; ?>"><?= $info['name']; ?></a>
            </li>
        <?php } ?>
        </ul>
    </div>
</div>
