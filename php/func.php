<?php 
function retunrnArray($days) { 
    foreach ($days as $key => $value) { 
        $table = '<tr> <td> %s </td> <td> %s </td> </tr>'; 
        echo sprintf($table, $key, $value); 
    } 
} 
?>