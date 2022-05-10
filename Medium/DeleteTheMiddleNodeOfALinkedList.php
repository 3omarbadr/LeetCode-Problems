// https://leetcode.com/problems/delete-the-middle-node-of-a-linked-list/

<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteMiddle($head) {
        $prev = $head;
        $fast = $head;
        $slow = $head;
        if($head == null || $head->next == null) return null;
        while($fast && $fast->next)
        {
            $prev = $slow;
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        $prev->next = $slow->next;
        return $head;
    }
}