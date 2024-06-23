<?php
function calculeteTex($price, $tax)
{
$total = $price + $price * $tax;
return  $total;
}
echo calculeteTex(10 ,2);
?>