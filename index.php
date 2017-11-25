<?php
// require_once 'function.php';
// require_once 'smarty/libs/Smarty.class.php';
// $smarty = new Smarty;

// $db = link_db();
require_once 'header.php';

// die(var_dump($_SESSION));

// define('_PAGE_TPL', 'index.tpl');
$page_title = '管理頁面';

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) ($_REQUEST['sn']) : 0;
switch ($op) {

    default:
        if ($sn) {
            show_article($sn);
            $op = 'show_article';
        } else {
            list_article();
            $op = 'list_article';
        }

        break;
}

// $smarty->assign('color2', $color2);
// $smarty->display('admin.tpl');

//顯示時間
// $now = date("Y/m/d H:i:s");
// $smarty->assign('now', $now);

// $smarty->assign('color2', $color2);
// $smarty->display('index.tpl');

//整合
require_once 'footer.php';

/*************函數區**************/

//讀出所有文章
function List_article()
{
    global $db, $smarty;
    $sql    = "select * from `article` order by `update_time` desc limit 0,9";
    $result = $db->query($sql) or die($db->error);
    $all    = []; //php7.1一定要設空陣列array()或[]
    $i      = 0;
    while ($data = $result->fetch_assoc()) {
        $all[$i]            = $data;
        $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 90);

        //    die(var_export($all[$i]['summary']);
        $i++;
    }
    // die(var_export($all));
    $smarty->assign('all', $all);
}

//讀出單一文章
function show_article($sn)
{
    global $db, $smarty;
    require_once 'HTMLPurifier/HTMLPurifier.auto.php';
    $config   = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);

    $sql    = "select * from `article` where `sn`='$sn'";
    $result = $db->query($sql) or die($db->error);
    // $all    = array(); //php7.1一定要設空陣列array()或[]
    $data            = $result->fetch_assoc();
    $data['content'] = $purifier->purify($data['content']);

    //die(var_export($data));
    $smarty->assign('article', $data);
}
