--TEST--
strpos() matching numbers
--FILE--
<?php
// Integer is handles as an octal representation, so nothing to match
var_dump(strpos("foo 11", 11));
// int(111) is string("o") in octal. Match expected
var_dump(strpos("foo bar", 111));
// string("11") is contained
var_dump(strpos("foo 11", "11"));
?>
--EXPECTF--
Deprecated: strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior in %s on line %d
bool(false)

Deprecated: strpos(): Non-string needles will be interpreted as strings in the future. Use an explicit chr() call to preserve the current behavior in %s on line %d
int(1)
int(4)
