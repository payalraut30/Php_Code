<?php 
$xml = new DOMDocument("1.0"); 
$xml->formatOutput = true; 
$bookStore = $xml->createElement("BookStore"); 
$xml->appendChild($bookStore); 
$books = $xml->createElement("Books"); 
$bookStore->appendChild($books);
 function addBook($xml, $books, $title, $publication, $price) 
{ 
    $php = $xml->createElement("PHP"); 
    $titleElement = $xml->createElement("title", $title); 
    $php->appendChild($titleElement); 
    $publicationElement = $xml->createElement("publication", $publication); 
    $php->appendChild($publicationElement); 
    $priceElement = $xml->createElement("price", $price); 
    $php->appendChild($priceElement); 
    $books->appendChild($php); 
} 
addBook($xml, $books, "Programming PHP", "O'RELLY", "800"); AddBook($xml, $books, "Beginners PHP", "WROX", "900"); echo $xml->saveXML(); 
?> 
