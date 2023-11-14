<?
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/app/database/dbConnect.php';
$PDO = new PDOConnect();

$title = $_POST['title'];
$description = $_POST['description'];
$tag_id = $_POST['tag_id'];
$interviewer_id = $_POST['interviewer_id'];
$image_path = '/uploads/images/' . time() . $_FILES['image_file']['name'];
$audio_path = '/uploads/audio/' . time() . $_FILES['audio_file']['name'];
$currentDateTime = new DateTime();
$created_at = $currentDateTime->getTimestamp();

if (!move_uploaded_file($_FILES['image_file']['tmp_name'], '../../' . $image_path) || !move_uploaded_file($_FILES['audio_file']['tmp_name'], '../../' . $audio_path)) {
    $_SESSION['message'] = 'НЕУДАЧА!';
}
else {
    try {
        $PDO->PDO->beginTransaction();
        $query1 = "INSERT INTO podcasts VALUES(NULL, '$title', '$image_path', '$audio_path', '$description', :timestamp)";
        $statement1 = $PDO->PDO->prepare($query1);
        $statement1->bindParam(':timestamp', $created_at, PDO::PARAM_INT);
        $statement1->execute();
        $query2 = "INSERT INTO podcasts_interviewers VALUES (NULL, '$interviewer_id')";
        $statement2 = $PDO->PDO->prepare($query2);
        $statement2->execute();
        $query3 = "INSERT INTO podcasts_tags VALUES (NULL, '$tag_id')";
        $statement3 = $PDO->PDO->prepare($query3);
        $statement3->execute();
        $PDO->PDO->commit();
        $_SESSION['message'] = 'НОВЫЙ ПОДКАСТ!';
    } catch (PDOException $e) {
        $PDO->PDO->rollBack();
        $_SESSION['message'] = "СБОЙ ТРАНЗАКЦИИ: " . $e->getMessage();
    } finally {
        $PDO->PDO = null;
    }
}

echo $_SESSION['message'];