<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
        <?php
        
        
        
        
        
        
        
        function mapNumberToCard($num)
        {
            $cardValue = ($num % 13) + 1;
            $cardSuit =  floor($num / 13);
            $suitStr = "";
            
            switch($cardSuit)
            {
                case 0:
                    $suitStr = "clubs";
                    break;
                case 1:
                    $suitStr = "diamonds";
                    break;
                case 2:
                    $suitStr = "hearts";
                    break;
                case 3:
                    $suitStr = "spades";
                    break;
            }
            
            $card = array(
                'num' => $cardValue,
                'suit' => $cardSuit,
                'imgURL' => "./cards/".$suitStr."/".$cardValue.".png"
                );
                
            return $card;
        }
        
        function generateDeck()
        {
            $cards = array();
            
            for($i = 0; $i < 52; $i++)
            {
                array_push($cards,$i);
            }
            shuffle($cards);
            
            return $cards;
        }
        
        function printDeck($deck)
        {
            for($i = 0; $i < count($deck); $i++)
            {
                $cardNum = $deck[$i];
                $card = mapNumberToCard($cardNum);
                echo "imgURL: ".$card["imgURL"]."<br>";
            }
        }
        
        function generateHand($deck)
        {
            $hand = array();
            
            for($i = 0; $i < 3; $i++)
            {
                $cardNum = array_pop($deck);
                $card = mapNumberToCard($cardNum);
                array_push($hand, $card);
            }
            return $hand;
        }
        $deck = generateDeck();
        //printDeck($deck);
        
        
    
        $person = array(
            "name" => "Abraham", 
            "profilePicUrl" => "./profile_pics/abraham.png",
            "cards" => generateHand($deck)
            );
        
            function displayPerson($person)
            {
                echo "<img src='".$person["profilePicUrl"]."'>";    
                
                for($i = 0; $i < count($person["cards"]); $i++)
                {
                    $card = $person["cards"][$i];
                
                    echo "<img src='".$card["imgURL"]."'>";
                }
                
                echo calculateHandValue($person["cards"]);
            }
        
            function calculateHandValue($cards)
            {
                $sum = 0;
            
                foreach($cards as $card)
                {
                    $sum += $card["num"];
                }
                return $sum;
            }
            displayPerson($person);
            
            
        ?>
    </body>
</html>