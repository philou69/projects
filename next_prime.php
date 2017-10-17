<?php

/**
 * Fonction trouvant le nombre premier à partir d'un certain nombre
 * @param array $numbers
 * @return array
 */
function getPrime(int $number, array $primes) : array {

    while (true){
        $prime = true;
        for($i= 2; $i < $number; $i++){
            // Si à un moment $number peut etre divisé par $i, alors ce n'est pas un nombre premier
            if($number % $i == 0){
                // On passe $prime à false et on arrete la boucle for
                $prime = false;
                break;
            }
        }
        if($prime){
            $primes[] = $number;
            break;
        }
        $number++;

    }
    return $primes;
}

if(isset($_POST['again'])) {
    $primes = isset($_POST['primes']) ? array_map("htmlspecialchars", $_POST["primes"]) : [];
    $number = empty($prime) ? (end($primes) + 1) : 1;
    // On recupere le nombre premier à partir du dernier chiffre enregistrer dans le tableau plus 1
    $primes = getPrime($number, $primes);
    $_POST['primes'] = $primes;
}

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <form method="post">
        <?php
        foreach ($primes as $prime) { ?>
            <input type="hidden" name="primes[]" id="primes" value="<?php echo $prime; ?>">
        <?php }
        ?>

        <button type="submit" name="again" >afficher un nombre premier en plus</button>
    </form>
    <?php
        if($number) { ?>
            <h2>Liste des nombres premiers:</h2>
            <p> <?php
                foreach ($primes as $prime) {
                    echo ", " . $prime;
                } ?>
            </p>
            <?php
        }
    ?>
    </body>
</html>

