<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 Module</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200;500&family=Montserrat:wght@400;500&display=swap');
    </style>
</head>

<body>
    <table>
        <h1>Таблица истинности PHP</h1>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
        <tr>
            <?php $a = 0;
            $b = 0; ?>
            <th><?php var_export($a); ?></th>
            <th><?php var_export($b); ?></th>
            <td><?php var_export(!$a); ?></td>
            <td><?php var_export($a || $b); ?></td>
            <td><?php var_export($a && $b); ?></td>
            <td><?php var_export($a xor $b); ?></td>
        </tr>
        <tr>
            <?php $a = 0;
            $b = 1; ?>
            <th><?php var_export($a); ?></th>
            <th><?php var_export($b); ?></th>
            <td><?php var_export(!$a); ?></td>
            <td><?php var_export($a || $b); ?></td>
            <td><?php var_export($a && $b); ?></td>
            <td><?php var_export($a xor $b); ?></td>
        </tr>
        <tr>
            <?php $a = 1;
            $b = 0; ?>
            <th><?php var_export($a); ?></th>
            <th><?php var_export($b); ?></th>
            <td><?php var_export(!$a); ?></td>
            <td><?php var_export($a || $b); ?></td>
            <td><?php var_export($a && $b); ?></td>
            <td><?php var_export($a xor $b); ?></td>
        </tr>
        <tr>
            <?php $a = 1;
            $b = 1; ?>
            <th><?php var_export($a); ?></th>
            <th><?php var_export($b); ?></th>
            <td><?php var_export(!$a); ?></td>
            <td><?php var_export($a || $b); ?></td>
            <td><?php var_export($a && $b); ?></td>
            <td><?php var_export($a xor $b); ?></td>
        </tr>
    </table>
    <h1>Таблица жёсткого сравнения</h1>
    <table>
        <?php $x = true;
        $y = false;
        $c = 1;
        $d = 0;
        $e = -1;
        $f = "1";
        $g = null;
        $h = "php"; ?>
        <tr>
            <th>&#128579</th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>
        <tr>
            <th>true</th>
            <td><?php var_export($x === $x); ?></td>
            <td><?php var_export($x === $y); ?></td>
            <td><?php var_export($x === $c); ?></td>
            <td><?php var_export($x === $d); ?></td>
            <td><?php var_export($x === $e); ?></td>
            <td><?php var_export($x === $f); ?></td>
            <td><?php var_export($x === $g); ?></td>
            <td><?php var_export($x === $h); ?></td>
        </tr>
        <tr>
            <th>false</th>
            <td><?php var_export($y === $x); ?></td>
            <td><?php var_export($y === $y); ?></td>
            <td><?php var_export($y === $c); ?></td>
            <td><?php var_export($y === $d); ?></td>
            <td><?php var_export($y === $e); ?></td>
            <td><?php var_export($y === $f); ?></td>
            <td><?php var_export($y === $g); ?></td>
            <td><?php var_export($y === $h); ?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?php var_export($c === $x); ?></td>
            <td><?php var_export($c === $y); ?></td>
            <td><?php var_export($c === $c); ?></td>
            <td><?php var_export($c === $d); ?></td>
            <td><?php var_export($c === $e); ?></td>
            <td><?php var_export($c === $f); ?></td>
            <td><?php var_export($c === $g); ?></td>
            <td><?php var_export($c === $h); ?></td>
        </tr>
        <tr>
            <th>0</th>
            <td><?php var_export($d === $x); ?></td>
            <td><?php var_export($d === $y); ?></td>
            <td><?php var_export($d === $c); ?></td>
            <td><?php var_export($d === $d); ?></td>
            <td><?php var_export($d === $e); ?></td>
            <td><?php var_export($d === $f); ?></td>
            <td><?php var_export($d === $g); ?></td>
            <td><?php var_export($d === $h); ?></td>
        </tr>
        <tr>
            <th>-1</th>
            <td><?php var_export($e === $x); ?></td>
            <td><?php var_export($e === $y); ?></td>
            <td><?php var_export($e === $c); ?></td>
            <td><?php var_export($e === $d); ?></td>
            <td><?php var_export($e === $e); ?></td>
            <td><?php var_export($e === $f); ?></td>
            <td><?php var_export($e === $g); ?></td>
            <td><?php var_export($e === $h); ?></td>
        </tr>
        <tr>
            <th>"1"</th>
            <td><?php var_export($f === $x); ?></td>
            <td><?php var_export($f === $y); ?></td>
            <td><?php var_export($f === $c); ?></td>
            <td><?php var_export($f === $d); ?></td>
            <td><?php var_export($f === $e); ?></td>
            <td><?php var_export($f === $f); ?></td>
            <td><?php var_export($f === $g); ?></td>
            <td><?php var_export($f === $h); ?></td>
        </tr>
        <tr>
            <th>null</th>
            <td><?php var_export($g === $x); ?></td>
            <td><?php var_export($g === $y); ?></td>
            <td><?php var_export($g === $c); ?></td>
            <td><?php var_export($g === $d); ?></td>
            <td><?php var_export($g === $e); ?></td>
            <td><?php var_export($g === $f); ?></td>
            <td><?php var_export($g === $g); ?></td>
            <td><?php var_export($g === $h); ?></td>
        </tr>
        <tr>
            <th>"php"</th>
            <td><?php var_export($h === $x); ?></td>
            <td><?php var_export($h === $y); ?></td>
            <td><?php var_export($h === $c); ?></td>
            <td><?php var_export($h === $d); ?></td>
            <td><?php var_export($h === $e); ?></td>
            <td><?php var_export($h === $f); ?></td>
            <td><?php var_export($h === $g); ?></td>
            <td><?php var_export($h === $h); ?></td>
        </tr>
    </table>
    <h1>Таблица гибкого сравнения</h1>
    <table>
        <?php $x = true;
        $y = false;
        $c = 1;
        $d = 0;
        $e = -1;
        $f = "1";
        $g = null;
        $h = "php"; ?>
        <tr>
            <th>&#128578</th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>
        <tr>
            <th>true</th>
            <td><?php var_export($x == $x); ?></td>
            <td><?php var_export($x == $y); ?></td>
            <td><?php var_export($x == $c); ?></td>
            <td><?php var_export($x == $d); ?></td>
            <td><?php var_export($x == $e); ?></td>
            <td><?php var_export($x == $f); ?></td>
            <td><?php var_export($x == $g); ?></td>
            <td><?php var_export($x == $h); ?></td>
        </tr>
        <tr>
            <th>false</th>
            <td><?php var_export($y == $x); ?></td>
            <td><?php var_export($y == $y); ?></td>
            <td><?php var_export($y == $c); ?></td>
            <td><?php var_export($y == $d); ?></td>
            <td><?php var_export($y == $e); ?></td>
            <td><?php var_export($y == $f); ?></td>
            <td><?php var_export($y == $g); ?></td>
            <td><?php var_export($y == $h); ?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?php var_export($c == $x); ?></td>
            <td><?php var_export($c == $y); ?></td>
            <td><?php var_export($c == $c); ?></td>
            <td><?php var_export($c == $d); ?></td>
            <td><?php var_export($c == $e); ?></td>
            <td><?php var_export($c == $f); ?></td>
            <td><?php var_export($c == $g); ?></td>
            <td><?php var_export($c == $h); ?></td>
        </tr>
        <tr>
            <th>0</th>
            <td><?php var_export($d == $x); ?></td>
            <td><?php var_export($d == $y); ?></td>
            <td><?php var_export($d == $c); ?></td>
            <td><?php var_export($d == $d); ?></td>
            <td><?php var_export($d == $e); ?></td>
            <td><?php var_export($d == $f); ?></td>
            <td><?php var_export($d == $g); ?></td>
            <td><?php var_export($d == $h); ?></td>
        </tr>
        <tr>
            <th>-1</th>
            <td><?php var_export($e == $x); ?></td>
            <td><?php var_export($e == $y); ?></td>
            <td><?php var_export($e == $c); ?></td>
            <td><?php var_export($e == $d); ?></td>
            <td><?php var_export($e == $e); ?></td>
            <td><?php var_export($e == $f); ?></td>
            <td><?php var_export($e == $g); ?></td>
            <td><?php var_export($e == $h); ?></td>
        </tr>
        <tr>
            <th>"1"</th>
            <td><?php var_export($f == $x); ?></td>
            <td><?php var_export($f == $y); ?></td>
            <td><?php var_export($f == $c); ?></td>
            <td><?php var_export($f == $d); ?></td>
            <td><?php var_export($f == $e); ?></td>
            <td><?php var_export($f == $f); ?></td>
            <td><?php var_export($f == $g); ?></td>
            <td><?php var_export($f == $h); ?></td>
        </tr>
        <tr>
            <th>null</th>
            <td><?php var_export($g == $x); ?></td>
            <td><?php var_export($g == $y); ?></td>
            <td><?php var_export($g == $c); ?></td>
            <td><?php var_export($g == $d); ?></td>
            <td><?php var_export($g == $e); ?></td>
            <td><?php var_export($g == $f); ?></td>
            <td><?php var_export($g == $g); ?></td>
            <td><?php var_export($g == $h); ?></td>
        </tr>
        <tr>
            <th>"php"</th>
            <td><?php var_export($h == $x); ?></td>
            <td><?php var_export($h == $y); ?></td>
            <td><?php var_export($h == $c); ?></td>
            <td><?php var_export($h == $d); ?></td>
            <td><?php var_export($h == $e); ?></td>
            <td><?php var_export($h == $f); ?></td>
            <td><?php var_export($h == $g); ?></td>
            <td><?php var_export($h == $h); ?></td>
        </tr>
    </table>
</body>

</html>