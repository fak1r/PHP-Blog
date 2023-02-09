<main>
    <div>
        <form class="form" method="post">
            Login:<br>
            <input class="check" type="text" name="login" value="<?=$fields['login']?>"><br>
            Password:<br>
            <input class="check" type="text" name="password" value=""><br>
            Email:<br>
            <input class="check" type="text" name="email" value="<?=$fields['email']?>"><br>
            Name:<br>
            <input class="check" type="text" name="name" value="<?=$fields['name']?>"><br>
            <button type="submit">Send</button>
            <div class="error-list">
                <?php foreach ($validateErrors as $error){ ?>
                    <p><?=$error?></p>
                <?php } ?>
            </div>
        </form>
        <script src="../assets/js/form_validate.js"></script>
    </div>
    <hr>
</main>