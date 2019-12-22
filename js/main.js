
// Toggle password visibility
function togglePassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
    x.type = "text";
    } else {
    x.type = "password";
    }
    }

// Accordion

var acc = document.getElementsByClassName("accordion");var i;for (i = 0; i < acc.length; i++) {  acc[i].addEventListener("click", function() {this.classList.toggle("active");var panel = this.nextElementSibling;if (panel.style.maxHeight){panel.style.maxHeight = null;    } else {      panel.style.maxHeight = panel.scrollHeight + "px";    }   });}