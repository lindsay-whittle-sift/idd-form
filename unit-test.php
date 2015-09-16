<?php
include('form-function.php');

// Unit test to test the card function to see if it outputs the correct format.

$input = '123456789934759';
echo 'Input: '.$input.'<br />';
echo "Output: " . parse_card_details($input) . '<br></br>';

$input = '1 2 34 5 6 7 8 9 10 11 12 13 14 15 16';
echo 'Input: '.$input.'<br />';
echo "Output: " . parse_card_details($input) . '<br></br>';

$input = '1-222-3333-4444-5555555-6666666-';
echo 'Input: '.$input.'<br />';
echo "Output: " . parse_card_details($input) . '<br></br>';

$input = '1 a 2 b 3 c 2 b c8c8 b 42 ert 5';
echo 'Input: '.$input.'<br />';
echo "Output: " . parse_card_details($input) . '<br></br>';

$input = '123 4  567 23456 45 343 fgh 567 -- 345';
echo 'Input: '.$input.'<br />';
echo "Output: " . parse_card_details($input) . '<br></br>';

?>