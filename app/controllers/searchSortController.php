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
    $titleMatch = stripos(strtolower($item['title']), strtolower($searchQuery)) !== false;
    return $titleMatch;
});

echo json_encode(array_values($results));