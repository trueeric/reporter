<?php
/* Smarty version 3.1.29, created on 2017-11-11 13:47:25
  from "/home/ikpolo/public_html/reporter/templates/verifyuser.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a068eedbc4931_78464504',
  'file_dependency' => 
  array (
    '51c399361252a6168672ac22c71df483855d7b84' => 
    array (
      0 => '/home/ikpolo/public_html/reporter/templates/verifyuser.tpl',
      1 => 1510370243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a068eedbc4931_78464504 ($_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

    <div class="img-container">
        <div class="container">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <h1 class="pt-5">巷集談-街道新聞</h1>

            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

        </div>
    </div>


    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</body>

</html><?php }
}
