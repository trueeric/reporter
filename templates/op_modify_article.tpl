<!-- <div class="container">

    <h1>{$article.title}</h1>
    <p>{$article.content}</p>

    {if isset($smarty.session.username) and $smarty.username==$article.usname}

    <div class="alert alert-info">
        <a href="admin.php?op=delete_article&sn={$article.sn}" class="btn btn-danger">刪除</a>
        <a href="admin.php?op=etit_article&sn={$article.sn}" class="btn btn-warning">修改</a>
    </div>
    {/if}
</div> -->

<script src="ckeditor/ckeditor.js"></script>

<form action="admin.php" method="post" enctype="multipart/form-data" class="my-4">
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題" value="{$article.title}">
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label sr-only">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容">{$article.title}</textarea>
    </div>
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">封面圖</label>
        <input type="file" class="form-control" name="pic" id="pic" placeholder="請上傳一張封面圖">
    </div>
    <div class="text-center">
        <input type="hidden" name="sn" value="{$article.sn}">
        <input type="hidden" name="op" value="insert">
        <input type="hidden" name="username" value="{$smarty.session.username}">
        <button type="submit" class="btn btn-primary">儲存</button>
    </div>
</form>

<script>
    CKEDITOR.replace('content');

</script>