<?php 

// converter facilmente de encoding ISO-8859-1 ou WINDOWS-1252 para UTF-8

echo mb_convert_encoding('string em ISO-8859-1', 'UTF-8', 'ISO-8859-1');
