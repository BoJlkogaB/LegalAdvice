<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="/">Zeus</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed"
            type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="/exit/">Выйти</a>
        </li>
    </ul>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu"
             class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Таблицы</span>
                </h6>
                <ul class="nav flex-column">
                    <?php
                    if ($_SESSION['USER']['ROLE'] == 1):
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                               href="/users/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                Пользователи
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/roles/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline
                                            points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Роли
                            </a>
                        </li>
                    <?php
                    endif;
                    if ($_SESSION['USER']['ROLE'] == 1 || $_SESSION['USER']['ROLE'] == 2 || $_SESSION['USER']['ROLE'] == 3):
                        ?>

                        <hr class="m-0">

                        <li class="nav-item">
                            <a class="nav-link" href="/contracts/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline
                                            points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Контракты
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/partners/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                Партнёры
                            </a>
                        </li>
                    <?php
                    endif;
                    if ($_SESSION['USER']['ROLE'] == 1 || $_SESSION['USER']['ROLE'] == 2 || $_SESSION['USER']['ROLE'] == 3 || $_SESSION['USER']['ROLE'] == 5):
                        ?>
                        <hr class="m-0">

                        <li class="nav-item">
                            <a class="nav-link" href="/services_in_agreement/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline
                                            points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Услуги в договоре
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline
                                            points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Услуги
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/agreements/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline
                                            points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Договоры
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/customers/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                Заказчики
                            </a>
                        </li>
                    <?php
                    endif;
                    if ($_SESSION['USER']['ROLE'] == 1 || $_SESSION['USER']['ROLE'] == 2 || $_SESSION['USER']['ROLE'] == 4):
                        ?>
                        <hr class="m-0">

                        <li class="nav-item">
                            <a class="nav-link" href="/employees/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                Сотрудники
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/posts/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline
                                            points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Должности
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/departments/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline
                                            points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Отделы
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/passports/">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="24"
                                     height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline
                                            points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Паспорта
                            </a>
                        </li>

                    <?php
                    endif;
                    ?>
                </ul>
                <hr class="m-0">

            </div>
        </nav>