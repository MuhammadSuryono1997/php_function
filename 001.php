<?php 
function isPalindrome($kalimat) {
    $kalimat = str_replace(' ', '', $kalimat);
    $kalimat = preg_replace('/[^A-Za-z0-9\-]/', '', $kalimat);
    $kalimat = strtolower($kalimat);
    $balik = strrev($kalimat);

    if ($kalimat == $balik) {
        echo "\nPalindrome";
    } 
    else {
        echo "\nBukan Palindrome";
    }
}

isPalindrome("Ibu ratna antar ubi");
isPalindrome("Kasur ini rusak");
isPalindrome("A nut for a jar of tuna.");
isPalindrome("Borrow or rob?");
isPalindrome("Yo, banana boy!");
isPalindrome("UFO tofu?");

 ?>