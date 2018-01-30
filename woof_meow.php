<?php
for ($i=1; $i<101; $i++) {
  $woof_meow = "";
  if ($i % 3 === 0 || $i % 5 === 0) {
    if ($i % 3 === 0) {
      $woof_meow = $woof_meow . "Woof";
    }
    if ($i % 5 === 0) {
      $woof_meow = $woof_meow . "Meow";
    }
    echo $woof_meow . " ";
  }
  else {
    echo $i . " ";
  }
}
?>
