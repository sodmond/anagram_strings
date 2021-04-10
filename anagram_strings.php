<?php
/*
Given two strings s and t, write a function call solution to determine if t is an anagram of s.

Example

solution(‘anagram’, ‘nagrama’) => true

solution(‘car’, ‘cat’) => false
*/
function solution($s, $t) {
    $sNew = strtolower($s);
    $tNew = strtolower($t);
    $sArr = str_split($sNew);
    $tArr = str_split($tNew);
    $diff = array_diff($sArr, $tArr);
    $sConv = "";
    foreach (count_chars($sNew, 1) as $val) {
      $sConv .= $val;
    }
    $tConv = "";
    foreach (count_chars($tNew, 1) as $val) {
      $tConv .= $val;
    }
    if ($sConv != $tConv) {
      return false;
    }
    if (!empty($diff)) {
      return false;
    }
    return true;
}

// Standard input 1 box content is the first argument while standard input 2 is the second
$input1 = fgets(STDIN);
$input2 = fgets(STDIN);

echo((boolean)solution($input1, $input2));