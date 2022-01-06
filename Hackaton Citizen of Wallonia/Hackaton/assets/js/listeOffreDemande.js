/**
 * Bools controlling display of lists
 */
let isOffresVisible = false;
let isDemandesVisible = false;

/* const btnOffres = document.getElementById("liste__btn-offres");
const btnDemandes = document.getElementById("liste__btn-demandes"); */


const main = document.getElementsByTagName("main")[0];
const dataHeading = `
<article class="liste--offre">
  <h2>Nom</h2>
  <div>Départ</div>
  <div>Destination</div>
  <div>Date</div>
  <div>Horaire</div>
  <div>Nombre</div>
  <div>Commentaires</div>
</article>`;

/**
* Generate offer list
*/
if(DATASTRANSPORTOFFERS.length > 0){
  main.innerHTML += `<h1>Les trajets disponibles</h1>${dataHeading}`;
  DATASTRANSPORTOFFERS.forEach(offer => {
  main.innerHTML += `
  <article class="liste--offre">
    <h2>${offer.familyName[0]}${offer.firstName[0]}</h2>
    <div class="data-highlight">${offer.departZone}</div>
    <div class="data-highlight">${offer.targetZone}</div>
    <div class="data-highlight">${offer.travelDate}</div>
    <div class="data-highlight">${offer.travelTime}</div>
    <div>${offer.personCount}</div>
    <div>${offer.comments}</div>
  </article>`;
  });
}
else {
  main.innerHTML += `<h1>Pas de trajets disponibles actuellement</h1>`;
}

/**
 * Generate demand list
 */
 if(DATASTRANSPORTDEMANDS.length > 0){
  main.innerHTML += `<h1>Les demandes de trajet</h1>${dataHeading}`;
  DATASTRANSPORTDEMANDS.forEach(demand => {
    main.innerHTML += `
    <article class="liste--offre">
      <h2>${demand.familyName[0]}${demand.firstName[0]}</h2>
      <div class="data-highlight">${demand.departZone}</div>
      <div class="data-highlight">${demand.targetZone}</div>
      <div class="data-highlight">${demand.travelDate}</div>
      <div class="data-highlight">${demand.travelTime}</div>
      <div>${demand.personCount}</div>
      <div>${demand.comments}</div>
    </article>`;
  });
}
else {
  main.innerHTML += `<h1>Pas de demandes de trajet pour le moment</h1>`
}

/**
 * Hide at loading
 */
/* offres.forEach(offre => {
  offre.display = none;
});
demandes.forEach(demande => {
  demande.display = none;
}); */
/*  console.log("offres", offres);
 console.log("offres", offres[0]); */
/*for (let offre of offres){
  console.log(offre);
} */
/* for(let i = 0 ; i < offres[0].length ; i++){
  console.log(offres[0][i]);
}

const hideOffres = () => {
  offres.forEach(offre => {
    offre.display = none;
  }) 
}*/