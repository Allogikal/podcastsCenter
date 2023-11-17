<?
$confirm_password = 'paradigma';
$check_password = $_POST['password'];

if ($confirm_password === $check_password) {
    $_SESSION['message'] = 'ДОСТУП РАЗРЕШЕН ..';
    header('Location: /adminPage01.php');
} else {
    $_SESSION['message'] = 'В ДОСТУПЕ ОТКАЗАНО ..';
    header('Location: /index.php');
}