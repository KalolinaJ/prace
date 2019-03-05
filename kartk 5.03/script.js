const btnGetData = document.querySelector("#getData");
const lista = document.querySelector(".wyniki");

let jsonWynik=null;

btnGetData.addEventListener('click', function() {
    let xhr = new XMLHttpRequest();

    xhr.open("GET", "https://jsonplaceholder.typicode.com/todos", true);
    
    xhr.send();

    xhr.addEventListener('load', function() {
        if ( xhr.status == 200) {
            const wynik = xhr.response;

            jsonWynik = JSON.parse(wynik);
            jsonWynik.forEach(function (el) {
                const p = document.createElement("p");
                p.innerText = el.id + " " + el.title;
                lista.appendChild(p);
                
            });
        } else {
            console.log("Status połączenia: ", this.status);
        };
    });
    xhr.addEventListener('error', function (e) {
        console.log("Brak połączenia internetowego");
    })
})