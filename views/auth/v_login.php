<form method="post">
    <div class="form-group">
        <label for="auth-login">Login</label>
        <input type="text" class="form-control" id="auth-login" name="login">
    </div>
    <div class="form-group">
        <label for="auth-password">Password</label>
        <input type="password" class="form-control" id="auth-password" name="password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="login-remember" name="remember">
        <label for="login-remember" class="form-check-label">Remember auth to 1 month</label>
    </div>
    <hr>
    <button class="btn btn-primary">Auth now</button>
    <?php if ($authErr): ?>
        <hr>
        <div class="alert alert-danger">
            Incorrect auth data
        </div>
    <?php endif; ?>
</form>