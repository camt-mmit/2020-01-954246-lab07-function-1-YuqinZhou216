<?php
  // START: shared funcitons
  function c2f($c) {
    return ($c * (9/5)) + 32;
  }
  
  function printC2f($cs) {
    printf("Celsius Fahrenheit\n");
    foreach($cs as $c) {
      printf("%7.2f %10.2f\n", $c, c2f($c));
    }
  }

  function genC($start, $end, $step, $cs) {
    for($i = $start; $i <= $end; $i += $step) {
      $cs[] = $i;
    }

    return $cs;
  }
  // END: shared functions

  $start = (int)$_SERVER['argv'][1];
  $end = (int)$_SERVER['argv'][2];
  $step = (float)$_SERVER['argv'][3];
  
  $cs = [];
  $cs = genC($start, $end, $step, $cs);
  printC2f($cs);
