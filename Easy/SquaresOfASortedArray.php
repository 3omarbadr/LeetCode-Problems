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
        $arr = [];        
        while($left <= $right)
        {
            $a = $nums[$left] ** 2;
            $b = $nums[$right] ** 2;
            if($a > $b)
            { 
                array_push($arr, $a); 
                $left++;
            }else
            {
                array_push($arr, $b); 
                $right--;
            }
        }
        return array_reverse($arr);
    }
}
