<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="icon/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRExkeKNybn68IpLX1kdQdyYUjHEzspFX-oNg&usqp=CAU">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>SISTEMAS OPERATIVOS</title>
    
    </head>
    <body>
        <header>
            <nav class="nav">
                <div class="logo">INGENIERIA EN SISTEMAS</div>
                <ul class="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="SIO.php">Sistemas Operativos</a></li>
                <li><a href="DAW.php">Desarrollo Web</a></li>
                <li><a href="EYE.php">Electronica y Electricidad</a></li>
                </ul>
            </nav>
        </header>
        
        <h1 class="titulo">¿QUE ES UN SISTEMA OPERATIVO?</h1>
        
        <div class="conte">
        <p>Un sistema operativo es un conjunto de programas que permite manejar la memoria, disco, medios de almacenamiento de información y los diferentes periféricos o recursos de nuestra computadora, como son el teclado, el mouse, la impresora, la placa de red, entre otros.
Los periféricos utilizan un driver o controlador y son desarrollados por los fabricantes de cada equipo. Encontramos diferentes sistemas operativos como Windows, Linux, MAS OS, en sus diferentes versiones. También los teléfonos y tablets poseen un sistema operativo.
Dentro de las tareas que realiza el sistema operativo, en particular, se ocupa de gestionar la memoria de nuestro sistema y la carga de los diferentes programas, para ello cada programa tiene una prioridad o jerarquía y en función de la misma contará con los recursos de nuestro sistema por más tiempo que un programa de menor prioridad.
El sistema operativo se ocupa también de correr procesos. Llamamos proceso a la carga en memoria de nuestro programa, si no está cargado en memoria nuestro programa simplemente “no corre”.</p><br><br>
        </div>
        
        <img id="img-center" src="sio1.jpg" height="300vh" >
        
        <h1 class="titulo">OBJETIVOS DE LOS SISTEMAS OPERATIVOS</h1>
        
        <div class="obje">
        <p>Los principales objetivos de los sistemas operativos son:
            <un>
            <li>Abstraer al usuario de la complejidad del hardware: El sistema operativo hace que el ordenador sea más fácil de utilizar.</li>
            <li>Eficiencia: Permite que los recursos del ordenador se utilicen de la forma más eficiente posible. Por ejemplo, se deben optimizar los accesos a disco para acelerar las operaciones de entrada y salida.</li>
            <li>Permitir la ejecución de programas: Cuando un usuario quiere ejecutar un programa, el sistema operativo realiza todas las tareas necesarias para ello, tales como cargar las instrucciones y datos del programa en memoria, iniciar dispositivos de entrada/salida y preparar otros recursos</li>
            <li>Acceder a los dispositivos entrada/salida: El sistema operativo suministra una interfaz homogénea para los dispositivos de entrada/salida para que el usuario pueda utilizar de forma más sencilla los mismos.</li>
            <li>Proporcionar una estructura y conjunto de operaciones para el sistema de archivos.</li>
            <li>Controlar el acceso al sistema y los recursos: en el caso de sistemas compartidos, proporcionando protección a los recursos y los datos frente a usuarios no autorizados.</li>
            <li>Detección y respuesta ante errores: El sistema operativo debe prever todas las posibles situaciones críticas y resolverlas, si es que se producen.</li>
            <li>Capacidad de adaptación: Un sistema operativo debe ser construido de manera que pueda evolucionar a la vez que surgen actualizaciones hardware y software.</li>
            <li>Gestionar las comunicaciones en red: El sistema operativo debe permitir al usuario manejar con facilidad todo lo referente a la instalación y uso de las redes de ordenadores.</li>
            <li>Permitir a los usuarios compartir recursos y datos: Este aspecto está muy relacionado con el anterior y daría al sistema operativo el papel de gestor de los recursos de una red.</li>
            </un>
        </p>
        </div>
        
        <h1 class="tip">TIPOS DE SISTEMAS OPERATIVOS</h1>
        <p>Ahora vamos a clasificar los sistemas operativos en base a su estructura, servicios que suministran y por su forma.</p>
        <br><br>
        <img id="tipos" src="tipos.png.png" height="300vh">
        
        <h1 class="est">SISTEMAS OPERATIVOS POR SUS ESTRUCTUTRAS</h1>
        <div class="estru">
        <p>
            <un>
            <li>Monolíticos: Es la estructura de los primeros sistemas operativos, consistía en un solo programa desarrollado con rutinas entrelazadas q ue podían llamarse entre sí. Por lo general, eran sistemas operativos hechos a medida, pero difíciles de mantener</li>
            <li>Jerárquicos: Conforme las necesidades de los usuarios aumentaron, los sistemas operativos fueron creciendo en complejidad y funciones. Esto llevó a que se hiciera necesaria una mayor organización del software del sistema operativo, dividiéndose en partes más pequeñas, diferenciadas por funciones y con una interfaz clara para interoperar con los demás elementos. Un ejemplo de este tipo de sistemas operativos fue MULTICS. </li>
            <li>Máquina Virtual: El objetivo de los sistemas operativos es el de integrar distintos sistemas operativos dando la sensación de ser varias máquinas diferentes. Presentan una interfaz a cada proceso, mostrando una máquina que parece idéntica a la máquina real subyacente. Estas máquinas no son máquinas extendidas, son una réplica de la máquina real, de manera que en cada una de ellas se pueda ejecutar un sistema operativo diferente, que será el que ofrezca la máquina extendida al usuario. VMware y VM/CMS son ejemplos de este tipo de sistemas operativos.</li>
            <li>Microkernel o Cliente-Servidor: El modelo del núcleo de estos sistemas operativos distribuye las diferentes tareas en porciones de código modulares y sencillas. El objetivo es aislar del sistema, su núcleo, las operaciones de entrada/salida, gestión de memoria, del sistema de archivos, etc. Esto incrementa la tolerancia a fallos, la seguridad y la portabilidad entre plataformas de hardware. Algunos ejemplos son MAC OS X o AIX.</li> 
                </un>
            </p><br><br>
        </div>
        
        <footer>
            <nav class="footer">
                <div class="logo">
                    <br><br>INGENIERIA EN SISTEMAS
                    <br><br>ISAMARA ANGUIANO URESTI
                    <br><br>PROYECTO FINAL
                    <br><br>DESARROLLO DE APLICACIONES WEB
                    <br><br>UNIVERSIDAD JOSE VASCONCELOS<br><br>
                </div>
            </nav>
        </footer>
        
        
        
    
        
        
    </body>
</html>
