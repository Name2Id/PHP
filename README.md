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