<?
session_start();
include __DIR__ . './functions.php';
include __DIR__ . './variables.php';

if (isset($_GET['allow_letters'])) {
    $array_numbers[] = $_GET['allow_letters'];
};

if (isset($_GET['allow_numbers'])) {
    $array_numbers[] = $_GET['allow_numbers'];
};

if (isset($_GET['allow_symbols'])) {
    $array_numbers[] = $_GET['allow_symbols'];
};




if (isset($_GET['pass_length'])) {
    $_SESSION['generated_pass'] = generateRandomPass($_GET['pass_length'], $letters, $symbols, $numbers, $_GET['allow_repetition'], $array_numbers);
};


header('Location: ./landing.php');
