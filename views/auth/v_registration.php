<main>
    <div class="form">
        <form method="post">
            Login:<br>
            <input type="text" name="login" value="<?=$fields['login']?>"><br>
            Password:<br>
            <input type="text" name="password" value=""><br>
            Email:<br>
            <input type="text" name="email" value="<?=$fields['email']?>"><br>
            Name:<br>
            <input type="text" name="name" value="<?=$fields['name']?>"><br>
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