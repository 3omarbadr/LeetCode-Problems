//https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/

<?php
class Solution {

/**
 * @param Integer[] $numbers
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($numbers, $target) {
    $left = 0;
    $right = count($numbers) - 1;
    while($left < $right)
    {
        $sum = $numbers[$left] + $numbers[$right];
        if($sum == $target)
        {
            $result = [$left + 1 , $right + 1];
            return $result;
        }elseif($sum < $target)
        {
            $left++;
        }else
        {
            $right--;
        }
    }
}
}
