<div class="row my-4 px-4">
    <div class="col-2">
        <?php require_once '_sidebar.php' ?>
    </div>
    <div class="col-10">

        <h1><?= $title ?></h1>

        <h3 class="my-4"><?= __('Всего партнеров: ' . $user['team_count']) ?></h3>

        <div class="row mb-4">
            <div class="col">
                <p class="text-muted">
                    В данном разделе вы сможете получить готовые рекламные инструменты Onecli., отслеживать общую
                    статистику вашей деятельности и мониторить уровень развития всех своих партнеров. Используя
                    реферальную программу вы будете получать свой % прибыли с каждой покупки долей по вашей реферальной
                    ссылке, с каждого клика на аукционе и с каждого обмена в P2P обменнике. Реферальная программа
                    доступна каждому зарегистрированному участнику платформы.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>
                    Вас пригласил: onecli (admin@onecli.com)
                </p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            <i class="fa fa-users me-2"></i> <?= __('Реферальная программа') ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <div class="row">
                                <div class="col-4 mb-3">
                                    <input type="text"
                                           class="form-control"
                                           id="referral_link"
                                           onclick="this.select();"
                                           value="https://onecli.com/?referral=<?= $user['username'] ?>"
                                           readonly>
                                </div>
                                <div class="col-4">
                                    <button type="button"
                                            class="btn btn-info"
                                            onclick="copyToClipboard('referral_link');">
                                        <?= __('Копировать') ?>
                                    </button>
                                </div>
                            </div>

                            За привлечение инвестиций в стартап Onecli вы будете получать трехуровневый реферальный
                            бонус 5%/3%/2% за каждую проданную долю. Реферальная программа доступна каждому
                            зарегистрированному участнику сообщества. Читать подробнее...
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3><?= __('Общая статистика по команде') ?></h3>

        <div class="row">
            <div class="col">
                <table class="table table-hover table-bordered small">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Дата регистрации</th>
                        <th>Логин</th>
                        <th>E-mail</th>
                        <th>Тариф</th>
                        <th>Команда</th>
                        <th>Уровень</th>
                        <th>Доход</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($team as $member): ?>
                        <tr>
                            <td><?= $member['id'] ?></td>
                            <td><?= $member['created_at'] ?></td>
                            <td><?= $member['username'] ?></td>
                            <td><?= $member['email'] ?></td>
                            <td></td>
                            <td><?= $member['team_count'] ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>