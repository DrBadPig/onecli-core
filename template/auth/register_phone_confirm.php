<div class="row justify-content-center align-content-center h-100">
    <div class="col-3">
        <div class="text-center mb-4">
            <img src="/images/signin/logo-sm.png" alt="logo" class="t-center" width="75px">
        </div>

        <h2 class="text-center mb-4"><?= $title ?></h2>

        <?= get_message() ?>

        <hr />

        <div class="text-muted small">
            На указанный номер телефона был отправлен код. Вам нужно его ввести и завершить регистрацию.<br>Если код не
            придет в течении 5 минут, свяжитесь с тех. поддержкой указав свой Логин, E-mail и номер телефона.
        </div>

        <hr />

        <form action="<?= route('phone_confirm') ?>" method="post">
            <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
            <div class="mb-3">
                <label for="code" class="form-label"><?= __('Код из СМС') ?></label>
                <input type="text"
                       class="form-control"
                       id="code"
                       name="code"
                       required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success"><?= __('Подтвердить') ?></button>
            </div>
        </form>
    </div>
</div>