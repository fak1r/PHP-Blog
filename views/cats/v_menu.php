<aside class="col col-12">
    <ul class="list-group">
        <?php foreach($cats as $cat): ?>
            <li class="list-group-item margin: 100px"><a href="<?=BASE_URL?>cat/<?= $cat['id_cat']?>"><?php echo $cat['id_cat'], ' ', $cat['title'];?></a></li>
        <?php endforeach;?>
        <li class="list-group-item"><a href="<?=BASE_URL?>category/all">Show all categories</a></li>
    </ul>
</aside>
