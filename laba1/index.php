<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laboratory work 1</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header class="header">
      <img src="mospolytech.png" alt="Mospolyetech Image" class="header__img"/>
      <h1 class="header__h1">
        Название работы: Лабораторная работа №1
        <br />
        Выполнил работу: Акопян Феликс Саакович
      </h1>
      <div></div>
    </header>
    <main class="main">
      <div class="block"></div>
      <?php
        for($i = 0; $i <= 10; $i++) {
          if ($i != 10) {
            echo "{$i}__";
          } else {
            echo $i;
          }
        }
      ?>
    </main>
    <footer class="footer">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur culpa incidunt molestias,
        tenetur vero, dolorum magni error, neque nesciunt provident assumenda aspernatur! Autem eius quo
        dolorem pariatur, rerum earum debitis? Repellendus assumenda ipsum enim quas omnis dolor
        distinctio! Cupiditate quaerat doloremque repellendus unde. Perferendis, eum quas, illum
        quisquam qui error dignissimos aut unde maiores, omnis nisi impedit vel! Impedit, ipsum.
        Delectus fugiat eius est alias earum voluptas necessitatibus, nihil minima ex hic itaque
        adipisci, quas error, veritatis facilis perferendis suscipit placeat libero. Accusamus
        aliquid assumenda, unde ab voluptatem ipsa facilis?
      </p>
    </footer>
  </body>
</html>
