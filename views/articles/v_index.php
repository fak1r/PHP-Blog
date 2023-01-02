<main>
   <div class="articles"><hr>
        <?php foreach($articles as $article): ?>
            <div>
                <strong><?=$article['title']?></strong>
                <em><?=$article['dt_add']?></em>
                <b>Author id:<?=$article['id_user']?></b>
                <div>
                    <?=$article['content']?>
                </div>
                <div><a href="<?=BASE_URL?>article/<?=$article['id_article']?>">Read more</a></div>
                <?php if ((($userid == $article['id_user']) || ($userid == 1))){ ?>
                    <ul class="list-group col-1">
                        <li class="list-group-item margin: 100px"><a href="<?=BASE_URL?>article/delete/<?=$article['id_article']?>">Delete</a></li>
                        <li class="list-group-item"><a href="<?=BASE_URL?>article/edit/<?=$article['id_article']?>">Edit</a></li>
                    </ul>
                <?php }?>
                <hr>
            </div>
        <?php endforeach;?>
    </div>
</main>
