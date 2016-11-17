<?php
function getTestData(){     //定义一个数组,用来ajaxReturn
    $data = array();
    for($i=0;$i<10;$i++){
        $data[$i]['name']='user-'.$i;
        $data[$i]['age']=rand(18,90);
    }
    return $data;
}