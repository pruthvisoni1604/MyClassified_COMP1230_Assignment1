// When the user clicks on the button, dropdown content toggles to show or hide
function dropFunction() {
    document.getElementById("dropdown").classList.toggle("show");
}

// Closes the dropdown list if the user clicks outside of it
window.onclick = function(e) {
    if (!e.target.matches(".dropBtn")) {
        var myDropdown = document.getElementById("dropdown");
        if (myDropdown.classList.contains("show")) {
            myDropdown.classList.remove("show");
        }
    }
};

var loadFile = function(event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
};

function showAlert(id) {
    if (confirm("You Sure you want to delete that item?") == true) {
        window.location.href = "../models/deleteItem.php?id=" + id;
    }
}