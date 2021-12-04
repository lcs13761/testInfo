<?php

include  __DIR__ . "/source/yearCentury.php";
include  __DIR__ . "/source/arrayRandon.php";
include  __DIR__ . "/source/sequenceGrowing.php";
include  __DIR__ . "/source/lowerCousin.php.php";

echo yearCentury('1905');
primoInferior(6);
randowArray();
print_r('[1, 3, 2, 1]' . sequenceGrowing([1, 3, 2]));
print_r('[1, 3, 2]' . sequenceGrowing([1, 3, 2]));
print_r('[1, 2, 1, 2]' . sequenceGrowing([1, 2, 1, 2]));
echo  '[3, 6, 5, 8, 10, 20, 15]' . sequenceGrowing([3, 6, 5, 8, 10, 20, 15]);
echo  '[1, 1, 2, 3, 4, 4]' . sequenceGrowing([1, 1, 2, 3, 4, 4]);
echo  '[1, 4, 10, 4, 2]' . sequenceGrowing([1, 4, 10, 4, 2]);
echo  '[10, 1, 2, 3, 4, 5]' . sequenceGrowing([10, 1, 2, 3, 4, 5]);
echo  '[1, 1, 1, 2, 3]' . sequenceGrowing([1, 1, 1, 2, 3]);
echo  '[0, -2, 5, 6]' . sequenceGrowing([0, -2, 5, 6]);
echo  '[1, 2, 3, 4, 5, 3, 5, 6]' .  sequenceGrowing([1, 2, 3, 4, 5, 3, 5, 6]);
echo  '[40, 50, 60, 10, 20, 30]' . sequenceGrowing([40, 50, 60, 10, 20, 30]);
echo  '[1, 1]' . sequenceGrowing([1, 1]);
echo  '[1, 2, 5, 3, 5]' . sequenceGrowing([1, 2, 5, 3, 5]);
echo  '[1, 2, 5, 5, 5]' . sequenceGrowing([1, 2, 5, 5, 5]);
echo  '[10, 1, 2, 3, 4, 5, 6, 1]' . sequenceGrowing([10, 1, 2, 3, 4, 5, 6, 1]);
echo  '[1, 2, 3, 4, 3, 6]' . sequenceGrowing([1, 2, 3, 4, 3, 6]);
echo  '[1, 2, 3, 4, 99, 5, 6]' . sequenceGrowing([1, 2, 3, 4, 99, 5, 6]);
echo  '[123, -17, -5, 1, 2, 3, 12, 43, 45]' . sequenceGrowing([123, -17, -5, 1, 2, 3, 12, 43, 45]);
echo  '[3, 5, 67, 98, 3]' . sequenceGrowing([3, 5, 67, 98, 3]);

