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
        $nums = array_merge(array_slice($nums, count($nums) - $k, $k), array_slice($nums, 0, count($nums) - $k));
        return $nums;
    }
}
