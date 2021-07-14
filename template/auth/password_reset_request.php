<div class="row justify-content-center align-content-center h-100">
    <div class="col-3">
        <div class="text-center mb-4">
            <img src="/images/signin/logo-sm.png" alt="logo" class="t-center" width="75px">
        </div>

        <h2 class="text-center mb-4"><?= $title ?></h2>

        <?= get_message() ?>

        <form action="<?= route('password_reset_request') ?>" method="post">
            <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
            <div class="mb-3">
                <label for="email" class="form-label"><?= __('Введите ваш E-mail') ?></label>
                <input type="text" class="form-control" id="email" name="email" value="<?= old('email') ?>">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success"><?= __('Восстановить пароль') ?></button>
                <a href="<?= route('home') ?>" class="btn btn-outline-secondary">Отмена</a>
            </div>
        </form>
    </div>
</div>