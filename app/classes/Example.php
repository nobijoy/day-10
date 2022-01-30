<?php
namespace App\classes;
class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;


    public function index(){

//        $this->firstName = 'Rohim';
//        $this->lastName  = 'Miya';
//        echo "Fullname is: ".$this->firstName." ".$this->lastName;

        $this->x = 20 ;
        $this->y = 20 ;
        $this->z = 30 ;
        echo ($this->x > $this->y)&&($this->y > $this->z)
        echo '<br/>....<br/>'
        echo ($this->x > $this->y)&&($this->y < $this->z)
        echo '<br/>....<br/>'
        echo ($this->x < $this->y)&&($this->y > $this->z)
        echo '<br/>....<br/>'
        echo ($this->x < $this->y)&&($this->y < $this->z)
        echo '<br/>....<br/>'
//        echo $this->x++;
//        echo '<br>';
//        echo $this->x;
//        echo '<br>';
//        echo  $this->x--;
//        echo '<br>';

//        echo $this-> x+= $this->y;
//        echo '<br>';
//        echo $this-> x-= $this->y;
//        echo '<br>';
//        echo $this-> x*= $this->y;
//        echo '<br>';
//        echo $this-> x/= $this->y;
//        echo '<br>';
//        echo $this-> x%= $this->y;
//        echo '<br>';
//        echo $this-> x.= $this->y;
//        echo '<br>';

        echo $this-> x < $this->y;
        echo '<br>';

//        echo $this-> x+ $this->y;
//        echo '<br>';
//        echo $this->x - $this->y;
//        echo '<br>';
//        echo $this->x * $this->y;
//        echo '<br>';
//        echo $this->x / $this->y;
//        echo '<br>';
//        echo $this->x % $this->y;



    }



}