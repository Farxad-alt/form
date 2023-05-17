<?php require_once 'form.php'; ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,700" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  <link rel="stylesheet" href="/style.css">
</head>

<body>

  <form action="index.php" method="POST">
    <label for="Имя">
      <input type="text" name="name">
      <span class="placeholder">Имя</span>

    </label>
    <label class="custom-field">
      <input type="email" placeholder="&nbsp;" />
      <span class="placeholder"> Email</span>
      <span class="error-message" aria-live="polite"></span>
    </label>
    <label for="textarea">
      <textarea name="message" id="" cols="30" rows="10"></textarea>
      <span class="placeholder"> Сообщения</span>
    </label>
    <label for="">Чекбокс
      <input type="checkbox" name="agree" id="">
    </label>
    <select name="lang[]" multiple id="">
      <option value="ru">Руский</option>
      <option value="en">Англиский</option>
      <option value="fr">Французкий</option>
    </select>
    <label for="button">
      <button type="submit" name="send_form" value="Otpravka">Send</button>
    </label>
  </form>
  <hr>
  <form action="index.php" method="get">
    <p>Name:<input type="text" name="s"></p>
    <button type="submit" name="search_form" value="search">Send</button>
  </form>

  <a href="?Имя=Фархад&Лет=50">link</a>
  <!-- <form action="">
    <label class="custom-field">
      <input type="email" placeholder="&nbsp;" />
      <span class="placeholder">Enter Email</span>
      <span class="error-message" aria-live="polite">The email is invalid</span>
    </label>

    <label class="custom-field one">
      <input type="text" placeholder=" " />
      <span class="placeholder">Enter Text</span>
    </label>

    <label class="custom-field two">
      <input type="url" placeholder="&nbsp;" />
      <span class="placeholder">Enter URL</span>
    </label>

    <label class="custom-field three">
      <input type="password" placeholder="&nbsp;" />
      <span class="placeholder">Enter Password</span>
      <span class="border"></span>
    </label>


  </form> -->

  <div id="con tact-form" class="clearfix">


    <!-- <h1>Свяжитесь С Нами!</h1>
    <h2>Заполните нашу супер шикарную контактную форму HTML5 ниже, чтобы связаться с нами! Пожалуйста, предоставьте как можно больше информации, чтобы мы могли помочь вам с вашим запросом :)</h2>
    <ul id="errors" class="">
      <li id="info">There were some problems with your form submission:</li>
    </ul>
    <p id="success">Thanks for your message! We will get back to you ASAP!</p> -->




    <form method="post" action="index.php">
      <?php error_reporting(-1);
      include_once './action.php';
    
      ?>
      <label for="name">Имя: <span class="required">*</span></label>
      <input type="text" id="name" name="name" value="" placeholder="John Doe" autofocus="autofocus" />

      <label for="email">Email: <span class="required">*</span></label>
      <input type="email" id="email" name="email" value="" placeholder="johndoe@example.com" />

      <label for="telephone">Telephone: </label>
      <input type="tel" id="telephone" name="telephone" value="" />

      <label for="enquiry">Enquiry: </label>
      <select id="enquiry" name="enquiry[]">
        <option value="general">General</option>
        <option value="sales">Sales</option>
        <option value="support">Support</option>
      </select>

      <label for="message">Сообщение: <span class="required">*</span></label>
      <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" data-minlength="20"></textarea><br>

      <span id="loading"></span>
      <button type="submit" name="send_form">отправить</button>
      <input type="submit" value="Holla!" id="submit-button" />
      <p id="req-field-desc"><span class="required">*</span> указывает обязательное поле</p>
    </form>
<hr>
<?php  if (empty($_POST['name']) || empty($_POST['email'])): ?>
  <?php if (!empty($_POST)): ?>
    <h3>Поле обезательное для заполнение</h3>
    <?php endif ;?>
    <form action="index.php" method="post">
      <p> Имя: <input type="text" name="name"/></p>
      <p> Email: <input type="email" name="email" /></p>
      <button type="submit" name="send_form">отправить</button>
    </form>

<?php else: ?>


<!-- Modal -->
<div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalTitleId">Всё отправили</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
      <div class="modal-body">
        <div class="container-fluid">
          Add rows here
        </div>
      </div>
    
    </div>
  </div>
</div>


<?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </div>

</body>

</html>