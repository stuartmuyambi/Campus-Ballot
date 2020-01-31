
// Toggle password visibility
function togglePassword() {
    let x = document.getElementById("password");
    if (x.type === "password") {
    x.type = "text";
    } else {
    x.type = "password";
    }
    }


// Filter table content on the voting page
function myFunction() {

    // Declare variables 
    let input, filter, table, tr, td, i;  
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];

        // Tip: Remove toUpperCase() if you want to perform a case-sensitive search.
        // Tip: Change tr[i].getElementsByTagName('td')[0] to [1] if you want to search for "Country" (index 1) insteadof "Name" (index 0).

        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";      
            }
        }   
    }
}

// Set the background color of the avatars 

const colors = ["#00AA55","#009FD4","#B381B3","#939393","#E3BC00","#D47500","#DC2A2A"];

// The function below converts the avatar text into a number
function numberFromText(text) { // numerFromText("AA");
    const charCodes = text
    .split('') // => ["A", "A"]
    .map(char => char.charCodeAt(0)) // =>[65, 65]
    .join(''); // => "6565"
    return charCodes;

};

