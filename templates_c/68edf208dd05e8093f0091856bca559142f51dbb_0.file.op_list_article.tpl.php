<?php
/* Smarty version 3.1.29, created on 2017-11-18 15:24:18
  from "/home/ikpolo/public_html/reporter/templates/op_list_article.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0fe0221b4aa7_31562291',
  'file_dependency' => 
  array (
    '68edf208dd05e8093f0091856bca559142f51dbb' => 
    array (
      0 => '/home/ikpolo/public_html/reporter/templates/op_list_article.tpl',
      1 => 1510989855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fe0221b4aa7_31562291 ($_smarty_tpl) {
?>
<div class="container">
    <h3 class="my-3 text-center">最近文章</h3>
    <div class="row">
        <?php
$_from = $_smarty_tpl->tpl_vars['all']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_article_0_saved_item = isset($_smarty_tpl->tpl_vars['article']) ? $_smarty_tpl->tpl_vars['article'] : false;
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['article']->index=-1;
$_smarty_tpl->tpl_vars['article']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
$_smarty_tpl->tpl_vars['article']->index++;
$__foreach_article_0_saved_local_item = $_smarty_tpl->tpl_vars['article'];
?>
        <div class="col-sm-4">
            <?php $_smarty_tpl->tpl_vars["cover"] = new Smarty_Variable("uploads/".((string)$_smarty_tpl->tpl_vars['article']->value['sn']).".jpg", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cover", 0);?> <?php if (file_exists($_smarty_tpl->tpl_vars['cover']->value)) {?>
            <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="img-fluid rounded cover"> <?php } else { ?>
            <img src="https://picsum.photos/400/300?image=<?php echo $_smarty_tpl->tpl_vars['article']->index;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="img-fluid rounded cover"> <?php }?>

            <h3>
                <a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
            </h3>
            <!-- <p><?php echo $_smarty_tpl->tpl_vars['acticle']->value['summary'];?>
</p> -->
        </div>
        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['article']->_loop) {
?>

        <h1>尚無內容</h1>

        <?php
}
if ($__foreach_article_0_saved_item) {
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_item;
}
?>
    </div>


    <!-- 此處的「.」為一維陣列的各欄 -->


</div>
<!-- 
<div class="container">
    <h1 class="my-3 text-center">最新文章</h1>
    <div class="row">
        <?php
$_from = $_smarty_tpl->tpl_vars['all']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_article_1_saved_item = isset($_smarty_tpl->tpl_vars['article']) ? $_smarty_tpl->tpl_vars['article'] : false;
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['article']->index=-1;
$_smarty_tpl->tpl_vars['article']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
$_smarty_tpl->tpl_vars['article']->index++;
$__foreach_article_1_saved_local_item = $_smarty_tpl->tpl_vars['article'];
?>
        <div class="col-sm-4">
            <?php $_smarty_tpl->tpl_vars["cover"] = new Smarty_Variable("uploads/".((string)$_smarty_tpl->tpl_vars['article']->value['sn']).".jpg", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "cover", 0);?> <?php if (file_exists($_smarty_tpl->tpl_vars['cover']->value)) {?>
            <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="rounded cover"> <?php } else { ?>
            <img src="https://picsum.photos/400/300?image=<?php echo $_smarty_tpl->tpl_vars['article']->index;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="rounded cover"> <?php }?>
            <h3>
                <a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
            </h3>
        </div>
        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['article']->_loop) {
?>
        <h1>尚無內容</h1>
        <?php
}
if ($__foreach_article_1_saved_item) {
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved_item;
}
?>
    </div>
</div> --><?php }
}
