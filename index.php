<?php
$tombBe=array("B","B");
$tombKi=array("","","","");
$Betu="A";
$indexMax=count(value: $tombBe)-1;
for($i=0;$i<=$indexMax;$i++)
{
    $tombKi[$i]=$tombBe[$i].$Betu;
    $tombKi[$i]=$tombKi[$i].$tombKi[$i];
}

print_r(value:$tombBe); print"<br>";
print_r(value:$tombKi); print"<br>";