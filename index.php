<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <?php

    ?>
    <div class="font">
        <h1>Cartes Harry Potter</h1>
        <br>
        <p> 
Harry Potter est une série de romans fantastiques écrite par J.K. Rowling, mettant en scène un jeune sorcier éponyme et ses aventures à l'école de sorcellerie Poudlard. Ces livres, au nombre de sept, ont captivé des millions de lecteurs à travers le monde avec leur imagination, leur humour et leurs thèmes universels tels que l'amitié et le courage. Adaptée en films à succès, la saga continue d'inspirer des générations de fans.</p>

    </div>
        <br>
        
        <label for="choix">Maison :</label>
            <select id="choixMaison" name="choixMaison">
                <option value="">Autres</option>
                <option value="All"> ALL</option>
                <option value="Gryffindor"> Gryffindor</option>
                <option value="Hufflepuff">Hufflepuff</option>
                <OPtion value="Ravenclaw">Ravenclaw</OPtion>
                <option value="Slytherin">Slytherin</option>
                
            </select>

            <label for="Genre">Genre :</label>
            <select id="choixGenre" name="choixGenre">
            
                <option value="All" > ALL</option>
                <option value="male"> male</option>
                <option value="female">female</option>
            </select>

            <label for="tri">Ordre alphabetique :</label>
            <select id="triOrdre" name="triOrdre">
                <option value="A-Z" >A-Z</option>
                <option value="Z-A">Z-A</option>
                <option value="female"> </option>
            </select>

    <br> <br>
    <label for="dateMin">Date min: :</label>
    <input type="number" name="dateMin" id="dateMin">
    <label for="dateMax">Date max: :</label>
    <input type="number" name="dateMax" id="dateMax">
    <button type="submit" name="submit" id="submit"> submit</button>

        
        <div class="container">
            
            
            
        </div>

    
    </section>
    
    <script src="app.js"></script>
</body>
</html>