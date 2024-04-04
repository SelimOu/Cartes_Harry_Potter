<?php 
$json = file_get_contents("filtres-ajax.json");
// var_dump(json_decode($json));
$filtermaison = isset($_GET['choixMaison'])?$_GET['choixMaison']:"";
$filtergenre = isset($_GET['choixGenre'])?$_GET['choixGenre']:"";
$triOrdre = isset($_GET['triOrdre'])?$_GET['triOrdre']:"";
$dateMin = isset($_GET['datemMin'])?$_GET['datemMin']:"";
$dateMax = isset($_GET['dateMax'])?$_GET['dateMax']:"";
$obj = json_decode($json,true);





if($triOrdre === "A-Z"){
    foreach($obj as &$ma)

    $tmp[] = &$ma["name"];
    array_multisort($tmp,$obj);
}
else if($triOrdre === "Z-A") {
    foreach($obj as &$ma)
    $tmp[] = &$ma["name"];
    array_multisort($tmp, SORT_DESC ,$obj);
}
for($i= 0; $i < 25; $i++){
    $nomCarte = $obj[$i]['name'];
    $maisonCarte = $obj[$i]['house'];
    $imageCarte = $obj[$i]['image'];
    $genreCarte = $obj[$i]['gender'];
    $yearCarte = $obj[$i]['yearOfBirth'];

    if ($dateMin < $yearCarte && $yearCarte < $dateMax  || empty($dateMin && $dateMax)){

    if ( $maisonCarte === $filtermaison &&  $genreCarte === $filtergenre   ) {
        include('character.php');
    }
    else if ( $maisonCarte === $filtermaison && $filtergenre ==="" ) {
        include('character.php');
    }
    else if ($filtergenre === "All" && $filtermaison === $maisonCarte){
        include ('character.php');
    }
    else if ($filtermaison === "All" && $filtergenre === $genreCarte){
        include ('character.php');
    }
    else  if($filtergenre === "All" && $filtermaison === "All"){
        include('character.php');
    }
    else if ($filtergenre ==="" && $filtermaison === "All"){
        include ('character.php');
    }
    }

}
?>