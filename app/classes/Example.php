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
    public $data = [];

    public function index(){

//        $this->firstName = 'Rohim';
//        $this->lastName  = 'Miya';
//        echo "Fullname is: ".$this->firstName." ".$this->lastName;

        $this->data= [10, 20, 30, 'BITM', 100.200, true];
        foreach ($this->data as $item){
            echo $item;
        }



//        switch($this->x){
//            case 10:
//                echo 'Hello World';
//                break;
//            case 20:
//                echo 'Hello BD';
//                break;
//            case 30:
//                echo 'Hello dhaka';
//                break;
//            default:
//                echo 'Hello BITM';
//        }
//        while ($this->x < 110){
//            echo $this->x;
//            $this->x++;
//        }



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

//        echo $this-> x < $this->y;
//        echo '<br>';

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