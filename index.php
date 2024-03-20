<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php 
            $num=7; 
            $mult=1;
            $head1="Multiplicación";
            $head2="Resultado";
        ?>
        <div class="links">
            <h2><a href="ocho.php">Click aquí para ver la tabla del 8</a></h2>
            <h2><a href="nueve.php">Click aquí para ver la tabla del 9</a></h2>
        </div>
        <h1>La tabla del <?php echo $num ?></h1>
        <h2>Aquí están los primeros 20 múltiplos del número <?php echo $num ?>.</h2>
        <div class="tables">
            <table>
                <thead>
                    <tr>
                        <td><?php echo $head1 ?></td>
                        <td><?php echo $head2 ?></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $num . " x " . $mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <td><?php echo $head1 ?></td>
                        <td><?php echo $head2 ?></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $num . " x " . ++$mult ?></td>
                        <td><?php echo $num*$mult ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2 class="version">Pate, Valentín - Versión: <?php echo PHP_VERSION ?></h2>
</body>
</html>