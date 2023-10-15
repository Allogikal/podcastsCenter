<?
session_start();
require '../database/dbConnect.php';
$PDO = new PDOConnect();

$title = $_POST['title'];
$image_path = 'assets/uploads/images' . time() . $_FILES['image_file']['name'];
$audio_path = 'assets/uploads/audio' . time() . $_FILES['audio_file']['name'];

if (!move_uploaded_file($_FILES['image_file']['tmp_name'], '../../' . $image_path)) {
    $_SESSION['message'] = 'НЕУДАЧА!';
}
else {
    try {
        $query = "INSERT INTO podcasts VALUES(NULL, '$title', '$image_path', '$audio_path')";
        $statement = $PDO->PDO->prepare($query);
        $statement->execute();
        echo "НОВЫЙ ПОДКАСТ";
    } catch (PDOException $e) {
        echo "ИСКЛЮЧЕНИЕ В БАЗЕ ДАННЫХ: " . $e->getMessage();
    };
}