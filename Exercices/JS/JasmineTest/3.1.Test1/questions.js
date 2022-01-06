
let tailleString = (texte) => {
    return texte.length;
}
let remplaceECar = (texte) => {
    let a = texte.indexOf("e")
    let text = texte.substr(" ", a) + " " + texte.substr(a + 1, texte.length);
    return text;
}
let concatString = (texte1, texte2) => {
    return texte1 + texte2
}
let afficherCar5 = (texte) => {
    return texte[4]
}
let afficher9Car = (texte) => {
    return texte[0] + texte[1] + texte[2] + texte[3] + texte[4] + texte[5] + texte[6] + texte[7] + texte[8]
}
let majusculeString = (texte) => {
    return texte.toUpperCase()
}
let minusculeString = (texte) => {
    return texte.toLowerCase()
}
let SupprEspaceString = (texte) => {
    return texte.trim()
}
let IsString = (texte) => {
    return typeof texte === "string"
}

let AfficherExtensionString = (texte) => {
    return texte.split(".").pop()
}
let NombreEspaceString = (texte) => {
    return (texte.match(/\s/gm) || []).length
}
let InverseString = (texte) => {
    return texte.split('').reverse().join("")
}

/**
 * Exercices sur les nombres et les caluls mathématiques
 */
let calculPuissance = (x, y) => {
    return Math.pow(x, y)
}
let valeurAbsolue = (nombre) => {
    return Math.abs(nombre)
}
let valeurAbsolueArray = (array) => {
    for (let i = 0; i < array.length; i++) {
        array[i] = Math.abs(array[i])
    }
    return array
}
let sufaceCercle = (rayon) => {
    let diam = rayon * rayon
    let surf = Math.PI * diam
    return Math.ceil(surf)
}
let hypothenuse = (ab, ac) => {
    return Math.hypot(ab, ac)
}
let calculIMC = (poids, taille) => {
    let m = taille * taille
    let imc = poids / m
    return Number(imc.toFixed(2))
}
