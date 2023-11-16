<?
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/app/database/dbConnect.php';
$PDO = new PDOConnect();
require $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/selectPodcastsController.php';

$data = selectPodcasts($PDO);

$searchQuery = $_GET['query'];
$selectedCategory = $_GET['category'];

if ($selectedCategory !== 'all') {
    $data = array_filter($data, function ($item) use ($selectedCategory) {
        return $item['tag_id'] == $selectedCategory;
    });
}

$results = array_filter($data, function ($item) use ($searchQuery) {
    $titleMatch = stripos($item['title'], $searchQuery) !== false;
    $nameMatch = stripos($item['name'], $searchQuery) !== false;
    $surnameMatch = stripos($item['surname'], $searchQuery) !== false;
    return $titleMatch || $nameMatch || $surnameMatch;
});

echo json_encode(array_values($results));