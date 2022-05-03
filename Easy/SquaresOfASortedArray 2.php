// https://leetcode.com/problems/squares-of-a-sorted-array/

<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        $left = 0;
        $right = count($nums) - 1;
        // $arr = [];
        for($i = count($nums) - 1; $i >= 0; $i--)
        {
            if(abs($nums[$right]) > abs($nums[$left])) $arr[$i] = $nums[$right] * $nums[$right--]; 
            else $arr[$i] = $nums[$left] * $nums[$left++]; 
        }
        sort($arr);
        return $arr;
    }
}
