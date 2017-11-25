<?php
// require_once 'function.php';
// require_once 'smarty/libs/Smarty.class.php';
// $smarty = new Smarty;

// $db = link_db();
require "loginheader.php";
require_once 'header.php';

// define('_PAGE_TPL', 'admin.tpl');
$page_title = '管理頁面';

$op = isset($_REQUEST['op']) ? htmlspecialchars($_REQUEST['op']) : '';
$sn = isset($_REQUEST['op']) ? (int) ($_REQUEST['op']) : 0;

switch ($op) {
    case 'insert':
        $sn = insert_article();
        header("location:index.php?sn={$sn}");
        break;

    case 'delete_article':
        delete_article($sn);
        header("location:index.php");
        break;

    case 'article_form':
        show_article($sn);
        break;

    default:
        $op = "";
        break;
}

// $smarty->assign('color2', $color2);
// $smarty->display('admin.tpl');
//整合
require_once 'footer.php';

function insert_article()
{
    global $db;

    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);
    // die(var_export($username));

    $sql = "INSERT INTO `article` (`title`, `content`,`username`, `create_time`, `update_time`) VALUES ('{$title}', '{$content}','{$username}',now(),now())";

    $db->query($sql) or die($db->error);
    $sn = $db->insert_id;
    if (isset($_FILES)) {
        $ext = pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION);
        if (!is_dir('uploads')) {
            mkdir('uploads');
        }
        move_uploaded_file($_FILES['pic']['tmp_name'], "uploads/{$sn}.{$ext}");
    }

    return $sn;

}

function delete_article($sn)
{
    global $db;

    // die(var_export($username));

    $sql = "delete from `article` where sn='{$sn}' and username='{$_SESSION['username']}'";

    $db->query($sql) or die($db->error);

}
