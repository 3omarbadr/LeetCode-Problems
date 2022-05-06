// https://leetcode.com/problems/rotate-array/

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $k %= count($nums);
        $this->reverse($nums, 0, count($nums) - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, count($nums) - 1);
    }
    
    function reverse(&$nums, $left, $right)
    {
        while($left < $right)
        {
            $temp = $nums[$left];
            $nums[$left] = $nums[$right];
            $nums[$right] = $temp;
            $left++;
            $right--;
        }
    }
}
