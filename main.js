// let barn = document.querySelector(".barn");
// let navbar = document.querySelector(".header_2 .navbar");

// barn.onclick = function () {
//     navbar.classList.add("open");
//     navbar.classList.remove("navbar");
// };
let barn = document.querySelector(".barn");
barn.onclick = function () {
    let navbar = document.querySelector(".header_2 .navbar");
    navbar.classList.toggle("open");
};

