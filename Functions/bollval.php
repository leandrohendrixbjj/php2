<?php

// Obtém o valor booleano de uma variável

echo '0:        ' . (boolval(0)   ? 'True' : 'False') . "\n"; // False
echo '0.0:      ' . (boolval(0.0) ? 'True' : 'False') . "\n"; // False
echo '"0":      ' . (boolval("0") ? 'True' : 'False') . "\n"; // False

echo '"1":      ' . (boolval("1") ? 'True' : 'alse') . "\n"; // True
echo '42:       ' . (boolval(42)  ? 'True' : 'False') . "\n"; // True

echo '"":       ' . (boolval("")  ? 'True' : 'False') . "\n"; // False
echo '"string": ' . (boolval("string") ? 'True' : 'False') . "\n"; // True

echo '[]:       ' . (boolval([]) ? 'True' : 'False') . "\n"; // False
echo '[1, 2]:   ' . (boolval([1, 2]) ? 'True' : 'false') . "\n"; // True

echo 'stdClass: ' . (boolval(new stdClass) ? 'True' : 'False') . "\n"; // True
