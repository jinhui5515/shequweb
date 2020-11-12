<?php /*a:1:{s:82:"C:\Users\Abby\Downloads\ye-star-rhaphp-master\rhaphp\themes/pc/mp/mp\editTzgl.html";i:1605183650;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <title>RhaPHP 二哈公众号管理系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="/public/static//admin/css/admin_base.css" />
    <script type="text/javascript" src="/public/static//jquery/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/public/static//layui/layui.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/static//layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/public/static//icon/icon.css" />
</head>
<body style="background: rgb(255, 255, 255) none repeat scroll 0 0;">
<br><br>
<form class="layui-form" method="post" style="padding-right: 10px;">
    <div class="layui-form-item">
        <label class="layui-form-label">导语</label>
        <div class="layui-input-block">
            <textarea type="text" name="desc" required lay-verify="required" placeholder="请输入导语" autocomplete="off" class="layui-textarea"><?php echo htmlentities($mp['desc']); ?></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">类型</label>
        <div class="layui-input-block">
            <input type="radio" <?php if($mp['type'] == 'tzgg'): ?> checked <?php endif; ?> name="type" value="tzgg" title="通知公告">
            <input type="radio" <?php if($mp['type'] == 'sqxw'): ?> checked <?php endif; ?> name="type" value="sqxw" title="社区新闻">
            <input type="radio" <?php if($mp['type'] == 'bszn'): ?> checked <?php endif; ?> name="type" value="bszn" title="办事指南">
            <input type="radio" <?php if($mp['type'] == 'dwgk'): ?> checked <?php endif; ?> name="type" value="dwgk" title="党务公开">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">链接地址</label>
        <div class="layui-input-block">
            <input type="text" name="url" value="<?php echo htmlentities($mp['url']); ?>" required lay-verify="required|url" placeholder="请输入链接地址" autocomplete="off"
                   class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">缩略图</label>
        <div class="layui-input-block">
            <?php echo hook('Upload',['type'=>'image','name'=>'img','value'=>$mp['img']]); ?>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input name="id" type="hidden" value="<?php echo htmlentities($mp['id']); ?>">
            <button class="layui-btn" lay-submit lay-filter="SBT">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>

<script>
    layui.use('form', function(){
        var form = layui.form
        form.on('submit(SBT)', function(data){
            var load = layer.load();
            $.post('',data.field,function (res) {
                if(res.status=='0'){
                    layer.close(load);
                    layer.alert(res.msg);
                }
                if(res.status=='1'){
                    layer.close(load);
                    layer.msg(res.msg,{time:1000},function () {
                        layer.closeAll();
                        //     window.location.href=res.url;
                    });
                }
            })
            return false;
        });

    });
</script>
</body>
</html>