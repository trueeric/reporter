<?php
/* Smarty version 3.1.29, created on 2017-11-18 16:19:05
  from "/home/ikpolo/public_html/reporter/templates/op_show_article.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0fecf9106c10_61259874',
  'file_dependency' => 
  array (
    'b6ad1723e00e3daaefbb92acf0b3cabe9972e62c' => 
    array (
      0 => '/home/ikpolo/public_html/reporter/templates/op_show_article.tpl',
      1 => 1510992896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fecf9106c10_61259874 ($_smarty_tpl) {
?>
<div class="container">

    <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
    <div class="alert alert-info">
        <a href="admin.php?op=delete_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-danger">刪除</a>
        <a href="admin.php?op=etit_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-warning">修改</a>
    </div>
</div><?php }
}
