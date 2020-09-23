<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
    function p($a,$b,$c,$d,$p,$q,$r) {
        $pp=1;
        $ab=$a+$b;
        for($i = 0; $i < $p; $i++) $pp *=$ab ;
        $qq=1;
        $cd=$c+$d;
        for($j = 0; $j < $q; $j++) $qq *=$cd ;
        $rr=1;
        $abcd=$pp+$qq;
        for($x = 0; $x < $r; $x++) $rr *=$abcd ;
        return $rr;
    }

    $a1=$argv[1];
    $b1=$argv[2];
    $c1=$argv[3];
    $d1=$argv[4];
    $p1=$argv[5];
    $q1=$argv[6];
    $r1=$argv[7];
   echo"$a1,$b1,$c1,$d1,$p1,$q1,$r1\n";
   $term=p($a1,$b1,$c1,$d1,$p1,$q1,$r1);
   printf("%d",$term);

    
    
 
