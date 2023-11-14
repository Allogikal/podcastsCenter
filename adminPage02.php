<?
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/app/database/dbConnect.php';
$PDO = new PDOConnect();
require $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/selectInterviewersController.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARADIGMA - [ADMIN PANEL]</title>
    <!-- FAVICON.ICO -->
    <link rel="icon" href="./FAVICON.ico" type="image/x-icon">
    <!-- STYLES_CSS FOR ADMIN PANEL -->
    <link rel="stylesheet" href="./assets/css/adminPanel.css" />
</head>

<body>
    <!-- NAVIGATION IN ADMIN PANEL -->
    <nav>
        <div>
            <img src="./assets/images/logoAdminPanel.svg" alt="logotypeAP">
        </div>
        <ul>
            <li>
                <a href="./adminPage01.php">create podcast</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="301" height="20" viewBox="0 0 301 20" fill="none">
                    <path d="M0 1H265.714L300 19" stroke="#9D8568" />
                </svg>
            </li>
            <li>
                <a href="./adminPage02.php">interviewers</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="301" height="20" viewBox="0 0 301 20" fill="none">
                    <path d="M0 1H265.714L300 19" stroke="#9D8568" />
                </svg>
            </li>
            <li>
                <a href="./adminPage03.php">applications</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="301" height="20" viewBox="0 0 301 20" fill="none">
                    <path d="M0 1H265.714L300 19" stroke="#9D8568" />
                </svg>
            </li>
            <li>
                <a href="./adminPage04.php">podcasts</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="301" height="20" viewBox="0 0 301 20" fill="none">
                    <path d="M0 1H265.714L300 19" stroke="#9D8568" />
                </svg>
            </li>
        </ul>
    </nav>

    <!-- SCREEN WITH TITLE -->
    <section class="screen">
        <h1>interviewers</h1>
        <div class="screen_interviewers">
            <? $interviewers_array = selectInterviewers($PDO) ?>
            <? if (empty($interviewers_array)) : ?>
                <h1 style="text-align: center;">Нет активных собеседников.</h1>
                <? else :
                    foreach ($interviewers_array as $interviewer) :
                        echo '
                        <div class="screen_interviewers__item">
                        <div>
                            <h3>'. $interviewer['name'] . ' ' . $interviewer['surname'] .'</h3>
                            <p>'.$interviewer['email'].'</p>
                            <p>'.$interviewer['country'].'</p>
                        </div>
                        <div>
                            <img src="./assets/images/imageForInterviewer.jpg" alt="imageClip">
                        </div>
                    </div>
                    ';
                    endforeach;
                endif; ?>
        </div>
    </section>

    <!-- SCREEN FOR EXIT FROM ADMIN PANEL -->
    <section class="close">
        <a href="./index.php" class="close_bttn">
            <img src="./assets/images/closeModalButton.svg" alt="closeBttn">
            </div>
    </section>
</body>

</html>