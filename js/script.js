// import "./components/themeBtn.js";
const circle = document.getElementById('mode-select__circle');
const buttonTheme = document.getElementById('mode-select');
let isMoved = false; // Dodatkowa zmienna śledząca stan

buttonTheme.addEventListener('click', function() {
    if (isMoved) {
        // Jeśli kółko jest już przesunięte i ma biały kolor, przywróć poprzedni stan
        circle.setAttribute('cx', '25');
        circle.setAttribute('fill', '#47629A');
    } else {
        // W przeciwnym razie przesuń kółko i zmień kolor
        circle.setAttribute('cx', '50');
        circle.setAttribute('fill', 'white');
    }

    // Zaktualizuj stan zmiennej isMoved
    isMoved = !isMoved;


    let body = document.getElementById("body");
    body.classList.toggle("light");
    body.classList.toggle("dark");
    
    buttonTheme.classList.toggle('mode-select__active');
});



const buttonSearch = document.getElementById('search-btn');

buttonSearch.addEventListener('click', function() {
    let searchPanel = document.getElementById("search-panel");
    searchPanel.classList.toggle("search-panel__active");
    
});


const buttonNav = document.getElementById('burger-btn');

buttonNav.addEventListener('click', function() {
    let navPanel = document.getElementById("nav-panel");
    navPanel.classList.toggle("nav-panel__active");
    
});



function includeHTML() {
    var z, i, elmnt, file, xhttp;
    /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
      elmnt = z[i];
      /*search for elements with a certain atrribute:*/
      file = elmnt.getAttribute("w3-include-html");
      if (file) {
        /* Make an HTTP request using the attribute value as the file name: */
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4) {
            if (this.status == 200) {elmnt.innerHTML = this.responseText;}
            if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
            /* Remove the attribute, and call this function once more: */
            elmnt.removeAttribute("w3-include-html");
            includeHTML();
          }
        }
        xhttp.open("GET", file, true);
        xhttp.send();
        /* Exit the function: */
        return;
      }
    }
  }