<?php
echo substr("Hello World", 0, 5) . PHP_EOL;
echo substr("Hello World", 5) . PHP_EOL;
echo substr("Hello World", -3, 3) . PHP_EOL;
echo substr("ideeën", -3) . PHP_EOL; // length of 2 because ë is a multibyte character
echo mb_substr("ideeën", -3) . PHP_EOL; // mb_ prefix is to support multibyte characters
