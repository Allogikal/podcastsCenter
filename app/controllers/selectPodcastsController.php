<?
function selectPodcasts($PDO) {
    try {
        $query = "SELECT
            podcasts.id AS podcast_id,
            podcasts.title,
            podcasts.image_file,
            podcasts.audio_file,
            podcasts.description,
            podcasts.created_at,
            interviewers.id AS interviewer_id,
            interviewers.name,
            interviewers.surname,
            interviewers.country,
            interviewers.email
        FROM
            podcasts
        LEFT JOIN
            podcasts_interviewers ON podcasts.id = podcasts_interviewers.id
        LEFT JOIN
            interviewers ON podcasts_interviewers.interviewer_id = interviewers.id;";
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