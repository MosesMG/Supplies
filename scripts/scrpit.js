const icoMenu = document.querySelector(".icomenu")
const navLinks = document.querySelector(".navLinks")
const iconTop = document.querySelector(".iconTop")

icoMenu.addEventListener("click", () => {
    icoMenu.classList.toggle("select")
    navLinks.classList.toggle("select")
})


// INCREASE & DECREASE
/*
const minus = document.querySelectorAll(".moins")
const plus = document.querySelectorAll(".plus")
const affiche = document.querySelectorAll(".chiffre")

compt = 0
console.log(compt)

for (let k = 0; k < affiche.length; k++) {
    affiche[k].innerHTML = compt
}

for (let i = 0; i < minus.length; i++ ){
    minus[i].addEventListener('click', ()=> {
        if(compt > 0) {
            compt--
            affiche[i].innerHTML = compt
        }
    })
}

for (let j = 0; j < plus.length; j++) {
    plus[j].addEventListener('click', ()=> {
        compt++
        affiche[j].innerHTML = compt
    })
}
*/

const voiture = document.querySelectorAll('.uneVoiture')
const mode = document.querySelectorAll('.uneMode')
const electro = document.querySelectorAll('.unElectro')

voiture.forEach(caisse => caisse.addEventListener('click', ()=> {
    caisse.classList.toggle("popUp")
    window.scrollTo({
        top: 650,
        left:100,
        behavior: 'smooth'
    })
}))

mode.forEach(uneMode => uneMode.addEventListener('click', ()=> {
    uneMode.classList.toggle("popUp")
    window.scrollTo({
        top: 650,
        left:100,
        behavior: 'smooth'
    })
}))

electro.forEach(unElectro => unElectro.addEventListener('click', ()=> {
    unElectro.classList.toggle("popUp")
    window.scrollTo({
        top: 650,
        left:100,
        behavior: 'smooth'
    })
}))

// voiture.forEach(caisse => caisse.addEventListener('click', ()=> {
//     corps.classList.remove("popUp")
// }))


// const laVoiture = document.querySelector('.laCaisse')
// const imgCaisse = document.querySelector('.laCaisse img')

// if(voiture.forEach(caisse => caisse.classList.values("popUp"))){
//     laVoiture.addEventListener('mousemove', (e) => {
//         const x = e.clientX - e.target.offsetLeft;
//         const y = e.clientY - e.target.offsetTop;
    
//         // console.log(x,y);
    
//         imgCaisse.style.transformOrigin = `${x}px ${y}px`;
//         imgCaisse.style.transform = "scale(1.4)";
//         imgCaisse.style.cursor = "zoom-in";
//     })
    
//     laVoiture.addEventListener('mouseleave', ()=> {
//         imgCaisse.style.transformOrigin = "center";
//         imgCaisse.style.transform = "scale(1)";
//     })
// }


const lesVoitures = document.getElementById("lesVoitures")
const laMode = document.getElementById("laMode")
const lesElectro = document.getElementById("lesElectro")
const lienVehicules = document.getElementById("lienVehicules")
const lienMode = document.getElementById("lienMode")
const lienElectro = document.getElementById("lienElectro")

lienMode.addEventListener('click', ()=> {
    laMode.style.display = "block";
    lesVoitures.style.display = "none";
    lesElectro.style.display = "none"
})

lienVehicules.addEventListener('click', ()=> {
    lesVoitures.style.display = "block";
    laMode.style.display = "none";
    lesElectro.style.display = "none"
})

lienElectro.addEventListener('click', ()=> {
    lesElectro.style.display = "block";
    lesVoitures.style.display = "none";
    laMode.style.display = "none"
})

