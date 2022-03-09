<?php
# For PHP < 5.3.0
echo dirname(__FILE__);
echo "<br>";
# For PHP >= 5.3.0
echo __DIR__; 
echo "<br>";
echo $_SERVER['DOCUMENT_ROOT'];
?>