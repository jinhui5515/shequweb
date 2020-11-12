<?php /*a:2:{s:93:"C:\Users\Abby\Downloads\ye-star-rhaphp-master\rhaphp\themes/mobile/admin/system\menulist.html";i:1602553411;s:89:"C:\Users\Abby\Downloads\ye-star-rhaphp-master\rhaphp\themes/mobile/admin/common\base.html";i:1602553411;}*/ ?>
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
    <h2><?php echo htmlentities($menu_title); ?>
<a href="<?php echo url('addMenu'); ?>"  class="layui-btn layui-btn-normal layui-btn-sm rha-nav-title">增加菜单</a>
</h2>
</div>
<?php endif; ?>

<form class="layui-form" action="" style="padding: 0px 10px 0px 10px;">
<table class="layui-table">
    <colgroup>
        <col width="100">
        <col width="500">
        <col>
    </colgroup>
    <thead>
    <tr>
        <th>排序</th>
        <th>菜单名称</th>
        <th>地址</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($menuList) || $menuList instanceof \think\Collection || $menuList instanceof \think\Paginator): $i = 0; $__LIST__ = $menuList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><input style="width: 35px; text-align:center" name="<?php echo htmlentities($v['id']); ?>_<?php echo htmlentities($v['sort']); ?>" value="<?php echo htmlentities($v['sort']); ?>"></td>
            <td><?php echo htmlentities($v['name']); ?></td>
            <td><?php echo htmlentities($v['url']); ?></td>
            <td><a class="rha-bt-a" href="<?php echo url('updateMenu',['id'=>$v['id']]); ?>">修改</a> <a href="javascript:;" onclick="delMenu('<?php echo htmlentities($v['id']); ?>')" class="rha-bt-a" >删除</a></td>
        </tr>
        <?php if(is_array($v['child']) || $v['child'] instanceof \think\Collection || $v['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><input style="width: 35px; text-align:center" name="<?php echo htmlentities($v['id']); ?>_<?php echo htmlentities($v['sort']); ?>" value="<?php echo htmlentities($v['sort']); ?>"></td>
            <td>&nbsp;&nbsp;&nbsp; ├<?php echo htmlentities($v['name']); ?></td>
            <td><?php echo htmlentities($v['url']); ?></td>
            <td><a class="rha-bt-a" href="<?php echo url('updateMenu',['id'=>$v['id']]); ?>">修改</a> <a href="javascript:;" onclick="delMenu('<?php echo htmlentities($v['id']); ?>')" class="rha-bt-a" >删除</a></td>
        </tr>
            <?php if(is_array($v['child']) || $v['child'] instanceof \think\Collection || $v['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input style="width: 35px; text-align:center" name="<?php echo htmlentities($v['id']); ?>_<?php echo htmlentities($v['sort']); ?>" value="<?php echo htmlentities($v['sort']); ?>"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ├<?php echo htmlentities($v['name']); ?></td>
                <td><?php echo htmlentities($v['url']); ?></td>
                <td><a class="rha-bt-a" href="<?php echo url('updateMenu',['id'=>$v['id']]); ?>">修改</a> <a href="javascript:;" onclick="delMenu('<?php echo htmlentities($v['id']); ?>')" class="rha-bt-a" >删除</a></td>
            </tr>

                <?php if(is_array($v['child']) || $v['child'] instanceof \think\Collection || $v['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><input style="width: 35px; text-align:center" name="<?php echo htmlentities($v['id']); ?>_<?php echo htmlentities($v['sort']); ?>" value="<?php echo htmlentities($v['sort']); ?>"></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ├<?php echo htmlentities($v['name']); ?></td>
                    <td><?php echo htmlentities($v['url']); ?></td>
                    <td><a class="rha-bt-a" href="<?php echo url('updateMenu',['id'=>$v['id']]); ?>">修改</a> <a href="javascript:;" onclick="delMenu('<?php echo htmlentities($v['id']); ?>')" class="rha-bt-a" >删除</a></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn  layui-btn-sm" lay-submit lay-filter="updateSort">更新排序</button>
        </div>
    </div>
</form>
<script>
    function delMenu(id) {
        layui.use('layer', function(){
            var layer = layui.layer;
            layer.confirm('删除操作可能引起系统不能正常使用，你确定需要删除吗？', {
                btn: ['是','不'] //按钮
            }, function(){
                $.post("<?php echo url('System/delMenu'); ?>",{'id':id},function (res) {
                    if(res.status==1){
                        layer.alert(res.msg,function (index) {
                            window.location.reload();
                            layer.close(index);
                        })
                    }else{
                        layer.alert(res.msg)
                    }
                })
            }, function(){
            });
        });
    }
layui.use('form', function(){
    var form = layui.form;
    form.on('submit(updateSort)', function(data){
        $.post("<?php echo url('System/updateSort'); ?>",data.field,function (res) {
            if(res.status=='0'){
                layer.msg(res.msg);
            }
            if(res.status=='1'){
                layer.msg(res.msg,{time:1000},function () {

                });
            }
        })
        return false;
    });
});
</script>

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