<?
function selectApplications($PDO) {
    try {
        $query = "SELECT * FROM applications";
        $statement = $PDO->PDO->prepare($query);
        $statement->execute();
        $applications_array = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $applications_array;
    } catch (PDOException $e) {
        $_SESSION['message'] = "СБОЙ ПОЛУЧЕНИЯ ДАННЫХ: " . $e->getMessage();
    } finally {
        $PDO->PDO = null;
    }
}