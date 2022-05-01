// https://leetcode.com/problems/first-bad-version/

<?php


/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        $left = 0;
        $right = $n;
        while($left <= $right)
        {
            $mid = round($left + ($right - $left) / 2);
            if($this->isBadVersion($mid) == true) $right = $mid - 1;
            else  $left = $mid + 1 ;
        }
        return $left;
    }
}
