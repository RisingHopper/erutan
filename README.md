README

Este pryecto es la parte fronted de la web erutan.es

La idea del proyecto es trabajar a través de componentes para facilitar los cambios futuros.

Estructura 
  [assets](#assets)
      * [css](#css)
        * [global.css](#globalCss)
      * [fonts](#fonts)
      * [images](#images)
      * [js](#js)
        * [forms](#forms)
        * [sweetAlertTemplate](#sweetAlertTemplate)
  [components](#components)
      * [footer](#footer)
      * [header](#header)
  [functions](#functions)
  [libs](#libs)
      * [aos](#aos)
      * [bootstrap](#bootstrap)
      * [fontawesome](#fontawesome)
      * [slick](#slick)
      * [sweetAlert](#sweetAlert)
      * [validator](#validator)
  [locale](#locale)
      * [en](#locale)
      * [es](#locale)
  [pages](#pages)
      * [posts](#pages)
      * [faqs](#pages)
  [models](#models)
      * [BaseModel](#models)
      * [DataBaseConection](#models)
  [mailer](#mailer)
  [pages](#pages)
  [index.php](#index)


Estilos:
  Para los estilos se utiliza bootrap, pero para añadir estilos propios se sigue un estilo similar al que se trabaja en bootstrap.
  Ej: g--bg-pink  || 'g--' indica que se trata de un estilo propio, acontinuación se añade del nombre del atributo (bg - background-color) y el valor 'orange'.
Componentes:
  Ficheros que componen parte de las páginas. Por ejemplo, hay un componente que es un formulario de la newsletter, nos aporta facilidad a la hora de hacer cambios
  y también poder reutilizar dicho componente en otra página de la web.
  El carrousel, la sección de videos, el navbar/menu, el footer, son componentes.
Functions:
  Son ficheros que se encargan de una función específica, como consultar la BBDD, añadir registros, crear la sesión, verificar usuario, etc.
Libs:
  AOS: Permite transiciones en divs.
  Bootstrap: Framework que permite dar estilos CSS.
  FontAwesome: Biblioteca de icónos que se utilizan en el sitio web.
  Slick: Biblioteca que permite crear carruseles.
  SweetAlert: Muestra los alerts de Javascript de una manera amigable. Utilizado mayormente para los formularios.
Locale:
  Esta carpeta esta compuesto por dos fichero 'ES' y 'EN', los cúales almacenan en un array todos los textos de la web en inglés y en español.
  Estos textos son estáticos, es decir, no provienen de la BBDD.
Models:
  El fichero 'DataBaseConection' se encarga de establecer la conexión con la base de datos.
  El fichero 'BaseModel' agrupa todas las funciones que están relacionados con la consulta, inserción de datos en la base de datos.
Pages:
  Son los ficheros que hacen de páginas.
Mailer:
  Se encarga del envío de correos electrónicos.
