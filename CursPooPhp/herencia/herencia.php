<!-- La herencia nos permitirá crear nuevas clases a partir de otras. O sea, vamos reutilizar código. Quiere decir, que vamos a hacer una abstracción para generar una súper clases general que después utilicemos para crear otras clases.

    En la herencia también tendremos una jerarquía de padre e hijo.
    En OOP, la clase padre siempre la encontraremos como la ‘Súperclase’ y los hijos como ‘subclase’.

Y a través de encapsulamiento vamos a poder definir que puede heredar el hijo y que no.

El método constructor nos permite inicializar las variables del objeto. -->
<?php

class User {
    public $name;

    public function __construct($name) {  /* el metodo constructor nos permite inicializar variables al momento de construir el objeto */
        $this->name = $name;
    }
}

/* Y para crear una herencia utilizamos la palabra reservada extends seguido del nombre de la clases. */
?>
<?php

/* class Admin extends User {
    // ...
} */
?>
<!-- Para evitar que se incumpla los principios SOLID 2 y 3, podemos utilizar la palabra reservada final al principio del método.
También, podemos utilizar este la palabra reservado final en una clase, pero esto significa que no puede ser heredada. -->
                                                                                                
<?php

class User1 {
    public $name;

    final public function __construct($name) {
        $this->name = $name;
    }
}
?>

<!-- Los cinco principios son:

    S. Single responsibility principle -> Una clase sólo debe tener un motivo para cambiar, lo que significa que sólo debe tener una tarea.
    O. Open/Closed principle           -> Los objetos o entidades deberían estar abiertas a su extensión, pero cerradas para su modificación.
    L. Liskov substitution principle   -> Si S es una subclase de T, entonces los objetos de T podrían ser substituidos por objetos del tipo S
                                          sin alterar las propiedades del problema. Esto es, cada clase que hereda de otra puede usarse como su padre sin necesidad
                                          de conocer las diferencias entre ellas
    I. Interface segregation principle ->
    D. Dependency Inversion Principle  ->

-->
