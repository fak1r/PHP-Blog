<?php if ((($userid == $articleAuthor) || ($userid == 1))){ ?>
<aside class="col col-12">
    <ul class="list-group">
        <li class="list-group-item margin: 100px"><a href="<?=BASE_URL?>article/delete/<?=$id_article?>">Delete</a></li>
        <li class="list-group-item"><a href="<?=BASE_URL?>article/edit/<?=$id_article?>">Edit</a></li>
    </ul>
</aside>
<?php }?>