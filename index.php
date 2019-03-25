<?php
require __DIR__ .'/vendor/autoload.php';

echo "calculateHomeWorkSum: " . calculateHomeWorkSum(3, 2.2, '1');
echo "<br>";
echo "Nfq\Akademija\Not_Typed\calculateHomeWorkSum: " . Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1');
echo "<br>";
echo "Nfq\Akademija\Soft\calculateHomeWorkSum: " . Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1');
echo "<br>";
echo "Nfq\Akademija\Strict\calculateHomeWorkSum: " . Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');