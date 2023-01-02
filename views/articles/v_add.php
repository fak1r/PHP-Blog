<main>
<div class="form">
    <form method="post">
        <select name="id_cat">
            <?php foreach ($cats as $cat){ ?>
                <option value="<?= $cat["id_cat"]?>" <?= ($cat['id_cat'] == $fields['id_cat'] ? 'selected' : '');?>>
                    <?= $cat["title"];?>
                </option>
            <?php } ?>
        </select>
        Title:<br>
        <input type="text" name="title" value="<?=$fields['title']?>"><br>
        Content:<br>
        <textarea name="content" class="col col-12"><?=$fields['content']?></textarea><br>
        <button>Send</button>
        <div class="error-list">
            <?php foreach ($validateErrors as $error){ ?>
        <p><?=$error?></p>
            <?php } ?>
        </div>
    </form>
</div>

<hr>

</main>
