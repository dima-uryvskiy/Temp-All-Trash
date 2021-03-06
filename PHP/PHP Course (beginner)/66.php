<?php

namespace HexletBasics\Loops\LoopAndConditions2;

// BEGIN
function getEvenNumbersUpTo($num)
{
    $i = 2;
    $result = '';

    while ($i <= $num) {
        $result .= $i . ',';
        $i += 2;
    } 

    return $result;
}
// END


// <?php

// // BEGIN
// function getEvenNumbersUpTo($num)
// {
//     $i = 2;
//     $result = '';

//     while ($i <= $num) {
//         $result .= $i . ',';
//         $i += 2;
//     } 

//     $result[-1] = '.';

//     return $result;
// }
// // END

// print_r(getEvenNumbersUpTo(9));
