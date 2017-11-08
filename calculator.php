<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:08
 */
$r=$_POST['r'];
$g=$_POST['g'];
$b=$_POST['b'];

$m=$_POST['m'];
$n=$_POST['n'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php</title>
</head>
<?php
echo "<body style =background-color:rgb($r,$g,$b);>";
?>
<h1 align="center">乘法表</h1>
<table border="1" align="center">
    <?php
    for($i=1;$i<=$m;$i++){
        echo "<tr>";
        for($j=1;$j<=$n;$j++){
            echo "<td width='30 px'>".$i*$j."</td>";
        }echo "</tr>";
    }


    ?>
</table>
</body>
</html>
