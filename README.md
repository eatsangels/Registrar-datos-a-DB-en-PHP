# Registrar-datos-a-DB-en-PHP
Una forma de registrar datos desde php a una base de datos de Mysql
# Formulario de Registro PHP

Este proyecto consiste en un formulario de registro web implementado en PHP que permite a los usuarios ingresar información como nombre, email, teléfono y un comentario. La información se valida en el servidor y se almacena en una base de datos MySQL. El proyecto incluye también estilos CSS para una presentación agradable y funcional del formulario.

## Comenzando

Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para fines de desarrollo y pruebas.

### Prerrequisitos

Necesitas tener instalado lo siguiente para ejecutar este proyecto:

- PHP 7.4 o superior
- Servidor MySQL
- Servidor web como Apache
- phpMyAdmin para gestionar la base de datos (opcional)

### Instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/eatsangels/Registrar-datos-a-DB-en-PHP.git
   cd tu_repositorio
   ```

2. **Configurar la base de datos**
   - Abre phpMyAdmin y crea una nueva base de datos.
   - Importa el archivo `database.sql` proporcionado para crear las tablas necesarias.

3. **Configurar el archivo de conexión a la base de datos**
   - Asegúrate de ajustar los parámetros de conexión a la base de datos en `con_db.php` para que coincidan con tu entorno local.

4. **Ejecutar el servidor web**
   - Coloca el proyecto en el directorio de tu servidor web.
   - Accede al proyecto desde tu navegador utilizando `localhost/tu_repositorio`.

## Uso

Para utilizar el formulario, simplemente navega a la URL del proyecto y llena los campos requeridos. Después de enviar el formulario, los datos se validarán y se guardarán en tu base de datos MySQL. Los mensajes de éxito o error se mostrarán según el resultado de la operación.

## Construido con

- PHP - Lenguaje de programación del lado del servidor.
- MySQL - Sistema de gestión de bases de datos.
- HTML/CSS - Utilizado para estructurar y estilizar la interfaz de usuario.

## Contribuyendo

Las contribuciones son lo que hacen que la comunidad de código abierto sea un lugar tan increíble para aprender, inspirar y crear. Cualquier contribución que hagas será **muy apreciada**.

## Versionado

Usamos [SemVer](http://semver.org/) para el versionado. Para las versiones disponibles, mira los [tags en este repositorio](https://github.com/eatsangels/Registrar-datos-a-DB-en-PHP/tags).

## Autores

- **Edward Trinidad** - *Trabajo Inicial* - [eatsangels](https://github.com/eatsangels)

## Licencia

Este proyecto está licenciado bajo la Licencia XYZ - vea el archivo [LICENSE.md](LICENSE.md) para detalles.

## Agradecimientos

- A ti por usar mi codigo
- Mi esposa y mi hija.


---

### Notas adicionales:
- Asegúrate de personalizar el `README.md` con detalles específicos de tu proyecto, incluyendo la URL de tu repositorio y cualquier otro detalle que consideres importante.
- Si tu proyecto requiere configuraciones adicionales o tiene dependencias específicas, inclúyelas en la sección de instalación o configuración.

Este `README` proporciona una base sólida y clara para tu proyecto, asegurando que los usuarios y contribuyentes potenciales entiendan cómo instalarlo, ejecutarlo y contribuir a él.
