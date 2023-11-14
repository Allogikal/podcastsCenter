<?
function selectTags($PDO)
{
    try {
        $query = "SELECT * FROM tags";
        $statement = $PDO->PDO->prepare($query);
        $statement->execute();
        $tags_array = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $tags_array;
    } catch (PDOException $e) {
        $_SESSION['message'] = "СБОЙ ПОЛУЧЕНИЯ ДАННЫХ: " . $e->getMessage();
    }
}
