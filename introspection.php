<?php 
class Student 
{   
 public $name = "Sujit";      public $age = 21;  
    public function study()
 {       
  return "Avishkar is studying..."; 
    } 
} 
$newStudent = new Student(); 
echo "Class Name: " . get_class($newStudent) . "<br>";  
echo "Methods: "; 
print_r(get_class_methods($newStudent)); echo "<br>";  
echo "Class Properties: "; print_r(get_class_vars('Student')); 
?>  
