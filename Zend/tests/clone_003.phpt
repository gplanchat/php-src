--TEST--
Using clone statement on undefined variable
--FILE--
<?php

$a = clone $b;

?>
--EXPECTF--
Notice: Undefined variable: b in %s on line %d

Fatal error: Uncaught EngineException: __clone method called on non-object in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
