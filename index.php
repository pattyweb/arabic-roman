<?php
require_once 'controller/RomanConverterController.php';

$controller = new RomanConverterController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['roman'])) {
        $controller->convertRomanToArabic();
    } elseif (isset($_POST['arabic'])) {
        $controller->convertArabicToRoman();
    }
} else {
    $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : null;
    switch ($url) {
        case 'roman-to-arabic':
            $controller->romanToArabicPage();
            break;
        case 'arabic-to-roman':
            $controller->arabicToRomanPage();
            break;
        default:
            $controller->homePage();
            break;
    }
}
?>
