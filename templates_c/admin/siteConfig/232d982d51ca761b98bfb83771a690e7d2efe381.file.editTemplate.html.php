<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-08-12 14:37:11
         compiled from "D:\myphp_www\PHPTutorial\WWW\ziyuan\admin\templates\siteConfig\editTemplate.html" */ ?>
<?php /*%%SmartyHeaderCode:15470950075d510917f1b630-33161071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '232d982d51ca761b98bfb83771a690e7d2efe381' => 
    array (
      0 => 'D:\\myphp_www\\PHPTutorial\\WWW\\ziyuan\\admin\\templates\\siteConfig\\editTemplate.html',
      1 => 1559206109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15470950075d510917f1b630-33161071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg_soft_lang' => 0,
    'cssFile' => 0,
    'action' => 0,
    'title' => 0,
    'template' => 0,
    'htmlArray' => 0,
    'html' => 0,
    'cssArray' => 0,
    'css' => 0,
    'jsArray' => 0,
    'js' => 0,
    'touch' => 0,
    'adminPath' => 0,
    'jsFile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d5109180293a7_34478652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d5109180293a7_34478652')) {function content_5d5109180293a7_34478652($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['cfg_soft_lang']->value;?>
" />
<title>编辑模板</title>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>

<link rel='stylesheet' type='text/css' href='../../static/css/ui/codemirror.css' />
<style>
.left-nav {width:65px; z-index: 1;}
.left-nav li {text-align: center; height: 34px; line-height: 34px;}
.left-nav li.current {width: 63px; height: 35px; line-height: 35px;}
.left-nav li a {padding: 0 0 0 2px; -webkit-transition: none; -moz-transition: none; transition: none;}
.left-nav li.current a {padding: 0;}

/* 文件树 */
.file-tree {position: fixed; left: 90px; top: 15px; bottom: 15px; width: 235px; background-color: #e8eaee; z-index: 2;}
.file-tree dl {padding: 0; margin: 0;}
.file-tree dt {height: 36px; line-height: 36px; font-size: 12px; color: #fff; background: #2a2e36; font-weight: 500; padding: 0 15px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;}
.file-tree dd {position: absolute; left: 0; top: 36px; right: 0; bottom: 0; overflow-x: hidden; overflow-y: auto; margin: 0;}
.file-tree ul {padding: 0; margin: 0; list-style: none; display: none;}
.file-tree li {padding: 0; margin: 0; padding: 0 15px 0 13px; border-left: 2px solid transparent; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; cursor: pointer;}
.file-tree li:hover {background-color: #d7dbe4;}
.file-tree li.current {border-left: 2px solid #4777d7; background: #cacdd6;}


/* 底部按钮 */
.code-btns {display: none; position: absolute; left: 0; right: 0; bottom: 0; height: 50px; z-index: 3; background: #a91515;}
.code-btns a {float: right; height: 50px; width: 100%; display: inline-block; margin: 0; font-size: 16px; line-height: 50px; text-align: center; color: #fff; webkit-transition: background-color 0.2s; -moz-transition: background-color 0.2s; -ms-transition: background-color 0.2s; -o-transition: background-color 0.2s; transition: background-color 0.2s;}
.code-btns a:hover {background-color: #f00; text-decoration: none;}


/* 编辑器 */
.code-edit {position: fixed; left: 340px; top: 15px; bottom: 15px; right: 90px; z-index: 3;}
.code-edit .nofile {position: absolute; left: 0; top: 50%; right: 0; height: 70px; line-height: 70px; margin-top: -70px; text-align: center; font-size: 50px; color: #d1d1d1;}

.CodeMirror-wrap {position: absolute; left: 0; right: 0; top: 0; bottom: 50px; height: auto;}
.CodeMirror-fullscreen {position: fixed; top: 0; left: 0; right: 0; bottom: 0; height: auto; z-index: 9;}
.CodeMirror-foldmarker {color: #ff0; text-shadow: #b9f 1px 1px 2px, #b9f -1px -1px 2px, #b9f 1px -1px 2px, #b9f -1px 1px 2px; font-family: arial; line-height: .3; cursor: pointer;}
.CodeMirror-foldgutter {width: .7em;}
.CodeMirror-foldgutter-open, .CodeMirror-foldgutter-folded {cursor: pointer;}
.CodeMirror-foldgutter-open:after {content: "\25BE";}
.CodeMirror-foldgutter-folded:after {content: "\25B8";}
.cm-matchhighlight {background: rgba(255, 255, 255, 0.3);}
.CodeMirror-selection-highlight-scrollbar {background-color: green;}

/* 皮肤 */
.cm-s-ihuoniao.CodeMirror {background: #282c34; color: #abb2bf; line-height: 1.5; font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', 'Consolas', 'source-code-pro', monospace;}
.cm-s-ihuoniao div.CodeMirror-selected {background: rgba(221,240,255,0.2);}
.cm-s-ihuoniao .CodeMirror-line::selection, .cm-s-ihuoniao .CodeMirror-line > span::selection, .cm-s-ihuoniao .CodeMirror-line > span > span::selection {background: rgba(221,240,255,0.2);}
.cm-s-ihuoniao .CodeMirror-line::-moz-selection, .cm-s-ihuoniao .CodeMirror-line > span::-moz-selection, .cm-s-ihuoniao .CodeMirror-line > span > span::-moz-selection {background: rgba(221,240,255,0.2);}
.cm-s-ihuoniao .CodeMirror-gutters {background: #25282c; color: #c5c8c6; border-right: 0px; padding: 0 3px 0 5px;}
.cm-s-ihuoniao .CodeMirror-guttermarker {color: white;}
.cm-s-ihuoniao .CodeMirror-guttermarker-subtle {color: #8F938F;}
.cm-s-ihuoniao .CodeMirror-linenumber {color: #8F938F;}
.cm-s-ihuoniao .CodeMirror-cursor {border-left: 1px solid #A7A7A7;}
.cm-s-ihuoniao span.cm-comment {color: #5c6370;}
.cm-s-ihuoniao span.cm-atom {color: #DE8E30;}
.cm-s-ihuoniao span.cm-number {color: #DE8E30;}
.cm-s-ihuoniao span.cm-property {color: #abb2bf;}
.cm-s-ihuoniao span.cm-attribute {color: #d18c4b;}
.cm-s-ihuoniao span.cm-keyword {color: #c678dd;}
.cm-s-ihuoniao span.cm-string {color: #8ac379;}
.cm-s-ihuoniao span.cm-variable {color: #AEB2F8;}
.cm-s-ihuoniao span.cm-variable-2 {color: #BEBF55;}
.cm-s-ihuoniao span.cm-variable-3 {color: #DE8E30;}
.cm-s-ihuoniao span.cm-def {color: #abb2bf;}
.cm-s-ihuoniao span.cm-tag {color: #fd5d57;}
.cm-s-ihuoniao span.cm-bracket {color: #abb2bf;}
.cm-s-ihuoniao span.cm-link {color: #ae81ff;}
.cm-s-ihuoniao span.cm-qualifier,.cm-s-ihuoniao span.cm-builtin {color: #d19a66;}
.cm-s-ihuoniao .CodeMirror-activeline-background {background: rgba(255, 255, 255, 0.031);}
.cm-s-ihuoniao .CodeMirror-matchingbracket {border: 1px solid rgba(255,255,255,0.25);	color: #8F938F !important; margin: -1px -1px 0 -1px;}

.CodeMirror-dialog {position: absolute; left: 0; right: 0; background: inherit; z-index: 15; padding: .1em .8em; overflow: hidden; color: inherit;}
.CodeMirror-dialog-top {border-bottom: 1px solid #eee; top: 0;}
.CodeMirror-dialog-bottom {border-top: 1px solid #eee; bottom: 0;}
.CodeMirror-dialog input {border: none; outline: none; background: transparent; width: 20em; color: inherit; font-family: monospace;}
.CodeMirror-dialog button {font-size: 70%;}
</style>
</head>

<body>
<!-- 文件类型 -->
<div class="left-nav">
  <ul>
    <li class="current" data-type="html"><a href="javascript:;">页面</a></li>
    <li data-type="css"><a href="javascript:;">样式</a></li>
    <li data-type="js"><a href="javascript:;">脚本</a></li>
    </li>
  </ul>
</div>

<!-- 文件树 -->
<div class="file-tree">
  <dl>
    <dt title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
：<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
（<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
）"><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
：<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
（<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
）</dt>
    <dd>
      <ul style="display: block;">
        <?php  $_smarty_tpl->tpl_vars['html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['html']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['html']->key => $_smarty_tpl->tpl_vars['html']->value) {
$_smarty_tpl->tpl_vars['html']->_loop = true;
?>
        <li data-title="<?php echo $_smarty_tpl->tpl_vars['html']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['html']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['html']->value;?>
</li>
        <?php } ?>
      </ul>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cssArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
        <li data-title="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['css']->value;?>
</li>
        <?php } ?>
      </ul>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
        <li data-title="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['js']->value;?>
</li>
        <?php } ?>
      </ul>
    </dd>
  </dl>
</div>

<!-- 编辑器 -->
<div class="code-edit">
  <div class="nofile">选择左边的文件进行编辑！</div>
  <textarea class="hide" id="code" name="code"></textarea>
  <div class="code-btns"><a href="javascript:;" class="submit" title="保存修改">保存修改</a></div>
</div>


<?php echo '<script'; ?>
>
  var action = "<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
", template = "<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
", title = "<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
", touch = "<?php echo $_smarty_tpl->tpl_vars['touch']->value;?>
", adminPath = "<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
", filetype = "html";
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['jsFile']->value;?>

</body>
</html>
<?php }} ?>
