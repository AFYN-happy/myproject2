<?php
function counter(){
    static $count = 0;
    return $count++;
}
echo counter(); "出力1:";
echo counter(); "出力2:";
echo counter(); "出力3:";
?>
