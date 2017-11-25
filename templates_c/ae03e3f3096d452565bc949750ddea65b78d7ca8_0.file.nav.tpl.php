<?php
/* Smarty version 3.1.29, created on 2017-11-18 15:52:04
  from "/home/ikpolo/public_html/reporter/templates/nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0fe6a465b3a0_18752683',
  'file_dependency' => 
  array (
    'ae03e3f3096d452565bc949750ddea65b78d7ca8' => 
    array (
      0 => '/home/ikpolo/public_html/reporter/templates/nav.tpl',
      1 => 1510991511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fe6a465b3a0_18752683 ($_smarty_tpl) {
?>
<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark py-0">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">
        <img alt="Brand" src="images/logo.png" class="img-fluid">
    </a>

    <div class="collapse navbar-collapse" id="menu">
        <div class="navbar-nav mr-auto">
            <a href="index.php" class="nav-link text-white">首頁</a>
            <a href="index.php" class="nav-link text-white">編輯精選</a>
            <a href="index.php" class="nav-link text-white">街巷故事</a>
            <a href="index.php" class="nav-link text-white">市井觀點</a>
            <a href="index.php" class="nav-link text-white">私房知識塾</a>
        </div>

        <div class="navbar-nav mr-auto">
            <?php if (isset($_SESSION['username'])) {?>
            <a href="admin.php?op=article_form" class="nav-link text-white">管理</a>
            <a href="logout.php" class="nav-link text-white">登出</a>
            <?php } else { ?>
            <a href="signup.php" class="nav-link text-white">註冊</a>
            <a href="main_login.php" class="nav-link text-white">登入</a>

            <?php }?>
        </div>
    </div>
</nav><?php }
}
