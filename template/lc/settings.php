<div class="row my-4 px-4">
    <div class="col-2">
        <?php require_once '_sidebar.php' ?>
    </div>
    <div class="col-10">

        <h1><?= $title ?></h1>

        <div class="row">
            <div class="col">
                <div class="alert alert-warning small">
                    <strong>ВНИМАНИЕ!</strong>
                    <br><br>
                    <strong>Для получения и активации личного сайта Onecli.
                        необходимо обязательно заполнить следующие информационные блоки:</strong><br><br>
                    1. Аватарка;<br>
                    2. Общая информация;<br>
                    3. Социальные сети.<br><br>

                    Если какой либо из блоков не будет заполнен или в них будет введена недостоверная информация -
                    <strong>личный сайт Onecli. активирован не будет.</strong><br><br>

                    Личный сайт позволит многократно увеличить статистику вашего заработка и поднять общую конверсию
                    вашего развития в компании. Маркетологи Onecli. полностью продумали структуру, психологию поведения
                    пользователей и концепцию сайта, в связи с чем новые участники будут быстро знакомиться с продуктом
                    и принимать решение зарегистрироваться на платформе Onecli. в вашу команду. <br><br>Ссылку на сайт
                    вы можете получить в разделе <a href="<?= route('lc_team') ?>">"Моя команда"</a>.
                </div>
            </div>
        </div>

        <?= get_message() ?>

        <div class="row">
            <!-- Базовая информация -->
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4 class="card-title"><?= __('Общая информация') ?></h4>
                    </div>
                    <div class="card-body">
                        <p><strong><?= __('Логин:') ?></strong> <?= $user['username'] ?></p>
                        <p><strong><?= __('E-mail:') ?></strong> <?= $user['email'] ?></p>
                        <p><strong><?= __('Телефон:') ?></strong> <?= $user['phone'] ?></p>
                    </div>
                </div>
            </div>

            <!-- Форма изменения пароля -->
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4 class="card-title"><?= __('Изменения пароля') ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= route('lc_password_change') ?>" method="post">
                            <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
                            <input type="hidden" name="_method" value="PUT"/>
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
                                <button type="submit" class="btn btn-primary"><?= __('Изменить пароль') ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Платежные реквизиты -->
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4 class="card-title"><?= __('Платежные реквизиты') ?></h4>
                    </div>
                    <div class="card-body">
                        В разработке
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Социальные сети -->
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4 class="card-title"><?= __('Социальные сети') ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info small">
                            <strong>ВНИМАНИЕ!</strong> <br>
                            Адрес соц. сетей вводить с префиксом <strong>https://</strong>
                        </div>
                        <form action="<?= route('lc_social_update') ?>" method="post">
                            <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
                            <input type="hidden" name="_method" value="PUT"/>
                            <div class="mb-3">
                                <label for="vk" class="form-label">ВКонтакте</label>
                                <input type="text"
                                       class="form-control"
                                       id="vk"
                                       name="vk"
                                       value="<?= $social['vk']['link'] ?? old('vk') ?>">
                            </div>
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text"
                                       class="form-control"
                                       id="instagram"
                                       name="instagram"
                                       value="<?= $social['instagram']['link'] ?? old('instagram') ?>">
                            </div>
                            <div class="mb-3">
                                <label for="telegram" class="form-label">Telegram</label>
                                <input type="text"
                                       class="form-control"
                                       id="telegram"
                                       name="telegram"
                                       value="<?= $social['telegram']['link'] ?? old('telegram') ?>">
                            </div>
                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text"
                                       class="form-control"
                                       id="facebook"
                                       name="facebook"
                                       value="<?= $social['facebook']['link'] ?? old('facebook') ?>">
                            </div>
                            <button type="submit" class="btn btn-primary"><?= __('Сохранить') ?></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Аватар -->
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4 class="card-title"><?= __('Аватарка') ?></h4>
                    </div>
                    <div class="card-body">
                        <?php if ($user['avatar']): ?>
                            <img src="<?= $user['avatar'] ?>" alt="Аватарка" class="mb-4 mx-auto img-thumbnail d-block">
                        <?php endif; ?>
                        <form id="w5" action="<?= route('lc_avatar_update') ?>" method="post"
                              enctype="multipart/form-data">
                            <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
                            <input type="hidden" name="_method" value="PUT"/>
                            <div class="input-group mb-3">
                                <input class="form-control"
                                       type="file"
                                       accept="image/png, image/jpeg"
                                       id="avatar"
                                       name="avatar">
                                <button class="btn btn-primary" type="submit"><?= __('Загрузить') ?></button>
                            </div>
                        </form>
                        <p class="small"><strong>Разрешено загружать изображение *.jpg или *.png формата.</strong></p>
                    </div>
                </div>
            </div>

            <!-- Информация о пользователе -->
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4 class="card-title"><?= __('Общая информация') ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= route('lc_about_update') ?>" method="post">
                            <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
                            <input type="hidden" name="_method" value="PUT"/>
                            <div class="mb-3">
                                <label for="name" class="form-label"><?= __('Имя') ?></label>
                                <input type="text"
                                       class="form-control"
                                       id="name"
                                       name="name"
                                       value="<?= $user['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="position" class="form-label"><?= __('Должность') ?></label>
                                <input type="text"
                                       class="form-control"
                                       id="position"
                                       name="position"
                                       value="<?= $user['position'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="about" class="form-label"><?= __('О себе') ?></label>
                                <textarea class="form-control" id="about" rows="10"
                                          name="about"><?= $user['about'] ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><?= __('Сохранить') ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>