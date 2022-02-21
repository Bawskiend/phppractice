<?php
    function func($str){
        $reg = '#[0-9]#';
        echo preg_match_all($reg,$str);
    }
    func('1111');
?> 
<meta charset="UTF-8">
