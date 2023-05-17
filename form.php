<?php

// var_dump($_POST);
//  var_dump($_GET);


//  echo $_GET['email'];


// print_r($_POST);

// if(!empty($_POST['name'])){
//    var_dump($_POST);
//  foreach ($_POST['lang'] as $lang){
//  var_dump($lang);
//  }
//  }
if(!empty($_POST['agree'])){
  echo '<pre>';
   print_r($_POST);
   echo '</pre>';
//  foreach ($_POST['lang'] as $lang){
//  var_dump($lang);
 }
 

if(isset($_POST['send_form'])){
  echo 'Была отправлена первая форма';
  // echo '<pre>';
  // echo htmlspecialchars(print_r($_POST, true));
  // echo '</pre>';
}
if(isset($_GET['search_form'])){
  echo 'Была отправлена вторая форма';
}
// if(isset($_POST['email'])){
//   echo 'Была отправлена вторая форма';
// }

// if ($_POST) {
//   echo '<pre>';
//   echo htmlspecialchars(print_r($_POST, true));
//   echo '</pre>';
// }
// $var = '';

// Проверка вернёт TRUE, поэтому текст будет напечатан.
if (isset($var)) {
  echo "Эта переменная определена, поэтому меня и напечатали.";
}

echo '<br>';
// $var = '1';

// Принимает значение true, потому что $var пусто
if (empty($var)) {
  // echo '$var или 0, или пусто, или вообще не определена';
}

echo '<br>';
// Принимает значение true, потому что $var определена
if (isset($var)) {
  echo '$var определена, даже если она пустая';
}
// print_r($_POST);

if ($_POST) {
  echo '<pre>';
  echo htmlspecialchars(print_r($_POST, true));
  echo '</pre>';
}
?>
<input type="image" src="image.gif" name="sub" />

