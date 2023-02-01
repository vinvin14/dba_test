<?php
    $counter = count($array) - 1;

    for ($i = 0; $i < $counter ; $i ++)
    {
        for ($j = 0; $j < $counter; $j++ )
        {
            if ($array[$j] > $array[$j+1])
            {
                //swap the position of array and put the greater number at the end of array
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        }
    }
    
    for ($k = 0; $k <= $counter; $k++)
    {
        $count = $k+1;
        if ($k == $counter)
        {
            $count = $count-2;
        }
        
        echo $array[$k];

        if ($array[$k] != $array[$count])
        {
            echo '<br>';
        }  
    }
    ?>