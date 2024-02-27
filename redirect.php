<?
include __DIR__ . './functions.php';
include __DIR__ . './variables.php';

session_start();
if (isset($_GET['pass_length'])) {
    $_SESSION['generated_pass'] = generateRandomPass($_GET['pass_length'], $letters, $symbols, $numbers);
};
header('Location: ./landing.php');
