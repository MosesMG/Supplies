// const { text } = require("stream/consumers")

const connexion = document.getElementById("connexion")
const inscription = document.getElementById("inscription")
const lienConnect = document.getElementById("versConnect")
const lienInscrit = document.getElementById("versInscrip")
const topClose = document.querySelector(".topClose")
const topOpen = document.querySelector(".topOpen")

lienInscrit.addEventListener('click', ()=> {
    connexion.style.display = "none";
    inscription.style.display = "block";
    topClose.style.display = "block";
    topOpen.style.display = "none"
})

lienConnect.addEventListener('click', ()=> {
    inscription.style.display = "none";
    connexion.style.display = "block";
    topOpen.style.display = "block";
    topClose.style.display = "none"
})


// Show/Hide Password
const passwordUn = document.getElementById("passwordOne")
const visibleUn = document.getElementById("showOne")
const invisibleUn = document.getElementById("noshowOne")

visibleUn.addEventListener('click', ()=> {
    passwordUn.type = "text";
    invisibleUn.style.display = "block";
    visibleUn.style.display = "none";
})
invisibleUn.addEventListener('click', ()=> {
    passwordUn.type = "password";
    visibleUn.style.display = "block";
    invisibleUn.style.display = "none";
})

const passTwo = document.getElementById("passTwo")
const visibleTwo = document.getElementById("showTwo")
const invisibleTwo = document.getElementById("noshowTwo")

visibleTwo.addEventListener('click', ()=> {
    passTwo.type = "text";
    invisibleTwo.style.display = "block";
    visibleTwo.style.display = "none"
})
invisibleTwo.addEventListener('click', ()=> {
    passTwo.type = "password";
    visibleTwo.style.display = "block";
    invisibleTwo.style.display = "none"
})

const passThree = document.getElementById("passThree")
const visibleThree = document.getElementById("showThree")
const invisibleThree = document.getElementById("noshowThree")

visibleThree.addEventListener('click', ()=> {
    passThree.type = "text";
    invisibleThree.style.display = "block";
    visibleThree.style.display = "none"
})
invisibleThree.addEventListener('click', ()=> {
    passThree.type = "password";
    visibleThree.style.display = "block";
    invisibleThree.style.display = "none"
})


const different = document.getElementById("different")
const submit = document.querySelector(".envoyer")

passThree.addEventListener('input', ()=> {
    if (passTwo.value !== passThree.value) {
        different.style.display = "block";
        different.innerHTML = "Mots de passe différents !"
        submit.disabled = true
        submit.classList.add("block")
    } else {
        different.style.display = "none";
        submit.disabled = false
        submit.classList.remove("block")
    }
})

const leNom = document.getElementById("leNom")
leNom.addEventListener("input", ()=> {
    leNom.value = leNom.value.toUpperCase();
})
