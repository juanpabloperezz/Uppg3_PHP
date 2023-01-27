<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>PHP Övning Function</title>
</head>
<body>
    <?php
    function skrivutmultiplikationsTable5($Nr1){
        $table = "<table>";
        for($NrX1 = 1; $NrX1 <= 10; $NrX1++){
             $resultat = $Nr1 * $NrX1;
            $table .= "<tr> <td> $Nr1 * $NrX1 </td> <td>$resultat</td></tr>";
        }
        return $table;
    }

    function skrivutmultiplikationsTable10($Nr2){
        $table = "<table>";
        for($NrX1 = 1; $NrX1 <= 10; $NrX1++){
             $resultat = $Nr2 * $NrX1;
            $table .= "<tr> <td> $Nr2 * $NrX1 </td> <td>$resultat</td></tr>";
        }
        return $table;
    }

    function skrivutmultiplikationsTable15($Nr3){
        $table = "<table>";
        for($NrX1 = 1; $NrX1 <= 10; $NrX1++){
             $resultat = $Nr3 * $NrX1;
            $table .= "<tr> <td> $Nr3 * $NrX1 </td> <td>$resultat</td></tr>";
        }
        return $table;
    }

    echo(skrivutmultiplikationsTable5(5));
    echo(skrivutmultiplikationsTable10(10));
    echo(skrivutmultiplikationsTable15(15));
    ?>
</body>
</html>