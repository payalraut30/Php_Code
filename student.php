<?php 
$dom = new DOMDocument();
 $dom->load('student.xml'); 
 echo "<h2>XML Document Output:</h2>";
  echo "<pre>" . htmlspecialchars($dom->saveXML()) . "</pre>"; 
$xml = simplexml_load_file('student.xml');
 echo "<h2>Student Names:</h2>"; 
 echo "<ul>"; 
 foreach ($xml->student as $student)
  {    
     echo "<li>{$student->name}</li>"; 
} 
echo "</ul>"; 
?> 
 

