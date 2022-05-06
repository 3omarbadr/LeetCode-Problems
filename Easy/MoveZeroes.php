// https://leetcode.com/problems/move-zeroes/

<?php
class Solution {

/**
 * @param Integer[] $nums
 * @return NULL
 */
function moveZeroes(&$nums) {
    $p = 0;
    $n = count($nums);
    for($i = 0; $i < $n; $i++)
    {
        if($nums[$i]== 0)
        {
            $p++;
        }
        elseif($p > 0)
        {
            $nums[$i - $p] = $nums[$i];
            $nums[$i] = 0;
        }
    }
}
}