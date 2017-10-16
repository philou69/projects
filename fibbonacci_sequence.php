<?php
    if(isset($_POST['limit'])) {
        // On récuperer le chiffre limite afficher dans la suite
        $limit = $_POST['limit'] < 100 ? (int) $_POST['limit'] : 100 ;
        // On crée la variable last chiffre qui est le dernier chiffre enregister dans le table fibonacci
        $lastNumber = 1;
        $fibonacci[] = 0;
        // tant que latsNumber est plus petit que limit, on complete la liste de fibonacci
        while($limit > $lastNumber){
            // récuperation du dernier nombre inscrit dans la suite,
            $number = end($fibonacci);

            $fibonacci[] = $lastNumber;
            // On ajoute la
            $lastNumber += $number;
        }
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if($limit) { ?>
               <ul> <?php
                   foreach ($fibonacci as $number) {
                       echo "<li>" . $number . "</li>";
                   } ?>
               </ul>
                <?php
            }
        ?>
        <form method="post">
            <label for="limit">Nombre limite de la suite de fibonacci</label>
            <input type="number" name="limit" id="limit" min="1" max="100">
            <button type="submit" >Valider</button>
        </form>
    </body>
</html>

