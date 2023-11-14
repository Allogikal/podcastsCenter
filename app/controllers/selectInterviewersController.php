<?
function selectInterviewers($PDO)
{
    try {
        $query = "SELECT * FROM interviewers";
        $statement = $PDO->PDO->prepare($query);
        $statement->execute();
        $interviewers_array = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $interviewers_array;
    } catch (PDOException $e) {
        $_SESSION['message'] = "СБОЙ ПОЛУЧЕНИЯ ДАННЫХ: " . $e->getMessage();
    }
}
