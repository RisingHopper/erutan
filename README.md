README

Este pryecto es la parte fronted de la web erutan.es

La idea del proyecto es trabajar a través de componentes para facilitar los cambios futuros.

Estructura<br><br>
  [assets](#assets)<br>
      &ensp; [css](#css)<br>
      &ensp;[global.css](#globalCss)<br>
      &ensp; [fonts](#fonts)<br>
      &ensp; [images](#images)<br>
      &ensp; [js](#js)<br>
        * [forms](#forms)<br>
        * [sweetAlertTemplate](#sweetAlertTemplate)<br>
  &ensp;[components](#components)<br>
      &ensp; [footer](#footer)<br>
      &ensp; [header](#header)<br>
  [functions](#functions)<br>
  [libs](#libs)<br>
      * [aos](#aos)<br>
      * [bootstrap](#bootstrap)<br>
      * [fontawesome](#fontawesome)<br>
      * [slick](#slick)<br>
      * [sweetAlert](#sweetAlert)<br>
      * [validator](#validator)<br>
  [locale](#locale)<br>
      * [en](#locale)<br>
      * [es](#locale)<br>
  [pages](#pages)<br>
      * [posts](#pages)<br>
      * [faqs](#pages)<br>
  [models](#models)<br>
      * [BaseModel](#models)<br>
      * [DataBaseConection](#models)<br>
  [mailer](#mailer)<br>
  [pages](#pages)<br>
  [index.php](#index)<br>


Estilos:<br>
  Para los estilos se utiliza bootrap, pero para añadir estilos propios se sigue un estilo similar al que se trabaja en bootstrap.<br>
  Ej: g--bg-pink  || 'g--' indica que se trata de un estilo propio, acontinuación se añade del nombre del atributo (bg - background-color) y el valor 'orange'.<br><br>
Componentes:<br>
  Ficheros que componen parte de las páginas. Por ejemplo, hay un componente que es un formulario de la newsletter, nos aporta facilidad a la hora de hacer cambios<br>
  y también poder reutilizar dicho componente en otra página de la web.<br>
  El carrousel, la sección de videos, el navbar/menu, el footer, son componentes.<br><br>
Functions:<br>
  Son ficheros que se encargan de una función específica, como consultar la BBDD, añadir registros, crear la sesión, verificar usuario, etc.<br><br>
Libs:<br>
  AOS: Permite transiciones en divs.<br>
  Bootstrap: Framework que permite dar estilos CSS.<br>
  FontAwesome: Biblioteca de icónos que se utilizan en el sitio web.<br>
  Slick: Biblioteca que permite crear carruseles.<br>
  SweetAlert: Muestra los alerts de Javascript de una manera amigable. Utilizado mayormente para los formularios.<br><br>
Locale:<br>
  Esta carpeta esta compuesto por dos fichero 'ES' y 'EN', los cúales almacenan en un array todos los textos de la web en inglés y en español.<br>
  Estos textos son estáticos, es decir, no provienen de la BBDD.<br><br>
Models:<br>
  El fichero 'DataBaseConection' se encarga de establecer la conexión con la base de datos.<br>
  El fichero 'BaseModel' agrupa todas las funciones que están relacionados con la consulta, inserción de datos en la base de datos.<br><br>
Pages:<br>
  Son los ficheros que hacen de páginas.<br><br>
Mailer:<br>
  Se encarga del envío de correos electrónicos.
