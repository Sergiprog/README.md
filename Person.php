<?php
class Person {
   private $name;
   private $lastname;
   private $age;
   private $hp;
   // public $hp;
   private $mother;
   private $father;
//    private $mgmother;
//    private $mgfather;
//    private $fgmother;
//    private $fgfather;


   function __construct($name,$lastname,$age, $mother=null, $father=null) {
      $this->name = $name;
      $this->lastname = $lastname;
      $this->age = $age;
      $this->mother = $mother;
      $this->father = $father;
      // $this->fgfather = $fgfather;
      // $this->fgmother = $fgmother;
      // $this->mgfather = $mgfather;
      // $this->mother = $mgmother;
      $this->hp = 100;
   }
   // function sayHi ($name) {
   //    return "Hi $name, I'm ".$this->name;
   // }
   function setHp($hp) {
      if($this->hp + $hp >= 100) $this->hp = 100;
      else $this->hp = $this->hp + $hp;
   }
   function getHp() {
      return $this->hp;
   }
   function getName() {
      return $this->name;
   }
   function getLastname() {
      return $this->lastname;
   }
   function getMother() {
      return $this->mother;
   }
   function getFather() {
      return $this->father;
   }
   function getAge() {
      return $this->age;
   }
   function getInfo() {
      return "<h1>About my family</h1><br>"."My name is ".$this->getName().".<br>My lastname is ".$this->getLastname().".<br>My father is ".$this->getFather()->getName()." and my mother is ".$this->getMother()->getName().".<br>My father's father is ".$this->getFather()->getFather()->getName().". He is my grandfather and he lives with my only grandmother ".$this->getFather()->getMother()->getName().". They are both ".$this->getFather()->getFather()->getAge()." years old.<br>My other grandfather is ".$this->getMother()->getFather()->getName()." ".$this->getMother()->getFather()->getLastname().". He is ".$this->getMother()->getFather()->getAge()." and he has ".$this->getMother()->getFather()->getHp()."HP!";
   }
}
$ivan = new Person("Ivan", "Ivanov", 62);
$maria = new Person("Maria", "Ivanova", 62);
$igor = new Person("Igor", "Petrov", 64);
// $anna = new Person("Anna", "Petrova", 62);
$alex = new Person("Alex", "Ivanov", 42, $maria, $ivan);
$olga = new Person("Olga", "Ivanova", 42, null, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);
// echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();




// // $alex->name = "Alex";
// // echo $alex->name;
// // echo $alex->sayHi($igor->name);
// // Здоровье человека не может быть больше 100 ед.
// $medKit = 50;
// // $alex->hp = $alex->hp-30; //Шел и упал
// $alex->setHp(-30);
// // echo $alex->hp."<br>";
// echo $alex->getHp() . "<br>";
// // $alex->hp = $alex->hp + $medKit; //нашел аптечку
// $alex->setHp($medKit);
// // echo $alex->hp;
// echo $alex->getHp();
