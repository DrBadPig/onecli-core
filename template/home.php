<div class="row mt-4 justify-content-center align-content-center h-75">
    <div class="col-3 text-center">
        <div class="text-center mb-4">
            <img src="/images/signin/logo-sm.png" alt="logo" class="t-center" width="75px">
        </div>

        <?= get_message() ?>

        <?php if (is_guest()): ?>
            <div class="d-grid gap-2">
                <a href="<?= route('login') ?>" class="btn btn-success"><?= __('Авторизоваться') ?></a>
                <a href="<?= route('register') ?>" class="btn btn-outline-secondary"><?= __('Регистрация') ?></a>
            </div>
        <?php else: ?>
            <div class="d-grid gap-2">
                <a href="<?= route('lc_dashboard') ?>" class="btn btn-warning"><?= __('Личный кабинет') ?></a>
                <a href="<?= route('logout') ?>" class="btn btn-primary"><?= __('Выйти') ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>