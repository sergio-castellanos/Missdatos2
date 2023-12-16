<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validación de Formulario</title>
  <style>
    .error {
      color: red;
    }
  </style>
</head>
<body>

  <h2>Formulario de Ejemplo</h2>
  
  <form id="myForm" onsubmit="return validarFormulario()">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <span id="errorNombre" class="error"></span>
    <br>

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required>
    <span id="errorEmail" class="error"></span>
    <br>

    <input type="submit" value="Enviar">
  </form>

  <script>
    function validarFormulario() {
      var nombre = document.getElementById('nombre').value;
      var email = document.getElementById('email').value;

      // Validar nombre
      if (nombre === "") {
        document.getElementById('errorNombre').innerHTML = "Por favor, ingresa tu nombre.";
        return false;
      } else {
        document.getElementById('errorNombre').innerHTML = "";
      }

      // Validar email
      if (email === "") {
        document.getElementById('errorEmail').innerHTML = "Por favor, ingresa tu correo electrónico.";
        return false;
      } else {
        document.getElementById('errorEmail').innerHTML = "";
      }

      // Puedes agregar más validaciones según tus necesidades

      // Si todas las validaciones son exitosas, puedes enviar el formulario
      return true;
    }
  </script>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
