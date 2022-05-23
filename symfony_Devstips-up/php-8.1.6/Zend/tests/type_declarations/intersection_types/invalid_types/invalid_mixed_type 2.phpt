--TEST--
mixed type cannot take part in an intersection type
--FILE--
<?php

function foo(): mixed&Iterator {}

?>
--EXPECTF--
Fatal error: Type mixed cannot be part of an intersection type in %s on line %d
