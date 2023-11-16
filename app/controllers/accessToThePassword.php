<?
$confirm_password = 'paradigma';
$check_password = $_POST['password'];

if ($confirm_password === $check_password) {
    header('Location: /adminPage01.php');
    $_SESSION['message'] = 'ДОСТУП РАЗРЕШЕН ..';
} else {
    header('Location: /index.php');
    $_SESSION['message'] = 'В ДОСТУПЕ ОТКАЗАНО ..';
}