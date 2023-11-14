<?
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/app/database/dbConnect.php';
$PDO = new PDOConnect();
require $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/selectInterviewersController.php';
require $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/selectTagsController.php';
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
        <h1>create podcast</h1>
        <div class="screen_form">
            <form method="POST" enctype="multipart/form-data" action="./app/controllers/createPodcastController.php">
                <input required placeholder="TITLE PODCAST" type="text" name="title">
                <textarea required placeholder="DESCRIPTION OF PODCAST" name="description"></textarea>
                <div>
                    <select name="interviewer_id" required id="interviewerSelect">
                        <option>select interviewer..</option>
                        <? $interviewers_array = selectInterviewers($PDO); ?>
                        <? foreach ($interviewers_array as $interviewer) :
                            echo '<option value="' . $interviewer['id'] . '">' . $interviewer['name'] . ' ' . $interviewer['surname'] . '</option>';
                        endforeach; ?>
                    </select>
                    <img src="./assets/images/arrowDecorate.svg" alt="arrowDecorate">
                </div>
                <div>
                    <select name="tag_id" required id="categorySelect">
                        <option>select category..</option>
                        <? $tags_array = selectTags($PDO); ?>
                        <? foreach ($tags_array as $tag) :
                            echo '<option value="' . $tag['id'] . '">' . $tag['title'] . '</option>';
                        endforeach; ?>
                    </select>
                    <img src="./assets/images/arrowDecorate.svg" alt="arrowDecorate">
                </div>
                <input required id="audioInput" name="audio_file" placeholder="SELECT AUDIO FILE" accept="audio/*" type="file">
                <div onclick="document.getElementById('audioInput').click()" id="audioLabel">select audio file</div>
                <input required id="imageInput" name="image_file" placeholder="SELECT IMAGE FILE" accept="image/*" type="file">
                <div onclick="document.getElementById('imageInput').click()" id="imageLabel">select image file</div>
                <button type="submit">upload podcast <img src="./assets/images/arrowDecorate.svg" alt="arrowDecorate"></button>
            </form>
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