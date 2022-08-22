# I'm trying to create a function to generate html tables from mySQL database with Php
I'd like to use this "function generateur_tableau($nameTable, $db);" to generate automatically all columns and rows.
THE PROBLEME IS in the folowing file generateur_tableau.php, I want to create a field for each "articls" in the db

foreach($articles AS $article) {
        // for each fields
    --> $ids[] = $article[$nameTable[$i]]; <-- something like this
        $i++;
        $libelles[] = $article['libelle'];
        $qtes[] = $article['qte'];
        $id = $ids[$cpt];
        $libelle = $libelles[$cpt];
        $qte = $qtes[$cpt];
        echo "<tr><td>$id</td><td>$libelle</td><td>$qte</td></tr>";
        $cpt++;
    }
