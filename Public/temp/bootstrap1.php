<?php
$json = '["apple","orange","banana","strawberry"]';
$ar = json_decode($json);
// access first element of $ar array
echo $ar[0]; // apple