<?php 
if (file_exists("contact.dat")) 
{     
$file = fopen("contact.dat", "r");     
echo "<table border='1'> 
            <tr> 
                <th>Sr No</th> 
                <th>Name</th> 
                <th>Residence Number</th> 
                <th>Mobile Number</th> 
            </tr>"; 
     
    while (($line = fgets($file)) !== false) 
{    
     $data = explode(",", trim($line));         echo "<tr> 
                <td>{$data[0]}</td> 
                <td>{$data[1]}</td> 
                <td>{$data[2]}</td> 
                <td>{$data[3]}</td> 
              </tr>"; 
    } 
     
    echo "</table>";     fclose($file); } else {     echo "File not found!"; 
} 
?>

