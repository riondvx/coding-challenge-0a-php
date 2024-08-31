<?php

function isPalindrome($s) {
    $cleanedString = strtolower(str_replace(' ', '', $s));
    $reversedString = strrev($cleanedString);

    if ($cleanedString === $reversedString) {
        return "Palindrome";
    } else {
        return "Bukan Palindrome";
    }
}

echo isPalindrome("kakak") . "\n";
echo isPalindrome("halo dunia") . "\n";

?>
