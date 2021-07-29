<?php
function getNumberOfOccurences(int $number, int $needle)
{
    $count = 0;

    $digit1 = $number % 10; // 525 => 5 | 2 | 5
    $nextNumber = (int) $number / 10; // 52 | 5  | 0
    if($digit1 < 10 )
    {
        if($digit1 == $needle){
            $count +=1 ; // 1 | 1
        }
    }
    if($nextNumber >= 1){
        
        $count +=  getNumberOfOccurences($nextNumber, $needle); // 52 | 5
    }
    return $count; 
      
}

echo getNumberOfOccurences(525, 5). PHP_EOL;
echo getNumberOfOccurences(52434252345255, 5). PHP_EOL;
echo getNumberOfOccurences(432, 5). PHP_EOL;
echo getNumberOfOccurences(432, 2). PHP_EOL;
?>
