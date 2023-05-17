<?php error_reporting(-1);

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$tel = $_POST['telephone'] ?? '';

 if (!trim($name) || !trim($email) || !trim($tel)):

if (!empty($_POST)): ?>
   <ul id="errors" class="errors">
      
        <p>Поля обезательно для заполнение!<span class="required"> *</span></p>
    </ul>
    <!-- <p id="success">Thanks for your message! We will get back to you ASAP!</p> -->
 <?php endif; ?>

 <?php else :?>
     <p>Имя: <?= $_POST['name'] ?></p>
     <p>Почта: <?= $_POST['email'] ?></p>
     <p>Телефон: <?= $_POST['telephone'] ?></p>
 <?php  endif; ?>

