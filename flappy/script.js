const btnGetData = document.querySelector("#getData");
let jsonWynik = null;

btnGetData.addEventListener('click', function() {
    let xhr = new XMLHttpRequest();
    console.log(xhr);

    xhr.open("GET", "https://jsonplaceholder.typicode.com/todos", true);
    
    xhr.send();

    xhr.addEventListener('load', function() {
       if(this.status == 200) {
           const wynik = xhr.response;
           const jsonWynik = JSON.parse(wynik);
           jsonWynik.forEach(function(el){
                document.write(el.id, el.title);
           })
           
       };
    })
    
});