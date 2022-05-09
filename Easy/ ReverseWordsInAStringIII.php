// https://leetcode.com/problems/reverse-words-in-a-string-iii/

<?php

class Solution {
    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $st = str_split($s);
        $i = 0;
        for($j = 0; $j < count($st); $j++){
            if($st[$j] == ' ')
            {
                $st = $this->reverse($st, $i, $j - 1);
                $i = $j + 1;
            }
        }
        $st =  $this->reverse($st, $i, $j - 1);
        return implode($st) ;
        
    }
    
    function reverse(array $s, $l, $r)
    {
        while($l < $r)
        {            
            $temp = $s[$l];
            $s[$l] = $s[$r];
            $s[$r] = $temp;
            $l++;
            $r--;
        }
        return $s;
    }
}

