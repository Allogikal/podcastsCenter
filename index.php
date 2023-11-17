<?
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/app/database/dbConnect.php';
$PDO = new PDOConnect();
require $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/selectTagsController.php';
require $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/selectPodcastsController.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PARADIGMA | Elizaveta Vihrova</title>
    <!-- FAVICON.ICO -->
    <link rel="icon" href="./FAVICON.ico" type="image/x-icon">
    <!-- STYLES_CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- CONNECTED JQUERY-3.7.1.MIN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- SECTION_HEADER -->
    <header>
        <nav>
            <ul>
                <li><a class="aElement" href="#section1">Инфо</a></li>
                <li><a class="aElement" href="#section2">О нас</a></li>
                <li><img src="./assets/images/logoImage.svg" alt="logoImage"></li>
                <li><a class="aElement" href="#section3">Подкасты</a></li>
                <li><a class="aElement" href="#section4">Поиск<sub>CTRL+F</sub></a></li>
            </ul>
        </nav>
    </header>

    <!-- FIXED SCROLL_DOWN -->
    <div class="scroll_down">
        <img src="./assets/images/arrowScrollDown.svg" alt="scrollDown">
        <p>scroll down</p>
    </div>

    <!-- SECTION_INFO -->
    <article id="section1">
        <div class="info_left">
            <h1>Здесь мы открываемся новым идеям, расширяем свой <span>ум и душу</span>.</h1>
            <p>Проект "ПАРАДИГМА" призван способствовать взаимопониманию и сотрудничеству между разными культурами, а также развивать толерантность и уважение к иным мировоззрениям. Пора отправляться в путешествие, где изменится ваше сознание.</p>
            <button id="openModalForm">Прими участие <img src="./assets/images/arrowDecorate.svg" alt="arrowDecorate"></button>
        </div>
        <div class="info_right">
            <img src="./assets/images/imageClip.jpg" alt="image">
        </div>
    </article>

    <!-- SVG_FOR_BORDER_SECTION_ABOUT -->
    <svg class="svg_border_about" xmlns="http://www.w3.org/2000/svg" width="1438" height="78" viewBox="0 0 1438 78" fill="none">
        <path d="M0.5 75.5L274.5 33.5L297.5 75.5L349 33.5L1437.5 1.5" stroke="#9A9A9A" stroke-width="3" stroke-dasharray="10 30" />
    </svg>

    <!-- SECTION_ABOUT -->
    <section id="section2" class="about">
        <div class="about_first fade">
            <div>
                <img src="./assets/images/imageClip.jpg" alt="imageDeveloper">
                <p>Привет, я создатель проекта. Если ты попал сюда, то тебе крупно повезло, ведь здесь мы меняем ваше восприятие. Наши подкасты, созданные в рамках проекта, позволяют иностранцам высказаться и поделиться своими уникальными взглядами на российскую культуру, традиции и обычаи. Скорее переходи к прослушиванию, сломай свою парадигму!</p>
            </div>
            <div>
                <h1><span>Елизавета</span> Вихрова </h1>
            </div>
        </div>
        <div class="about_first fade">
            <div>
                <img src="./assets/images/imageClip.jpg" alt="imageDeveloper">
                <p>Привет, я разработчик сайта проекта. Если ты попал сюда, то тебе крупно повезло, ведь здесь мы меняем ваше восприятие. Наши подкасты, созданные в рамках проекта, позволяют иностранцам высказаться и поделиться своими уникальными взглядами на российскую культуру, традиции и обычаи. Скорее переходи к прослушиванию, сломай свою парадигму!</p>
            </div>
            <div>
                <h1><span>Лиса</span> (разработчик сайта) </h1>
            </div>
        </div>
        <div class="about_first fade">
            <div>
                <img src="./assets/images/imageClip.jpg" alt="imageDeveloper">
                <p>Привет, я дизайнер сайта проекта. Если ты попал сюда, то тебе крупно повезло, ведь здесь мы меняем ваше восприятие. Наши подкасты, созданные в рамках проекта, позволяют иностранцам высказаться и поделиться своими уникальными взглядами на российскую культуру, традиции и обычаи. Скорее переходи к прослушиванию, сломай свою парадигму!</p>
            </div>
            <div>
                <h1><span>Олеся</span> (дизайнер) </h1>
            </div>
        </div>
        <div class="about_first fade">
            <div>
                <img src="./assets/images/imageClip.jpg" alt="imageDeveloper">
                <p>Привет, я продюсер проекта. Если ты попал сюда, то тебе крупно повезло, ведь здесь мы меняем ваше восприятие. Наши подкасты, созданные в рамках проекта, позволяют иностранцам высказаться и поделиться своими уникальными взглядами на российскую культуру, традиции и обычаи. Скорее переходи к прослушиванию, сломай свою парадигму!</p>
            </div>
            <div>
                <h1><span>Дарья</span> (продюсер) </h1>
            </div>
        </div>
        <div class="about_first fade">
            <div>
                <img src="./assets/images/imageClip.jpg" alt="imageDeveloper">
                <p>Привет, я пиар-менеджер проекта. Если ты попал сюда, то тебе крупно повезло, ведь здесь мы меняем ваше восприятие. Наши подкасты, созданные в рамках проекта, позволяют иностранцам высказаться и поделиться своими уникальными взглядами на российскую культуру, традиции и обычаи. Скорее переходи к прослушиванию, сломай свою парадигму!</p>
            </div>
            <div>
                <h1><span>Элина</span> (PR-менеджер) </h1>
            </div>
        </div>
        <div class="about_second">
            <div>
                <div><img class="prevSlide" src="./assets/images/arrowDecorate.svg" alt="arrowDecorate"></div>
                <div><span class="indicator"></span></div>
                <div><span class="indicator"></span></div>
                <div><span class="indicator"></span></div>
                <div><span class="indicator"></span></div>
                <div><span class="indicator"></span></div>
                <div><img class="nextSlide" src="./assets/images/arrowDecorate.svg" alt="arrowDecorate"></div>
            </div>
        </div>
        <div class="about_third">
            <h1>Наша крутая команда.</h1>
        </div>
    </section>

    <!-- SVG_FOR_BORDER_SECTION_ABOUT -->
    <svg class="svg_border_about" xmlns="http://www.w3.org/2000/svg" width="1438" height="79" viewBox="0 0 1438 79" fill="none">
        <path d="M1437 76L1163 34L1140 76L1088.5 34L0 2" stroke="#9A9A9A" stroke-width="3" stroke-dasharray="10 30" />
    </svg>

    <!-- SECTION_PODCASTS -->
    <section id="section3" class="podcasts">
        <div class="podcasts_heading">
            <div>
                <h1>Услышь новое <span>восприятие</span></h1>
                <img src="./assets/images/lineDecorate.svg" alt="lineDecorate">
            </div>
            <div>
                <select id="categorySelect">
                    <option value="all">Сортируй подкасты ..</option>
                    <? $tags_array = selectTags($PDO); ?>
                    <? foreach ($tags_array as $tag) :
                        echo '<option value="' . $tag['id'] . '">' . $tag['title'] . '</option>';
                    endforeach; ?>
                </select>
                <img src="./assets/images/arrowDecorate.svg" alt="arrowDecorate">
            </div>
        </div>
        <div id="searchResults" class="podcasts_body"></div>
    </section>

    <!-- VECTOR_DECORATE_SEARCH -->
    <svg class="svg_decorate_search" xmlns="http://www.w3.org/2000/svg" width="807" height="54" viewBox="0 0 807 54" fill="none">
        <path id="pulsePath" d="M0 25.5H77.5L91.5 9.5L100 52L108.5 25.5H177.5L183 9.5L197 34L204.5 17L228 25.5H267.5L282 2V43.5L304.5 25.5H332.5H378L386.5 2L392 43.5L400.5 25.5H463.5L477.5 2L488 43.5L497.5 25.5H556H606.5L622 9.5V52L637 25.5H675.5L690.5 9.5L702 25.5H729V43.5L747 25.5H773.5H806.5" stroke="#9A9A9A">
            <animate attributeName="stroke-width" values="0.2;1;4" dur="0.8s" keyTimes="0;0.5;1" repeatCount="indefinite" />
        </path>
    </svg>

    <!-- SECTION_SEARCH -->
    <section id="section4" class="search">
        <p>Введи, чтобы услышать новое мнение</p>
        <search role="search">
            <input id="searchInput" autocomplete="off" placeholder="ПОИСК ..." type="search">
            <img src="./assets/images/iconSearch.svg" alt="iconSearch">
        </search>
    </section>

    <!-- SECTION_FOOTER -->
    <footer>
        <h2>paradigma</h2>
        <p>© 2023 ООО “ПАРАДИГМА”. Все права защищены</p>
        <p id="openModalAccess">управляющим</p>
    </footer>

    <!-- -------------------------------------------------->
    <!--                     MODALS                      -->
    <!-- -------------------------------------------------->

    <div id="modalBackground" class="modal_info__bg">

        <? $podcasts_array = selectPodcasts($PDO);
        foreach ($podcasts_array as $podcast) :
            echo ' <div id="modalInfo' . $podcast['id'] . '" class="modal_info">
            <img data-modalId="modalInfo' . $podcast['id'] . '" id="closeModalInfo" class="closeModalInfo" src="./assets/images/closeModalButton.svg" alt="closeModal">
            <div>
                <img src="./assets/images/imageForInterviewer.jpg" alt="imageInterviewer">
                <h2>' . $podcast['name'] . ' ' . $podcast['surname'] . '</h2>
                <p>' . $podcast['email'] . '</p>
                <p>' . $podcast['country'] . '</p>
            </div>
        </div> ';
        endforeach; ?>

        <div id="modalAccess" class="modal_access">
            <img id="closeModalAccess" src="./assets/images/closeModalButton.svg" alt="closeModal">
            <div>
                <div>
                    <img class="logoAP" src="./assets/images/logoAdminPanel.svg" alt="logoForAdminPanel">
                </div>
                <form action="./app/controllers/accessToThePassword.php" method="POST">
                    <input required placeholder="ПАРОЛЬ ДОСТУПА" name="password" type="password">
                    <button type="submit">получить доступ <img src="./assets/images/arrowDecorate.svg" alt="arrowDecorate"></button>
                </form>
            </div>
        </div>

        <div id="modalForm" class="modal_form">
            <img id="closeModalForm" src="./assets/images/closeModalButton.svg" alt="closeModal">
            <div>
                <div>
                    <img src="./assets/images/logoImage.svg" alt="logoForAdminPanel">
                </div>
                <form action="./app/controllers/createApplicationController.php" method="POST">
                    <input required placeholder="ВАШЕ ИМЯ" type="text" name="name">
                    <input required placeholder="ВАША ФАМИЛИЯ" type="text" name="surname">
                    <input required placeholder="СТРАНА ПРОЖИВАНИЯ" type="text" name="country">
                    <input required placeholder="ВАША ПОЧТА" type="email" name="email">
                    <textarea required placeholder="ТЕМА ДЛЯ ОБСУЖДЕНИЯ" name="description"></textarea>
                    <button type="submit">отправить <img src="./assets/images/arrowDecorate.svg" alt="arrowDecorate"></button>
                    <div>
                        <input required id="checkPolicy" type="checkbox">
                        <label for="checkPolicy">Вы согласны с <a href="#!" target="_blank">политикой</a> сайта</label>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- -------------------------------------------------->
    <!--                     DIALOG BOX                  -->
    <!-- -------------------------------------------------->

    <style>
        .dialog_box {
            font-size: 1.1rem;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
            letter-spacing: 0.16875rem;
            padding: 0 2rem;
            top: 10%;
            position: fixed;
            max-width: 30vw;
            max-height: 4em;
            border: 2px solid var(--text-special);
            background: #0F0F0F;
            box-shadow: 10px 10px var(--text-special);
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
    </style>

    <?
    if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
        $message = $_SESSION['message'];
    ?>
        <div class="dialog_box" id="dialogBox">
            <p><? echo $message; ?></p>
        </div>
        <script>
            let dialogBox = document.getElementById('dialogBox');
            dialogBox.style.display = 'block';
            setTimeout(() => {
                dialogBox.style.opacity = 1;
            }, 500);
            setTimeout(() => {
                dialogBox.style.opacity = 0;
            }, 3000);
            setTimeout(() => {
                dialogBox.style.display = "none";
            }, 4000);
        </script>
        <?
        unset($_SESSION['message']);
        ?>
    <? } ?>

    <!-- CONNECTED MODULES - INSERT GLOBAL -->
    <script type="module" src="./assets/js/modules/slideShow.js"></script>
    <script type="module" src="./assets/js/modules/searchSortModule.js"></script>

    <!-- MAIN SCRIPT.JS -->
    <script type="module" src="./assets/js/main.js"></script>

</body>

</html>