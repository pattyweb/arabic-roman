<?php
require_once 'model/RomanConverter.php';

class RomanConverterController {
    private $converter;

    public function __construct() {
        $this->converter = new RomanConverter();
    }

    public function homePage() {
        include 'view/home.php';
    }

    public function romanToArabicPage() {
        include 'view/roman_to_arabic.php';
    }

    public function arabicToRomanPage() {
        include 'view/arabic_to_roman.php';
    }

    public function convertRomanToArabic() {
        $roman = $_POST['roman'];
        $arabic = $this->converter->romanToArabic($roman);
        include 'view/roman_to_arabic.php';
    }

    public function convertArabicToRoman() {
        $arabic = $_POST['arabic'];
        $roman = $this->converter->arabicToRoman($arabic);
        include 'view/arabic_to_roman.php';
    }
}
?>

