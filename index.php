<?php
  function displayWinner()
    {
        global $names,$players,$scores;
        $max=0;
        
        for($i = 0; $i < count($players); $i++)
        {
            if($scores[$i]>$max)
            {
               $max=$scores[$i];
               
            }
        }
         for($i = 0; $i < count($players); $i++)
        {
            if($scores[$i]==$max)
            {
               echo "<h1>" . $names[$players[$i]]." Wins!" . "<hr/>";
               echo "<br/>";
            }
        }
    }
    
?>
