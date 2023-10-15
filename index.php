<?
session_start();
require './app/database/dbConnect.php';
$PDO = new PDOConnect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>podcastsCenter</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- LINK ON CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="bg-dark-subtle">
    <div class="container w-25 mt-5">
        <h2 class="text-sm-center mb-4">Загрузи новый подкаст</h1>
            <form class="w-100" action="./app/controllers/createPodcastController.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Название подкаста</label>
                    <input required type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Что-то интересное">
                </div>
                <div class="mb-3">
                    <label for="image_file" class="form-label">Выбери картинку</label>
                    <input class="form-control" name="image_file" type="file" id="image_file" accept="image/*">
                </div>
                <div class="mb-3">
                    <label for="audio_file" class="form-label">Выбери аудиодорожку</label>
                    <input class="form-control" name="audio_file" type="file" id="audio_file" accept="audio/*">
                </div>
                <button type="submit" class="btn btn btn-light">Создай</button>
            </form>
    </div>

    <!-- JS SCRIPT FOR CONNECT BOOTSTRAP-JS FROM CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>