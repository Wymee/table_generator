<?php

function generateur_tableau($nomTable, $db) {
    //récupère tous les articles de la bdd
    $articles = $db->prepare("SELECT * FROM " . $nomTable);
    $articles->execute();

    //récupère le nom des colonnes
    $req = $db->prepare("SELECT column_name FROM information_schema.columns WHERE table_name='" . $nomTable ."'");
    $req->execute();

    // mets en tableau les noms de colonnes
    while($fetch = $req->fetch()) {
        $nomCols[] = $fetch['column_name'];
    }

    // affiche chaque nom de colonnes
    echo '<table class="order-table"><thead><tr>';
    foreach($nomCols AS $nomCol){
     echo "<th>$nomCol</th>";
    }
    echo "</tr></thead>";

    $cpt = '0';
    $i = '0';
    // Récupère chaque article individuellement
    foreach($articles AS $article) {
        // pour chaques champs 
        $ids[] = $article['id'];
        $libelles[] = $article['libelle'];
        $qtes[] = $article['qte'];
        $id = $ids[$cpt];
        $libelle = $libelles[$cpt];
        $qte = $qtes[$cpt];
        echo "<tr><td>$id</td><td>$libelle</td><td>$qte</td></tr>";
        $cpt++;
    }
    echo "</table></section>";
}

?>