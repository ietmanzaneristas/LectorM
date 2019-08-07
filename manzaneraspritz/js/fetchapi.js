var contenido = document.querySelector("#contenido");
var btnObtener = document.querySelector("#btnObtener");

//var formulario = document.getElementById("formulario");
var formulario = $("#formulario");

//Procesando el formulario
//formulario.addEventListener('click', function(e){
formulario.on('submit', function (e) {
    e.preventDefault(); //no se ejecuta el submit
    //var datos = new FormData(formulario);
    var datos = new FormData(formulario[0]);
    console.log(datos);
    console.log(datos.get('usuario'));
    console.log(datos.get('pass'));

    fetch('app/post.php', {
            method: 'POST',
            body: datos
        })
        .then(res => res.json())
        .then(data => {
            //console.log(data);
            $("#respuesta").html(data);
        });
});

//Datos json api
btnObtener.addEventListener("click", traer);

function traer() {
    fetch('https://randomuser.me/api/?results=5')
        .then(data => data.json())
        .then(data => {
            //console.log(data);
            pintaTabla(data);
        });
}

function pintaTabla(data) {
    contenido.innerHTML = ``;
    for (let valor of data.results) {
        //console.log(valor);
        contenido.innerHTML += `
            <tr>
                <th scope="row">
                    <img src="${valor.picture.medium}" alt="" width"200px" class="img-fluid rounded-circle">
                </th>
                <td>${valor.name.first} ${valor.name.last}</td>
                <td>${valor.email}</td>
                <td>${valor.cell}</td>
            </tr>
        `;
    }
}

//Archivo de texto
function traer1() {
    fetch('texto.txt')
        .then(data => data.text())
        .then(data => {
            console.log(data);
            contenido.innerHTML = `${data}`;
        });
}