<?php

function julyOrNot($month) {
  if (strtolower($month) === 'july') {
    echo "It's July, so it can get really hot.<br>";
  }
  else {
    echo "It's not July, so at least we're not in the peak of the heat.<br>";
  }
}
julyOrNot("july");
julyOrNot("JULY");
julyOrNot("July");
julyOrNot("januari");
 ?>
