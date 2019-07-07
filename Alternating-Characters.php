// Complete the alternatingCharacters function below.
function alternatingCharacters($s) {
  $cnt = 0;
  $s2 = $char = $s[0];
  for ($i=1; $i < strlen($s); $i++) {
    if ($s[$i] == $char) 
        $cnt++;
    else
        $char = $s[$i];
  }
  return $cnt;
}
