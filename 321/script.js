const btnGetData = document.querySelector("#getData");
const lista = document.querySelector(".wyniki");

const inputImie = document.querySelector("#imie");
const inputNazwisko = document.querySelector("#nazwisko");
const ajaxSend = document.querySelector("#ajaxSend");

let jsonWynik = null;
btnGetData.addEventListener('click', function() {
    let xhr = new XMLHttpRequest();
    // console.log(xhr);

    xhr.open("GET", "https://jsonplaceholder.typicode.com/todos", true);
    
    xhr.send();

    xhr.addEventListener('load', function() {
       if(xhr.status == 200) {
           const wynik = xhr.response;
        //    console.log(wynik);
           jsonWynik = JSON.parse(wynik);
           jsonWynik.forEach(function(el) {
               console.log(el.id, el.title);
               const p = document.createElement("p");
               p.innerText = el.id + " " + el.title;
               lista.appendChild(p);
           });
           } else {
               console.log("Status połączenia: ",this.status);
           };
       });
       xhr.addEventListener('error', function(){
           console.log("Błąd połączenia internetowego");
       })
    
});
ajaxSend.addEventListener('click', function() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST","http://172.16.131.125/3ti/janecka_k/dane.php",true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(" imie = '" + imie + "'& nazwisko='Kowalski' ");
})


