<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sttask2</title>
                 
    </title>
</head>
<body>
    
        <h3>Masukan angka</h3>
        <form action="#" method ="POST">
            <table>
                <tr>
                    <td><input type="text" placeholder="angka1" name="a"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="angka2" name="b"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="angka3" name="c"></td>
                </tr>
                <tr><td></td></tr>
            </table>
            <input type="submit" name="submit">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $a = $_POST['a'] ;
            $b = $_POST['b'] ;
            $c = $_POST['c'] ;
            $nilai=[$a,$b,$c];
            $max = max($nilai);
            
            echo "<br>" ;
            echo "<hr>" ;
            echo "<br>" ;
            echo "Angka terbesar: " . $max ;
        }
        ?>
    
</body>
</html>