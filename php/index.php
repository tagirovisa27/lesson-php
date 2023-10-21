<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" href="style.css"> 
  <title></title> 
</head> 
 
<body> 
  <?php  
  include 'array.php';  
  include 'func.php'; 
  ?> 
  <table class="number_table"> 
    <tr> 
      <th>№</th> 
      <th>Дни недели</th> 
    </tr> 
    <tr class="hed-tab"> 
      <?php 
      retunrnArray($days);  
       ?> 
    </tr> 
  </table> 
</body> 
 
</html>