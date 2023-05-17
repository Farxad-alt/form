<?php  

class Point {
  public $x = 3; 
  public $y = 8; 
  public $color;
}

$poin = new Point();
echo $poin->x.'<br>';
echo $poin->y.'<br>';

class User {
  public $name = 'user';
  public $email;
}

$user_1 = new User();
echo $user_1->name.'<br>';

$car = new Point();
echo $car->color = 'red'; 
