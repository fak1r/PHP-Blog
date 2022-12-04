<main>
   <div class="articles"><hr>
        <?php foreach($dbarticles as $dbarticle): ?>
            <div>
                <strong><?=$dbarticle['title']?></strong>
                <em><?=$dbarticle['dt_add']?></em>
                <div>
                    <?=$dbarticle['content']?>
                </div>
                <div><a href="index.php?c=dbarticle&id=<?=$dbarticle['id_article']?>">Read more</a></div>
                <hr>
            </div>
        <?php endforeach;?>
    </div>
</main>
