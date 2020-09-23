<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
function p($j,$k,$l){
    $m=1;
    for($i=0;$i<$l;$i++) $m*=$j-$k;
    return$m;
}$fin=fopen($_SERVER['argv'][1],'r');
fscanf($fin, "%d", $n);
$s=0;
for($i=1; $i<=$n; $i++){
    fscanf($fin, "%f%f",$base, $y);
    $s=pow($s-$base, $y);
}echo$s;
