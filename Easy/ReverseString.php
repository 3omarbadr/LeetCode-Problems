

<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $n = count($s);
        $left = 0;
        $right = $n -1 ;
        while($left <= $right)
        {
            $temp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $temp;
            $left++;
            $right--;
        }
    }
}