<?php
 if (isset($_POST['submit']) && !empty($_POST['subjects']))
 {    
 echo "<h2>Selected Subjects:</h2>";  
   echo "<ul>";    
 foreach ($_POST['subjects'] as $subject) {   
      echo "<li>" . htmlspecialchars($subject) . "</li>"; 
    } 
    echo "</ul>";  
   echo '<br><a href="index.php">Go Back</a>'; 
} 
else 
{ 
    echo "<h2>No subjects selected!</h2>";     echo '<br><a href="index.php">Go Back</a>'; 
} 
?>  



