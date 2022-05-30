<?php
    class Solution {

        /**
         * @param String $s
         * @return Integer
         */
        function lengthOfLastWord($s) {
            $ans=explode(" ",$s);
            $final="";
            for($i=0;$i<count($ans);$i++){
                if($ans[$i]!=""){
                    $final=$ans[$i];
                }
            }
            return strlen($final);
        }
    }
    
?>