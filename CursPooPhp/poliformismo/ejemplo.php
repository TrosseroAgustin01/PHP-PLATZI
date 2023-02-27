<!-- El polimorfismo solamente significa varias formas. Esto quiere decir que si un mismo elemento si se comporta de diferentes maneras y
otorga diferentes resultados quiere decir que aplica el término de polimorfismo.

Un ejemplo claro de esto seria una "CLASE" transporte, de esta manera las distintas clases de transportes(auto,barco,avion);
podrian extender de esta clase padre, de esta manera por ejemplo podria obtener de ellas, la funcion avanzar() y la funcion detenerse();

Otro ejemplo en codigo: -->
<?php

class Personaje{
    //Atributos - mi personaje tiene una vida y un dano de ataque
    public $vida;
    public $damage;

    //Metodos - al Atacar arrojara este mensaje por defecto.
    public function Atacar(){
        return 'Acabas de atacar';
    }
}

//Estoy creando la clase garen, donde heredara todos, los atributos y metodos de la clase Personaje.
class Garen extends Personaje{

    public function __construct($vida,$damage){
        $this->vida = $vida;
        $this->damage = $damage;
    }
    //Polimorfismo, estamos sobre escribiendo la funcion de atacar segun la necesidad que tiene este personaje.
    //Cuando garen ataca arroja un mensaje especial para el (Garen)
    public function Atacar(){
        return 'Garen acaba de pegar y te quito: '.$this->damage;
    }
}

//Instancio mi objeto, le envio la vida y el dano que tendra.
$garen = new Garen(100, 20);
echo $garen->Atacar();