<?php  

$html = "123";
preg_match_all("#(\d){2}#",$html,$matches);
echo '<pre>';
print_r($matches);
echo '</pre>';
