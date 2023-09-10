# Formulario de Hoja de Vida

Este formulario es una parte fundamental de nuestra aplicación y permite a los usuarios ingresar su información personal y profesional. 
Explicación detallada de cada componente y su funcionalidad:

## Detalles del Formulario

```html
<form class="form" method="post" action="./php/create.php">
  <!-- Campo de Nombre -->
  <div class="inputBox">
    <input
      class="input_field"
      type="text"
      name="nombre"
      id="nombre"
      required
    />
    <span class="input_label" for="nombre">Nombre completo:</span>
  </div>

  <!-- Campo de Fecha de Nacimiento -->
  <div class="inputBox">
    <input
      class="input_field"
      type="text"
      name="fecha_nacimiento"
      id="fecha_nacimiento"
      required
    />
    <span class="input_label" for="fecha_nacimiento">Fecha de nacimiento (dd/mm/yy):</span>
  </div>

  <!-- Campo de Género -->
  <div class="inputBox">
    <select class="input_field" name="genero" id="genero" required>
      <option value="masculino">Masculino</option>
      <option value="femenino">Femenino</option>
      <option value="otro">Otro</option>
    </select>
    <span class="input_label" for="genero">Género:</span>
  </div>

  <!-- Campo de Teléfono -->
  <div class="inputBox">
    <input
      class="input_field"
      type="text"
      name="telefono"
      id="telefono"
      required
    />
    <span class="input_label">Teléfono de contacto:</span>
  </div>

  <!-- Campo de Correo Electrónico -->
  <div class="inputBox">
    <input
      class="input_field"
      type="text"
      name="email"
      id="email"
      required
    />
    <span class="input_label" for="email">Correo electrónico:</span>
  </div>

  <!-- Campo de Objetivo Profesional o Resumen -->
  <p class="subtitle">Objetivo Profesional o Resumen</p>
  <textarea
    class="input_field"
    name="objetivo"
    id="objetivo"
    rows="4"
    cols="50"
  ></textarea>

  <!-- Botón de Envío -->
  <div class="boxSubmit">
    <input class="btnSubmit" type="submit" value="Enviar" />  
  </div>
</form>
```
# Explicación detallada de la línea de código `<form class="form" method="post" action="./php/create.php">`:
`<form>`: Esto marca el inicio de un elemento de formulario HTML. Un formulario es una sección que permite a los usuarios ingresar y enviar datos.

`class="form"`: Este atributo class proporciona una clase CSS llamada "form" a este formulario. Las clases CSS se utilizan para aplicar estilos específicos a elementos HTML. En este caso, la clase "form" se puede utilizar para aplicar estilos personalizados al formulario.

`method="post"`: El atributo method define cómo se enviarán los datos del formulario al servidor. En este caso, se utiliza el método HTTP POST. Cuando un formulario se envía con POST, los datos se incluyen en el cuerpo de la solicitud HTTP, lo que es adecuado para enviar datos confidenciales o grandes cantidades de información.

`action="./php/create.php"`: El atributo action especifica la URL a la que se enviarán los datos del formulario una vez que se haya completado y enviado el formulario. En este caso, los datos del formulario se enviarán al archivo PHP llamado "create.php" ubicado en el directorio "php" en la raíz del proyecto. El archivo "create.php" se encargará de procesar los datos enviados desde este formulario y realizar las acciones necesarias, como guardarlos en una base de datos.

Conclusion: Esta línea de código crea un formulario HTML que utiliza el método POST para enviar datos a un archivo PHP llamado "create.php" cuando el usuario complete y envíe el formulario. El archivo "create.php" procesará los datos ingresados y realizará acciones específicas, como almacenarlos en una base de datos.
