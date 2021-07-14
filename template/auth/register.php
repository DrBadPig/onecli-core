<div class="row justify-content-center align-content-center h-100">
    <div class="col-3">
        <div class="text-center mb-4">
            <img src="/images/signin/logo-sm.png" alt="logo" class="t-center" width="75px">
        </div>

        <?= get_message() ?>

        <form action="<?= route('register_store') ?>" method="post">
            <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
            <div class="mb-3">
                <label for="username" class="form-label"><?= __('Логин') ?></label>
                <input type="text"
                       class="form-control"
                       id="username"
                       name="username"
                       value="<?= old('username') ?>"
                       required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label"><?= __('E-mail') ?></label>
                <input type="email"
                       class="form-control"
                       id="email"
                       name="email"
                       value="<?= old('email') ?>"
                       required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label"><?= __('Телефон') ?></label>
                <input type="tel"
                       class="form-control"
                       id="phone"
                       name="phone"
                       value="<?= old('phone') ?>"
                       required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><?= __('Пароль') ?></label>
                <input type="password"
                       class="form-control"
                       id="password"
                       name="password">
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label"><?= __('Повтор пароля') ?></label>
                <input type="password"
                       class="form-control"
                       id="confirm_password"
                       name="confirm_password">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success"><?= __('Регистрация') ?></button>
                <a href="<?= route('login') ?>" class="btn btn-outline-secondary"><?= __('Войти') ?></a>
            </div>
        </form>
    </div>
</div>