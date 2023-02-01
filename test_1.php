<?php
   $array  = [5, 1, 4, 6, 7, 3, 5, 7, 3];
   $count = count($array) - 1;

   for ($i = 0; $i < $count; $i++)
   {
       for ($j = $i + 1; $j < $count; $j++)
       {
           if ($array[$i] == $array[$j])
           {
               echo $array[$j]. ' ';
           }
       }
   }
    ?>