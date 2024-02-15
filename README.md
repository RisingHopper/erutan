En este _README_ vas a encontrar toda la información necesaria sobre la estructura y archivos base para la parte front de personalizaciones. 
<br>Tal y como verás en esta documentación hay algunas normas y otras recomendaciones, pero siempre se podrá añadir más carpetas y archivos siempre y cuando no rompa la estructura base que verás a continuación.<br>
El objetivo de esta estructura es tratar de realizar la mayor cantidad de componentes de una manera ordenada para no repetir código y desarrollar de una manera limpia y clara.<br>
Para variables, funciones, assets y nombres de archivo utilizamos la nomenclatura [_lowerCamelCase_](https://es.wikipedia.org/wiki/Camel_case). Únicamente exceptuamos esta nomenclatura en el nombre de archivos que estén en la carpeta _pages_ y los nombres de clases. Para estos archivos utilizaremos la nomenclatura [_kebbab-case_](https://www.freecodecamp.org/news/programming-naming-conventions-explained/#what-is-kebab-case).<br>
Intentaremos siempre llamar a las variables, funciones, y archivos con el nombre mas descriptivo posible y en inglés(excepto, en principio, el nombre de las _pages_).<br>
Siempre que podemos incluimos los archivos en local para cargarlos y poder trabajar con todas las funcionalidades en local.
# Estructura 
* [assets](#assets)
  * [css](#css)
    * [global.css](#globalCss)
  * [fonts](#fonts)
  * [images](#images)
  * [js](#js)
    * [forms](#forms)
    * [sweetAlertTemplate](#sweetAlertTemplate)
* [components](#components)
  * [footer](#footer)
  * [header](#header)
* [functions](#functions)
* [libs](#libs)
  * [bootstrap](#bootstrap)
  * [sweetAlert](#sweetAlert)
  * [validator](#validator)
* [locale](#locale)
  * [en](#locale)
  * [es](#locale)
* [index.php](#index)
<a name="assets"></a>
## Assets
En la carpeta _assets_ almacenamos todos los recursos propios que necesitemos en la aplicación de la manera más ordenada posible. Por ello tenemos 4 carpetas raíces de assets; [_css_](#css), [_fonts_](#fonts), [_images_](#images), [_js_](#js)
<a name="css"></a>
### css 
En la carpeta _css_ almacenaremos todas nuestras hojas de estilos. <br>
A la hora de crear estilos con el objetivo de trabajar sobre componentes utilizaremos una metodología similar a [_BEM_](https://getbem.com/). <br>
Todas las clases que creemos dentro del archivo _global.css_ deberán llevar el prefijo `.g--` y a la hora de generar el estilo tenemos dos opciones;
* Crear una clase por cada estilo escrito de izquierda a derecha de arriba a abajo. 
  * Ej -> `.g--hover-color-white:hover{ color: white; }`
* Crear un componente css uilizando el prefijo + nombre del padre + nombre del hijo. Como muestra la seccion [_Naming_ de BEM](https://getbem.com/naming/)
  * Ej -> `.g--p__span:hover{ color: white; background-color: black; }`

Al no ser arbitrarios puede llevar a confusión cuando utilizar uno y cuando utilizar otro. Veamos un ejemplo práctico para entender la metodología;<br>
Imagina que queremos que cada título tenga un color de fondo variando entre tres colores, rojo, amarillo y azul. En este caso utilizaríamos la primera opción. <br>
Ej -> `.g--bg-color-red{ background-color: red; } .g--bg-color-yellow{ background-color: yellow; } .g--bg-color-blue{ background-color: blue; }`. <br>
Imagina que queremos que todos (o la gran mayoría) de los títulos tengan un fondo azul, tipo de letra arial y un color crema. En este caso utilizaríamos la segunda opción. <br>
Ej-> `.g--main-title{ background-color: blue; font-family: "arial"; color: white; }`.
<br> 
<a name="globalCss"></a>
#### global.css
Dentro de _global.css_ podrás ver ejemplos claros de como implementamos las dos opciones. Además de ello encontrarás las variables globales dentro de :root <br>
`:root {
--main-black: #212529;
--primary-blue: #2F57A3;
--font-family-thin: "popinsRegular";
}`<br>
De esta manera, en los ejemplos anteriores en vez de escribir `color: blue` escribiremos `color: var(--main-blue)`.<br>
Todos los estilos con colores se cambiarán en este archivo.
<a name="fonts"></a>
### fonts 
Dentro de la carpeta _fonts_ almacenaremos las fuentes que utilizaremos en el proyecto.<br>
> **Pro tip**: Cuando implementes una fuente añade el estilo `font-display: swap;` para tener una mejor experiencia de usuario. [Docs](https://rodanet.com/css-font-display-swap-para-que-usarlo/) 
<a name="images"></a>
### images 
En la carpeta _images_ añadiremos todas las imágenes del proyecto ordenadas en sub carpetas con el nombre de la página. <br>
Ej ->
* images
  * contacto
    * bgImageContacto.webp
    * bgTitleContacto.png
  * faqs
  * [...]

Como has podido ver en el ejemplo anterior con la finalidad de estandarizar y reducir el tamaño de las imágenes sin perder calidad, todas las imágenes las guardaremos con la extensión [_webp_](https://es.wikipedia.org/wiki/WebP) o _png_. <br>
Puedes cambiar la extensión de manera fácil en [_photopea_](https://www.photopea.com/).<br>
Habrá imágenes que sean más ligeras en _png_ y otras que sean más ligeras en _webp_, obviamente nos quedaremos con la opción más ligera.
<a name="js"></a>
### js 
Dentro de la carpeta _js_ podrás encontrar y añadir los scripts que se utilizaran en la web. Tras crear un nuevo script se tendrá que añadir al footer.<br> 
En esta carpeta por defecto podrás encontrar por defecto; _forms_, y _sweetAlertTemplate_.
<a name="forms"></a>
#### forms
En el archivo _forms.js_ encontraremos scripts globales para utilizar en los formularios.<br>
Sobre cada función tendrás una descripción de la misma con los parámetros necesarios.<br>
El archivo se divide en tren partes; _variables_, _funciones_ y _llamadas_.<br>
**Variables**<br>
En el apartado de variables veremos que recogemos;
* Los inputs que queremos validar `inputFormValidator`.
* Los botones que queremos bloquear hasta realizar la validacion `btnFormValidator`.
* Los botones que harán la función de mostrar contraseña `btnVerPass`.
* Inputs que cambian su tipo al tener el foco `dateOnFocus` y `timeOnFocus`<br>
**Funciones**<br>
  Dentro de las funciones podemos encontrar;
* `inputValidation` -> Valida los inputs según su tipo. Necesita como parámetro un objeto con el input a validar.
* `disableButtons` y `enableButtons` -> Cambia a "_disable_" o "_enable_"
  todos los botones con la clase "_btnFormValidator_" y si recibe un input añade la clase "_is-invalid_" o "_is-valid_" al mismo. <br> Necesita un objeto con los botones y el input a invalidar/validar (por defecto _null_).
* `addVerPass`-> El objetivo de estas funciones es poder ver la contraseña mientras el usuario mantenga pulsado el botón de ver contraseña. Necesita como parámetro un objeto con el botón a realizar la funcionalidad.
* `addDateOnFocus` y `addTimeOnFocus`-> El objetivo de estas funciones es poder tener un _placeholder_ en el input creándolo como tipo _text_ pero cambiando a su tipo correcto al recibir el foco. Necesita como parámetro un objeto con el input a cambiar el tipo.

**Llamadas**<br>
Este apartado sirve para añadir las funcionalidades a las variables seleccionadas.
<a name="sweetAlertTemplate"></a>
#### sweetAlertTemplate
En el archivo _sweetAlertTemplate_ encontraremos una plantilla para crear _sweetAlerts_ básicos. Necesita de los siguientes parámetros;
* `type` -> Icono que se mostrara. [iconos](https://sweetalert2.github.io/#icons)
* `title` -> Título de la alerta.
* `text` -> Texto de la alerta.
* `buttonText` -> Texto para el botón principal. Por defecto `"Cerrar"`.
* `showConfirmButton` -> Mostrar/no mostrar el botón de confirmación. Por defecto `false`.
* `showCloseButton` -> Mostrar/no mostrar la cruz de cerrar. Por defecto `true`.

<a name="componentes"></a>
## Componentes 
En la carpeta componente tendremos y crearemos todos los elementos reutilizables en nuestra web siguiendo las mismas reglas que hemos visto hasta ahora; descriptivo y con la nomenclatura _lowelCameCase_.<br>
Por defecto encontrarás los siguientes archivos php; _header_ y _footer_.
<a name="headerPhp"></a>
### header.php
Dentro del archivo _header_ podrás encontrar dos cosas; funcionalidades y etiquetas.
**Funcionalidades:**
* Declarar la ruta global del sitio.
  * > **Importante**: Antes de subir un cambio en este archivo a producción hay que comprobar que la ruta es la ruta de producción.
* Recogemos el idioma almacenado en la sesion e importamos los textos del idioma.
  * En caso de tener un único idioma comentar ambos includes y cambiar el atributo *lang* de la etiqueta HTML. `<html lang="<?=$lang?>">` -> `<html lang="es">`.<br>
**Etiquetas:**
* Meta:
  * charset -> `<meta charset="UTF-8">`
  * viewport -> `<meta name="viewport"`
  * keywords -> `<meta name="keywords"`
  * title -> `<meta name="title"`
  * description -> `<meta name="description"`
* Title
* Links CSS
  * Favicon -> `<link rel="icon"`
  * Bootstrap -> `<link rel="stylesheet" href="<?=SITE_ROOT?>libs/bootstrap/css/bootstrap.min.css">`
  * Iconos de bootstrap -> `<link rel="stylesheet" href="<?=SITE_ROOT?>libs/bootstrap/bootstrap-icons/fonts/bootstrap-icons.woff">`
  * Estilos propios -> `<link rel="stylesheet" href="<?=SITE_ROOT?>assets/css/global.css">`
<a name="footerPhp"></a>
### footer.php 
En el _footer_ podrás encontrar sobre todo los includes de los scripts a utilizar.
<a name="functions"></a>
## Functions 
En la carpeta _functions_ encontraremos las funciones php que utilizamos en la web.
<a name="getSessionLang"></a>
### getSessionLang 
El objetivo de la funcion _getSessionLang_ es devovler en la variable _$lang_ el idioma seleccionado y/o almacenado en la sesión.
<a name="libs"></a>
## Libs 
<a name="bootstrap"></a>
### bootrstrap
Utilizamos bootstrap como conjunto de herramientas para construir nuestras webs. <br> 
Como escribimos en el prólogo, siempre que podemos incluimos los archivos en local para cargarlos de nuestro servidor.<br>
Dentro de la carpeta _bootstrap_ encontraremos los archivos para poder utilizar esta herramienta( [docs](https://getbootstrap.com/docs/5.3/getting-started/introduction/) ) y una carpeta para implementar [_bootstrap icons_](https://icons.getbootstrap.com/)
> Utilizamos _bootstrap icons_, ya que es más ligero que _fontawesome_. Pese a que la segunda opción nos ofrece más variedad de iconos, con las opciones que nos ofrece la primera opción tenemos más que de sobra.
<a name="validator"></a>
### validator
_Validator_ es una biblioteca de validadores de cadenas que implementamos para poder utilizar [_forms.js_](#forms). <br>
[Docs](#https://github.com/validatorjs/validator.js) y [validaciones](#https://github.com/validatorjs/validator.js#validators).
<a name="sweetAlert"></a>
### sweetAlert
SweetAlert es un remplazo responsive con una mejor interfaz que las cajas emergentes de _js_. <br> 
Implementamos dicha herramienta para poder utilizar [_sweetAlertTemplate_](#sweetAlertTemplate).<br>
[Docs](https://sweetalert2.github.io)
<a name="locale"></a>
## Locale
En la carpeta _locale_ encontraremos los array de textos para implementar en las páginas multiidioma divididos en carpetas con una abreviatura del idioma.