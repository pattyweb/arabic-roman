<?php
class RomanConverter {
    private $romanMap = [
        'I' => 1, 'V' => 5, 'X' => 10, 'L' => 50,
        'C' => 100, 'D' => 500, 'M' => 1000
    ];

    private $valueSymbols = [
        1000 => 'M', 900 => 'CM', 500 => 'D', 400 => 'CD',
        100 => 'C', 90 => 'XC', 50 => 'L', 40 => 'XL',
        10 => 'X', 9 => 'IX', 5 => 'V', 4 => 'IV', 1 => 'I'
    ];

    public function romanToArabic($roman) {
        $roman = strtoupper($roman); // Convert to uppercase
        $result = 0;
        $length = strlen($roman);

        for ($i = 0; $i < $length; $i++) {
            $current = $this->romanMap[$roman[$i]];
            $next = ($i + 1 < $length) ? $this->romanMap[$roman[$i + 1]] : 0;

            if ($current < $next) {
                $result -= $current;
            } else {
                $result += $current;
            }
        }

        return $result;
    }

    public function arabicToRoman($arabic) {
        $result = '';

        foreach ($this->valueSymbols as $value => $symbol) {
            while ($arabic >= $value) {
                $result .= $symbol;
                $arabic -= $value;
            }
        }

        return $result;
    }
}
?>
