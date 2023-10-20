<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
     
    <title>SoundSolutions</title>
</head>
<body>

  <div class="bg-white d-flex justify-content-center align-items-center vh-100">
    <div
      class="bg-white p-5 rounded-5 text-secondary shadow-lg rounded"
      style="width: 25rem"
    >
      <div class="d-flex justify-content-center">
        <img
          src="iconos/person-circle-outline.svg"
          alt="login-icon"
          style="height: 7rem"
        />
      </div>
      <div class="text-center fs-1 fw-bold">Login</div>
      <div class="input-group mt-4">
        <div class="input-group-text bg-secondary">
          <img
            src="iconos/usuario.svg"
            alt="username-icon"
            style="height: 1rem"
          />
        </div>
        <input
          class="form-control bg-light"
          type="text"
          id="txtnombre"
          placeholder="Username"
        />
      </div>
      <div class="input-group mt-1">
        <div class="input-group-text bg-secondary">
          <img
            src="iconos/lock-closed-outline.svg"
            alt="password-icon"
            style="height: 1rem"
          />
        </div>
        <input
          class="form-control bg-light"
          id="txtpassword"
          type="password"
          placeholder="Password"
        />
      </div>
      
      <div onclick="buscarproducto();" class="btn btn-secondary text-white w-100 mt-4 fw-semibold shadow-sm">
        Ingresar
      </div>
      <div class="d-flex gap-1 justify-content-center mt-1">
        <div>No tienes una cuenta?</div>
        <a href="#" class="text-decoration-none text-info fw-semibold"
          >Registrate</a
        >
      </div>
      
      
    </div>
  </div>

  

<script type="text/javascript">
function buscarproducto() {
    const searchInput1 = document.getElementById('txtnombre');
    const nombre = searchInput1.value;

    const searchInput2 = document.getElementById('txtpassword');
    const password = searchInput2.value;

    if (!nombre || !password) {
        alert('Por favor, ingresa un nombre de usuario y contraseña válidos.');
        return;
    }

    fetch(`http://localhost:8080/users/search?nombre=${nombre}&contrasena=${password}`)
        .then(response => response.json())
        .then(data => {
            if (data && data.length > 0) {
           // Se encontraron datos, puedes hacer algo con ellos
        // Por ejemplo, mostrarlos en un div con id "resultado"
        alert('Usuario encontrado');

        var nombre = data[0].nombre; // Suponiendo que el nombre se encuentra en la propiedad "nombre" de los datos
        console.log(nombre);

        // Redirigir a bienvenida.php con el nombre como parámetro
       window.location.href = `bienvenida.php`;


       localStorage.setItem('nombre',nombre);


            } else {
                alert('Usuario no encontrado');
            }
           
        })
        .catch(error => {
            console.error('Error al buscar el Usuario:', error);
            alert('Error al buscar el Usuario');
        });
}


</script>


</body>
</html>