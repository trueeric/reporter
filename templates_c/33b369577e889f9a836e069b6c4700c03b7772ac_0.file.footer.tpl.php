<?php
/* Smarty version 3.1.29, created on 2017-11-18 15:57:49
  from "/home/ikpolo/public_html/reporter/templates/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0fe7fda13211_28404478',
  'file_dependency' => 
  array (
    '33b369577e889f9a836e069b6c4700c03b7772ac' => 
    array (
      0 => '/home/ikpolo/public_html/reporter/templates/footer.tpl',
      1 => 1510991865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fe7fda13211_28404478 ($_smarty_tpl) {
?>
<div class="footer"></div>
<footer class="bg-dark text-white  fixed-bottom">
    <div class="container">
        <div class="my-3 d-none d-sm-block">
            以台南社大師生為主體寫作者的《巷集談-街道新聞》，秉持公民素人發聲 、開放以及非營利的宗旨，除希望培力更多公民記者、自由寫手之外，更希望以關注台南市未來城鄉永續發展過程中，保障公民參與審議的權利為精神，成為台南市公民傳播媒體的草根平台。
        </div>
        <div class="my-2 d-block d-sm-none text-center">
            台南市公民傳播媒體的草根平台
        </div>
    </div>


</footer>



<?php echo '<script'; ?>
 <?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>   
    // $(document).ready(function () {
    //     $('.img-container').css('width', '200px');
    //     $('.img-container').css('height', '200px');
    // });
    $(document).ready(function () {
        var images = ['pic1.jpg', 'pic2.jpg', 'pic3.jpg'];
        // $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });
        $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });
        $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());
    });

    $(window).resize(function () {
        $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());
    });
<?php echo '</script'; ?>
><?php }
}
