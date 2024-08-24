// public/js/modal.js

// var modal = document.getElementById("myModal");
// var btn = document.getElementById("myBtn");
// var span = document.getElementsByClassName("close")[0];

// btn.onclick = function () {
//     modal.style.display = "block";
// };

// span.onclick = function () {
//     modal.style.display = "none";
// };

// window.onclick = function (event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// };

// Function to open the modal and prevent default anchor behavior
function openModal(event) {
    event.preventDefault(); // Prevent the default action of the <a> tag
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
