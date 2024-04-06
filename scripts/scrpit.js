const icoMenu = document.querySelector(".icomenu")
const navLinks = document.querySelector(".navLinks")
const iconTop = document.querySelector(".iconTop")

icoMenu.addEventListener("click", () => {
    icoMenu.classList.toggle("select")
    navLinks.classList.toggle("select")
})

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

