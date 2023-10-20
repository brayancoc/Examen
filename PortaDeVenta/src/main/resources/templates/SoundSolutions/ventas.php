<!DOCTYPE html>
<html lang="en">
<head>


 <script src="html2pdf.bundle.min.js"></script>



  <meta  contentType="text/html charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Corrección en el atributo "type" de la etiqueta <link> -->
  <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">




</head>
<body>
 
    <?php include 'navbar.php';?>
    <div class="container-fluid p-3 bg-secondary">
        <div class="row">
            <div class="col-md-4">
                  <!--::::::::::::::::::::::::::::::::cuadro de textobuscar:::::::::::::::::::::::-->
           <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Buscar Producto</h4>
                            </div>
                            <div class="card-body">
                              <!--Creacion de cuadros de texto para el crud-->

                              <!--cuadro de texto para productos-->
                                
                                <div class="form-group">
                                    <label for="">Codigo</label>
                                    <input type="text" class="form-control" placeholder="Buscar producto" id="buscarproducto" >
                                </div>
                                
                                 <!--botones-->

                                 <div class="btn-group mt-4" role="group" aria-label="Basic mixed styles example">
                                  <button type="button" class="btn btn-warning" onclick="buscarproducto();">Buscar</button>
                                 
                                </div>

                                <div class="w-100">
                                    <span id="mensajespan" class="text-success"></span>
                                </div>
                            </div>
                        </div>
           <!--:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
                        <div class="card mt-4">
                            <div class="card-header">
                                <h4 class="text-center">Detalle</h4>
                            </div>
                            <div class="card-body">
                              <!--Creacion de cuadros de texto para el crud-->

                              <!--cuadro de texto para productos-->
                                
                                <div class="form-group">
                                    <label>Codigo</label>
                                    <input type="text" class="form-control" id="txtid" placeholder="Codigo producto">
                                </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre">
                                </div>
                                   <!--cuadro de texto para marca-->
                                <div class="form-group">
                                    <label>Marca</label>
                                    <input type="text" name="" class="form-control" placeholder="Ingrese la marca" id="marca">
                                </div>
                               
                                <!--cuadro de texto para Precio-->
                                <div class="form-group">
                                    <label>Precio</label>
                                    <input type="text" name="" class="form-control" placeholder="Ingrese el precio" id="precio">
                                </div>
                                <!--cuadro de texto para stock-->
                                <div class="form-group">
                                    <label>Stock</label>
                                    <input type="text" name="" class="form-control" placeholder="Ingrese la cantidad" id="cantidad">
                                </div>
                                <!--cuadro de texto para cantidad a vender-->
                                <div class="form-group">
                                    <label>Unidades a Vender</label>
                                    <input type="text" name="" class="form-control" placeholder="Unidades a Vender" id="unidadesavender">
                                </div>
                                 <!--botones-->

                                 <div class="d-grid gap-2 mt-3"  aria-label="Basic mixed styles example">
                                  <button type="button" class="btn btn-success" onclick="agregaralcarrito();" id="botonguardar">Agregar</button>

                                </div>

                                <div class="w-100">
                                    <span id="mensajespan" class="text-success"></span>
                                </div>
                            </div>
                        </div>

                      
            </div>
     
          <div class="col-md-8" >
            
                       <div id="factura">
                        <div class="card mb-4 w-100">
                            <div class="card-header">
                                <h4 class="text-center">Detalle</h4>
                            </div>
                            <div class="card-body ">
                              <!--Creacion de cuadros de texto para el crud-->

                              <!--cuadro de texto para productos-->
                                
                                <div class="form-group mb-2">
                                    <label>Empleado</label>
                                    <input type="text" readonly class="form-control" id="txtempleado" "="">
                                </div>


<script type="text/javascript">
    
//:::::::::::::::::::::::::traer variable de session local::::::::::::::: 
const nombre = localStorage.getItem('nombre');
console.log(nombre);
const inputempleado= document.getElementById('txtempleado').value=nombre;
      inputempleado.textContent=`Bienvenido, ${nombre}!`;



      
 //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::     
</script>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">Cliente</span>
                                    <input type="text" class="form-control" id="txtcliente">
                                
                                    <span class="input-group-text" id="basic-addon3">Nit</span>
                                    <input type="text" name="" class="form-control" id="txtnitcliente">
                                </div>
                               
                               
                                
                                 <!--botones-->

                                 

                                <div class="w-100">
                                    <span id="mensajespan" class="text-success"></span>
                                </div>
                            </div>
                        </div>
    <table id="tablaproducto" class="table table-striped text-white text-center">
        <thead>
            <th>Codigo</th>                      
            <th>Nombre</th>
            <th>Marca</th>
            <th>Precio</th>
              <th>Stock</th>
            <th>Unidades Venta</th>
            <th>Sub total</th>
            
            <th id="funciones">Funciones</th>
        </thead>
        <tbody id="data-container">
        </tbody>
        
    </table>
    <div class="col-5" id="totalfactura">
                            
                            <div class="card-body justify-content-end">
                              <!--Creacion de cuadros de texto para el crud-->

                              <!--cuadro de texto para productos-->
                                
                                <div class="input-group mb-3">

                                    <span class="input-group-text" id="basic-addon3">Total</span>
                                    <input type="text" name="" class="form-control" id="txttotal">
                                </div>
                               

                              <!--boton eliminar de la tabla-->
                                <div class="w-100">
                                    <span id="mensajespan" class="text-success"></span>
                                </div>
                            </div>
                        </div>
   </div> 
<!--boton exportar a pdf-->
   <button id="pdf" class="btn btn-danger" onclick="actualizardb();" >pdf</button>
   <button id="limpiar" class="btn btn-success" onclick="limpiartabla();" >limpiar</button>
</div>

            
        </div>

    </div>


<script type="text/javascript">



//::::::::::::::::::::::::::VARIABLE GLOBAL::::::::::::::::::::::::::
  var grantotal=0;

//:::::::::::::::::FUNCIION LIMPIAR TABLA::::::::::::::;;
function limpiartabla(){
     // Procesar los datos y mostrar solo la página actual
    const dataContainer = document.getElementById('data-container');
    dataContainer.innerHTML = ''; // Limpiar el contenido previo

grantotal=0;

document.getElementById("txttotal").value='';
document.getElementById("txtempleado").value='';
document.getElementById("txtcliente").value='';
document.getElementById("txtnitcliente").value='';




} 
//:::::::::::::::::FUNCION ACTUALIZAR DATOS::::::::::::
// Obtén la referencia a la tabla por su ID
function actualizardb(){

//:::::::::::::::datos fechamod:::::::::
    // Crear una nueva instancia de Date
var fechaActual = new Date();

// Obtener la fecha actual en formato de cadena (por ejemplo, "Thu Oct 20 2023 15:45:23 GMT-0400 (hora de verano del este de Sudamérica)")
console.log(fechaActual);

// Si deseas formatear la fecha en un formato específico, puedes hacerlo de la siguiente manera:

// Obtener el año
var año = fechaActual.getFullYear();

// Obtener el mes (0-11, donde 0 = enero, 1 = febrero, etc.)
var mes = fechaActual.getMonth();

// Obtener el día del mes (1-31)
var dia = fechaActual.getDate();


var fechaFormateada = `${año}-${mes + 1}-${dia}`;
//::::::::::::::::::::::::::::::::::::::    



var table = document.getElementById("tablaproducto");

// Crea un array para almacenar los datos de la tabla
var data = [];

// Recorre las filas de la tabla (comenzando desde la segunda fila, ya que la primera fila contiene encabezados)
for (var i = 1; i < table.rows.length; i++) {
    var row = table.rows[i];

// Obtiene el valor de las celdas 
    var id = row.cells[0].innerHTML; 
    var nombre = row.cells[1].innerHTML; 
    var marca = row.cells[2].innerHTML; 
    var precio = parseFloat(row.cells[3].innerHTML); 
    var cantidad = parseInt(row.cells[4].innerHTML); 
    var unidadesvendidas = parseInt(row.cells[5].innerHTML); 
    var cantidadnueva=cantidad-unidadesvendidas;
    
    var fechamodificacion = fechaFormateada; 
    //var marca = parseInt(row.cells[1].innerHTML); 
    

    // Crea un objeto para representar los datos de cada fila
    var rowData = {
        id: id,
        nombre: nombre,
        precio: precio,
        cantidad: cantidadnueva,
        marca: marca,
        fechamodificacion, fechamodificacion
    };

    // Agrega el objeto al array de datos
    



// Ahora, 'data' contiene un array con los datos de la tabla

// Puedes enviar 'data' a una API utilizando una solicitud HTTP, por ejemplo, con la función fetch.
// Aquí hay un ejemplo simple de cómo hacerlo:

  fetch("http://localhost:8080/CRUDRepo/ModificarProducos",{
  method:"PUT",
  headers:{
    "Content-Type":"application/json"
},
body:JSON.stringify(rowData)
}).then((res)=>res.json()).then((response)=>{
//mensaje de producto creado correctamente
let mensajeSpan = document.getElementById("mensajespan");

// Define el mensaje que deseas agregar
let mensaje = "Producto Modificado correctamente!";

// Asigna el mensaje al contenido del <span>
mensajeSpan.innerHTML = mensaje;
//limpiar campos

})
}
}

//:::::::::::::::::::FUNCION BUSCAR:::::::::::::::::::::::::::::::
  function buscarproducto(){


    const searchInput = document.getElementById('buscarproducto');
    const productId = searchInput.value;

    if (!productId) {
        alert('Por favor, ingresa un ID de producto válido.');
        return;
    }

    fetch(`http://localhost:8080/CRUDRepo/BuscarProducos/${productId}`)
        .then(response => response.json())
        .then(product => {
            if (product) {
                


             document.getElementById("txtid").value=product.id;   
              document.getElementById("nombre").value=product.nombre;   
               document.getElementById("precio").value=product.precio;   
                document.getElementById("cantidad").value=product.cantidad;   
                 document.getElementById("marca").value=product.marca;   
                  
               
            } else {
                alert('No se encontró ningún producto con el ID proporcionado.');
            }
        })
        

}   
//:::::::::::::::::::::AGREGA AL CARRITO:::::::::::::::::::::::::::
function agregaralcarrito(){
    const dataContainer = document.getElementById('data-container');
    // Crear una fila para el producto encontrado
                const row = document.createElement('tr');

                var unidadesproducto=parseFloat(document.getElementById("unidadesavender").value);
                var precioproducto=parseFloat(document.getElementById("precio").value);
                var subtotal= unidadesproducto* precioproducto;

                subtotal= subtotal.toFixed(2);

                    // Actualizar el grantotal global
                     grantotal += parseFloat(subtotal);

                    // Mostrar el grantotal en un input
                    var grantotalInput = document.getElementById("txttotal"); // Asegúrate de tener un elemento con el ID "grantotal" en tu HTML
                    grantotalInput.value = grantotal;



                row.innerHTML = `
                    <td>${document.getElementById("txtid").value}</td>
                    <td>${ document.getElementById("nombre").value}</td>
                     <td>${ document.getElementById("marca").value}</td>
                    <td>${ document.getElementById("precio").value}</td>
                   <td>${ document.getElementById("cantidad").value}</td>
                    <td>${ document.getElementById("unidadesavender").value}</td>
                    <td>${subtotal}</td>


                    <!-- Botones Editar y eliminar -->
                    <td><button type="button" class="btn btn-danger" onclick="eliminardelcarrito(this);">Eliminar</button></td>


                `;

                dataContainer.appendChild(row);


}

//:::::::::::::::::::::::::::::::::::::::funcion eliminar de la tabla:::::::::::::::::::::
function eliminardelcarrito(button){

  // Obtén la fila que contiene el botón
  var fila = button.parentNode.parentNode;
  
  // Obtén la tabla a la que pertenece la fila
  var tabla = fila.parentNode;

  // Elimina la fila de la tabla
  tabla.removeChild(fila);
            




}

//:::::::::::::::::::::::::::::PDF:::::::::::::::::::::::::::::::::::::::
  document.getElementById('pdf').addEventListener('click', function () {
    //:::::::::::::::ocultar columna de funcion::::::

      // Ocultar la columna a omitir
            var columnIndexToHide = 7; // Índice de la columna que se desea ocultar (empezando desde 0)
            var rows = document.querySelectorAll('#tablaproducto tr');


       //::::::::::::::::::::::::::quita la columna funciones:::::::::::::::::::::
 
            rows.forEach(function (row) {
                var cells = row.querySelectorAll('td');
                if (cells.length > columnIndexToHide) {
                    cells[columnIndexToHide].style.display = 'none';
                }
            });
    //::::::::::::::::::://convertir a pdf:::::::::::::::
            var element = document.getElementById('factura');
    

             // Ocultar elemento 
            //boton pdf
            var omitiritem = document.getElementById('pdf');
            omitiritem.style.display = 'none';


            html2pdf(element, {
                margin: 2.5,
                filename: 'tabla.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 1
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }

            });


           // mostrar item nuevamente

            
                  
             omitiritem.style.display = '';         
            


        });



</script>







</body>
</html>
