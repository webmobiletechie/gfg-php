
// Given an array A[] and a number x, check for pair in A[] with sum as x
function arrayPairSumX($a) {
  sort($a);
  $i = 0; 
  $n = count($a) - 1;
  while ($i < $n) {
    if ($a[$i] + $a[$n] == $sum) {
      return [$a[$i], $a[$n]];
    } elseif ($a[$i] + $a[$n] < $sum) {
      $i++;
    } else {
      $n--;
    }
  }
  return false;
}
