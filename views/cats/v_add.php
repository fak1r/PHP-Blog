<main>
    <div>
        <form class="form" method="post">
            Title:<br>
            <input class="check" type="text" name="title" value="<?=$fields['title']?>"><br>
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