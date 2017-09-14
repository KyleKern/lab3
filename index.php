<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
        <?php
            
            $person = array(
                "name" =>"Abraham", 
                "imgUrl" => "./profile.pics/abraham.png"
                "cards" => array(
                    array(
                        "suit" => "hearts",
                        "value" => "4"
                        ),
                    array(
                        "suits" => "clubs",
                        "value" => "10"
                        )
                    )
                );
                
        function displayPerson($person)
        {
            echo "<img src='".$person["profilePicUrl"]."'>";    
                
            for($i=0;$i<$person["cards"].length;$i++)
            {
                $cards = $person["cards"][$i];
                
                // 
                $imgURL = "./cards/".$card["suit"]."/".$card["value"].".png";
                
                //
                echo "<img src='".$imgURL."'>";
            }
            echo calculateHandValue($person["cards"]);
        }
        
        function calculateHandValue($cards)
        {
            $sum = 0;
            
            foreach($cards as $cards)
            {
                $sum += $cards["value"];
            }
            return $sum;
        }
        
        displ
        ?>
    </body>
</html>