<div class="row justify-content-center align-content-center h-100">
    <div class="col-3">
        <div class="text-center mb-4">
            <img src="/images/signin/logo-sm.png" alt="logo" class="t-center" width="75px">
        </div>

        <?= get_message() ?>

        <form action="<?= route('login') ?>" method="post">
            <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
            <div class="mb-3">
                <label for="username" class="form-label"><?= __('E-mail или логин') ?></label>
                <input type="text"
                       class="form-control"
                       id="username"
                       name="username"
                       value="<?= old('username') ?>"
                       autofocus
                       required>
            </div>
            <div class="mb-3 position-relative">
                <label for="password" class="form-label"><?= __('Пароль') ?></label>
                <input type="password"
                       class="form-control"
                       id="password"
                       name="password"
                       required>
                <a href="<?= route('password_reset_request') ?>" class="position-absolute small" style="top: 0; right: 0;">
                    <?= __('Забыли пароль?') ?>
                </a>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
                <label class="form-check-label" for="remember_me"><?= __('Запомнить меня') ?></label>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success"><?= __('Войти') ?></button>
                <a href="<?= route('register') ?>" class="btn btn-outline-secondary"><?= __('Регистрация') ?></a>
            </div>
        </form>
    </div>
</div>