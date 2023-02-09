<main>
<div>
    <form class="form" method="post">
        <select name="id_cat">
            <?php foreach ($cats as $cat){ ?>
                <option value="<?= $cat["id_cat"]?>" <?= ($cat['id_cat'] == $fields['id_cat'] ? 'selected' : '');?>>
                    <?= $cat["title"];?>
                </option>
            <?php } ?>
        </select>
        Title:<br>
        <input class="check" type="text" name="title" value="<?=$fields['title']?>"><br>
        Content:<br>
        <textarea name="content" class="col col-12 check"><?=$fields['content']?></textarea><br>
        <button type="submit">Send</button>
        <script src="../assets/js/form_validate.js"></script>
        <div class="error-list">
            <?php foreach ($validateErrors as $error){ ?>
        <p><?=$error?></p>
            <?php } ?>
        </div>
    </form>
</div>

<hr>

</main>
