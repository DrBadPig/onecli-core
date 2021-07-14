<div class="row my-4 px-4">
    <div class="col-2">
        <?php require_once '_sidebar.php' ?>
    </div>
    <div class="col-8">

        <h1 class="mb-5"><?= __('Привет, ') . $user['username'] ?></h1>

        <div class="row mb-4">
            <!-- Баланс CryptoArea -->
            <div class="col-6">
                <div class="card p-4">
                    <div class="row">
                        <div class="col-2">
                            <i class="fab fa-btc fa-2x text-warning"></i>
                        </div>
                        <div class="col-10 text-end">
                            <a href="#"
                               class="d-block h5 mb-0"
                               style="text-decoration: none">
                                <?= __('Баланс CryptoArea: -/- BTC (-/- $)') ?>
                            </a>
                            <span class="small text-muted">Нажмите, чтобы вывести доступные BTC</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Баланс Onecli -->
            <div class="col-6">
                <div class="card p-4">
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-dollar-sign fa-2x text-success"></i>
                        </div>
                        <div class="col-10 text-end">
                            <a href="#"
                               class="d-block h5 mb-0"
                               style="text-decoration: none">
                                <?= __('Баланс Onecli: -/- $ (-/- BTC)') ?>
                            </a>
                            <span class="small text-muted">Нажмите, чтобы вывести доступные USD</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <!-- Данные о команде -->
            <div class="col-6">
                <div class="card p-4">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-users fa-2x text-primary"></i>
                        </div>
                        <div class="col-10 text-end">
                            <a href="<?= route('lc_team') ?>"
                               class="d-block h5 mb-0"
                               style="text-decoration: none">
                                <?= __('Всего партнеров в команде: ') . $user['team_count'] ?>
                            </a>
                            <span class="small text-muted">Нажмите, чтобы посмотреть статистику</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Мои доли в стартапе Onecli -->
            <div class="col-6">
                <div class="card p-4">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-chart-pie fa-2x text-danger"></i>
                        </div>
                        <div class="col-10 text-end">
                            <a href="#"
                               class="d-block h5 mb-0"
                               style="text-decoration: none">
                                <?= __('Мои доли в стартапе Onecli: -/-') ?>
                            </a>
                            <span class="small text-muted">Нажмите, чтобы перейти в инвестиции</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <!-- Новости сообщества -->
            <div class="col-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="card-title"><?= __('Новости сообщества') ?></h2>
                    </div>
                    <div class="card-body">
                        <!-- Timeline Content -->
                        <div class="timeline">
                            <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>

                            <!-- VK Widget -->
                            <div id="vk_widget" style="width: 100%;">
                                <div id="vk_groups"
                                     style="width: 787px; height: 623px; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;">
                                    <iframe name="fXD3b625"
                                            src="https://vk.com/widget_community.php?app=0&amp;width=787px&amp;_ver=1&amp;gid=170637429&amp;mode=4&amp;color1=&amp;color2=&amp;color3=&amp;class_name=&amp;no_cover=1&amp;wide=1&amp;height=620&amp;url=https%3A%2F%2Fcryptoarea.com%2Flc%2F&amp;referrer=https%3A%2F%2Fonecli.com%2F&amp;title=ONECLI.&amp;17a9032de96"
                                            scrolling="no" id="vkwidget2"
                                            style="overflow: hidden; height: 623px;" width="787" height="620"
                                            frameborder="0"></iframe>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function VK_Widget_Init() {
                                    document.getElementById('vk_widget').innerHTML = '<div id="vk_groups" style="width: 100%;"></div>';
                                    VK.Widgets.Group("vk_groups", {
                                        mode: 4,
                                        wide: 1,
                                        no_cover: 1,
                                        width: 'auto',
                                        height: "620"
                                    }, 170637429);
                                };
                                window.addEventListener('load', VK_Widget_Init, false);
                                window.addEventListener('resize', VK_Widget_Init, false);
                            </script>

                        </div>
                        <!-- END Timeline Content -->
                    </div>
                </div>
            </div>

            <!-- Прогресс за неделю -->
            <div class="col-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="card-title"><?= __('Прогресс за неделю') ?></h2>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-4 py-3">
                                <a href="#">
                                    <i class="fa fa-rocket fa-3x"></i>
                                </a>
                                <h5>
                                    <strong>0%</strong><br><small>Скорость</small>
                                </h5>
                            </div>
                            <div class="col-4 py-3">
                                <a href="#">
                                    <i class="fa fa-tachometer-alt fa-3x"></i>
                                </a>
                                <h5>
                                    <strong>0%</strong><br><small>Активность</small>
                                </h5>
                            </div>
                            <div class="col-4 py-3">
                                <a href="#">
                                    <i class="fa fa-chart-area fa-3x"></i>
                                </a>
                                <h5>
                                    <strong>0%</strong><br><small>Доход</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>