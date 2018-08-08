<?php
class car{
protected $wheel;
 private $window;
 public static function helloWorld()
 {
     echo "Hello World.<br>";
 }
public function __construct($wheel="round",$window="square"){
    $this->wheel=$wheel;
    $this->window=$window;
    
}
public function setcar($wheel,$window){
    $this->whell=$wheel;
    $this->window=$window;

    return $this;
}
public function getcar(){
return $this->wheel;
return $this->window;

}
public function display(){
    echo $this->wheel;
    echo $this->window;
}

}
   car::helloWorld();
        $ht=new car;
      //  $ht->setcar("round","square")->getcar();
      $ht->setcar("round","square")->display();
      $ht->display();

?>