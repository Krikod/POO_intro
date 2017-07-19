<?php

class Cat
{
    const FATIGUE_MAX = 100;
    const FATIGUE_INCR = 10;

    /**
     * Le nom du chat
     * @var String
     */
    private $name;

    /**
     * Le collier du chat
     * @var Collar
     */
    private $collar;

    /**
     * La couleur du chat
     * @var String
     */
    private $color;

    /**
     * Niveau de fatigue du chat (de 0 à 100).
     * @var integer
     */
    private $fatigue = 0;
    /**
    * URL de la photo du chat
    */
    private $image;

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return Cat
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $name
     * @return Cat
     */
    public function setName(String $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Collar
     */
    public function getCollar()
    {
        return $this->collar;
    }

    /**
     * @param Collar $collar
     * @return Cat
     */
    public function setCollar(Collar $collar)
    {
        $this->collar = $collar;
        return $this;
    }

    /**
     * @return String
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param String $color
     * @return Cat
     */
    public function setColor(String $color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getFatigue()
    {
        return $this->fatigue;
    }

    /**
     * @param int $fatigue
     * @return Cat
     */
    public function setFatigue(int $fatigue)
    {
        $this->fatigue = $fatigue;
        return $this;
    }

    /**
     * Indique si le chat est fatigué
     * @return bool
     */
    public function isTired()
    {
        $result = false;
        if ($this->fatigue >= self::FATIGUE_MAX) {
            $result = true;
        }
        return $result;
    }

    /**
     * Pour que note chat soit en pleine forme !
     */
    public function rest()
    {
        $this->fatigue = 0;
    }

    /**
     * Le chat marche et surtout se dépense.
     */
    public function walk()
    {
        if ($this->getFatigue() < self::FATIGUE_MAX) {
            $this->setFatigue($this->getFatigue() + self::FATIGUE_INCR);
        }
    }

    /**
     * Cat constructor.
     * @param $color
     * @param Collar|null $collar
     */
    public function __construct($name, $color, Collar $collar = null)
    {
        $this->name = $name;
        $this->color = $color;
        if ($collar !== null) {
            $this->collar = $collar;
        }
    }

/**
* Return property of cat (rajouté en atelier)
*/
	public function __toString() {
		$str = 'Le nom du chat est ' . $this->name .
		' et sa couleur est ' .  $this->color .
		', son état de fatigue est de ' . $this->fatigue .
		' et sa photo est <img src=' . $this->image .
		 ' alt="image du chat"/>' /*.
		 ' Son collier est ' . $this->collar */. '<br>';
    	return $str;
	}

}

/* Objectif 2 :

Vous devrez modifier le contenu des classes existantes.

• Vous devrez empecher de pouvoir saisir une valeur de fatigue supérieure à la valeur

maximale définie dans la constante FATIGUE_MAX. (Pensez à l’encapsulation)

• Vous devrez définir une liste de couleurs autorisées pour la classe Cat et empêcher de

saisir des couleurs non autorisées.

• Vous devrez également créer une methode eat(), cette derniere retirera 10 au niveau de

fatigue de notre chat. (Pas de valeur « en dur » dans les méthodes) 

<?php

/**
 * Caractéristiques d'un chat
 *
class Cat
{
    /**
     * Couleur du chat
     *
    public $color;

    /**
     * Nom du chat
     *
    private $nom;

    /**
     * Etat de fatigue
     *
    private $fatigue;

    /**
     * Age du chat
     *
    private $age;


    public function setNom($nom){
        $this->nom = $nom;
    }

    /**
     * Get Nom
     *
    public function getNom(){
        return $this->nom;
    }

    /**
     * Set Fatigue
     *
    public function setFatigue($fatigue){
        $this->fatigue = $fatigue;
    }

    /**
     * Get Fatigue
     *
    public function getFatigue(){
        return $this->fatigue;
    }

    /**
     * Set Age
     *
    public function setAge($age){
        $this->age = $age;
    }

    /**
     * Get Age
     *
    public function getAge(){
        return $this->age;
    }

    public function __toString(){
        $str = "<div style='background-color:" . $this->color . ";'>" . "Le nom du chat est " . $this->nom . "<br>" .
        "L'age du chat est " . $this->age . "<br>" .
        "La couleur du chat est " . $this->color . "<br>" .
        "L'état de fatigue du chat est " . $this->fatigue . "<br></div>";
        return $str;
    }

    public function rest(){

    }

    public function walk(){

    }

    public function __construct($nom, $age, $color)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->color = $color;
        $this->fatigue = 0;
    }

}


*/