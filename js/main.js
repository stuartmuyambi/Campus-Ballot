
// Toggle password visibility
function togglePassword() {
    let x = document.getElementById("password");
    if (x.type === "password") {
    x.type = "text";
    } else {
    x.type = "password";
    }
    }

// Accordion
let acc = document.getElementsByClassName("accordion");
let i;
for (i = 0; i < acc.length; i++) {  
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.maxHeight){panel.style.maxHeight = null;
        } else {      
            panel.style.maxHeight = panel.scrollHeight + "px";    
        }   });
    }

// Filter table content
function filterTable() {

    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase(); //  Remove toUpperCase() to perform a case sensitive filter
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}