<?php
/* Smarty version 3.1.29, created on 2017-11-11 12:07:50
  from "/home/ikpolo/public_html/reporter/templates/signup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0677966928a1_98029506',
  'file_dependency' => 
  array (
    'b968c1ea70d94e212ab4826989f8b901c3815bb6' => 
    array (
      0 => '/home/ikpolo/public_html/reporter/templates/signup.tpl',
      1 => 1510370234,
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
function content_5a0677966928a1_98029506 ($_smarty_tpl) {
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

            <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
                <h2 class="form-signup-heading">Register</h2>
                <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
                <input name="email" id="email" type="text" class="form-control" placeholder="Email">
                <br>
                <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
                <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">

                <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                <div id="message"></div>
            </form>
        </div>
    </div>


    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '<script'; ?>
 src="js/signup.js">
    <?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $("#usersignup").validate({
            rules: {
                email: {
                    email: true,
                    required: true
                },
                password1: {
                    required: true,
                    minlength: 4
                },
                password2: {
                    equalTo: "#password1"
                }
            }
        });

    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
