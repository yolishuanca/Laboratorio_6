<?php
// El acceso a caracteres específicos en una cadena 
// se puede conseguir usando "corchetes"
$string = 'abcdef';
echo $string[0]."<br>";                 // a
echo $string[3]."<br>";                 // d
echo $string[strlen($string)-1]; // f

?>