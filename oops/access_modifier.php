<?php

class fruit {
  public $name;
  public $color;
  public $weight;

//   function set_name($name) {  // a public function (default)
//     $this->name = $name;
//   }
//   function get_name(){
//     return $this->name;
//   }

  protected function set_color($color) { // a protected function
    $this->color = $color;
  }
  function get_color($color){
    echo $this->color;
  }
  // private function set_weight($w) { // a private function
  //   $this->weight = $w;
  // }
  // function get_weight($w){
  //   return $this->weight;
  // }
}
$obj= new fruit;
// $obj->set_name("apple");
// echo $obj->get_name();

$obj->set_color("red");
echo $obj->get_color();

// $obj->set_weight("250");
// echo $obj->get_weight();

?>