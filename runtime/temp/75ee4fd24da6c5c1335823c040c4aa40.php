<?php /*a:2:{s:83:"C:\Users\Abby\Downloads\ye-star-rhaphp-master\rhaphp\themes/mobile/mp/mp\index.html";i:1602553411;s:95:"C:\Users\Abby\Downloads\ye-star-rhaphp-master\rhaphp\themes/mobile/mp/..\admin\common\base.html";i:1602553411;}*/ ?>
<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <?php if(!(empty($mpInfo) || (($mpInfo instanceof \think\Collection || $mpInfo instanceof \think\Paginator ) && $mpInfo->isEmpty()))): ?>
    <title><?php echo htmlentities($mpInfo['name']); ?></title>
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="/public/static//admin/css/admin_base.css" />
    <script type="text/javascript" src="/public/static//jquery/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/public/static//layui/layui.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/static//layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/public/static//icon/icon.css" />
    <link rel="stylesheet" type="text/css" href="/public/static//amaze/css/amazeui.min.css" />
    <link rel="stylesheet" type="text/css" href="/public/static//admin/css/mobile.css" />
    <script type="text/javascript" src="/public/static//amaze/js/amazeui.min.js"></script>
    
</head>
<body>
<div class="rhaphp-base-top-nav">
    <ul>
        <li>你好，<a class="name" href="" id="username"><?php echo htmlentities($admin['admin_name']); ?></a>
            <?php if(!(empty($mpInfo) || (($mpInfo instanceof \think\Collection || $mpInfo instanceof \think\Paginator ) && $mpInfo->isEmpty()))): ?>
            <span class="quit">公众号:<a href="<?php echo url('mp/index/index',['mid'=>$mpInfo['id']]); ?>"><?php echo htmlentities($mpInfo['name']); ?></a>
                </span>
            <?php endif; ?>
            <a href="<?php echo url('mp/Message/messagelist'); ?>"><i class="layui-icon">&#xe645;</i>用户消息<span
                    class="num-feed rhaphp-msg-user show" style="display: none;">0</span></a>
        </li>
    </ul>
</div>
<?php if(isset($menu_tile) OR $menu_title != ''): ?>
<div class="rhaphp-base-nav-title content-hd">
    <h2><?php echo htmlentities($menu_title); ?></h2>
</div>
<?php endif; ?>

<style>
    .ui_trendgrid {
        table-layout: fixed;
        position: relative;
        width: 100%;
        margin: 20px 0px;
    }

    .ui_trendgrid td {

        border-right: 1px solid rgb(231, 231, 235);
    }

    .ui_trendgrid td.last {
        border-right: 0px none;
    }

    .ui_trendgrid dl {
        display: inline-block;
        margin-top: 0px;
        padding: 0px;
        text-align: left;
        position: relative;
        z-index: 2;
    }

    .ui_trendgrid dt {
        padding-bottom: 12px;
        font-size: 14px;
        font-weight: normal;
        text-align: center;
    }

    .ui_trendgrid dd {
        margin-top: 2px;
        font-size: 14px;
        line-height: 18px;
        white-space: nowrap;
    }

    .ui_trendgrid dd.ui_trendgrid_number {
        text-align: center;
        color: rgb(103, 103, 103);
        font-size: 30px;
        margin-right: 10px;
        margin-bottom: 15px;
    }

    .ui_trendgrid dd.ui_trendgrid_number strong {
        font-weight: 400;
        font-style: normal;
    }

    .ui_trendgrid .icon_down, .ui_trendgrid .icon_up, .ui_trendgrid .icon_down_grey {
        margin-left: 10px;
        position: relative;
        top: -2px;
        margin-right: 3px;
        display: inline-block;
        width: 10px;
        height: 9px;
        vertical-align: middle;
    }

    .ui_trendgrid .icon_down {
        background-position: -10px 0px;
    }

    .ui_trendgrid_item {
        height: 100%;
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    .ui_trendgrid_item b {
        font-weight: 400;
        font-style: normal;
        font-size: 14px;
    }

    .ui_trendgrid_chart {
        width: 100%;
        position: absolute;
        bottom: 0px;
        left: 1px;
    }

    .ui_trendgrid_unit {
        margin-bottom: 20px;
        font-size: 18px;
        font-weight: 400;
        font-style: normal;
    }

    .step_inner::after {
        content: "​";
        display: block;
        height: 0px;
        clear: both;
    }

    .tab_navs::after {
        content: "​";
        display: block;
        height: 0px;
        clear: both;
    }

    .info_box {
        margin-bottom: 20px;
    }

    .info_box .inner {
        border: 1px solid rgb(231, 231, 235);
    }

    .info_box .info_hd {
        line-height: 38px;
        height: 38px;
        padding: 0px 20px;
        background-color: rgb(244, 245, 249);
        border-bottom: 1px solid rgb(231, 231, 235);
    }

    .info_box .info_hd::after {
        content: "​";
        display: block;
        height: 0px;
        clear: both;
    }

    .info_box .info_hd .ext_info {
        float: right;
    }

    .info_box .info_hd h4 {
        font-weight: 400;
        font-size: 14px;
    }

    .inner {
        position: relative;
    }

    .page_msg.top {
        margin-top: 6px;
        margin-bottom: 20px;
    }

    .wrp_overview {
        padding: 0px 30px 40px;
        position: relative;
        margin-top: 20px;
    }

    .info_hd.append_ask {
        position: relative;
        z-index: 10;
    }

    .info_hd.append_ask .help {
        right: 10px;
        top: 0px;
    }

    .info_bd {
        position: relative;
        z-index: 9;
    }

    .page_user .help .help_content {
        top: -9px;
    }

    .page_user_stat.mini {
        padding: 20px 15px 0px;
    }

    .page_user_stat.mini .inner {
        padding-left: 15px;
        background-color: transparent;
    }

    .page_user_stat.mini .inner.stat_info {
        background-color: rgb(224, 234, 246);
    }

    .table .table_action.arrow::after {
        content: "";
        position: relative;
        top: 13px;
        border-width: 5px;
        border-style: solid;
        border-color: rgb(198, 198, 198) transparent transparent;
        -moz-border-top-colors: none;
        -moz-border-right-colors: none;
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        border-image: none;
    }

    .tr_chosen .table_action.arrow::after {
        top: -11px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent rgb(198, 198, 198);
        -moz-border-top-colors: none;
        -moz-border-right-colors: none;
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        border-image: none;
    }
</style>

<div class="info_box" style="padding: 0px 10px;">
    <div class="inner">
        <div class="info_hd append_ask"><h4>今日关键指标</h4>
        </div>
        <div class="info_bd">
            <div class="content" id="js_keydata">
                <table class="ui_trendgrid ui_trendgrid_3">
                    <tbody>
                    <tr>
                        <td class="first">
                            <div class="ui_trendgrid_item">
                                <div class="ui_trendgrid_chart"></div>
                                <dl>
                                    <dt><b>新关注</b></dt>
                                    <dd class="ui_trendgrid_number"><strong><?php echo htmlentities($report['subscribe']['today']); ?></strong><em
                                            class="ui_trendgrid_unit"></em></dd>
                                    <dd>昨天 <i class="icon_down"></i><?php echo htmlentities($report['subscribe']['yesterday']); ?></dd>
                                    <dd>本周 <i class="icon_up" ></i><?php echo htmlentities($report['subscribe']['week']); ?></dd>
                                    <dd>上周 <i class="icon_up"></i><?php echo htmlentities($report['subscribe']['lastweek']); ?></dd>
                                    <dd>本月 <i class="icon_up"></i><?php echo htmlentities($report['subscribe']['month']); ?></dd>
                                    <dd>上月 <i class="icon_up"></i><?php echo htmlentities($report['subscribe']['lastmonth']); ?></dd>
                                    <dd>本年 <i class="icon_up"></i><?php echo htmlentities($report['subscribe']['year']); ?></dd>
                                    <dd>去年 <i class="icon_up"></i><?php echo htmlentities($report['subscribe']['lastyear']); ?></dd>
                                </dl>
                            </div>
                        </td>
                        <td>
                            <div class="ui_trendgrid_item">
                                <div class="ui_trendgrid_chart"></div>
                                <dl>
                                    <dt><b>取消关注</b></dt>
                                    <dd class="ui_trendgrid_number"><strong><?php echo htmlentities($report['unsubscribe']['today']); ?></strong><em
                                            class="ui_trendgrid_unit"></em></dd>
                                    <dd>昨天 <i class="icon_down"></i><?php echo htmlentities($report['unsubscribe']['yesterday']); ?></dd>
                                    <dd>本周 <i class="icon_up" ></i><?php echo htmlentities($report['unsubscribe']['week']); ?></dd>
                                    <dd>上周 <i class="icon_up"></i><?php echo htmlentities($report['unsubscribe']['lastweek']); ?></dd>
                                    <dd>本月 <i class="icon_up"></i><?php echo htmlentities($report['unsubscribe']['month']); ?></dd>
                                    <dd>上月 <i class="icon_up"></i><?php echo htmlentities($report['unsubscribe']['lastmonth']); ?></dd>
                                    <dd>本年 <i class="icon_up"></i><?php echo htmlentities($report['unsubscribe']['year']); ?></dd>
                                    <dd>去年 <i class="icon_up"></i><?php echo htmlentities($report['unsubscribe']['lastyear']); ?></dd>
                                </dl>
                            </div>
                        </td>
                        <td>
                            <div class="ui_trendgrid_item">
                                <div class="ui_trendgrid_chart"></div>
                                <dl>
                                    <dt><b>净增关注</b></dt>
                                    <dd class="ui_trendgrid_number"><strong><?php echo htmlentities($report['subscribe']['today']-$report['unsubscribe']['today']); ?></strong><em
                                            class="ui_trendgrid_unit"></em></dd>
                                    <dd>昨天 <i class="icon_down"></i><?php echo htmlentities($report['subscribe']['yesterday']-$report['unsubscribe']['yesterday']); ?></dd>
                                    <dd>本周 <i class="icon_up" ></i><?php echo htmlentities($report['subscribe']['week']-$report['unsubscribe']['week']); ?></dd>
                                    <dd>上周 <i class="icon_up"></i><?php echo htmlentities($report['subscribe']['lastweek']-$report['unsubscribe']['lastweek']); ?></dd>
                                    <dd>本月 <i class="icon_up"></i><?php echo htmlentities($report['subscribe']['month']-$report['unsubscribe']['month']); ?></dd>
                                    <dd>上月 <i class="icon_up"></i><?php echo htmlentities($report['subscribe']['lastmonth']-$report['unsubscribe']['lastmonth']); ?></dd>
                                    <dd>本年 <i class="icon_up"></i><?php echo htmlentities($report['subscribe']['year']-$report['unsubscribe']['year']); ?></dd>
                                    <dd>去年 <i class="icon_up"></i><?php echo htmlentities($report['subscribe']['lastyear']-$report['unsubscribe']['lastyear']); ?></dd>
                                </dl>
                            </div>
                        </td>
                        <td class="last">
                            <div class="ui_trendgrid_item">
                                <div class="ui_trendgrid_chart"></div>
                                <dl>
                                    <dt><b>当前关注</b></dt>
                                    <dd class="ui_trendgrid_number"><strong><?php echo htmlentities($report['total']['subscribe_total']); ?></strong><em
                                            class="ui_trendgrid_unit"></em></dd>
                                    <dd>总关注 <i class="icon_up"></i><?php echo htmlentities($report['total']['total']); ?></dd>
                                    <dd>总取关 <i class="icon_down"></i><?php echo htmlentities($report['total']['unsubscribe_total']); ?></dd>
                                </dl>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p class="tip_for_p" style="margin-top: 7px;">
        注：以上数据以接入平台后产生的数据为准，若公众号已认证请先同步粉丝。
    </p>
</div>


<nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas>
    <a id="rhaphp-menu-left-toggle" href="javascript: void(0)" class="am-menu-toggle">
        <span class="am-menu-toggle-title"></span>
        <i class="am-menu-toggle-icon am-icon-angle-right"></i>
    </a>
    <div class="am-offcanvas">
        <div id="rhaphp-base-left-menu" class="am-offcanvas-bar">
            <ul class="am-menu-nav am-avg-sm-1">
                <li class="">
                    <a href="<?php echo url('mp/mp/autoreply'); ?>" class="">自动回复</a>
                </li>
                <li class="">
                    <a href="<?php echo url('mp/mp/menu'); ?>" class="">自定菜单</a>
                </li>
                <li class="">
                    <a href="<?php echo url('mp/mp/qrcode'); ?>" class="">二维码/转化</a>
                </li>
                <li class="">
                    <a href="<?php echo url('mp/member/index'); ?>" class="">会员设置</a>
                </li>
                <li class="">
                    <a href="<?php echo url('mp/index/mplist'); ?>" class="">切换公众号</a>
                </li>
                <li class="">
                    <a href="<?php echo url('mp/message/messagelist'); ?>" class="">消息管理</a>
                </li>
                <li class="">
                    <a href="<?php echo url('admin/Login/out'); ?>" class="">退出</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default " id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4">
        <li>
            <a id="rhaphp-click-left-nav" href="###" class="">
                <span class="am-icon-dedent"></span>
                <span class="am-navbar-label">菜单</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('mp/mp/index'); ?>" class="">
                <span class="am-icon-line-chart"></span>
                <span class="am-navbar-label">指标</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('mp/friends/index'); ?>" class="">
                <span class="am-icon-wechat"></span>
                <span class="am-navbar-label">粉丝管理</span>
            </a>
        </li>
        <li>
            <a href="<?php echo url('admin/app/index'); ?>" class="">
                <span class="rha-icon icon-size-1">&#xe6f0;</span>
                <span class="am-navbar-label">应用中心</span>
            </a>
        </li>
    </ul>
</div>
</body>
<script>
    $(function () {
        $('#rhaphp-click-left-nav').click(function () {
            $('#rhaphp-menu-left-toggle').trigger('click');
        })
    })
    layui.use('element', function(){
        var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块

    });
    function getMaterial(paramName,type){
        layer.open({
            type: 2,
            title: '选择素材',
            shadeClose: true,
            shade: 0.8,
            area: ['350px', '280px'],
            content: '<?php echo url("mp/Material/getMeterial","",""); ?>/type/'+type+'/param/'+paramName //iframe的url
        });
    }
    function controllerByVal(value,paramName,type) {
        $('.form_'+paramName).attr('src',value);
        $("input[name="+paramName+"]").val(value);
    }
    $(function () {
         setInterval(getMsgTotal,5000);
        function getMsgTotal() {
            $.get("<?php echo url('mp/Message/getMsgStatusTotal'); ?>",{},function (res) {
                if(res.msgTotal==0){
                    //TODO
                }else{
                    $('.rhaphp-msg-user').show();
                    $('.rhaphp-msg-user').text(res.msgTotal);
                }

            })
        }
    })
</script>
</html>