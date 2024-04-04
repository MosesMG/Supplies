const okYes = document.getElementById("okYes")
const okNo = document.getElementById("okNo")
let nom = document.getElementById("nom")

okYes.addEventListener("click", ()=> {
    window.alert("Merci pour votre achat " + nom.innerHTML + ' !')
    // if (window.confirm("Confirmer ?")) {
    // }
})

okNo.addEventListener("click", ()=> {
    window.location.replace("shop.php")
})


const plus = document.getElementById("plus")
const moins = document.getElementById("moins")
const quantite = document.getElementById("quantite")
const prix = document.getElementById("lePrix")
const prixUnit = document.getElementById("prixUnit")
const inputQte = document.getElementById("inputQte")
const prixTotal = document.getElementById("prixTotal")
var count = 1
prix.innerHTML = prixUnit.innerHTML * count
quantite.innerHTML = count
inputQte.value = count
prixTotal.value = prix.innerHTML

plus.addEventListener("click", ()=> {
    count++
    quantite.innerHTML = count
    prix.innerHTML = prixUnit.innerHTML * count
    inputQte.value = count
    prixTotal.value = prix.innerHTML
})

moins.addEventListener("click", ()=> {
    if(count > 1) {
        count--
        quantite.innerHTML = count
        prix.innerHTML = prixUnit.innerHTML * count
        inputQte.value = count
        prixTotal.value = prix.innerHTML
    }
})

