<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>大きなほうの値を採用する</title>
</head>
<body>
<?php
$a = mt_rand(0,50);
$b = mt_rand(0,50);
if ($a>$b){
  $bigger = $a;
} else {
  $bigger = $b;
}
echo "大きな値は{$bigger}、\$aは{$a}、\$bは{$b}";
?>
</body>
</html>
