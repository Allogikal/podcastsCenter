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
                <a href="./adminPage01.php">Создать подкаст</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="301" height="20" viewBox="0 0 301 20" fill="none">
                    <path d="M0 1H265.714L300 19" stroke="#9D8568" />
                </svg>
            </li>
            <li>
                <a href="./adminPage02.php">Собеседники</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="301" height="20" viewBox="0 0 301 20" fill="none">
                    <path d="M0 1H265.714L300 19" stroke="#9D8568" />
                </svg>
            </li>
            <li>
                <a href="./adminPage03.php">Заявки</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="301" height="20" viewBox="0 0 301 20" fill="none">
                    <path d="M0 1H265.714L300 19" stroke="#9D8568" />
                </svg>
            </li>
            <li>
                <a href="./adminPage04.php">Подкасты</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="301" height="20" viewBox="0 0 301 20" fill="none">
                    <path d="M0 1H265.714L300 19" stroke="#9D8568" />
                </svg>
            </li>
        </ul>
    </nav>

    <!-- SCREEN WITH TITLE -->
    <section class="screen">
        <h1>Собеседники</h1>
        <div class="screen_interviewers">
            <? $interviewers_array = selectInterviewers($PDO) ?>
            <? if (empty($interviewers_array)) : ?>
                <h1 style="text-align: center;">Нет собеседников.</h1>
            <? else :
                foreach ($interviewers_array as $interviewer) :
                    echo '
                        <div class="screen_interviewers__item">
                        <div>
                            <h3>' . $interviewer['name'] . ' ' . $interviewer['surname'] . '</h3>
                            <p>' . $interviewer['email'] . '</p>
                            <p>' . $interviewer['country'] . '</p>
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
            left: 5%;
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

</body>

</html>