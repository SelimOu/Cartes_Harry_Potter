
let container = document.querySelector(".container");
let choixMaison = document.getElementById("choixMaison");
let choixGenre = document.getElementById("choixGenre");
let triOrdre = document.getElementById("triOrdre");

choixMaison.addEventListener("change", async function maisons() {
    let selectMaison = choixMaison.value
    let reponse = await fetch("action.php?choixMaison=" + selectMaison);
    console.log('Requête AJAX:', 'action.php?choixMaison=' + selectMaison);
    let data = await reponse.text();

    container.innerHTML = data;

})
    ;

choixGenre.addEventListener("change", async function genre() {
    let selectMaison = choixMaison.value
    let selectGenre = choixGenre.value
    // let maison = await fetch("action.php?choixMaison=" + selectMaison);
    let genre = await fetch('action.php?choixMaison=' + selectMaison + "&choixGenre=" + selectGenre);
    console.log('Requête AJAX:', 'action.php?choixMaison=' + selectMaison + "&choixGenre=" + selectGenre);
    let data = await genre.text();

    container.innerHTML = data;

})

triOrdre.addEventListener("change", async function tri() {
    let selectMaison = choixMaison.value;
    let selectGenre = choixGenre.value;
    let triAlpha = triOrdre.value;
    let genre = await fetch('action.php?choixMaison=' + selectMaison + "&choixGenre=" + selectGenre + "&triOrdre=" + triAlpha);
    console.log('Requête AJAX:', 'action.php?choixMaison=' + selectMaison + "&choixGenre=" + selectGenre + "&triOrdre=" + triAlpha);
    let data = await genre.text();

    container.innerHTML = data;

})

let dateMin = document.getElementById("dateMin");
let dateMax = document.getElementById("dateMax");
let submit = document.getElementById("submit");
submit.addEventListener("click", async function tri() {

    let resultDateMin = dateMin.value;
    let resultDateMax = dateMax.value;

    let selectMaison = choixMaison.value;
    let selectGenre = choixGenre.value;
    let triAlpha = triOrdre.value;
    let genre = await fetch('action.php?choixMaison=' + selectMaison + "&choixGenre=" + selectGenre + "&triOrdre=" + triAlpha + "&datemMin=" + resultDateMin + "&dateMax=" + resultDateMax
    );
    console.log('Requête AJAX:', 'ction.php?choixMaison=' + selectMaison + "&choixGenre=" + selectGenre + "&triOrdre=" + triAlpha + "&datemMin=" + resultDateMin + "&dateMax=" + resultDateMax);
    let data = await genre.text();



    container.innerHTML = data;



}

)


