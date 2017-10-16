<?php

/**
 * Fonction renvoiant le tableau des facteurs d'un nombre
 * @param int $number
 * @return array
 */
function getFactors(int $number):array {
    for ($i = 2; $i < $number; $i++) {
        // Si le modulo de $number divisé par $i est 0, il s'agit d'un facteurs de ce nombre
        if($number %  $i == 0){
            $factors[] = $i;
        }
    }
    var_dump($factors);
    return $factors;
}

/**
 * Fonction renvoiant le tableau des nombres premiers contenus dans le tableau de base
 * @param array $numbers
 * @return array
 */
function getPrime(array $numbers) : array {

    foreach ($numbers as $number) {
        // Prime est de base vrai
        $prime = true;
        for($i=2; $i < $number; $i++){
            // Si à un moment $number peut etre divisé par $i, alors ce n'est pas un nombre premier
            if($number % $i == 0){
                // On passe $prime à false et on arrete la boucle for
                $prime = false;
                break;
            }
        }

        if($prime){
            $primes[] = $number;
        }

    }
    return $primes;
}
if(isset($_POST['number'])) {
    // On récuperer le chiffre limite afficher dans la suite
    $number = $_POST['number'] < 1000 ? (int) $_POST['number'] : 1000 ;
    // On recupere les facteurs de numbers puis les nombres premiers
    $factors = getFactors($number);
    $primes = getPrime($factors);
}

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
if($number) { ?>
    <h2>Liste des facteurs premiers:</h2>
    <ul> <?php
        foreach ($primes as $prime) {
            echo "<li>" . $prime . "</li>";
        } ?>
    </ul>
    <?php
}
?>
<form method="post">
    <h1>Trouver les facteurs premiers d'un nombre</h1>
    <label for="number">Nombre à utilisé</label>
    <input type="number" name="number" id="number" min="1">
    <button type="submit" >Valider</button>
</form>
</body>
</html>

