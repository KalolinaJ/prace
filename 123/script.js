const btnGetData = document.querySelector("#getData");
let jsonWynik = null;
const wynik = document.querySelector(".wyniki");
btnGetData.addEventListener('click', function() {
    let xhr = new XMLHttpRequest();
    console.log(xhr);

    xhr.open("GET", "https://jsonplaceholder.typicode.com/todos1", true);
    
    xhr.send();

    xhr.addEventListener('load', function() {
       if(xhr.status == 200) {
           const wynik = xhr.response;
        //    console.log(wynik);
           jsonWynik = JSON.parse(wynik);
           jsonWynik.forEach(function(el) {
               console.log(el.id, el.title);
               const p = document.createElement("p");
               p.innerText = el.title;
               wynik.appendChild(p);
           });
           }
       });
       xhr.addEventListener('error', function(){
           console.log("Błąd połączenia");
       })
    
});


