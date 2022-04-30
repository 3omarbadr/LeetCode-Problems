// https://leetcode.com/problems/binary-search/

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $left = 0;
        $right = count($nums) - 1;
        
        while($left <= $right){
            $mid = round($left + ($right - $left) / 2);
            
            if($nums[$mid] == $target) return $mid;
            if($nums[$mid] > $target) $right = $mid - 1;
            else $left = $mid + 1;
        }
        return -1;
    }
}
