const btnGetData = document.querySelector("#getData");

btnGetData.addEventListener('click', function() {
    let xhr = new XMLHttpRequest();
    console.log(xhr);

    xhr.open("GET", "https://jsonplaceholder.typicode.com/posts", true);
    
    xhr.send();

    xhr.addEventListener('load', function() {
       if(this.status == 200) {
           const wynik = xhr.response;
           console.log(wynik);
       };
    })
});