<?php
$max = 10;
$min = 1;

$addarr = $subarr = $twoadd = $twosub = [];
for ($i = $min; $i < $max; $i++) {
    $b = $max - $i;
    for ($j = $b; $j > 0; $j--) {
        $addarr[] = $i ." + ". $j. " = ";
    }
}

for ($i = $max; $i > 0; $i--) {
    for ($j = $i; $j > 0; $j--) {
        echo "$i , $j \n";
        $subarr[] = $i ." - ". $j. " = ";
    }
}

for ($i = $min; $i < $max; $i++) {
    $b = $max - $i;
    for ($snum = $b; $snum > 1; $snum--) {
        $tnum = $max - $i - $snum;
        $twoadd[] = "{$i} + {$snum} + {$tnum} = <brbr>";
    }
}

for ($i = $max - 1; $i > 0; $i--) {
    for ($snum = $max - $i; $snum > 0; $snum--) {

        $tnum = $max - $i - $snum;
        echo "$max    $i   $snum   $tnum \n";
        $twosub[] = "{$max} - $i - {$tnum}  = <brbr>";
        //$subarr[] = $i ." - ". $j. " = ";
    }
}
shuffle($addarr);
shuffle($subarr);
shuffle($twoadd);
shuffle($twosub);

echo "<table  border=\"1\" align=\"center\"  style='width: 90%'><th>加法</th><th>减法</th><th>连加法</th><th>连减法</th>";
for ($k = 0; $k < 10; $k++) {
    echo "<tr><td height='40px'>{$addarr[$k]}</td><td>{$subarr[$k]}</td><td>{$twoadd[$k]}</td><td>{$twosub[$k]}</td></tr>";
}
    echo "<tr><td height='50px' align='right' colspan=2>日期:".date('Y年m月')."____________</td><td colspan=2 align='right'>用时:_____________</td></tr>";
echo "</table>";




