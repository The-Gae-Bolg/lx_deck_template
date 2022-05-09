<?php 

//Datos dinámicos - NO SE TOCAN -
$slab_ids = getSlabIds();
$slab_progress = getSlabsData("slab_progress"); 
$slab_act1 = getSlabsData("act_1");
$slab_act2 = getSlabsData("act_2");
$slab_act3 = getSlabsData("act_3");



//-- Nombre del deck --
$deckTitle = "Excel práctico para principiantes: su eficiencia y su uso";

//-- Características --
$duration = "16 horas";
$level = "Básico";
$focus = "Metodología activa";
$learningExp = "Autodirigido";
$requirements = "Computadora (laptop o de escritorio), Excel 2010 o superior.";

//-- Experto --
$exp_name = "Nombre del experto";
$exp_desc = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ratione, quo voluptatem magnam enim jk architecto labore consequuntur deserunt impedit soluta dignissimos vero atque aperiam amet autem numquam veritatis, est nam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor.";
$exp_position = "Posición del experto";
$exp_linkedin = "https://stackoverflow.com/questions/13955667/disabled-href-tag";
$exp_has_linkedin = true;
$exp_portfolio = "https://stackoverflow.com/questions/13955667/disabled-href-tag";
$exp_has_portfolio = true;
/*
   FORMATO:
   * Ruta del archivo -> img/nombre-del-archivo
 */
$exp_pic = "img/exp_placeholder.png";
$exp_competences = [
    "Competence #1",
    "Competence #2",
    "Competence #3",
    "Competence #4",
    "Competence #5"
];

// -- Imagen Home --
/*
   FORMATO:
   * Ruta del archivo -> img/nombre-del-archivo
 */
$homeImage = "img/intro.jpg";

//-- Inicio --
$deckIntro = "<strong>Excel práctico para principiantes: su eficiencia y su uso </strong>es un programa de 16 horas de aprendizaje en línea.<br><br>

A través de sus actividades, contenidos temáticos y momentos de valoración, se ha creado para ti una experiencia de aprendizaje que te permitirá fortalecer la competencia:  <strong>Utilizo Excel básico para facilitar las actividades en distintas áreas laborales y personales.</strong>.<br><br>
Un programa con las características del que estás a punto de iniciar, te ofrece las herramientas necesarias para responder a los más altos estándares en tu desempeño.";

//-- Bienvenida --
$deckWelcome = "¡Recibe la más cordial bienvenida!";

//-- Portadas de slabs -- 
/* 
   FORMATO:
   * Ruta del archivo -> img/topics/nombre-del-archivo
*/
$slabImages = [
    "img/topics/1278695300.png", //Slab 1
    "img/topics/1249379723.png", //Slab 2
    "img/topics/1189508207.png", //Slab 3
    "img/topics/827632110.png", //Slab 4
    "img/topics/635969404.png", //Slab 5
    "img/topics/815162958.png", //Slab 6
    "img/topics/1252881112.png", //Slab 7
    "img/topics/320665028.png", //Slab 8
    "img/topics/690548296.png", //Slab 9
    "img/topics/473143106.png" //Slab 10
];

//-- Títulos de slabs (Index) --
$slabHeadings = [
    "Mi primera interacción con Excel", //Slab 1
    "Libros, hojas de cálculo y celdas", //Slab 2
    "Fórmulas y funciones básicas", //Slab 3
    "Estilos y formatos de datos", //Slab 4
    "Ajustes a una hoja de cálculo", //Slab 5
    "Gráficos básicos", //Slab 6
    "Ajuste de vistas en hojas de cálculo", //Slab 7
    "Múltiples libros y hojas de cálculo", //Slab 8
    "Administración de datos", //Slab 9
    "Seguridad y trabajo colaborativo" //Slab 10
];

// -- Nombre de slabs --
$slabTitles = [
    "Mi primera interacción con Excel", //Slab 1
    "Libros, hojas de cálculo y celdas", //Slab 2
    "Fórmulas y funciones básicas", //Slab 3
    "Estilos y formatos de datos", //Slab 4
    "Ajustes a una hoja de cálculo", //Slab 5
    "Gráficos básicos", //Slab 6
    "Ajuste de vistas en hojas de cálculo", //Slab 7
    "Múltiples libros y hojas de cálculo", //Slab 8
    "Administración de datos", //Slab 9
    "Seguridad y trabajo colaborativo" //Slab 10
];

//-- Metas de aprendizaje --
$slabGoals = [
    "Conozco el entorno de trabajo de Excel y los conceptos principales de uso para interactuar con la herramienta en sus labores o actividades personales.",
    "Manejo los conceptos de libro, hojas de cálculo y celdas para realizar interacciones en Excel.",
    "Uso las principales fórmulas y funciones de Excel, con el fin de poder realizar cálculos de manera más ágil.",
    "Manipulo los estilos y formatos en una hoja de datos de Excel para dar una apariencia más estilizada a mis documentos.",
    "Manipulo una hoja de cálculo para ocultar filas y columnas, así como buscar y reemplazar datos en Excel.",
    "Utilizo los diferentes tipos de gráficos y estilos para mejorar la comprensión de los datos en Excel.",
    "Manejo de los paneles y los tipos de pantalla en Excel para ajustar las vistas en una hoja de cálculo.",
    "Manipulo múltiples libros y hojas de cálculo para hacer más eficiente el trabajo en Excel.",
    "Ejecuto la administración de la información en un documento de Excel para mostrar los datos de manera coherente.",
    "Configuro la seguridad en hojas y libros de cálculo en Excel para proteger la información o trabajar en equipo de una manera confiable."
];

$imgGoals = [
    null,
    null,
    "img/act/iStock-1189508207.jpg",	
    "img/act/iStock-827632110.jpg",
    "img/act/iStock-635969404.jpg",
    "img/act/iStock-1189508207.jpg",
    "img/act/iStock-1252881112.jpg",
    'img/act/iStock-1320665028.jpg',
    'img/act/iStock-635969404.jpg',
    'img/act/iStock-473143106.jpg'
];

//-- Tipos de introducción --
/* 
   FORMATO:
   * Indicar tipo de introducción -> video o texto
*/ 
$slabIntroType = [
    "video", //Slab 1
    "text", //Slab 2
    "text", //Slab 3
    "video", //Slab 4
    "text", //Slab 5
    "video", //Slab 6
    "text", //Slab 7
    "video", //Slab 8
    "text", //Slab 9
    "text" //Slab 10
];

//Material de introducción
/* 
   FORMATO: 
   * Ruta del archivo -> assets/videos/
*/ 
$slabIntro = [
/*Slab 1*/  [
                'assets/videos/Excel_Slab1_intro.mp4'
            ],
/*Slab 2*/  [
                'En este Slab aprenderás a manejar los libros, hojas de cálculo y celdas en Excel. Es importante dominar estos conceptos, ya que son la base para poder empezar a emplear la herramienta de manera óptima.
                <br><br>
                Aquí encontrarás toda la información y ayuda que necesitas para lograr dominar los temas principales. La interacción será por medio de videos, apoyado con lecturas y ejemplos, con el objetivo de reforzar lo aprendido.'
            ], 
/*Slab 3*/  [
                '<iframe style="border-radius: 1.5rem" height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/4d505abb-56e2-444e-96cb-38889eecec42?dark=true"></iframe>'
            ],
/*Slab 4*/  [
                'assets/videos/Excel_Slab4_intro.mp4'
            ],                
/*Slab 5*/  [
                'Nos alegra mucho que seas parte del Slab <strong>“Ajustes a una hoja de Excel”</strong>, donde aprenderás a modificar y ocultar filas y columnas, además de buscar y reemplazar datos en una hoja de cálculo. Estos conocimientos te servirán para editar libros de Excel ya creados, y ajustarlos a nuevas necesidades. 
                <br><br>
                A continuación, encontrarás toda la información necesaria, así como ligas y videos para complementar tu aprendizaje. Al cierre de este Slab, resolverás un caso de estudio que te ayudará a validar lo aprendido.
                <br><br>
                Estamos seguros que será de tu completo agrado. ¡Comencemos!'
            ],
/*Slab 6*/  [
                'assets/videos/Excel_Slab6_intro.mp4'
            ],
/*Slab 7*/  [
                'Bienvenido al Slab <strong>“Ajuste de la vista en las hojas de cálculo”</strong>. Aquí aprenderás a modificar las vistas de los documentos que realices. También sabrás cómo manejar los paneles y los tipos de pantalla para ajustar las vistas de una hoja de cálculo en Excel.
                <br><br>
                La manera en la cual aprenderás, será por medio de videos y lecturas que te permitirán sacar el mayor provecho a tu aprendizaje ¡Enhorabuena, empecemos!'
            ],
/*Slab 8*/  [
                'assets/videos/Excel_Slab8_intro.mp4'
            ],
/*Slab 9*/  [
                'Nos alegra mucho que seas parte de este Slab, donde aprenderás a gestionar los datos en Excel.  Aquí aprenderás a usar filtros, ordenar datos, validarlos y eliminar duplicados. Lo anterior te ayudará a dar sentido y a mejorar la integridad de los datos. Todo esto lo aprenderás mediante lecturas y videos interactivos.
                <br><br>
                Bienvenido a este Slab ¡Estamos seguros que te encantará!'
            ],
/*Slab 10*/ [
                'Estamos muy contentos de que seas parte de este Slab, donde aprenderás a manejar la seguridad y el trabajo colaborativo dentro de Excel. Esta es una funcionalidad nueva que te permite trabajar desde cualquier parte del mundo y en conjunto con varias personas, con el único requisito de tener acceso a internet. Todo lo anterior lo aprenderás mediante lecturas y videos interactivos.
                <br><br>
                ¡Estamos seguros de que lo disfrutarás mucho!'
            ]
];

//-- Banner --
/* 
   FORMATO: 
   * Ruta del archivo -> assets/img/act/
*/ 
$banner = [
    null, //Slab 1
    "img/act/iStock-1249379723.jpg", //Slab 2
    null, //Slab 3
    null, //Slab 4
    null, //Slab 5
    null, //Slab 6
    null, //Slab 7
    null, //Slab 8
    null, //Slab 9
    null //Slab 10
];

//-- Tipos de Materiales --
/* 
   FORMATO:
   * Indicar tipo de material -> audio, video o texto
*/ 
$slabMaterialsType = [
    "text", //Slab 1
    "text", //Slab 2
    "text", //Slab 3
    "text", //Slab 4
    "text", //Slab 5
    "text", //Slab 6
    "text", //Slab 7
    "text", //Slab 8
    "text", //Slab 9
    "text" //Slab 10
];

//-- Materiales --
$slabMaterials = [
/*Slab 1*/  [
                'Conoce los principales conceptos de Excel:<br><br>
                <a href="https://www.youtube.com/watch?v=0hGS45mbBRg" class="estilo-x tracker btn btn-primary" target="_blank">https://www.youtube.com/watch?v=0hGS45mbBRg</a> 
                <br/><br/>
                <a href="http://www.agro.unlpam.edu.ar/licenciatura/informatica/sept/Apuntes%20excel.pdf" class="estilo-x tracker btn btn-primary" target="_blank">http://www.agro.unlpam.edu.ar/licenciatura/informatica/sept/Apuntes%20excel.pdf</a>
                <br/><br/>
                <a href="https://www.youtube.com/watch?v=zv-hH1UKdlg" class="estilo-x tracker btn btn-primary" target="_blank">https://www.youtube.com/watch?v=zv-hH1UKdlg</a> 
                <br/><br/>
                ¿Deseas complementar tus conocimientos? Da clic aquí:
                <br><br>
                <a href="assets/videos/Creando_una_hoja_de_cálculo_nueva.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Creando una hoja de cálculo nueva.mp4</a> 
                <br><br>
                <a href="assets/videos/Excel. Mi primera interacción con Excel" class="estilo-x tracker btn btn-primary" target="_blank">Excel. Mi primera interacción con Excel.mp4</a>'
            ], 
/*Slab 2*/  [
                'Aprende a manejar los conceptos de libro, hoja y celdas:<br><br>
                <a href="https://exceltotal.com/libros-hojas-y-celdas/" class="estilo-x tracker btn btn-primary" target="_blank">https://exceltotal.com/libros-hojas-y-celdas/</a> 
                <br/><br/>
                <a href="https://www.aboutespanol.com/partes-de-la-hoja-de-calculo-1790981" class="estilo-x tracker btn btn-primary" target="_blank">https://www.aboutespanol.com/partes-de-la-hoja-de-calculo-1790981</a>
                <br/><br/>
                Te recomendamos revisar el siguiente video para reforzar lo aprendido:
                <br><br>
                <a href="https://www.youtube.com/watch?v=U-l7ri8j4uk" class="estilo-x tracker btn btn-primary" target="_blank">https://www.youtube.com/watch?v=U-l7ri8j4uk</a> 
                <br><br>
                ¿Deseas complementar tus conocimientos? Da clic aquí:
                <br><br>
                <ol>
                    <li>Función autocompletar: <br><a href="assets/videos/1. La función de autocompletado en Excel.mp4" class="estilo-x tracker btn btn-primary" target="_blank">La función de autocompletar en Excel.mp4</a></li>
                    <li>Función deshacer: <br><a href="assets/videos/2. Cómo deshacer un cambio en Excel.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo deshacer un cambio en Excel.mp4</a></li>
                    <li>Agregar comentarios: <br><a href="assets/videos/3. Añadir comentarios a una hoja de Excel.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Añadir comentarios a una hoja de Excel.mp4</a></li>
                    <li>Guardar y exportar:  <br><a href="assets/videos/4. Cómo guardar y exportar hojas de cálculo.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo guardar y exportar hojas de cálculo.mp4</a></li>
                    <li>Opciones de impresión: <br><a href="assets/videos/5. Opciones de impresión para hojas de cálculo.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Opciones de impresión para hojas de cálculo.mp4</a></li>
                </ol>'
            ],
/*Slab 3*/  [
                'Aprende a usar fórmulas y funciones en Excel<br><br>
                <a href="https://www.cofide.mx/blog/excel-crea-formulas-y-funciones" class="estilo-x tracker btn btn-primary" target="_blank">https://www.cofide.mx/blog/excel-crea-formulas-y-funciones</a> 
                <br/><br/>
                <a href="https://support.microsoft.com/es-es/office/informaci%C3%B3n-general-sobre-f%C3%B3rmulas-en-excel-ecfdc708-9162-49e8-b993-c311f47ca173" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/informaci%C3%B3n-general-sobre-f%C3%B3rmulas-en-excel-ecfdc708-9162-49e8-b993-c311f47ca173</a>
                <br><br>
                <a href="https://support.microsoft.com/es-es/office/funciones-de-excel-por-orden-alfab%C3%A9tico-b3944572-255d-4efb-bb96-c6d90033e188" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/funciones-de-excel-por-orden-alfab%C3%A9tico-b3944572-255d-4efb-bb96-c6d90033e188</a> 
                <br><br>
                ¿Deseas complementar tus conocimientos? Da clic aquí:
                <br><br>
                <ol>
                    <li>Crear fórmulas básicas en Excel: <br><a href="assets/videos/Creando fórmulas sencillas en Excel.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Creando fórmulas sencillas en Excel.mp4</a></li>
                    <li>Conocer la barra de fórmulas: <br><a href="assets/videos/La barra de fórmulas en Excel.mp4" class="estilo-x tracker btn btn-primary" target="_blank">La barra de fórmulas en Excel.mp4</a></li>
                    <li>Cómo copiar fórmulas a celdas adyacentes: <br><a href="assets/videos/Copiando fórmulas a celdas adyacentes.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Copiando fórmulas a celdas adyacentes.mp4</a></li>
                    <li>Uso de la función IF y de los operadores relacionales:  <br><a href="assets/videos/Usando funciones IF y operadores relacionales.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Usando funciones IF y operadores relacionales.mp4</a></li>
                    <li>Uso de la función BUSCARV: <br><a href="assets/videos/Obtener datos de una tabla con la función BUSCARV.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Obtener datos de una tabla con la función BUSCARV.mp4</a></li>
                    <li>Uso de la familia de funciones CONTAR.SI <br><a href="assets/videos/Cómo utilizar la familia de funciones CONTAR.SI.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo utilizar la familia de funciones CONTAR.SI.mp4</a></li>
                </ol>'
            ], 
/*Slab 4*/  [
                'Conoce como aplicar  los estilos a una celda u hoja de cálculo:<br><br>
                <a href="https://blogdeuninformatico.com/estilos-y-formatos-de-celda-en-excel/" class="estilo-x tracker btn btn-primary" target="_blank">https://blogdeuninformatico.com/estilos-y-formatos-de-celda-en-excel/</a> 
                <br/><br/>
                <a href="https://support.microsoft.com/es-es/office/aplicar-crear-o-quitar-un-estilo-de-celda-472213bf-66bd-40c8-815c-594f0f90cd22" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/aplicar-crear-o-quitar-un-estilo-de-celda-472213bf-66bd-40c8-815c-594f0f90cd22</a>
                <br/><br/>
                Refuerza  el tema de tablas en Excel: 
                <br><br>
                <a href="https://support.microsoft.com/es-es/office/descripci%C3%B3n-general-de-las-tablas-de-excel-7ab0bb7d-3a9e-4b56-a3c9-6c94334e492c" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/descripci%C3%B3n-general-de-las-tablas-de-excel-7ab0bb7d-3a9e-4b56-a3c9-6c94334e492c</a> 
                <br><br>
                ¿Deseas complementar tus conocimientos? Da clic aquí:
                <br><br>
                <ol>
                    <li>Uso de los estilos y fuentes: <br><a href="assets/videos/Estilos y fuentes tipográficas.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Estilos y fuentes tipográficas.mp4</a></li>
                    <li>Cómo ajustar y alinear texto: <br><a href="assets/videos/Ajustes y alineación de texto.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Ajustes y alineación de texto.mp4</a></li>
                    <li>Aplicación de bordes:  <br><a href="assets/videos/Bordes en una hoja de cálculo.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Bordes en una hoja de cálculo.mp4</a></li>
                    <li>Conocer los diferentes formatos de datos:   <br><a href="assets/videos/Explorando los formatos de datos.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Explorando los formatos de datos.mp4</a></li>
                    <li>Uso de los formatos condicionales:  <br><a href="assets/videos/Usando formatos condicionales.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Usando formatos condicionales.mp4</a></li>
                    <li>Uso y aplicación de tablas:  <br><a href="assets/videos/Trabajo con tablas.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Trabajo con tablas.mp4</a></li>
                    <li>Insertar imágenes y formas:  <br><a href="assets/videos/Cómo insertar imágenes y formas.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo insertar imágenes y formas.mp4</a></li>
                </ol>'
            ], 
/*Slab 5*/  [
                'Aprende a aplicar los estilos a una celda u hoja de cálculo:<br><br>
                <a href="https://www.ufasta.edu.ar/wp-content/uploads/2016/12/03-Manejo-de-Filas-Columnas-Celdas-y-Rangos.pdf" class="estilo-x tracker btn btn-primary" target="_blank">https://www.ufasta.edu.ar/wp-content/uploads/2016/12/03-Manejo-de-Filas-Columnas-Celdas-y-Rangos.pdf</a> 
                <br/><br/>
                <a href="https://eltiotech.com/capitulo-6-domina-filas-y-columnas-de-excel/" class="estilo-x tracker btn btn-primary" target="_blank">https://eltiotech.com/capitulo-6-domina-filas-y-columnas-de-excel/</a>
                <br/><br/>
                Refuerza el tema de anchos y altos de columnas en Excel:
                <br><br>
                <a href="https://support.microsoft.com/es-es/office/cambiar-el-ancho-de-las-columnas-y-el-alto-de-las-filas-72f5e3cc-994d-43e8-ae58-9774a0905f46#:~:text=Seleccione%20la%20fila%20o%20filas,despu%C3%A9s%2C%20haga%20clic%20en%20Aceptar" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/cambiar-el-ancho-de-las-columnas-y-el-alto-de-las-filas...</a> 
                <br><br>
                ¿Deseas complementar tus conocimientos? Da clic aquí:
                <br><br>
                <ol>
                    <li>Modificar filas y columnas: <br><a href="assets/videos/Cómo modificar filas y columnas.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo modificar filas y columnas.mp4</a></li>
                    <li>Ocultar filas y columnas: <br><a href="assets/videos/Ajustes y alineación de texto.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Ajustes y alineación de texto.mp4</a></li>
                    <li>Buscar y reemplazar: <br><a href="assets/videos/Cómo buscar y reemplazar datos en una hoja de cálculo.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo buscar y reemplazar datos en una hoja de cálculo.mp4</a></li>
                </ol>'
            ], 
/*Slab 6*/  [
                'Aprende a crear gráficos básicos en Excel:<br><br>
                <a href="https://www.xataka.com/basics/como-hacer-grafica-basica-excel" class="estilo-x tracker btn btn-primary" target="_blank">https://www.xataka.com/basics/como-hacer-grafica-basica-excel</a> 
                <br/><br/>
                <a href="https://excelyvba.com/graficos-excel-guia-completa/" class="estilo-x tracker btn btn-primary" target="_blank">https://excelyvba.com/graficos-excel-guia-completa/</a>
                <br><br>
                <a href="https://support.microsoft.com/es-es/office/crear-un-gr%C3%A1fico-de-principio-a-fin-0baf399e-dd61-4e18-8a73-b3fd5d5680c2" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/crear-un-gr%C3%A1fico-de-principio-a-fin-0baf399e-dd61-4e18-8a73-b3fd5d5680c2</a> 
                <br><br>
                <a href="https://es.justexw.com/tutoriales/como-hacer-graficos-en-excel" class="estilo-x tracker btn btn-primary" target="_blank">https://es.justexw.com/tutoriales/como-hacer-graficos-en-excel</a> 
                <br><br>
                ¿Deseas complementar tus conocimientos? Da clic aquí:
                <br><br>
                <ol>
                    <li>Conocer los tipos de gráficos: <br><a href="assets/videos/Explorando los tipos de gráficos.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Explorando los tipos de gráficos.mp4</a></li>
                    <li>Utilización de los diseños y estilos de gráficos: <br><a href="assets/videos/Diseño y estilo de las gráficos.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Diseño y estilo de las gráficos.mp4</a></li>
                    <li>Creación de sparklines:  <br><a href="assets/videos/Creación de sparklines.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Creación de sparklines.mp4</a></li>
                </ol>'
            ], 
/*Slab 7*/  [
                'Aprende a ajustar la vista en una hoja de cálculo:<br><br>
                <a href="https://www.customguide.com/es/excel/vista-de-una-hoja-de-calculo" class="estilo-x tracker btn btn-primary" target="_blank">https://www.customguide.com/es/excel/vista-de-una-hoja-de-calculo</a> 
                <br/><br/>
                <a href="https://helpcenter.onlyoffice.com/es/onlyoffice-editors/onlyoffice-spreadsheet-editor/helpfulhints/navigation.aspx" class="estilo-x tracker btn btn-primary" target="_blank">https://helpcenter.onlyoffice.com/es/onlyoffice-editors/onlyoffice-spreadsheet-editor/helpfulhints/navigation.aspx</a>
                <br><br>
                <a href="https://www.aulafacil.com/cursos/google/hojas-de-calculo-google-docs/inmovilizar-filas-o-columnas-l13689" class="estilo-x tracker btn btn-primary" target="_blank">https://www.aulafacil.com/cursos/google/hojas-de-calculo-google-docs/inmovilizar-filas-o-columnas-l13689</a> 
                <br><br>
                <a href="https://www.youtube.com/watch?v=cTeRBr2gVrs" class="estilo-x tracker btn btn-primary" target="_blank">https://www.youtube.com/watch?v=cTeRBr2gVrs</a> 
                <br><br>
                Refuerza el tema de la movilización/inmovilización de paneles:              
                <br><br>
                <a href="https://www.youtube.com/watch?v=73vkPFaYzIo" class="estilo-x tracker btn btn-primary" target="_blank">https://www.youtube.com/watch?v=73vkPFaYzIo</a> 
                <br><br>
                <a href="https://support.microsoft.com/es-es/office/dividir-paneles-para-bloquear-filas-o-columnas-en-%C3%A1reas-independientes-de-la-hoja-de-c%C3%A1lculo-516a7001-b3ed-4122-a6bb-fd6d4a9d6434" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/dividir-paneles-para-bloquear-filas-o-columnas...</a> 
                <br><br>
                ¿Deseas complementar tus conocimientos? Da clic aquí:
                <br><br>
                <ol>
                    <li>Bloquear y desbloquear paneles: <br><a href="assets/videos/Bloqueo y desbloqueo de paneles.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Bloqueo y desbloqueo de paneles.mp4</a></li>
                    <li>Dividir la pantalla: <br><a href="assets/videos/Cómo dividir la pantalla horizontal y verticalmente.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo dividir la pantalla de Excel horizontal y verticalmente.mp4</a></li>
                    <li>Colapsar o expandir las vistas:  <br><a href="assets/videos/Cómo colapsar o expandir las vistas con esquemas.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo colapsar o expandir las vistas con esquemas.mp4</a></li>
                </ol>'
            ], 
/*Slab 8*/  [
                'Aprende  a manejar múltiples libros y hojas de cálculo: <br><br>
                <a href="https://exceltotal.com/manejo-de-hojas-en-excel-2013/" class="estilo-x tracker btn btn-primary" target="_blank">https://exceltotal.com/manejo-de-hojas-en-excel-2013/</a> 
                <br/><br/>
                <a href="https://exceltotal.com/hacer-referencia-a-celdas-de-otras-hojas-en-excel/" class="estilo-x tracker btn btn-primary" target="_blank">https://exceltotal.com/hacer-referencia-a-celdas-de-otras-hojas-en-excel/</a>
                <br><br>
                <a href="https://support.microsoft.com/es-es/office/mover-o-copiar-hojas-de-c%C3%A1lculo-o-los-datos-que-contienen-47207967-bbb2-4e95-9b5c-3c174aa69328" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/mover-o-copiar-hojas-de-c%C3%A1lculo-o-los-datos-que-contienen...</a> 
                <br><br>
                <a href="https://support.microsoft.com/es-es/office/agrupar-hojas-de-c%C3%A1lculo-4e1f7747-3d63-4fd7-8a36-838b05adc0f0" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/agrupar-hojas-de-c%C3%A1lculo-4e1f7747-3d63-4fd7-8a36-838b05adc0f0</a> 
                <br><br>
                <a href="https://edu.gcfglobal.org/es/microsoft-excel-2010/copiar-y-mover-una-hoja-de-calculo/1/" class="estilo-x tracker btn btn-primary" target="_blank">https://edu.gcfglobal.org/es/microsoft-excel-2010/copiar-y-mover-una-hoja-de-calculo/1/</a> 
                <br><br>
                <a href="https://exceltotal.com/hacer-referencia-a-celdas-de-otras-hojas-en-excel/" class="estilo-x tracker btn btn-primary" target="_blank">https://exceltotal.com/hacer-referencia-a-celdas-de-otras-hojas-en-excel/</a> 
                <br><br>
                <a href="https://www.youtube.com/watch?v=31iSPlAauHo" class="estilo-x tracker btn btn-primary" target="_blank">https://www.youtube.com/watch?v=31iSPlAauHo</a> 
                <br><br>
                ¿Deseas complementar tus conocimientos? Da clic aquí:
                <br><br>
                <ol>
                    <li>Administrar hojas de un libro: <br><a href="assets/videos/Cómo agregar, renombrar y borrar hojas en un libro.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo agregar, renombrar y borrar hojas en un libro.mp4</a></li>
                    <li>Enlazar y hojas de cálculo: <br><a href="assets/videos/Cómo ligar libros y hojas de cálculo con fórmulas.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo ligar libros y hojas de cálculo con fórmulas.mp4</a></li>
                    <li>Mantenimiento de ligas: <br><a href="assets/videos/Localizando y manteniendo enlaces en Excel.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Localizando y manteniendo enlaces en Excel.mp4</a></li>
                    <li>Mostrar diferentes libros en pantalla: <br><a href="assets/videos/Mostrar múltiples libros en pantalla.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Mostrar múltiples libros en pantalla.mp4</a></li>
                    <li>Administrar hojas de cálculo: <br><a href="assets/videos/Mover, copiar y agrupar hojas de cálculo.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Mover, copiar y agrupar hojas de cálculo.mp4</a></li>
                </ol>'
            ], 
/*Slab 9*/  [
                'Aprende a gestionar los datos en Excel: <br><br>
                <a href="https://help.highbond.com/helpdocs/add-ins-excel/14/user-guide/es/Content/working_with_data/sort_filter_data.htm" class="estilo-x tracker btn btn-primary" target="_blank">https://help.highbond.com/helpdocs/add-ins-excel/14/user-guide/es/Content/working_with_data/sort_filter_data.htm</a> 
                <br/><br/>
                <a href="https://exceltotal.com/filtros-en-excel/" class="estilo-x tracker btn btn-primary" target="_blank">https://exceltotal.com/filtros-en-excel/</a>
                <br><br>
                <a href="https://www.gerencie.com/para-que-sirven-los-filtros-en-excel.html" class="estilo-x tracker btn btn-primary" target="_blank">https://www.gerencie.com/para-que-sirven-los-filtros-en-excel.html</a> 
                <br><br>
                <a href="https://guiastematicas.bibliotecas.uc.cl/c.php?g=990565&p=7816616" class="estilo-x tracker btn btn-primary" target="_blank">https://guiastematicas.bibliotecas.uc.cl/c.php?g=990565&p=7816616</a> 
                <br><br>
                ¿Deseas complementar tus conocimientos? Da clic aquí:
                <br><br>
                <ol>
                    <li>Para eliminar datos duplicados:  <br><a href="assets/videos/Cómo eliminar datos duplicados en Excel.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo eliminar datos duplicados en Excel.mp4</a></li>
                    <li>El uso de filtros: <br><a href="assets/videos/Cómo usar filtros en Excel.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo usar filtros en Excel.mp4</a></li>
                    <li>Combinación de datos: <br><a href="assets/videos/Dividiendo y combinando datos de columnas.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Dividiendo y combinando datos de columnas.mp4</a></li>
                    <li>Para ordenar de datos: <br><a href="assets/videos/Ordenando datos en Excel.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Ordenando datos en Excel.mp4</a></li>
                    <li>Para validar datos: <br><a href="assets/videos/Usar herramientas de validación de datos.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Usar herramientas de validación de datos.mp4</a></li>
                </ol>'
            ], 
/*Slab 10*/ [
                'Aprende seguridad y trabajo colaborativo en Excel: <br><br>
                <a href="https://www.softzone.es/2017/03/29/excel-2016-ya-permite-trabajo-colaborativo-traves-office-365/" class="estilo-x tracker btn btn-primary" target="_blank">https://www.softzone.es/2017/03/29/excel-2016-ya-permite-trabajo-colaborativo-traves-office-365/</a> 
                <br/><br/>
                <a href="https://support.microsoft.com/es-es/office/compartir-el-libro-de-excel-con-otros-usuarios-8d8a52bb-03c3-4933-ab6c-330aabf1e589" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/compartir-el-libro-de-excel-con-otros-usuarios-8d8a52bb-03c3-4933-ab6c-330aabf1e589</a>
                <br><br>
                <a href="https://support.microsoft.com/es-es/office/bloquear-o-desbloquear-%C3%A1reas-espec%C3%ADficas-de-una-hoja-de-c%C3%A1lculo-protegida-75481b72-db8a-4267-8c43-042a5f2cd93a" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/bloquear-o-desbloquear-%C3%A1reas-espec%C3%ADficas-de-una-hoja...</a> 
                <br><br>
                <a href="https://support.microsoft.com/es-es/office/proteger-un-archivo-de-excel-7359d4ae-7213-4ac2-b058-f75e9311b599" class="estilo-x tracker btn btn-primary" target="_blank">https://support.microsoft.com/es-es/office/proteger-un-archivo-de-excel-7359d4ae-7213-4ac2-b058-f75e9311b599</a> 
                <br><br>
                ¿Deseas complementar tus conocimientos? Da clic aquí:
                <br><br>
                <ol>
                    <li>Para poder compartir libros:  <br><a href="assets/videos/Cómo compartir libros de Excel.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo compartir libros de Excel.mp4</a></li>
                    <li>Cómo proteger hojas y bloquear celdas: <br><a href="assets/videos/Cómo proteger hojas y bloquear celdas.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Cómo proteger hojas y bloquear celdas.mp4</a></li>
                    <li>Para proteger libros: <br><a href="assets/videos/Protegiendo libros en Excel.mp4" class="estilo-x tracker btn btn-primary" target="_blank">Protegiendo libros en Excel.mp4</a></li>
                </ol>'
            ],  
];

//-- Transcripciones --
/* 
   FORMATO:
   * Texto de la transcripción (en caso de haber)
*/ 
$slabTranscriptions = [
    
];

//-- Referencias --
/* 
   FORMATO:
   * Texto de la transcripción (en caso de haber)
*/ 
$slabReferencias = [
/*Slab1*/   [
                'Aprendiendoando ( 2012, 21 de agosto). <i>Clase 1 Microsoft Excel 2010 - Introducción</i> [Video]. Youtube.<br> <a href="https://www.youtube.com/watch?v=0hGS45mbBRg" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=0hGS45mbBRg</a>', 
                'Aula Aprendo. (S.f. ). <i>Conociendo Excel.</i> <br> <a href="https://www.aulaprendo.com/conociendo-excel" class="estilo-ref" target="_blank">https://www.aulaprendo.com/conociendo-excel</a>',
                'Javier Mendoza NIC. (2020, 27 de julio). <i>2 Creando una hoja de cálculo nueva</i> [Video]. Youtube.<br> <a href="https://www.youtube.com/watch?v=BMTkAt3Posc" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=BMTkAt3Posc</a>',
                'Sin Autores. (2018). Apuntes de Excel. Recuperado Febrero 20, 2022, de:<br> <a href="http://www.agro.unlpam.edu.ar/licenciatura/informatica/sept/Apuntes excel.pdf" class="estilo-ref" target="_blank">http://www.agro.unlpam.edu.ar/licenciatura/informatica/sept/Apuntes excel.pdf</a>'
            ],
/*Slab2*/   [
                'Aula Aprendo. (S.f. ). <i>Conociendo Excel.</i> <br> <a href="https://www.aulaprendo.com/conociendo-excel" class="estilo-ref" target="_blank">https://www.aulaprendo.com/conociendo-excel</a>', 
                'Ayudas Ofimáticas. (2019, 30 de enero). <i>CONCEPTOS BÁSICOS DE EXCEL : LIBROS, HOJAS, CELDAS</i> [Video]. Youtube.<br> <a href="https://www.youtube.com/watch?v=U-l7ri8j4uk" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=U-l7ri8j4uk</a>',
                'Cuesta, Y. (2019). <i>Partes de la hoja de cálculo.</i> Recuperado el 23 de Febrero 2022 de:<br> <a href="https://www.aboutespanol.com/partes-de-la-hoja-de-calculo-1790981" class="estilo-ref" target="_blank">https://www.aboutespanol.com/partes-de-la-hoja-de-calculo-1790981</a>',
                'Excel Total (2022). QUÉ ES UN LIBRO DE EXCEL (2022). Recuperado el 23 de Febrero 2022 de:<br> <a href="https://exceltotal.com/libros-hojas-y-celdas/" class="estilo-ref" target="_blank">https://exceltotal.com/libros-hojas-y-celdas/</a>'
            ],
/*Slab3*/   [
                'Aula Aprendo. (S.f. ). <i>Conociendo Excel.</i> <br> <a href="https://www.aulaprendo.com/conociendo-excel" class="estilo-ref" target="_blank">https://www.aulaprendo.com/conociendo-excel</a>', 
                'Cofide. (2022). <i>Excel crea fórmulas y funciones.</i> <br> <a href="https://www.cofide.mx/blog/excel-crea-formulas-y-funciones" class="estilo-ref" target="_blank">https://www.cofide.mx/blog/excel-crea-formulas-y-funciones</a>',
                'Microsoft Support. (s.f.) <i>Información general sobre fórmulas en Excel.</i> Recuperado el 10 de Noviembre de 2021 de:<br> <a href="https://support.microsoft.com/es-es/office/informaci%C3%B3n-general-sobre-f%C3%B3rmulas-en-excel-ecfdc708-9162-49e8-b993-c311f47ca173" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/informaci%C3%B3n-general-sobre-f%C3%B3rmulas-en-excel-ecfdc708-9162-49e8-b993-c311f47ca173</a>',
                'Microsoft Support. (s.f.). Funciones de Excel (por orden alfabético). Recuperado el 28 de diciembre de 2021 de:<br> <a href="https://support.microsoft.com/es-es/office/funciones-de-excel-por-orden-alfab%C3%A9tico-b3944572-255d-4efb-bb96-c6d90033e188" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/funciones-de-excel-por-orden-alfab%C3%A9tico-b3944572-255d-4efb-bb96-c6d90033e188</a>'
            ],
/*Slab4*/   [
                'Aula Aprendo. (S.f. ). <i>Conociendo Excel.</i> <br> <a href="https://www.aulaprendo.com/conociendo-excel" class="estilo-ref" target="_blank">https://www.aulaprendo.com/conociendo-excel</a>', 
                'Blog de un Informático. (s.f.). <i>Estilos y formatos de celda en Excel.</i> Recuperado el  11 de Noviembre de 2019 de: <br> <a href="https://blogdeuninformatico.com/estilos-y-formatos-de-celda-en-excel/" class="estilo-ref" target="_blank">https://blogdeuninformatico.com/estilos-y-formatos-de-celda-en-excel/</a>',
                'Microsoft Support. (s.f.). <i>Aplicar, crear o quitar un estilo de celda.</i> Recuperado el 21 de Mayo de 2021 de:<br> <a href="https://support.microsoft.com/es-es/office/aplicar-crear-o-quitar-un-estilo-de-celda-472213bf-66bd-40c8-815c-594f0f90cd22" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/aplicar-crear-o-quitar-un-estilo-de-celda-472213bf-66bd-40c8-815c-594f0f90cd22</a>',
                'Microsoft Support. (s.f.). <i>Descripción general de las tablas de Excel.</i> Recuperado el  3 de Mayo de 2021 de:<br> <a href="https://support.microsoft.com/es-es/office/descripci%C3%B3n-general-de-las-tablas-de-excel-7ab0bb7d-3a9e-4b56-a3c9-6c94334e492c" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/descripci%C3%B3n-general-de-las-tablas-de-excel-7ab0bb7d-3a9e-4b56-a3c9-6c94334e492c</a>'
            ],
/*Slab5*/   [
                'Aula Aprendo. (S.f. ). <i>Conociendo Excel.</i> <br> <a href="https://www.aulaprendo.com/conociendo-excel" class="estilo-ref" target="_blank">https://www.aulaprendo.com/conociendo-excel</a>', 
                'El Tío Tech. (2021). <i>Capítulo 6: Domina el manejo de Filas y Columnas en Excel.</i> <br> <a href="https://eltiotech.com/capitulo-6-domina-filas-y-columnas-de-excel/" class="estilo-ref" target="_blank">https://eltiotech.com/capitulo-6-domina-filas-y-columnas-de-excel/</a>',
                'Microsoft Support. (s.f.). <i>Cambiar el ancho de las columnas y el alto de las filas.</i> Recuperado el 7 de Abril de 2021 de:<br> <a href="https://support.microsoft.com/es-es/office/cambiar-el-ancho-de-las-columnas-y-el-alto-de-las-filas-72f5e3cc-994d-43e8-ae58-9774a0905f46#:~:text=Seleccione%20la%20fila%20o%20filas,despu%C3%A9s%2C%20haga%20clic%20en%20Aceptar" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/cambiar-el-ancho-de-las-columnas-y-el-alto-de-las-filas-72f5e3cc-994d-43e8-ae58-9774a0905f46#:~:text=Seleccione%20la%20fila%20o%20filas,despu%C3%A9s%2C%20haga%20clic%20en%20Aceptar</a>',
                'Sin autor. (s.f.) <i>Manejo de filas, columnas, celdas y rangos.</i> Recuperado de:<br> <a href="https://www.ufasta.edu.ar/wp-content/uploads/2016/12/03-Manejo-de-Filas-Columnas-Celdas-y-Rangos.pdf" class="estilo-ref" target="_blank">https://www.ufasta.edu.ar/wp-content/uploads/2016/12/03-Manejo-de-Filas-Columnas-Celdas-y-Rangos.pdf</a>'
            ], 
/*Slab6*/   [
                'Aula Aprendo. (S.f. ). <i>Conociendo Excel.</i> <br> <a href="https://www.aulaprendo.com/conociendo-excel" class="estilo-ref" target="_blank">https://www.aulaprendo.com/conociendo-excel</a>',
                'Arranz, Q. (2018). <i>Gráficos en Excel - La guía más completa.</i> <br> <a href="https://excelyvba.com/graficos-excel-guia-completa/" class="estilo-ref" target="_blank">https://excelyvba.com/graficos-excel-guia-completa/</a>',
                'Fernández, Y. (2021). <i>Cómo hacer una gráfica básica con Excel.</i> <br> <a href="https://www.xataka.com/basics/como-hacer-grafica-basica-excel" class="estilo-ref" target="_blank">https://www.xataka.com/basics/como-hacer-grafica-basica-excel</a>',
                'Just EXW (2020). <i>Cómo hacer gráficos en Excel.</i> <br> <a href="https://es.justexw.com/tutoriales/como-hacer-graficos-en-excel" class="estilo-ref" target="_blank">https://es.justexw.com/tutoriales/como-hacer-graficos-en-excel</a>',
                'Microsoft  Support. (s.f.). <i>Crear un gráfico de principio a fin.</i> Recuperado el 27 de Octubre de 2021 de: <br> <a href="https://support.microsoft.com/es-es/office/crear-un-gr%C3%A1fico-de-principio-a-fin-0baf399e-dd61-4e18-8a73-b3fd5d5680c2" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/crear-un-gr%C3%A1fico-de-principio-a-fin-0baf399e-dd61-4e18-8a73-b3fd5d5680c2</a>'
            ],
/*Slab7*/   [
                'Aula Aprendo. (S.f. ). <i>Conociendo Excel.</i> <br> <a href="https://www.aulaprendo.com/conociendo-excel" class="estilo-ref" target="_blank">https://www.aulaprendo.com/conociendo-excel</a>',
                'Aula Fácil. (s.f.). <i>Inmovilizar filas o columnas.</i> <br> <a href="https://www.aulafacil.com/cursos/google/hojas-de-calculo-google-docs/inmovilizar-filas-o-columnas-l13689" class="estilo-ref" target="_blank">https://www.aulafacil.com/cursos/google/hojas-de-calculo-google-docs/inmovilizar-filas-o-columnas-l13689</a>',
                'Custom Guide. (2021). <i>Vista de una Hoja de Cálculo.</i> <br> <a href="https://www.customguide.com/es/excel/vista-de-una-hoja-de-calculo" class="estilo-ref" target="_blank">https://www.customguide.com/es/excel/vista-de-una-hoja-de-calculo</a>',    
                'darkjoro. (2014, 15 de enero). <i>Cómo ajustar hoja de calculo de Excel a la página de impresión</i> [Video]. Youtube. <br> <a href="https://www.youtube.com/watch?v=cTeRBr2gVrs" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=cTeRBr2gVrs</a>',
                'Educatutos. (2018, 31 de marzo). <i>INMOVILIZAR FILA y COLUMNA en hoja de cálculo de Google Drive #EducaTutos</i> [Video]. Youtube. <br> <a href="https://www.youtube.com/watch?v=73vkPFaYzIo" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=73vkPFaYzIo</a>',
                'Microsoft Support. (s.f.). <i>Dividir paneles para bloquear filas o columnas en áreas independientes de la hoja de cálculo.</i> Recuperado el  13 de Mayo de 2021 de: <br> <a href="https://support.microsoft.com/es-es/office/dividir-paneles-para-bloquear-filas-o-columnas-en-%C3%A1reas-independientes-de-la-hoja-de-c%C3%A1lculo-516a7001-b3ed-4122-a6bb-fd6d4a9d6434" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/dividir-paneles-para-bloquear-filas-o-columnas-en-%C3%A1reas-independientes-de-la-hoja-de-c%C3%A1lculo-516a7001-b3ed-4122-a6bb-fd6d4a9d6434</a>',
                'Only Office. (S.f.). <i>Configuración de la vista y herramientas de navegación.</i> <br> <a href="https://helpcenter.onlyoffice.com/es/onlyoffice-editors/onlyoffice-spreadsheet-editor/helpfulhints/navigation.aspx " class="estilo-ref" target="_blank">https://helpcenter.onlyoffice.com/es/onlyoffice-editors/onlyoffice-spreadsheet-editor/helpfulhints/navigation.aspx </a>'
            ],
/*Slab8*/   [
                'ADNDC TUTORIALES. (2019, 28 de julio). <i>EXCEL - MANEJO DE HOJAS Y LIBROS</i> [Video]. <br> <a href="https://www.youtube.com/watch?v=31iSPlAauHo" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=31iSPlAauHo</a>',
                'Aula Aprendo. (S.f. ). <i>Conociendo Excel.</i> <br> <a href="https://www.aulaprendo.com/conociendo-excel" class="estilo-ref" target="_blank">https://www.aulaprendo.com/conociendo-excel</a>',
                'Excel Total (2022). <i>MANEJO DE HOJAS EN EXCEL 2013</i> (2022). Recuperado el 23 de Febrero 2022 de: <br> <a href="https://exceltotal.com/manejo-de-hojas-en-excel-2013/" class="estilo-ref" target="_blank">https://exceltotal.com/manejo-de-hojas-en-excel-2013/</a>',
                'Excel Total (2022). <i>HACER REFERENCIA A CELDAS DE OTRAS HOJAS EN EXCEL.</i> Recuperado el 23 de Febrero 2022 de: <br> <a href="https://exceltotal.com/hacer-referencia-a-celdas-de-otras-hojas-en-excel/" class="estilo-ref" target="_blank">https://exceltotal.com/hacer-referencia-a-celdas-de-otras-hojas-en-excel/</a>',
                'GCF Aprende libre. (s.f.) <i>Copiar y mover una hoja de cálculo.</i> <br> <a href="https://edu.gcfglobal.org/es/microsoft-excel-2010/copiar-y-mover-una-hoja-de-calculo/1/" class="estilo-ref" target="_blank">https://edu.gcfglobal.org/es/microsoft-excel-2010/copiar-y-mover-una-hoja-de-calculo/1/</a>',
                'Microsoft Support. (s.f.). <i>Mover o copiar hojas de cálculo o los datos que contienen.</i> Recuperado el  12 de Marzo de 2021 de: <br> <a href="https://support.microsoft.com/es-es/office/mover-o-copiar-hojas-de-c%C3%A1lculo-o-los-datos-que-contienen-47207967-bbb2-4e95-9b5c-3c174aa69328" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/mover-o-copiar-hojas-de-c%C3%A1lculo-o-los-datos-que-contienen-47207967-bbb2-4e95-9b5c-3c174aa69328</a>',
                'Microsoft Support. (s.f.). <i>Agrupar hojas de cálculo.</i> Recuperado el  27 de Mayo de 2021 de: <br> <a href="https://support.microsoft.com/es-es/office/agrupar-hojas-de-c%C3%A1lculo-4e1f7747-3d63-4fd7-8a36-838b05adc0f0" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/agrupar-hojas-de-c%C3%A1lculo-4e1f7747-3d63-4fd7-8a36-838b05adc0f0</a>'
            ],
/*Slab9*/   [
                'Aula Aprendo. (S.f. ). <i>Conociendo Excel.</i> <br> <a href="https://www.aulaprendo.com/conociendo-excel" class="estilo-ref" target="_blank">https://www.aulaprendo.com/conociendo-excel</a>',
                'Alonso, O. (2020). <i>¿Para qué sirven los filtros en Excel?.</i> <br> <a href="https://www.gerencie.com/para-que-sirven-los-filtros-en-excel.html" class="estilo-ref" target="_blank">https://www.gerencie.com/para-que-sirven-los-filtros-en-excel.html</a>',
                'Diligent. (2022, 31 de enero). <i>Ordenamiento y filtración de datos.</i> <br> <a href="https://help.highbond.com/helpdocs/add-ins-excel/14/user-guide/es/Content/working_with_data/sort_filter_data.htm" class="estilo-ref" target="_blank">https://help.highbond.com/helpdocs/add-ins-excel/14/user-guide/es/Content/working_with_data/sort_filter_data.htm</a>',
                'Excel Total (2022). <i>FILTROS EN EXCEL.</i> Recuperado el 23 de Febrero 2022 de: <br> <a href="https://exceltotal.com/filtros-en-excel/" class="estilo-ref" target="_blank">https://exceltotal.com/filtros-en-excel/</a>',
                'Pontificia Universidad Católica de Chile. (2021, 10 de marzo). <i>Ordenar datos a través de filtro - Taller de Excel.</i> <br> <a href="https://guiastematicas.bibliotecas.uc.cl/c.php?g=990565&p=7816616" class="estilo-ref" target="_blank">https://guiastematicas.bibliotecas.uc.cl/c.php?g=990565&p=7816616</a>'
            ],
/*Slab10*/   [
                'Aula Aprendo. (S.f. ). <i>Conociendo Excel.</i> <br> <a href="https://www.aulaprendo.com/conociendo-excel" class="estilo-ref" target="_blank">https://www.aulaprendo.com/conociendo-excel</a>',
                'Onieva, D. (2017, 29 de marzo). <i>Excel 2016 ya permite el trabajo colaborativo a través de Office 365.</i> <br> <a href="https://www.softzone.es/2017/03/29/excel-2016-ya-permite-trabajo-colaborativo-traves-office-365/" class="estilo-ref" target="_blank">https://www.softzone.es/2017/03/29/excel-2016-ya-permite-trabajo-colaborativo-traves-office-365/</a>',
                'Microsoft Support. (s.f.). <i>Compartir el libro de Excel con otros usuarios.</i> Recuperado el 30 de Abril de 2021 de: <br> <a href="https://support.microsoft.com/es-es/office/compartir-el-libro-de-excel-con-otros-usuarios-8d8a52bb-03c3-4933-ab6c-330aabf1e589" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/compartir-el-libro-de-excel-con-otros-usuarios-8d8a52bb-03c3-4933-ab6c-330aabf1e589</a>',
                'Microsoft Support. (s.f.). <i>Bloquear o desbloquear áreas específicas de una hoja de cálculo protegida.</i> Recuperado el 18 de Junio de 2021 de: <br> <a href="https://support.microsoft.com/es-es/office/bloquear-o-desbloquear-%C3%A1reas-espec%C3%ADficas-de-una-hoja-de-c%C3%A1lculo-protegida-75481b72-db8a-4267-8c43-042a5f2cd93a" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/bloquear-o-desbloquear-%C3%A1reas-espec%C3%ADficas-de-una-hoja-de-c%C3%A1lculo-protegida-75481b72-db8a-4267-8c43-042a5f2cd93a</a>',
                'Microsoft Support. (s.f.). <i>Proteger un archivo de Excel.</i> Recuperado el 28 de Junio de 2021 de: <br> <a href="https://support.microsoft.com/es-es/office/proteger-un-archivo-de-excel-7359d4ae-7213-4ac2-b058-f75e9311b599" class="estilo-ref" target="_blank">https://support.microsoft.com/es-es/office/proteger-un-archivo-de-excel-7359d4ae-7213-4ac2-b058-f75e9311b599</a>'
            ],
];

/* 
   FORMATO:
   * Ruta del archivo -> assets/docs/transcripts/nombre-del-archivo
 */
$slabTranscriptionDoc = [
    "assets/docs/transcripts/SCRUM_S1.pdf",
    "assets/docs/transcripts/SCRUM_S2.pdf",
    "assets/docs/transcripts/SCRUM_S3.pdf",
    "assets/docs/transcripts/SCRUM_S4.pdf",
    "assets/docs/transcripts/SCRUM_S5.pdf",
    "assets/docs/transcripts/SCRUM_S6.pdf",
    "assets/docs/transcripts/SCRUM_S7.pdf",
    "assets/docs/transcripts/SCRUM_S8.pdf",
    "assets/docs/transcripts/SCRUM_S9.pdf",
    "assets/docs/transcripts/SCRUM_S10.pdf"

]; 

// ** ACTIVIDADES **

//-- Instrucciones Descubre --
$act1_Instructions = [
    //Slab 1 
    [  
        "Lee atentamente los conceptos básicos de Excel.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 2 
    [     
        "Observa detalladamente el video sobre <strong>la primera interacción con Excel</strong> y contesta correctamente a los reactivos que aparecerán."
    ],
    //Slab 3
    [   
        "Lee atentamente los conceptos clave sobre <strong>fórmulas y funciones en Excel</strong> y relaciónalo con la definición correcta.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 4
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <strong>estilos y formatos de datos.</strong>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala ya que la necesitarás más adelante."
    ],
    //Slab 5
    [   
        "Observa detalladamente el video sobre <strong>ajustes a una hoja de cálculo en Excel</strong> y contesta correctamente a los reactivos que aparecerán."
    ],
    //Slab 6
    [   
        "Lee atentamente los conceptos clave sobre <strong>gráficas en Excel.</strong>",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala ya que la necesitarás más adelante."
    ],
    //Slab 7
    [   
        "Observa detalladamente el video sobre <strong>ajustes de la vista en las hojas de cálculo en Excel</strong> y contesta correctamente a los reactivos que aparecerán."
    ],
    //Slab 8
    [   
        "Observa detalladamente el video sobre <strong>el manejo de múltiples libros y hojas de cálculo</strong> y contesta correctamente a los reactivos que aparecerán.",
    ],
    //Slab 9
    [   
        "Lee atentamente los conceptos clave sobre <strong>la gestión de los datos.</strong>",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala ya que la necesitarás más adelante."
    ],
    //Slab 10
    [   
        "Observa detalladamente el video sobre seguridad y trabajo colaborativo y contesta correctamente a los reactivos que aparecerán."
    ]
];

//-- Herramientas Actividad Descibre --
$act1_tools = [
/* Slab 1 */'<iframe src="https://lxlab.h5p.com/content/1291605514085572948/embed" aria-label="Slab 1_Estilos y formatos de datos" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 2 */'<iframe width="470" height="404" src="https://edpuzzle.com/embed/media/624b6fdb906e6042c0da6e2d" frameborder="0" allowfullscreen></iframe>',
/* Slab 3 */'<iframe src="https://lxlab.h5p.com/content/1291605567828035148/embed" aria-label="Slab3_Fórmulas y funciones básicas" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 4 */'<iframe src="https://lxlab.h5p.com/content/1291605571039519918/embed" aria-label="slab4_Estilos y formatos de datos" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 5 */'<iframe width="470" height="404" src="https://edpuzzle.com/embed/media/624b7d0e3ad61f42b23a830c" frameborder="0" allowfullscreen></iframe>',
/* Slab 6 */'<iframe src="https://lxlab.h5p.com/content/1291605580242862948/embed" aria-label="Slab6_Gráficos básicos" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 7 */'<iframe width="470" height="404" src="https://edpuzzle.com/embed/media/624c8121576a8342f8e26f91" frameborder="0" allowfullscreen></iframe>',
/* Slab 8 */'<iframe width="470" height="404" src="https://edpuzzle.com/embed/media/624c81dd544bb34306f98d9a" frameborder="0" allowfullscreen></iframe>',
/* Slab 9 */'<iframe src="https://lxlab.h5p.com/content/1291606247399969428/embed" aria-label="Slab9_Administración de datos" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 10*/'<iframe width="470" height="404" src="https://edpuzzle.com/embed/media/624c889fd89ffa42f176e7ca" frameborder="0" allowfullscreen></iframe>'
];

//-- Instrucciones Actividad Demuestra --
/*
    FORMATO:
   * Cada paso completo es un arreglo
   * Un paso está compuesto por:
        * "instruction" -> La instrucción principal
        * "list" -> (Opcional) Una lista compuesta por items 
                 ->  Es un arreglo de arreglos de "item"
        * "subinstruction_list" -> (Opcional) Lista de subpasos individuales
                                -> Cada subaso es un arreglo, que tiene un elemento "subinstruction"
                                -> (Opcional) Los subpasos pueden tener extras, como botones o enlaces, marcados como "subinstruction_extra"
        * "instruction_extra" -> (Opcional) Enlaces, botones, imágenes o videos
                              -> Se necesita agregar el elemento HTML completo
                              -> Cada "instruction_extra" que se agregue necesitará la clase "tracker" como atributo
                              -> Si el "instruction_extra" es un botón, necesitará la clase "btn btn-outline-primary"
                              -> Si el botón es imagen, necesita especificar la ruta -> img/logos/nombre-del-archivo
    
 */
$act2_instructions = [
    //SLAB 1
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>la primera interacción con Excel.</strong>",
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea.",
            ],
            //Paso 3
            [
                "instruction" => "Guarda el enlace del mismo, ya que lo compartirás más adelante.",
            ],
            //Paso 4
            [
                "case_title" => "Ayuda a Irving",
                "img" => "img/act/iStock-942689060.jpg",
                "text" => "<div>¡Bienvenido! Eres parte de una red de voluntarios de la ONG “Ayuda sin límites”, la cual se encarga de atender y dar apoyo a adultos mayores y a niños de escasos recursos. Las actividades principales que realiza la organización son: atención médica, asesoría psicológica y apoyo en la educación. Para la atención médica y asesoría psicológica, cuentan con especialistas y alianzas con hospitales de vanguardia. En el caso del apoyo a la educación, cuentan con maestros y voluntarios que se encargan de dar asesorías en diferentes áreas, como matemáticas, español, informática, entre otros.
                    <br><br>
                    Irving González, quien se desempeña como coordinador de la red de voluntarios, detectó que los adultos mayores tienen un déficit de conocimiento en el área de informática, lo cual representa un área de oportunidad que la organización puede cubrir. Irving, junto con el equipo educativo, planearon una estrategia de capacitación para solventar y ayudar a los adultos mayores en está área, y decidieron iniciar con el tema de Excel.  
                    <br><br>
                    Irving te ha seleccionado a ti, para que lo ayudes en la realización del material de introducción a Excel. El reto que te ha lanzado es el de crear un video que explique qué es y cuál es el propósito de Excel, así como la utilidad de aprender a manejar este programa; todo esto en el contexto de los adultos mayores. El video consistirá de breves fragmentos, en los que les puedas demostrar cómo se usa el software.  Los fragmentos deben incluir: 
                    <br><br>    
                        <ul>
                            <li>Cómo abrir Excel.</li>
                            <li>Cómo hacer operaciones básicas: suma, resta, multiplicación y división.</li>
                            <li>Qué es un libro de trabajo y cómo moverse en él.</li>
                            <li>Guardar y poner nombre a un documento.</li>
                        </ul>
                        Antes de terminar, Irving te pide una última solicitud: te indica que el video y cada parte que lo componga sea motivador, dinámico y claro, para que los adultos mayores lo entiendan y quieran aprender más. El video debe tener una duración mínima de 15 minutos y deberá estar montado en Youtube para ser accedido desde cualquier parte del mundo. 
                        </div>",
                "diagnostic" =>"" 
            ],
        ],
    ],
    //SLAB 2
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>el manejo de libros, hojas de cálculo y celdas.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea.",
            ],
            //Paso 3
            [
                "instruction" => "Guarda el archivo del proyecto, ya que lo compartirás más adelante.",
            ],
            //paso 4
            [
                "case_title" => "Corpo Vitale",
                "img" => "img/act/iStock-958939994.jpg",
                "text" => "<div>Corpo Vitale es una empresa de bienestar físico y emocional. La empresa opera desde hace 2 años, y durante este tiempo ha logrado incrementar sus clientes hasta llegar a poco más de dos mil. Hoy en día, a Corpo Vitale se les está complicando obtener los expedientes de cada cliente, debido a que toda su documentación está en papel, y no se cuenta con una base de datos en formato digital.
                    <br><br>
                    Dado este escenario, la dirección general ha decidido que es importante concentrar la documentación e información de sus clientes de manera digital, específicamente en Excel. En primer lugar, porque será mucho más fácil dar seguimiento puntual a cada cliente, y en segundo, porque quieren ser una empresa socialmente responsable con el medio ambiente y no almacenar innecesariamente tanto papel.  
                    <br><br>
                    La empresa te solicita que les ayudes a empezar a formar su agenda digital de clientes. La agenda debe contar con los datos básicos, como: nombre, apellido paterno, apellido materno, teléfono y correo electrónico de cada cliente. Específicamente, la petición que te hace la empresa es que generes esta nueva agenda en un libro de Excel y que nombres la hoja de trabajo como “Clientes”. 
                    <br><br>
                    Deberás dar un formato profesional a esta agenda; es decir, dar color al fondo de las celdas para que muestren la separación entre una sección y otra. También te solicita utilizar las opciones de formato de letras: color, tamaño, y estilo, para que la información sea entendible y agradable a la vista. Finalmente, debes verificar que todo el documento sea claro y organizado.
                    <br><br>
                    Apóyate del documento <a href='assets/docs/tools/demuestra/Listado_VOutcom.docx'>Listado.doc</a> para empezar a crear la agenda digital de clientes. Una vez que hayas finalizado, guarda el archivo con el nombre “Slab#_TuNombre_Fecha.xls” ya que éste será tu entregable.
                    </div>",
                "diagnostic" =>"" 
            ],
        ],
    ],
    //SLAB 3
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>las fórmulas y funciones básicas.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea.", 
                
            ],
            //Paso 3
            [
                "instruction" => "Guarda el archivo del proyecto, ya que lo compartirás más adelante.",

            ],
            //paso 4
            [
                "case_title" => "El reporte de Héctor",
                "img" => "img/act/iStock-1029427722.jpg",
                "text" => "<div>Héctor Santos lleva 2 meses de haber ingresado al área de finanzas en la empresa INDESCAL, organización dedicada a construir escaleras para la industria inmobiliaria. Él es responsable de toda la parte contable de la compañía: impuestos, hojas de balance, gastos por pagar y cuentas por cobrar. 
                    <br><br>
                    La compañía ha crecido muy rápidamente en los últimos 6 meses y actualmente ha logrado abrir 10 nuevas plantas industriales, establecidas en las 3 principales capitales de la República Mexicana:  
                    <br><br>
                    <ol style='text-align:left;'>
                        <li>
                            <span>Ciudad de México:</span>
                            <ul>
                                <li>Central</li>
                                <li>Abastecimientos</li>
                                <li>Insumos</li>
                            </ul>
                        </li>
                        <li>
                            <span>Monterrey:</span>
                            <ul>
                                <li>Operación central</li>
                                <li>Reabastecimientos</li>
                                <li>Ventas al menudeo</li>
                            </ul>
                        </li>
                        <li>
                            <span>Guadalajara:</span>
                            <ul>
                                <li>Operación</li>
                                <li>Reabastecimientos del sur</li>
                                <li>Pintura</li>
                                <li>Venta al mayoreo</li>
                            </ul>
                        </li>
                    </ol>
                    <br><br>
                    Por el rápido crecimiento en la empresa, los equipos de trabajo están en un estado constante de urgencia, y tienen que resolver solicitudes en tiempos reducidos para poder lograr el crecimiento y las ventas esperadas para el año en curso.
                    <br><br>
                    El jefe de Héctor le ha pedido un reporte que cuente con:
                    <br>
                    <ul>
                        <li>El cálculo total de las ventas acumuladas mensuales del año inmediato anterior, por cada planta industrial.</li>
                        <li>El promedio anual de ventas por planta de ese mismo año.</li>
                        <li>El cálculo total de las ventas anuales de toda la compañía.</li>
                    </ul>
                    <br><br>
                    Toda la información que se requiere se puede encontrar en el archivo  <a href='assets/docs/tools/demuestra/Información.docx'>“información.doc”</a>. La expectativa del jefe es que la información presentada sea clara, organizada y concreta.
                    <br><br>
                    Como este documento va a ser entregado a dos diferentes directores, Héctor debe realizar dos versiones: una con fórmulas y otra con funciones, para evitar algún problema.
                    <br><br>
                    Tu encomienda es ayudar a Héctor en la realización del reporte que le solicita su jefe.
                    </div>",
                "diagnostic" =>"" 
            ],
        ],
    ],
    //SLAB 4
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>estilos y formatos de datos.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea."
            ],
            //Paso 3
            [
                "instruction" => "Guarda el archivo del proyecto, ya que lo compartirás más adelante."
            ],
            //paso 4
            [
                "case_title" => "Digitalización de gastos para la ONG “Salvemos el planeta”",
                "img" => "img/act/iStock-1316932971.jpg",
                "text" => "<div>“Salvemos el planeta” es una organización sin fines de lucro afiliada a la Organización de las Naciones Unidas (ONU), que se encarga de hacer campañas para concientizar a la población en el cuidado de los animales y plantas a nivel mundial.
                    <br><br>
                    Esta organización no gubernamental (ONG), al recibir donaciones de la ONU, está obligada a generar reportes de sus gastos, y éstos son auditados rigurosamente.  La asociación tiene más de 20 años funcionando, y durante este tiempo todos los informes los han generado de manera manual sin ningún problema.  
                    <br><br>
                    Hoy en día, a la organización se le está complicando obtener los reportes de los gastos mensuales, debido a que su lista de proveedores ha aumentado drásticamente. Considerando lo anterior, han decidido que es importante concentrar la  documentación e información de sus gastos de manera digital. Lo anterior será de gran ayuda, ya que les permitirá tener un control interno más efectivo de sus gastos, y a la par, tener toda la información lista para cuando la ONU la solicite. 
                    <br><br>
                    Imagina que te encuentras actualmente estudiando, y para poder graduarte, tu coordinador académico te ha asignado el proyecto de digitalización de los gastos de la ONG “Salvemos el planeta”.
                    <br><br>
                    La actividad consiste en organizar digitalmente la información de los proveedores. Esta información será dividida en los campos de Nombre, Dirección y Teléfono o celular de contacto de 3 proveedores. En el archivo <a href='assets/docs/tools/demuestra/Información.docx'>“información.doc”</a> encontrarás los gastos que se han tenido con cada proveedor durante los primeros 3 meses del año.
                    <br><br>
                    Con la información de los dos puntos anteriores, genera dos tablas de Excel: una con la información de los proveedores y otra con los gastos de cada uno. Ambas tablas deberán contar con bordes gruesos como contorno y bordes suaves internamente. Los títulos deberán estar resaltados en diferente color: 
                    <br><br>
                    <ul>
                        <li>Para el listado de proveedores: el fondo en negro y la letra en blanco, tamaño 16.</li>
                        <li>Para el listado de gastos por proveedor: el fondo en azul y la letra en blanco, tamaño 14.</li>
                    </ul>   
                    Tu entregable será un archivo de Excel con ambos reportes. 
                    </div>",
                "diagnostic" =>"" 
            ],
        ],
    ],
    //SLAB 5
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>ajustes a una hoja de cálculo.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea."
            ],
            //Paso 3
            [
                "instruction" => "Guarda el enlace del mismo, ya que lo compartirás más adelante."
            ],
            //paso 4
            [
                "case_title" => "La competencia escolar",
                "img" => "img/act/iStock-1334047525.jpg",
                "text" => "<div>La escuela secundaria “Valentín Gómez Farías”, es una escuela de mucho prestigio en la ciudad de Tapachula, Chiapas. Tú eres el maestro de computación de la escuela, y todos los alumnos de tercer grado están aprendiendo en tu clase sobre el uso de nuevas herramientas tecnológicas.
                    <br><br>
                    La escuela está próxima a competir en un evento estatal, en el que se medirá a los alumnos en su dominio de la herramienta Excel. La motivación del grupo es muy alta, y David Treviño, director de la secundaria, está muy satisfecho con tu trabajo hasta ahora.  
                    <br><br>
                    Por un problema de salud, tendrás que faltar a tus clases por una semana. Para resolver esto, David y tú acuerdan que, para no perder el hilo de lo planeado en las clases, deberás generar un video en el cual le expliques a tus alumnos los temas correspondientes a la planeación de la semana que estarás ausente. El video debe incluir instrucciones para: 
                    <br><br>
                    <ul>
                        <li>
                            Hacer una tabla con los datos de las calificaciones de tus alumnos y simular movimientos en la misma tabla, tales como:
                        </li>
                        <li style ='list-style:none;'>
                            <ul>
                                <li>Borrar las 2 últimas columnas de calificaciones</li>
                                <li>Ajustar el alto del encabezado de la tabla a 50 píxeles</li>
                                <li>Inmovilizar los encabezados de la tabla</li>
                                <li>Ocultar los renglones de los alumnos que no tengan ninguna calificación de sus actividades.</li>
                            </ul>
                        </li>
                    </ul>
                    La información para que generes tus ejercicios la podrás encontrar en el archivo <a href='assets/docs/tools/demuestra/Información.xlsx'>“información.doc”</a>.
                    <br><br>
                    Sube tu video a Youtube y comparte la liga a David para que tus alumnos no pierdan el hilo durante la semana que estarás ausente. El video deberá durar como mínimo 20 minutos.
                    </div>",
                "diagnostic" =>"" 
            ],
        ]
    ],
    //SLAB 6
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>gráficos básicos.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea.", 
            ],
            //Paso 3
            [
                "instruction" => "Guarda el archivo del proyecto, ya que lo compartirás más adelante.", 
            ],
            //Paso 4
            [
                "case_title" => "Meteorología",
                "img" => "img/act/iStock-1012716752.jpg",
                "text" => "<div>¡Bienvenido! Eres parte del equipo de Meteorología del Gobierno Federal. Este equipo se hace cargo de monitorear el clima y sus fluctuaciones en el año, en los diferentes estados de la República Mexicana. Entre muchos de los propósitos de este equipo, está el de conocer cómo es que el cambio climático mundial afecta a México.
                    <br><br>
                    Al cierre de cada año, se reúnen los expertos del área para revisar tendencias regionales en el clima. Como resultado de este análisis, se generan pronósticos para que el Poder Ejecutivo pueda hacer la planeación de los proyectos anuales, así como la toma de decisiones para los proyectos que ya están en marcha. 
                    <br><br>
                    Uno de estos proyectos es la realización de los Juegos Panamericanos en las 3 principales ciudades de México, y para poder planear las actividades que se realizarán, es necesario conocer las fluctuaciones del clima observadas en los tres años anteriores. El director del equipo de Meteorología, Daniel Villegas, te da la encomienda de identificar estas fluctuaciones.
                    <br><br>
                    Utiliza el archivo <a href='assets/docs/tools/demuestra/Información-slab-6.xlsx'>“información.xlsx”</a>, el cual contiene las temperaturas promedio por mes de las 3 principales ciudades de la República Mexicana: Ciudad de México, Monterrey y Guadalajara.  
                    <br><br>
                    El informe que vas a desarrollar, debe mostrar:<br>
                        <ul>
                            <li>Las fluctuaciones de temperaturas, utilizando gráficas de columnas agrupadas.</li>
                            <li>La misma información, pero ahora con el tipo de gráficas de columnas agrupadas con varias series.</li>
                            <li>Un reporte por ciudad, apoyándote en las gráficas de barras.</li>
                        </ul>
                    Adicional a esto, redacta un análisis con tus conclusiones para cada uno de los 3 tipos de gráficas.</div>",
                "diagnostic" =>"" 
            ],
            
        ]
    ],
    //SLAB 7
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>los ajustes de la vista en las hojas de cálculo en Excel.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea."
            ],
            //Paso 3
            [
                "instruction" => "Guarda los archivos del proyecto, ya que lo compartirás más adelante.",
            ],
            //Paso 4
            [
                "case_title" => "El consultor externo",
                "img" => "img/act/iStock-635969404.jpg",
                "text" => "<div>Metales de México es una empresa dedicada a producir aceros planos y largos para abastecer a toda Latinoamérica. En la empresa, existe un área de vital importancia, que es la de inteligencia de negocios. Esta área se encarga de ver tendencias de la competencia -y de la misma empresa- para poder tomar decisiones estratégicas. 
                    <br><br>
                    El nuevo CEO de la compañía, Iván Ramírez, ha estado en varias empresas del mismo ramo, y sabe la importancia que tiene el establecer estrategias corporativas que le permitan a la empresa crecer y florecer como lo espera el consejo directivo. 
                    <br><br>
                    Para lograr este crecimiento, Iván ha decidido impulsar el área de inteligencia de negocios, no sólo en personas, sino también en tecnología y herramientas digitales que les permitan analizar rápidamente los datos. 
                    <br><br>
                    Iván te ha contratado como consultor externo para que diseñes un curso completo de Excel para toda el área de inteligencia de negocios. Al hacer un análisis de las fortalezas y debilidades del área, percibes que manejan una gran cantidad de información, la cual no es fácil de administrar ni visualizar.  
                    <br><br>
                    Ahora que has detectado una necesidad, propones realizar un video en el que se muestren las bondades del uso de los paneles y ventanas de Excel. Iván opina que es una excelente idea.
                    <br><br>
                    Él te proporciona, para empezar, la información financiera de los últimos diez años, dividida por meses. Esta información se encuentra en el archivo <a href='assets/docs/tools/demuestra/Información-slab-7.xlsx'>“información.xlsx”</a>. Lo que deberás hacer es:
                        <ul>
                            <li>Congelar el panel con el título del archivo.</li>
                            <li>Congelar la primera columna, en la cual están los meses del año.</li>
                        </ul>
                    Como esta información también será compartida con el consejo directivo, te pide que hagas el mismo ejercicio, pero con la opción que le permita mover fácilmente las ventanas congeladas.
                    <br><br>
                    El entregable que le darás a Iván serán 2 archivos, cada uno con las características solicitadas.
                    </div>",
                "diagnostic" =>"" 
            ],
        ]
    ],
    //SLAB 8
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>el manejo de múltiples libros y hojas de cálculo.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea.", 
            ],
            //Paso 3
            [
                "instruction" => "Guarda el archivo del proyecto, ya que lo compartirás más adelante.",
            ],
            //Paso 4
            [
                "case_title" => "La tarea de Catalina",
                "img" => "img/act/iStock-1364208507.jpg",
                "text" => "<div>Catalina es una chica universitaria que, desde edad muy temprana, aprendió a ser organizada y consciente de sus gastos, su tiempo y sus actividades. Esta habilidad la adquirió gracias a su madre, quien quedó viuda cuando Catalina era una bebé, y se vió obligada a llevar la casa y a su hija sin ayuda. 
                    <br><br>
                    Catalina lleva una bitácora en su agenda, en la que escribe los gastos mensuales de: comida, pasajes, mandado, renta y pago de celular. Ella dice que esta agenda es su gran aliada, porque le permite saber cuánto ha gastado y así poder estimar sus gastos futuros.  
                    <br><br>
                    Ahora que Catalina estudia el cuarto semestre de la carrera de Administración,  se encuentra cursando la materia de Educación Financiera. El catedrático de la materia les está solicitando hacer una presentación donde expliquen cómo administrarán sus gastos del próximo año, y que lo hagan en un documento digital. 
                    <br><br>
                    A Catalina le entusiasma mucho la actividad, sobre todo porque sabe que la información ya la tiene lista en su agenda. El documento digital que está trabajando Catalina lo está llamando <a href='assets/docs/tools/demuestra/Gastos.xlsx'>Gastos</a>.   
                    <br><br>
                    El profesor solicitó que la tarea sea entregada en formato de video, y que en él se muestre:
                    <br><br>
                        <ul>
                            <li>Un solo documento de Excel, con hojas que tengan nombres correspondientes a los conceptos o información que contienen.</li>
                            <li>Gastos mensuales del próximo año, usando como referencia los gastos del año anterior con el aumento de una tasa del 6% por inflación.</li>
                        </ul>
                    Para esta actividad, tú eres Catalina. Sugerimos que dupliques el archivo de gastos del año anterior, para que sobre el nuevo archivo agregues la inflación, cambies el nombre de las pestañas, y hagas una tabla con referencias en la que se muestre el resumen de cada uno de los gastos.
                    <br><br>
                    Es momento de que inicies la tarea.
                    </div>",
                "diagnostic" =>"" 
            ],
        ],
    ],
    //SLAB 9
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>la administración de datos.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea.", 
            ],
            //Paso 3
            [
                "instruction" => "Guarda el archivo del proyecto, ya que lo compartirás más adelante.",
            ],
            //Paso 4
            [
                "case_title" => "Ayuda a Mary Nelly",
                "img" => "img/act/iStock-1281173451.jpg",
                "text" => "<div>La universidad “Miguel Hidalgo y Costilla”, ubicada en las costas de Sinaloa, está apostando en este año a la modernización de todos sus procesos, entre ellos el de la captura de calificaciones. Para ello, como primer paso, está creando formatos para llevar un registro electrónico de las calificaciones de las materias que imparte su plantilla de maestros.  
                    <br><br>
                    Mary Nelly es maestra del área de Arte desde hace más de 40 años. Actualmente ofrece los cursos de “Amor al arte”, “Regionalización del arte” y “Urbanización del Arte” en la universidad. Mary es una persona de edad avanzada, a quien le gusta llevar el registro de sus alumnos de la manera tradicional, es decir, manualmente en cuadernos que ella misma ha creado con el paso del tiempo.   
                    <br><br>
                    Tú, como experto contratado por la universidad, decides entregarle a Mary Nelly y al resto de docentes de la universidad, un manual de uso de Excel aplicado al control y manejo de grupos y sus calificaciones. En este manual, explicarás cada uno de los pasos a seguir para:
                    <br><br>
                        <ul>
                            <li>Encontrar alumnos mediante filtros.</li>
                            <li>Desplegar alumnos con calificación igual a 100.</li>
                            <li>Desplegar alumnos con calificación menor a 70.</li>
                            <li>Ordenar alfabéticamente la lista.</li>
                            <li>Separar el nombre completo de los alumnos.</li>
                        </ul>
                    La información que requieres la podrás obtener de este <a href='assets/docs/tools/demuestra/Información-slab-9.xlsx'>documento.doc</a> ¡Es momento de comenzar!
                    </div>",
                "diagnostic" =>"" 
            ],
        ],
    ],
    //SLAB 10
    ["instruction_list" => 
        //Slab 1
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente estudio de caso sobre <strong>seguridad y trabajo colaborativo.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el proyecto que se te plantea.", 
            ],
            //Paso 3
            [
                "instruction" => "Guarda el enlace del mismo, ya que lo compartirás más adelante.", 
            ],
            //Paso 4
            [
                "case_title" => "Seguridad y trabajo colaborativo",
                "img" => "img/act/iStock-1271190278.jpg",
                "text" => "<div>Guillermo Ferrer ha trabajado desde hace más de diez años como administrador general en la empresa “Retrosa”, la cual se  dedica a la venta de productos e insumos para cualquier tipo de industria. Los dueños de la empresa habían sido sus jefes directos durante toda su gestión, sin embargo recientemente decidieron ceder la administración de la empresa a sus hijos.  
                    <br><br>
                    A partir de estos cambios, se ha generado un ambiente incómodo en la compañía, y Guillermo ha decidido terminar su relación laboral con Retrosa, para poder establecer una empresa propia, dedicada al mismo giro.    
                    <br><br>
                    Uno de los primeros obstáculos que tuvo Guillermo al independizarse, fue conseguir capital para poder emprender su nueva empresa. Esto lo pudo solucionar asociándose con un amigo, el cual unirá su capital para poder arrancar el negocio.
                    <br><br>
                    Otro obstáculo que Guillermo está experimentando, es con relación a la comunicación de datos dentro de la empresa, lo cual también era un área de oportunidad que había en Retrosa. Para solventar este problema, Guillermo decidió usar OneDrive y todas sus facilidades, entre ellas el uso de Excel colaborativo. De esta manera, él estará seguro de que la información que se comparta estará actualizada en el momento, y el trabajo colaborativo será mucho más sencillo.
                    <br><br>
                    Guillermo decide contratarte como experto en el uso de Excel, y se contacta contigo para que le des capacitación sobre cómo trabajar colaborativamente dentro de su empresa. Específicamente, lo que te pide es un video que incluya:
                    <br><br>
                        <ol>
                            <li>Cómo configurar a 2 personas para que puedan acceder a un mismo documento: Emilio con el perfil de administrador y a su socio con el perfil de sólo visualizar.</li>
                            <li>Mostrar cómo es que Emilio y su socio podrían trabajar al mismo tiempo en un mismo archivo.</li>
                            <li>Ver el proceso para proteger una hoja de cálculo, y que ésta no pueda ser modificada por un usuario diferente al que la creó.</li>
                            <li>Aprender a bloquear celdas, esto con la intención de no modificar datos sensibles.</li>
                            <li>Establecer una contraseña para un libro de Excel compartido, de manera que sólo pueda ser accedido por usuarios autorizados.</li>
                        </ol>
                    Tu entregable deberá ser un video en Youtube que cubra las peticiones de Guillermo. 
                    </div>",
                "diagnostic" =>"" 
            ],
        ]
    ],
];


//-- Instrucciones Actividad Autovaloración --
/*
    FORMATO:
   * Cada paso completo es un arreglo
   * "introduction" -> Un párrafo de introducción a la actividad (opcional)
   * "text" -> Determina si el texto es normal o negritas
   * "type" -> Determina el tipo de inciso (letra o número)
   * "extra" -> Agrega un hipervínculo después del paso
   * "extra_element" -> Agreaga una lista extra de instrucciones
   *                 -> Está compuesta de los siguientes elementos:
   *                    -> "extra_intro" -> Introducción a la sección
   *                    -> "extra_instruction_list" -> Lista de instrucciones
   *                    -> "extra_instruction" -> Instrucción extra
   
*/
$act3_instructions = [
    //Slab 1
    [   
        //Type: nada o letter
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En “Mi nivel de desempeño”, selecciona marcando con una <strong>X</strong> el color del semáforo cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 4
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
            
        ],
        
        
    ],
    //Slab 2
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.", 
            ],
            //Paso 3
            [
                "instruction" => "En “Mi nivel de desempeño”, selecciona marcando con una <strong>X</strong> el color del semáforo cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ]
        ],
        
    ],
    //Slab 3
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño."
            ],
            //Paso 3
            [
                "instruction" => "En “Mi nivel de desempeño”, selecciona marcando con una <strong>X</strong> el color  del semáforo cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
    ],
    //Slab 4
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra."
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño." 
            ],
            //Paso 3
            [
                "instruction" => "En “Mi nivel de desempeño”, selecciona marcando con una <strong>X</strong> el color  del semáforo cuya descripción corresponda con tu desempeño en la actividad."
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
             [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ], 
        ],
    ],
    //Slab 5
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra." 
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer tu grado de desempeño."
            ],
            //Paso 3
            [
                "instruction" => "En “Mi nivel de desempeño”, selecciona marcando con una <strong>X</strong> el color  del semáforo cuya descripción corresponda con tu desempeño en la actividad."
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final."
            ],
             //Paso 5
             [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante." 
            ], 
        ],
    ],
    //Slab 6
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.',   
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En “Mi nivel de desempeño”, selecciona marcando con una <strong>X</strong> el color  del semáforo cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
        
        
    ],
    //Slab 7
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.',   
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño",
            ],
            //Paso 3
            [
                "instruction" => "En “Mi nivel de desempeño”, selecciona marcando con una <strong>X</strong> el color del semáforo cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
        
        
    ],
    //Slab 8
    [   //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En “Mi nivel de desempeño”, selecciona marcando con una <strong>X</strong> el color del semáforo cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
             [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ], 
        ],
    ],
    //Slab 9
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.',   
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En “Mi nivel de desempeño”, selecciona marcando con una <strong>X</strong> el color  del semáforo cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
        
    ],
    //Slab 10
    [   //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                "instruction" => "Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección Demuestra.",
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En “Mi nivel de desempeño”, selecciona marcando con una <strong>X</strong> el color del semáforo cuya descripción corresponda con tu desempeño en la actividad.",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
             //Paso 5
             [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.", 
            ], 
        ],
    ],
];

//-- Herramientas autovaloración --
/* 
   FORMATO:   
   * "type" -> Indica la visualización de las herramientas:
        * "row" -> Visualización simple. La herramienta se muestra con botón
        * "col" -> Visualización alternativa. La herramienta se muestra con imagen  

   * "tool" -> Indica el link o la ruta de la herramienta
        * Ruta del archivo -> assets/docs/tools/autoval/nombre-del-archivo

   * "img" -> Indica la ruta de la imagen
        * Ruta del archivo -> img/act/nombre-del-archivo

   * "instruction" -> Breve indicación de la imagen
    */
$act3_finalization = 
[
    //Slab 1
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Excel_Slab1_AV.pdf',
    ],
    //Slab 2
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Excel_Slab2_AV.pdf',
    ],
    //Slab 3
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Excel_Slab3_AV.pdf',
    ],
    //Slab 4
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Excel_Slab4_AV.pdf',
    ],
    //Slab 5
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Excel_Slab5_AV.pdf',
    ],
    //Slab 6
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Excel_Slab6_AV.pdf',
    ],
    //Slab 7
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Excel_Slab7_AV.pdf',
    ],
    //Slab 8
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Excel_Slab8_AV.pdf',
    ],
    //Slab 9
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Excel_Slab9_AV.pdf',
    ],
    //Slab 10
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/Excel_Slab10_AV.pdf',
    ],
    
];



//-- Formulario autoevaluación --
/* 
   FORMATO:
   * Agregar el código embebido del formulario
*/
$act3_forms = 
[
/* Slab1 */    '<div data-tf-widget="Y7T9GTM4" data-tf-iframe-props="title=Formulario_Excel_S1" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab2 */    '<div data-tf-widget="farkdhyr" data-tf-iframe-props="title=Formulario_Excel_S2" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab3 */    '<div data-tf-widget="ElNzol5I" data-tf-iframe-props="title=Formulario_Excel_S3" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab4 */    '<div data-tf-widget="afpJ6DT3" data-tf-iframe-props="title=Formulario_Excel_S4" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab5 */    '<div data-tf-widget="HMIXAfEq" data-tf-iframe-props="title=Formulario_Excel_S5" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab6 */    '<div data-tf-widget="gqBMdm6y" data-tf-iframe-props="title=Formulario_Excel_S6" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab7 */    '<div data-tf-widget="RPlcSKe5" data-tf-iframe-props="title=Formulario_Excel_S7" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab8 */    '<div data-tf-widget="WoUbnJHo" data-tf-iframe-props="title=Formulario_Excel_S8" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab9 */    '<div data-tf-widget="sUufYV3H" data-tf-iframe-props="title=Formulario_Excel_S9" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab10 */   '<div data-tf-widget="aLMUU2V0" data-tf-iframe-props="title=Formulario_Excel_S10" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>'
];

//-- Cierre SLAB --
$act3_final_message = 
[
    "¡Slab finalizado! Has <strong>aprendido los conceptos elementales de Excel.</strong> Recuerda que practicar lo aprendido es crucial para lograr el dominio de cualquier tema.",
    "¡Te felicitamos por terminar este Slab! Ahora conoces más sobre <strong>los libros y hojas de cálculo en Excel.</strong>",
    "¡Lo lograste! Has completado esta experiencia de aprendizaje sobre <strong>el uso de fórmulas y funciones en Excel.</strong>",
    "¡Slab finalizado! Recuerda que practicar lo aprendido sobre <strong>los estilos y formatos de datos en Excel</strong> es crucial para dominarlo.",
    "¡Enhorabuena! 90 minutos fueron suficientes para conocer sobre <strong>los ajustes de una hoja de cálculo</strong> ¡Felicidades por terminar este Slab!",
    "¡Lo has hecho muy bien! Si quieres repasar <strong>los conceptos básicos de gráficas,</strong> puedes regresar al Slab las veces que lo desees.",
    "¡Enhorabuena! 90 minutos fueron suficientes para conocer sobre <strong>ajuste de la vista en las hojas de cálculo en Excel,</strong> ¡Felicidades por terminar este Slab!",
    "¡Slab finalizado! Has aprendido a <strong>manejar múltiples libros y hojas de cálculo.</strong> Recuerda que practicar lo aprendido es crucial para lograr el dominio de cualquier tema.",
    "¡Un paso más rumbo al éxito! Ahora sabes más sobre <strong>la gestión de los datos.</strong> Sigue aprendiendo.",
    "¡Felicidades aprendedor! Has terminado con éxito este Slab, donde conociste más acerca de la <strong>seguridad y trabajo colaborativo.</strong>",
];

//-- Cierre Deck --
$Diagnostic_message = 'Has concluido con éxito el Deck de <strong>Excel para principiantes: su eficiencia y su uso.</strong>
    <br><br>
    Esperamos que las actividades realizadas en esta experiencia de aprendizaje hayan contribuido al desarrollo de la competencia: <strong>Utiliza Excel básico para facilitar sus actividades en diferentes áreas laborales y/o personales.</strong>
    <br><br>
    Estamos seguros de que lo aprendido será de gran ayuda para tu éxito y crecimiento.'

?>