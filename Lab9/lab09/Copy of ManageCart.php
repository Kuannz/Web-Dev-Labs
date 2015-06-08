<?php
session_register('Cart');
header('Content-Type: text/xml');
?>
<?php
        $newitem = $_GET["book"];
        $action = $_GET["action"];
        if ($_SESSION["Cart"] != "")
        {
            $MDA = $_SESSION["Cart"];
            if ($action == "Add")
            {
                if ($MDA[$newitem] != "")
                {  
                    $value = $MDA[$newitem] + 1;
                    $MDA[$newitem] = $value;
                    $_SESSION["Cart"] = $MDA; 
                    ECHO (toXml($MDA));    
                }
                else
                {
                    $MDA[$newitem] = "";
                    $_SESSION["Cart"] = $MDA;
                    ECHO (toXml($MDA));
                }
            }
            else
            {
                $MDA= "";
                $_SESSION["Cart"] = "";   
                ECHO (toXml($MDA));
            }
        }
        else
        {
            $MDA[$newitem] = "1";
            $_SESSION["Cart"] = $MDA;
            ECHO (toXml($MDA));
        }
        								
    
    function toXml($MDA)
    {
        $doc = new DomDocument('1.0');
        $cart = $doc->createElement('cart');
        $cart = $doc->appendChild($cart);
        
        foreach ($MDA as $Item => $ItemName)
        {
        
        $book = $doc->createElement('book');
        $book = $cart->appendChild($book);

        $title = $doc->createElement('title'); 
        $title = $book->appendChild($title);   
        $value = $doc->createTextNode($Item);
        $value = $title->appendChild($value);

        $quantity = $doc->createElement('quantity');
        $quantity = $book->appendChild($quantity);
        $value2 = $doc->createTextNode($ItemName);
        $value2 = $quantity->appendChild($value2);
     
      }

        $strXml = $doc->saveXML(); 
        return $strXml;
    }
?>
