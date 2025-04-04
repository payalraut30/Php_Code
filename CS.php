<?php 
$url = "http://www.college.com/Science/CS.php"; 
$parsed_url = parse_url($url); 
$scheme = $parsed_url['scheme'] ?? ''; 
$host = $parsed_url['host'] ?? ''; $path = $parsed_url['path'] ?? ''; header("Scheme: $scheme"); 
header("Host: $host"); header("Path: $path"); echo "Scheme: $scheme\n"; echo "Host: $host\n"; echo "Path: $path\n"; 
?> 
 	

