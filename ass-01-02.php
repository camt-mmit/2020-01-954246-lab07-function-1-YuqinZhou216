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

  $fp = fopen($_SERVER['argv'][1], "r");
  
  fscanf($fp, "%d", $n);
  $cs = [];
  for($i = 0; $i < $n; $i++) {
    fscanf($fp, "%d %d %f", $start, $end, $step);
    $cs = genC($start, $end, $step, $cs);
  }
  
  fclose($fp);
  
  printC2f($cs);
