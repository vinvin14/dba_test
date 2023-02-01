<?php
  $array = [1,2,3,4,5,6];
  $count = count($array);
  for ($i = 0; $i < $count; $i++)
  {
       echo str_repeat($array[$i],$array[$i]).'<br>';
  }

?>