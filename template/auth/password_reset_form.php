<div class="row justify-content-center align-content-center h-100">
    <div class="col-3">
        <div class="text-center mb-4">
            <img src="/images/signin/logo-sm.png" alt="logo" class="t-center" width="75px">
        </div>

        <h2 class="text-center mb-4"><?= $title ?></h2>

        <?= get_message() ?>

        <form action="<?= route('password_reset_update') ?>" method="post">
            <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
            <input type="hidden" name="_method" value="PUT" />
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
                <button type="submit" class="btn btn-success"><?= __('Изменить пароль') ?></button>
            </div>
        </form>
    </div>
</div>