--TEST--
Script encoding (SJIS)
--SKIPIF--
<?php if (!unicode_semantics()) die('skip unicode.semantics=off'); ?>
--INI--
unicode.output_encoding=CP866
--FILE--
<?php
ini_set("unicode.script_encoding", "SJIS");
include(dirname(__FILE__)."/enc-SJIS.inc");
?>
--EXPECT--
��� - ok
