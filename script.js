// console.log("PWEB C")
// console.warn("PWEB C")
// console.error("PWEB C")

// alert("PWEB C")
// const nama = prompt("Masukkan Nama: ")
// if(nama === "nuril"){
//     alert(nama)
// } else{
//     alert("Kamu siapa?")
// }
// nama === "nuril" ? alert(nama) : alert("Kamu siapa?")

console.log("10" + 1);

function nama() {
    console.log("PWEB C");
}

nama();

// const sapa = (nama) => console.log(`Halo ${nama}`)

// const sapa = (nama) => {
//     console.log(`Halo ${nama}`)
// }

// sapa("Faiq")

// DOM => Document Object Model
// console.log(document)

// 1. getElementByid
// 2. getElementsByTagName
// 3. getElementByClassName
// 4. querySelector
// 5. querySelectorAll
// const judul = document.getElementsByTagName("h1")
// console.log(judul[0])

// judul[0].innerHTML = "PWEB C"

// const judul = document.getElementById("judul");
// console.log(judul)
// judul.innerHTML = "judul baru"

// const semuaJudul = document.getElementsByTagName("h1");
// console.log(semuaJudul);

// semuaJudul.addEventListener("click", function () {
//     for (i = 0; i < semuaJudul.length; i++) {
//         semuaJudul[i].style.color = "red";
//         // semuaJudul[i].classList.add = "baru"
//     }
// });

// const judul = document.getElementById("judul");

judul.addEventListener('mouseover', function() {
    judul.style.color = "red";
})
judul.addEventListener('mouseout', function() {
    judul.style.color = "blue";
})

const inputNama = document.getElementById('input-nama')
const btnSubmit = document.getElementById('btn-submit')
const textSapaan = document.getElementById('sapaan')

btnSubmit.addEventListener('click', function() {
    // console.log(inputNama.value )
    textSapaan.innerHTML += ` ${inputNama.value}`
    alert(inputNama.value.toUpperCase())
})

// function sapaDia() {
//     textSapaan.innerHTML += ` ${inputNama.value}`
// }

const judulPakeQuery = document.querySelector('.judul-kelas')
console.log(judulPakeQuery)
