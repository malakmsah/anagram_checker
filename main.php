<?php
function getReptitions($string)
{
    $repeats1 = [];
    $string = str_split($string);
    foreach ($string as $index => $character)
    {
        if (!empty($repeats1[$character]))
        {
            $repeats1[$character] += 1;
        }
        else
        {

            $repeats1[$character] = 1;
        }
    }
    return $repeats1;
}

function checkAnagram($string1, $string2)
{
    $repeats1 = getReptitions($string1);
    $repeats2 = getReptitions($string2);

    foreach ($repeats1 as $character => $repeats)
    {
        if (isset($repeats2[$character]) && $repeats != $repeats2[$character]) // same character different repeats
        
        {
            return false;
        }

        if (isset($repeats2[$character]) && $repeats == $repeats2[$character])
        {
            unset($repeats1[$character]);
            unset($repeats2[$character]);
        }
    }

    if (empty($repeats1) && empty($repeats2))
    {
        return true;
    }
    return false;
}

$isAnagram = checkAnagram('dadg', 'add');
echo "Is Anagram? " . ($isAnagram == true ? "Yes" : "No") . PHP_EOL;

$isAnagram = checkAnagram('dad', 'add');
echo "Is Anagram? " . ($isAnagram == true ? "Yes" : "No") . PHP_EOL;;
?>
