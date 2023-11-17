<?
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/app/database/dbConnect.php';
$PDO = new PDOConnect();

$id = $_POST['id'];

try {
    $PDO->PDO->beginTransaction();

    $query_search = "SELECT * FROM applications WHERE id = '$id';";
    $statement = $PDO->PDO->prepare($query_search);
    $statement->execute();

    $search_result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $name = $search_result[0]['name'];
    $surname = $search_result[0]['surname'];
    $country = $search_result[0]['country'];
    $email = $search_result[0]['email'];

    $query_insert = "INSERT INTO interviewers VALUES (NULL, '$name', '$surname', '$country', '$email')";
    $statement = $PDO->PDO->prepare($query_insert);
    $statement->execute();

    $queryDelete = "DELETE FROM applications WHERE id = '$id'";
    $statement = $PDO->PDO->prepare($queryDelete);
    $statement->execute();

    $PDO->PDO->commit();
    $_SESSION['message'] = 'НОВЫЙ СОБЕСЕДНИК!';
    header('Location: /adminPage02.php');
} catch (PDOException $e) {
    $PDO->PDO->rollBack();
    $_SESSION['message'] = "СБОЙ В СИСТЕМЕ!";
    header('Location: /adminPage03.php');
} finally {
    $PDO->PDO = null;
}