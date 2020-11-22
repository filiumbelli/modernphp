<?php

function Generators(){
    yield "value1";
    yield "value2";
    yield "value3";
}


foreach(Generators() as $val){
    echo $val, PHP_EOL;
}

function makeRange($length){
    for($i=0;$i<$length;$i++){
        yield $i;
    }
}

foreach (makeRange(1000) as $i){
    echo $i, PHP_EOL;
}



