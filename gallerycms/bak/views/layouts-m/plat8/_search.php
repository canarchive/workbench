<div class="search">
    <input type="text" name="searchwords" value="搜索装修疑难，如：装修费用" onfocus="searchFocus()" onblur="searchBlur()" class="search-box" onkeydown="toSearch(this)">
    <div class="magnifier" onclick="search()"></div>
    <input type="hidden" id="search_url" value="/ask/search.php/keyword/keyword_val" /></div>
<script type="text/javascript">/**
 * 搜索
 */
    function search() {
        var dom_arr = document.getElementsByName('searchwords');
        // 去空格
        var val = dom_arr[0].value.replace(/^\s+|\s+$/g, '');
        if (val == '搜索装修疑难，如：装修费用' || val == '') {
            alert('请输入关键字');
            //document.getElementById('search_form').submit();
        } else {
            var url = document.getElementById('search_url').value.replace('keyword_val', val);
            location.href = url;
        }
    }

    /**
 * 搜索获得焦点
 */
    function searchFocus() {
        var dom_arr = document.getElementsByName('searchwords');
        // 去空格
        var val = dom_arr[0].value.replace(/^\s+|\s+$/g, '');
        if (val == '搜索装修疑难，如：装修费用') {
            dom_arr[0].value = '';
        } else {
            dom_arr[0].value = val;
        }
    }

    /**
 * 搜索失去焦点
 */
    function searchBlur() {
        var dom_arr = document.getElementsByName('searchwords');
        // 去空格
        var val = dom_arr[0].value.replace(/^\s+|\s+$/g, '');
        if (val == '' || val == '搜索装修疑难，如：装修费用') {
            dom_arr[0].value = '搜索装修疑难，如：装修费用';
            dom_arr[0].style.color = '#ccc';
        } else {
            dom_arr[0].style.color = '#333';
        }
    }

    // 初始化输入框状态
    searchBlur();
    /**
 * 回车搜索
 */
    function toSearch(obj) {
        obj.style.color = '#333';
        var evt = window.event;
        if (evt.keyCode == 13) {
            stopDefault(evt);
            search();
        }
    }

    /**
 * 阻止默认事件
 */
    function stopDefault(e) {
        if (e && e.preventDefault) { // 阻止默认浏览器动作(W3C)
            e.preventDefault();
        } else { // IE中阻止函数器默认动作的方式 
            window.event.returnValue = false;
        }
        return false;
    }</script>
