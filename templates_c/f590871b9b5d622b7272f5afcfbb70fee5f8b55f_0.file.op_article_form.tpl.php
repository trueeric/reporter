<?php
/* Smarty version 3.1.29, created on 2017-11-18 11:27:29
  from "/home/ikpolo/public_html/reporter/templates/op_article_form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0fa8a1d16aa6_20333414',
  'file_dependency' => 
  array (
    'f590871b9b5d622b7272f5afcfbb70fee5f8b55f' => 
    array (
      0 => '/home/ikpolo/public_html/reporter/templates/op_article_form.tpl',
      1 => 1510973244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fa8a1d16aa6_20333414 ($_smarty_tpl) {
echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<form action="admin.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題">
    </div>

    <div class="form-group">
        <label for="content" class="col-form-label sr-only">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"></textarea>
    </div>

    <div class="text-center">
        <input type="hidden" name="op" value="insert">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">

        <button type="submit" class="btn btn-primary">儲存</button>
    </div>
</form>


<!-- <textarea name="content" id="content"></textarea> -->
<?php echo '<script'; ?>
>
    // CKEDITOR.replace('title');
    CKEDITOR.replace('content');
<?php echo '</script'; ?>
><?php }
}
