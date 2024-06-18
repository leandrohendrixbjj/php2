<?php
 
//  Get the integer value of a variable

echo intval(42);                      // 42
echo intval(4.2);                     // 4
echo intval('42');                    // 42
echo intval('+42');                   // 42
echo intval('-42');                   // -42
echo intval(042);                     // 34
echo intval('042');                   // 42
echo intval(1e10);                    // 10000000000
echo intval('1e10');                  // 10000000000
echo intval(0x1A);                    // 26
echo intval('0x1A');                  // 0
echo intval('0x1A', 0);               // 26
echo intval(42000000);                // 42000000
echo intval(420000000000000000000);   // -4275113695319687168
echo intval('420000000000000000000'); // 9223372036854775807
echo intval(42, 8);                   // 42
echo intval('42', 8);                 // 34
echo intval(array());                 // 0
echo intval(array('foo', 'bar'));     // 1
echo intval(false);                   // 0
echo intval(true);                    // 1

