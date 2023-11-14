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
    <title>PARADIGMA - Modern Podcasts Center</title>
    <!-- FAVICON.ICO -->
    <link rel="icon" href="./FAVICON.ico" type="image/x-icon">
    <!-- STYLES_CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <!-- SECTION_HEADER -->
    <header>
        <nav>
            <ul>
                <li><a class="aElement" href="#section1">info</a></li>
                <li><a class="aElement" href="#section2">about</a></li>
                <li><img src="./assets/images/logoImage.svg" alt="logoImage"></li>
                <li><a class="aElement" href="#section3">podcasts</a></li>
                <li><a class="aElement" href="#section4">search<sub>CTRL+F</sub></a></li>
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
            <h1>Lorem ipsum dolor sit <span>amet</span>, consectetur</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ......</p>
            <button id="openModalForm">Submit application <img src="./assets/images/arrowDecorate.svg" alt="arrowDecorate"></button>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ......</p>
            </div>
            <div>
                <h1>Lorem <span>ipsum</span> dolor sit amet </h1>
            </div>
        </div>
        <div class="about_first fade">
            <div>
                <img src="./assets/images/imageClip.jpg" alt="imageDeveloper">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ......</p>
            </div>
            <div>
                <h1>Lorem <span>ipsum</span> dolor sit amet </h1>
            </div>
        </div>
        <div class="about_first fade">
            <div>
                <img src="./assets/images/imageClip.jpg" alt="imageDeveloper">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ......</p>
            </div>
            <div>
                <h1>Lorem <span>ipsum</span> dolor sit amet </h1>
            </div>
        </div>
        <div class="about_first fade">
            <div>
                <img src="./assets/images/imageClip.jpg" alt="imageDeveloper">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ......</p>
            </div>
            <div>
                <h1>Lorem <span>ipsum</span> dolor sit amet </h1>
            </div>
        </div>
        <div class="about_first fade">
            <div>
                <img src="./assets/images/imageClip.jpg" alt="imageDeveloper">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ......</p>
            </div>
            <div>
                <h1>Lorem <span>ipsum</span> dolor sit amet </h1>
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
            <h1>Lorem ipsum dolor sit</h1>
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
                <h1>Lorem ipsum dolor sit <span>amet elit</span></h1>
                <img src="./assets/images/lineDecorate.svg" alt="lineDecorate">
            </div>
            <div>
                <select id="categorySelect">
                    <option>sort by category..</option>
                    <? $tags_array = selectTags($PDO); ?>
                    <? foreach ($tags_array as $tag) :
                        echo '<option value="' . $tag['id'] . '">' . $tag['title'] . '</option>';
                    endforeach; ?>
                </select>
                <img src="./assets/images/arrowDecorate.svg" alt="arrowDecorate">
            </div>
        </div>
        <div class="podcasts_body">

            <? $podcasts_array = selectPodcasts($PDO);
            $i = 0; ?>
            <? foreach ($podcasts_array as $podcast) :
                if ($i % 2 == 0) {
                    echo '
                    <div class="podcasts_body__item">
                    <div>
                        <h2>' . $podcast['title'] . '</h2>
                        <p data-modalId="modalInfo' . $podcast['created_at'] . '" class="openModalInfo">@' . $podcast['name'] . ' ' . $podcast['surname'] . '</p>
                        <p>' . $podcast['description'] . '</p>
                        <p>' . date('F j, Y', $podcast['created_at']) . '</p>
                    </div>
                    <div class="screen_podcasts__item_target">
                        <img class="imageClip" src="' . $podcast['image_file'] . '" alt="imagePodcast">
                        <div>
                            <!-- BUTTON FOR PLAY OR PAUSE OF CLICK() -->
                            <svg class="screen_podcasts__item_play" width="46" height="52" viewBox="0 0 46 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="playPodcast" filter="url(#filter0_d_5_259)">
                                    <path d="M42 22L4.5 43.6506L4.5 0.349365L42 22Z" fill="#9D8568" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_5_259" x="0.5" y="0.349365" width="45.5" height="51.3013" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="4" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5_259" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5_259" result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                            <!-- <svg class="screen_podcasts__item_pause" width="41" height="30" viewBox="0 0 41 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0" y="10" width="5" height="10" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="5; 20; 5" dur="1s" keyTimes="0;0.5;1" repeatCount="indefinite" />
                                </rect>
                                <rect x="9" y="5" width="5" height="20" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="10; 30; 10" dur="1s" keyTimes="0;0.5;1" begin="0.1s" repeatCount="indefinite" />
                                </rect>
                                <rect x="18" y="0" width="5" height="30" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="20; 40; 20" dur="1s" keyTimes="0;0.5;1" begin="0.2s" repeatCount="indefinite" />
                                </rect>
                                <rect x="27" y="5" width="5" height="20" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="10; 30; 10" dur="1s" keyTimes="0;0.5;1" begin="0.3s" repeatCount="indefinite" />
                                </rect>
                                <rect x="36" y="10" width="5" height="10" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="5; 20; 5" dur="1s" keyTimes="0;0.5;1" begin="0.4s" repeatCount="indefinite" />
                                </rect>
                            </svg> -->
                        </div>
                    </div>
                    </div>
                    ';
                } else {
                    echo '
                    <div class="podcasts_body__item reverse">
                    <div>
                        <h2>' . $podcast['title'] . '</h2>
                        <p data-modalId="modalInfo' . $podcast['created_at'] . '" class="openModalInfo">@' . $podcast['name'] . ' ' . $podcast['surname'] . '</p>
                        <p>' . $podcast['description'] . '</p>
                        <p>' . date('F j, Y', $podcast['created_at']) . '</p>
                    </div>
                    <div class="screen_podcasts__item_target">
                        <img class="imageClip" src="' . $podcast['image_file'] . '" alt="imagePodcast">
                        <div>
                            <!-- BUTTON FOR PLAY OR PAUSE OF CLICK() -->
                            <svg class="screen_podcasts__item_play" width="46" height="52" viewBox="0 0 46 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="playPodcast" filter="url(#filter0_d_5_259)">
                                    <path d="M42 22L4.5 43.6506L4.5 0.349365L42 22Z" fill="#9D8568" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_5_259" x="0.5" y="0.349365" width="45.5" height="51.3013" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="4" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5_259" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5_259" result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                            <!-- <svg class="screen_podcasts__item_pause" width="41" height="30" viewBox="0 0 41 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0" y="10" width="5" height="10" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="5; 20; 5" dur="1s" keyTimes="0;0.5;1" repeatCount="indefinite" />
                                </rect>
                                <rect x="9" y="5" width="5" height="20" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="10; 30; 10" dur="1s" keyTimes="0;0.5;1" begin="0.1s" repeatCount="indefinite" />
                                </rect>
                                <rect x="18" y="0" width="5" height="30" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="20; 40; 20" dur="1s" keyTimes="0;0.5;1" begin="0.2s" repeatCount="indefinite" />
                                </rect>
                                <rect x="27" y="5" width="5" height="20" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="10; 30; 10" dur="1s" keyTimes="0;0.5;1" begin="0.3s" repeatCount="indefinite" />
                                </rect>
                                <rect x="36" y="10" width="5" height="10" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="5; 20; 5" dur="1s" keyTimes="0;0.5;1" begin="0.4s" repeatCount="indefinite" />
                                </rect>
                            </svg> -->
                        </div>
                    </div>
                    </div>
                    ';
                }
                $i++;
            endforeach; ?>

        </div>
    </section>

    <!-- VECTOR_DECORATE_SEARCH -->
    <svg class="svg_decorate_search" xmlns="http://www.w3.org/2000/svg" width="807" height="54" viewBox="0 0 807 54" fill="none">
        <path id="pulsePath" d="M0 25.5H77.5L91.5 9.5L100 52L108.5 25.5H177.5L183 9.5L197 34L204.5 17L228 25.5H267.5L282 2V43.5L304.5 25.5H332.5H378L386.5 2L392 43.5L400.5 25.5H463.5L477.5 2L488 43.5L497.5 25.5H556H606.5L622 9.5V52L637 25.5H675.5L690.5 9.5L702 25.5H729V43.5L747 25.5H773.5H806.5" stroke="#9A9A9A">
            <animate attributeName="stroke-width" values="0.2;1;4" dur="0.8s" keyTimes="0;0.5;1" repeatCount="indefinite" />
        </path>
    </svg>

    <!-- SECTION_SEARCH -->
    <section id="section4" class="search">
        <p>Enter a phrase to search for a podcast or interviewer</p>
        <search role="search">
            <input placeholder="SEARCH ..." type="search">
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

        <? foreach ($podcasts_array as $podcast) :
        echo ' <div id="modalInfo'.$podcast['created_at'].'" class="modal_info">
            <img data-modalId="modalInfo' . $podcast['created_at'] . '" id="closeModalInfo" class="closeModalInfo" src="./assets/images/closeModalButton.svg" alt="closeModal">
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
                    <input required placeholder="ACCESS PASSWORD" name="password" type="password">
                    <button type="submit">get access <img src="./assets/images/arrowDecorate.svg" alt="arrowDecorate"></button>
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
                    <input required placeholder="YOUR NAME" type="text" name="name">
                    <input required placeholder="YOUR SURNAME" type="text" name="surname">
                    <input required placeholder="YOUR COUNTRY" type="text" name="country">
                    <input required placeholder="YOUR EMAIL" type="email" name="email">
                    <textarea required placeholder="TOPIC FOR DISCUSSION" name="description"></textarea>
                    <button type="submit">submit <img src="./assets/images/arrowDecorate.svg" alt="arrowDecorate"></button>
                    <div>
                        <input required id="checkPolicy" type="checkbox">
                        <label for="checkPolicy">You agree to the site's <a href="#!" target="_blank">privacy policy</a></label>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- MAIN SCRIPT.JS -->
    <script type="module" src="./assets/js/main.js"></script>
    <script type="module" src="./assets/js/modules/slideShow.js"></script>
</body>

</html>