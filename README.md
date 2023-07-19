## Estado actual 7/11/2023 :

se puede agregar horas de entrada y salida
pero aun no hay formulario para hacerlo de forma automatica y grafica
hay conexion ala base de datos , pero faltan las operaciones crud.

hay formularios de registro e inicio de sesion pero no hay
forma de iniciar sesion o registrar un nuevo usuario en la base de datos
los campos del formulario de registro ya cuentan con las funciones
necesarias para validar los campos antes de almacenarlos en la base de datos.

ya hay forma de navegar entre las distintas paginas existentes
utilizando la variable super global $_GET.

tambien respecto a los calculos de las horas trabajadas
aun falta ir acumulando el total por dia para obtener un total del periodo.

sera necesario implementar las sessiones para poder proteger el contenido
y de esta manera sea inaccesible para usuarios que aun no esten
registrados en el sistema de inicio de sesion.

tambien falta implementar las pantallas o paginas de consultas o views
en las cuales visualizaremos los registros almacenados en la base de datos.


## 07/17/2023 9:15 AM Ultima actualizacion

<p>
    La actualizacion puede ser a nivel readme "mas comun mente en el dia a dia"<br>
    a nivel estructura de carpetas y archivos "muy frecuente ala par con las tareas diarias"<br>
    a nivel de clases , metodos y funciones extremadamente frecuente en conjunto con las otras dos
    modificaciones diarias.
</p>

## Lista de carpetas que componen la esturctura de archivos y carperas del programa

<ol>
    <li>
        404
        <br>
        <ul>
            <li>404.html</li>
        </ul>
    </li>
    <li>
        agregarUnNuevoUsuario
        <br>
        <ol>
            <li>
                estiloDelFormulario
                <ul>
                    <li>edf.css</li>
                </ul>
            </li>
            <li>aunu.html</li>
        </ol>
    </li>
    <li>
        calcularSalarioDiario
        <br>
        <ul>
            <li>Csd.php</li>
            <li>
                <p>
                    Cuando vemos que <br>
                    un nombre de archivo <br>
                    lleva como letra inicial<br>
                    una mayuscula.<br>
                    <br>
                    <br>
                    esto significa que el<br> 
                    archivo contiene el codigo<br> 
                    correspondiente a una clase.
                </p>
            </li>
        </ul>
    </li>
    <li>
        cambiarPagina
        <ul>
            <li>Cp.php</li>
        </ul>
    </li>
    <li>
        conexionAlaBaseDeDatos
        <ul>
            <li>Calbdd.php</li>
        </ul>
    </li>
    <li>
        entrada
        <ul>
            <li>.htaccess</li>
            <li>index.php</li>
        </ul>
    </li>
    <li>
        iniciarsesion
        <ul>
            <li>is.html</li>
        </ul>
    </li>
    <li>
        mediosDeComunicacion
        <ol>
            <li>
                imagenes
                <ul>
                    <li>conexionExitosa.png</li>
                </ul>
            </li>
        </ol>
    </li>
    <li>
        obtenerLaConexionAlaBaseDeDatos
        <ul>
            <li>olcalbdd.php</li>
        </ul>
    </li>
    <li>
        probarConexionAlaBaseDeDatos
        <ul>
            <li>Pcalbdd.php</li>
        </ul>
    </li>
    <li>
        validacionDeCampos
        <ul>
            <li>Vdc.php</li>
        </ul>
    </li>
    <li>
        validarRegistro
        <ul>
            <li>vr.php</li>
        </ul>
    </li>
</ol>

## Como Obtener informacion de un usuario nuevo ,
## dentro de php.test ?

<p>
    Para recopilar los datos de un usuario nuevo es tan sencillo como 
    <br> llevar al usuario al formulario de registro ubicado <br>
    en el archivo de registro "aunu.html"<br>
    El cual una vez rellenado correctamente te redirigira al archivo<br>
    "vr.php" el cual utilizando la variable super global $_POST<br>
    validara y almacenara la informacion recopilada desde el formulario de registro.
</p>

## Como llevo un usuario al formulario de registro ?

<p>
    Una vez dentro del dominio local php.test
    <div>
        <img title="localhost" src="./mediosDeComunicacion/imagenes/screen1.png ">
    </div>
    <br> dirigete ala carpeta entrada , da click <br>
    en ella y despues da click en el enlace que dice <br>
    registrar un nuevo usuario.
    <div>
        <img title="localhost" src="./mediosDeComunicacion/imagenes/screen2.png ">
    </div>
</p>

## Como crear el dominio local php.test ?

<p>
    Para crear un dominio local tendremos que modificar dos<br>
    archivos :<br>
    <ul>
        <li>httpd-vhosts</li>
        <li>Y</li>
        <li>hosts</li>
    </ul>
</p>

<p>
    Sin entrar en muchos detalles por que ese no es el <br>
    objetivo de este readme, el primer archivo de la lista<br>
    es en el cual tu indicaras la ubicacion y nombre de dominio de tu proyecto.
</p>

<p>
    En el segundo le agregamos una ip para que la url funcione en el servidor web
</p>

<h6>Utiliza google para informarte mas sobre los archivos anteriormente mencionados <br>
y para obtener el conocimiento necesario sobre la implementacion de dominios virtuales.</6>

## 07/19/2023 9:34 AM Ultima actualizacion

<h2>Modulo para el almacenamiento de registro de usuarios</h2>