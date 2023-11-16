<?
function selectPodcasts($PDO) {
    try {
        $query = "SELECT * FROM podcasts
        LEFT JOIN
            podcasts_interviewers ON podcasts.id = podcasts_interviewers.id
        LEFT JOIN
            interviewers ON podcasts_interviewers.interviewer_id = interviewers.id
        LEFT JOIN
            podcasts_tags ON podcasts.id = podcasts_tags.id;";
        $statement = $PDO->PDO->prepare($query);
        $statement->execute();
        $podcasts_array = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $podcasts_array;
    } catch (PDOException $e) {
        $_SESSION['message'] = "СБОЙ ПОЛУЧЕНИЯ ДАННЫХ: " . $e->getMessage();
    } finally {
        $PDO->PDO = null;
    }
}