// https://leetcode.com/problems/remove-duplicates-from-sorted-array/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $count = 0 ;
        if (count($nums) == 0) return 0;
        for($i = 0; $i < count($nums); $i++) {
              if($i < count($nums) -1 && $nums[$i] == $nums[$i +1]) continue;
               $nums[$count] = $nums[$i];
                $count++;
       }
       return $count;
    }
}
