<?php
session_start();
header('Content-Type: text/xml');
?>
<?php
        $newitem = $_GET["book"];
        $action = $_GET["action"];
		$price = $_GET["price"];
		$isbn = $_GET["isbn"];
        //if ($_SESSION["Cart"] != "")
		if (array_key_exists("Cart", $_SESSION))
        {
            $MDA = $_SESSION["Cart"];
            if ($action == "Add")
            {
                if ($MDA[$newitem] != "")
                {  
                    $value = $MDA[$newitem] + 1;
                    $MDA[$newitem] = $value;
                }
                else
                {
                    $MDA[$newitem] = "1";
                }
				$MDA[$price] = $MDA[$newitem] * $price;
            }
            else
            {
                $MDA= "";
            }
        }
        else
        {
            $MDA[$newitem] = "1";
        }
        $_SESSION["Cart"] = $MDA; 
        ECHO (toXml($MDA));         								
    
    function toXml($MDA)
    {
        $doc = new DomDocument('1.0');
        $cart = $doc->createElement('cart');
        $cart = $doc->appendChild($cart);
        
        foreach ($MDA as $a => $b)
        {
        
        $book = $doc->createElement('book');
        $book = $cart->appendChild($book);

        $title = $doc->createElement('title'); 
        $title = $book->appendChild($title);   
        $value = $doc->createTextNode($a);
        $value = $title->appendChild($value);

        $quantity = $doc->createElement('quantity');
        $quantity = $book->appendChild($quantity);
        $value2 = $doc->createTextNode($b);
        $value2 = $quantity->appendChild($value2);
     
      }

        $strXml = $doc->saveXML(); 
        return $strXml;
    }
?>
