<main>
    <div class="form">
        <form method="post">
            Title:<br>
            <input type="text" name="title" value="<?=$fields['title']?>"><br>
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