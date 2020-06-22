<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="portfolio-website">
    <meta name="keywords" content="Design, Technology, Personal, University of Washington">
    <meta name="author" content="Christopher Sim">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <title>Christopher Sim</title>
  </head>
  <body>
    <!-- Header and Navigation -->
    <header class="header">
            <div class="row">
                <!-- Logo -->
                <div class="col">
                    <a href="landing.html">
                        <img class="header__logo" src="images/logo.png" alt="logo">
                    </a>
                </div>

                <!-- Navigation -->
                <div class="col">
                    <nav>
                        <ul class="header__list">
                            <li class="header__navigation-item"><a href="about.html" class="header__link">About</a></li>
                            <li class="header__navigation-item"><a href="#resume" class="header__link">Resume</a></li>
                            <li class="header__navigation-item"><a href="agenda.php" class="header__link">Agenda</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>

    <!-- Task Form -->
    <div class="agenda">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Agenda</h2>
                    <p>
                      This is an agenda database that I use to catalog upcoming events that I will be participating in.
                    </p>
                </div>
            </div>

            <p>Item <?php
            	$name = $_POST['name'];
              $location = $_POST['location'];
              $date = $_POST['date'];
              echo $name, " | ", $location, " | ", $date;
              $dsn = 'mysql:host=cssgate.insttech.washington.edu;dbname=psim97';
              $username = 'psim97';
              $password = 'HanojAwn';
            	$db = new PDO($dsn, $username, $password);
              $query = "INSERT INTO agenda VALUES('$name', '$location', '$date')";
              $insert_count = $db->exec($query);
              ?> has been added to database.
            </p>
        </div>

    </div>


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="footer__content">
                Made with ❤️ & ☕️ by Christopher Sim in beautiful Seattle, Washington 🏔
            </p>
        </div>
    </footer>
  </body>
</html>
