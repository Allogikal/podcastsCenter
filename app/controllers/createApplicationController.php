<?
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/app/database/dbConnect.php';
$PDO = new PDOConnect();

$name = $_POST['name'];
$surname = $_POST['surname'];
$country = $_POST['country'];
$email = $_POST['email'];
$description = $_POST['description'];

try {
    $query = "INSERT INTO applications VALUES(NULL, '$name', '$surname', '$country', '$email', '$description')";
    $statement = $PDO->PDO->prepare($query);
    $statement->execute();
    $_SESSION['message'] = 'ЗАЯВКА ОТПРАВЛЕНА!';
    header('Location: /index.php');
} catch (PDOException $e) {
    $_SESSION['message'] = "ЗАЯВКА НЕ ОТПРАВЛЕНА!";
} finally {
    $PDO->PDO = null;
}