<div class="container">
    <h3 class="my-3 text-center">最近文章</h3>
    <div class="row">
        {foreach $all as $article}
        <div class="col-sm-4">
            {assign var="cover" value="uploads/`$article.sn`.jpg"} {if file_exists($cover)}
            <img src="uploads/{$article.sn}.jpg" alt="{$article.title}" class="img-fluid rounded cover"> {else}
            <img src="https://picsum.photos/400/300?image={$article@index}" alt="{$article.title}" class="img-fluid rounded cover"> {/if}

            <h3>
                <a href="index.php?sn={$article.sn}">{$article.title}</a>
            </h3>
            <!-- <p>{$acticle.summary}</p> -->
        </div>
        {foreachelse}

        <h1>尚無內容</h1>

        {/foreach}
    </div>


    <!-- 此處的「.」為一維陣列的各欄 -->


</div>
<!-- 
<div class="container">
    <h1 class="my-3 text-center">最新文章</h1>
    <div class="row">
        {foreach $all as $article}
        <div class="col-sm-4">
            {assign var="cover" value="uploads/`$article.sn`.jpg"} {if file_exists($cover)}
            <img src="uploads/{$article.sn}.jpg" alt="{$article.title}" class="rounded cover"> {else}
            <img src="https://picsum.photos/400/300?image={$article@index}" alt="{$article.title}" class="rounded cover"> {/if}
            <h3>
                <a href="index.php?sn={$article.sn}">{$article.title}</a>
            </h3>
        </div>
        {foreachelse}
        <h1>尚無內容</h1>
        {/foreach}
    </div>
</div> -->