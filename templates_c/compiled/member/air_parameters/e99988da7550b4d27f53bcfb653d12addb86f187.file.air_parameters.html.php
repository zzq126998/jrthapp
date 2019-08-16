<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-16 11:38:05
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\templates\member\company\air_parameters.html" */ ?>
<?php /*%%SmartyHeaderCode:14385697855d54cdf4790aa4-70534468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e99988da7550b4d27f53bcfb653d12addb86f187' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\templates\\member\\company\\air_parameters.html',
      1 => 1565926682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14385697855d54cdf4790aa4-70534468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d54cdf481f425_98826866',
  'variables' => 
  array (
    'cfg_staticPath' => 0,
    'cfg_staticVersion' => 0,
    'templets_skin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d54cdf481f425_98826866')) {function content_5d54cdf481f425_98826866($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
layui/css/layui.css?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" media="all">
<style>
    .sytitle{
        text-align: center;
        font-size: large;
    }
</style>
<div style=" margin-top: 20px;" >
    <form class="layui-form"  data-url="<?php echo getUrlPath(array('service'=>'member','template'=>'manage','action'=>'shop','param'=>'state=0'),$_smarty_tpl);?>
"> <!-- 提示：如果你不想用form，你可以换成div等任何一个普通元素 -->
        <div class="sytitle">基本参数</div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">公司介绍</label>
            <div class="layui-input-block" style="width: 500px;">
                <textarea placeholder="请输入内容" class="layui-textarea" name="company_introduction"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">厂商指导价</label>
            <div class="layui-input-block" style="width: 200px;">
                <input type="text" name="guidance_price" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">优点</label>
            <div class="layui-input-block" style="width: 500px;">
                <textarea placeholder="请输入内容" class="layui-textarea" name="advantage"></textarea>
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">缺点</label>
            <div class="layui-input-block" style="width: 500px;">
                <textarea placeholder="请输入内容" class="layui-textarea" name="shortcoming"></textarea>
            </div>
        </div>
        <div class="sytitle">机身参数 </div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">机身长</label>
                <div class="layui-input-inline" style="width: 100px;">
                    <input type="text" name="fuselage_length" placeholder="" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">宽</div>
                <div class="layui-input-inline" style="width: 100px;">
                    <input type="text" name="fuselage_wide" placeholder="" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">高</div>
                <div class="layui-input-inline" style="width: 100px;">
                    <input type="text" name="fuselage_height" placeholder="" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">客舱长</label>
                <div class="layui-input-inline" style="width: 100px;">
                    <input type="text" name="cabin_length" placeholder="" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">宽</div>
                <div class="layui-input-inline" style="width: 100px;">
                    <input type="text" name="cabin_wide" placeholder="" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">高</div>
                <div class="layui-input-inline" style="width: 100px;">
                    <input type="text" name="cabin_height" placeholder="" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">座位个数</label>
                <div class="layui-input-inline" style="width: 200px; margin-right: 50px;">
                    <input type="text" name="num_seats" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">旋翼直径（直升机）</div>
                <div class="layui-input-inline" style="width: 200px;">
                    <input type="text" name="rotor_diameter" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>


        <div class="sytitle">动力传动系统</div>
        <div class="sytitle">动力装置（发动机）</div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">型号</label>
                <div class="layui-input-inline" style="width: 200px; margin-right: 50px;">
                    <input type="text" name="engine_xing" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">类型</div>
                <div class="layui-input-inline" style="width: 200px;">
                    <input type="text" name="engine_type" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">气缸个数</label>
                <div class="layui-input-inline" style="width: 200px; margin-right: 50px;">
                    <input type="text" name="num_cylinders" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">排汽量</div>
                <div class="layui-input-inline" style="width: 200px;">
                    <input type="text" name="exhaust_capacity" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">最大连续功率</label>
                <div class="layui-input-inline" style="width: 200px; margin-right: 50px;">
                    <input type="text" name="max_series_power" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">冷却系统</div>
                <div class="layui-input-inline" style="width: 200px;">
                    <input type="text" name="cooling_system" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">燃油类型</label>
                <div class="layui-input-inline" style="width: 200px; margin-right: 50px;">
                    <input type="text" name="fuel_type" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">油箱容量</div>
                <div class="layui-input-inline" style="width: 200px;">
                    <input type="text" name="tank_capacity" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">滑油类型</label>
                <div class="layui-input-inline" style="width: 200px; margin-right: 50px;">
                    <input type="text" name="grease_type" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">重量极限</div>
                <div class="layui-input-inline" style="width: 200px;">
                    <input type="text" name="weight_limit" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">最大起飞重量</label>
                <div class="layui-input-inline" style="width: 200px; margin-right: 50px;">
                    <input type="text" name="max_launch_weight" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">基本重量</div>
                <div class="layui-input-inline" style="width: 200px;">
                    <input type="text" name="basic_weight" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">空重</label>
            <div class="layui-input-block" style="width: 200px;">
                <input type="text" name="empty_weight" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="sytitle">性能参数</div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">最大速度（节）</label>
                <div class="layui-input-inline" style="width: 200px; margin-right: 50px;">
                    <input type="text" name="max_speed" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">最佳爬升率</div>
                <div class="layui-input-inline" style="width: 200px;">
                    <input type="text" name="best_rate_climb" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">最大航程</label>
                <div class="layui-input-inline" style="width: 200px; margin-right: 50px;">
                    <input type="text" name="practical_lift" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">实用升限</div>
                <div class="layui-input-inline" style="width: 200px;">
                    <input type="text" name="practical_lift" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-inline">
                <label class="layui-form-label">最短起飞距离</label>
                <div class="layui-input-inline" style="width: 200px; margin-right: 50px;">
                    <input type="text" name="min_launch_space" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid">最短着陆距离</div>
                <div class="layui-input-inline" style="width: 200px;">
                    <input type="text" name="min_land_space" autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">其他参数</label>
            <div class="layui-input-block" style="width: 200px;">
                <input type="text" name="other_paras" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="*">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
        <!-- 更多表单结构排版请移步文档左侧【页面元素-表单】一项阅览 -->
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
layui/layui.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cfg_staticPath']->value;?>
/js/core/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templets_skin']->value;?>
js/news-detail.js?v=<?php echo $_smarty_tpl->tpl_vars['cfg_staticVersion']->value;?>
" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    layui.use('form', function(){
        var form = layui.form
        var index = parent.layer.getFrameIndex(window.name); //获取窗口索引

        // alert("获取父页参数:"+parent.$('#getairid').val());
        //各种基于事件的操作，下面会有进一步介绍
        form.on('submit(*)', function(data){
            console.log(data.field) //当前容器的全部表单字段，名值对形式：{name: value}
            if(data.field.company_introduction == ''){
                layer.msg('公司介绍不能为空', {icon: 5});
            }
            var url="/include/ajax.php?service=airparems&action=put";
            $.ajax({
                url : url,
                data : data.field,
                type : 'post',
                dataType : 'json',
                success : function (data) {
                    if(data.state=="100"){
                        parent.$('#getairid').val(data.info);
                        parent.layer.close(index);
                    }else {
                        layer.msg('系统错误', {icon: 5});
                    }
                }
            })
            return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
        });
    });
<?php echo '</script'; ?>
>
<?php }} ?>
