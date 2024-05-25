<?php

    $produitsPromo = array(
        "Pipette Compte-Goutte:Accessoire:1" ,
        "Capsule aluminium 20/410:Flaconnage:0.2" ,
        "Capsule service 20/410:Flaconnage:0.25" , 
        "Bandelettes PH - Boîte de 50:Fabrication:2.9" ,
        "Spatule Inox:Fabrication:1.9"
    );

    $TabLibelle = array();
    $TabCategorie = array();
    $TabPrix = array();

    function ranger($produitsPromo){
        global $TabLibelle, $TabCategorie, $TabPrix;

        foreach ($produitsPromo as $produit) {
            list($libelle , $categorie , $prix) = explode(":", $produit);
            array_push($TabLibelle, $libelle);
            array_push($TabCategorie, $categorie);
            array_push($TabPrix, $prix);
        }
    }

    ranger($produitsPromo);

    print_r($TabLibelle);
    print_r($TabCategorie);
    print_r($TabPrix);

?>