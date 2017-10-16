<?php
    if (isset($_POST['limit'])) {
        $limit = $_POST['limit'] < 14 ? (int)$_POST['limit'] : 14;
        // Définition de la taille du nombre compris entre la précission +1 et precision + 10
        $length = mt_rand($limit + 1, $limit + 10);
        // On boucle autant que la taille du nombre génerer
        for($i =0; $i <= $length; $i++) {
            $float .= mt_rand(0,9);
            if($i == $length - $limit) {
                // On est à la virgule du nombre
                $float .= '.';
            }
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if ($limit) { ?>
                <p>
                    le nombre générer, avec un précision de <?php echo $limit . ", est " . $float; ?>
                </p>
            <?php }
        ?>
        <form method="post">
            <label for="limit">Précision du nombre génerer souhaité:</label>
            <input type="number" name="limit" id="limit" min="0" max="14">
            <button type="submit">Valider</button>
        </form>
    </body>
</html>

