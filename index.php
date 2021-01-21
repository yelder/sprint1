
    <!-- el contenido del encabezado del sitio va aquí -->
    <?php include 'includes/header.php'; ?>

    <!-- el menú de navegación va aquí -->
    <nav id="inicio">
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="./portafolio.php">Portafolio</a></li>
            <li><a href="./curriculo.php">Currículo</a></li>
            <li><a href="#proyectos">Proyectos</a></li>
            <li><a href="#sobremi">Sobre mi</a></li>
        </ul>

    </nav>

    <!--cards -->
    <section class=new-cards id="proyectos">
        <article>
            <img src="images/google.png" alt="display-google">
            <h3>Google Screen</h3>
            <p>Página de inicio de Google elaborada con html y css, pura maquetización, no posee funcionalidad. </p>
            <a href="https://yelder.github.io/GooglePaginaPrincipal/">Acceder</a>
        </article>
        <article>
            <img src="images/fotobook.png" alt="bootstrap-project">
            <h3>FotoBook</h3>
            <p>Proyecto de red social para fotos elaborado 100% con bootstrap, se realizó la maquetización, no posee
                backend.</p>
            <a href="https://yelder.github.io/FotoBook/">Acceder</a>
        </article>
        <article>
            <img src="images/yelshop.png" alt="ecommerce-react">
            <h3>Yelshop</h3>
            <p>Proyecto de e-commerce full stack realizado con el stack MERN, 100% funcional. </p>
            <a href="https://yelshopapp.herokuapp.com/">Acceder</a>
        </article>
    </section>

    <section class="main-container" id="sobremi">
        <!-- el contenido de la barra lateral izquierda va aquí -->
        <aside class="aside1">
            <img src="images/main/19166100958.jpg" alt="formacion-academica" width="150px" height="200px">
            <h3>Formación Académica</h3>
            <p>Licenciatura en Comercio Internacional,
                Universidad Alejandro de Humboldt (2009–
                2013), Técnico en Programación Java con Android,
                Academia Cepi-base. 450 horas (2020).</p><br>
            <a href="#">Leer más...</a>
            </p>
        </aside>
        <!-- el contenido de la barra lateral derecha va aquí-->
        <aside class="aside2">
            <img src="images/main/19166100596.jpg" alt="experiencia-laboral" width="150px" height="200px">
            <h3>Experiencia Laboral</h3>
            <p>Encargado de negocio en la
                Piñatería y Juguetería Los Muchachos. S.R.L (2013-2018),
                administrativo en
                Compañía Eléctrica Nacional CORPOELEC (2012-2013)</p>
            <br>
            <a href="#">Leer más...</a>

        </aside>
        <!-- el contenido principal "sobre mi va aquí"-->

        <article class="article">
            <img src="images/main/11951444685.jpg" alt="sobre-mi" width="525px" height="200px">
            <h3>Sobre mi</h3>
            <p>Hola a todos! soy
                Yelder Alexander Da Silva Ferreira,soy técnico de Desarrollo de Aplicaciones Multiplataforma impartido
                por CEPIBASE en Barcelona. En esta formación he aprendido herramientas indispensables para el desarrollo
                de aplicaciones web como móviles.<br>
                Estoy graduado en Comercio Internacional, con experiencia de 2 años en el área administrativa y de 4
                años en ventas, poseo un gran interés en las TIC, puedo hablar con fluidez tanto español como portugués
                y tengo inglés medio</p><br>
            <a href="#">Leer más...</a>
        </article>
    </section>
     <!-- el contenido del pie de página va aquí -->
     <?php include 'includes/footer.php'; ?>
</body>


</html>