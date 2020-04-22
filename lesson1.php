<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="bootstrap.css">
  <title>NIX-Education</title>
</head>

<body>
  <header></header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Урок 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Урок 2</a>
        </li>
      </ul>
    </div>
  </nav>
  <main>
    <div class="container">
      
       
          <?php
          echo '<table class = "table table-bordered" ><tr>';
          foreach (range(1, 10) as $first_multiplier) {
            $table_formula = '';
            foreach (range(1, 10) as $second_multiplier) {
              $result = $first_multiplier * $second_multiplier;
              $row_formula = "</p>" . $first_multiplier . ' X ' . $second_multiplier . ' = ' . $result . "</p>";
              $table_formula .= $row_formula;
            };
            echo "<td>" . $table_formula . "</td>";
            echo ($first_multiplier % 5 == 0) ? '</tr><tr>' : null;
          };
          echo '</tr></table>';
          ?>
        
      
    </div>
  </main>
  <footer></footer>
</body>

</html>