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

            <!-- Form -->
            <form name="Agenda" action="success.php" method="post">
                <div class="form-row">
                    <div class="col-md">
                        <label for="name">Name of Event</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Wordcamp 2019">
                    </div>
                    <div class="col-md">
                        <label for="location">Location of Event</label>
                        <input type="text" name="location" class="form-control" id="location" placeholder="Nashville, TN">
                    </div>
                    <div class="col-md">
                        <label for="date">Date of Event</label>
                        <input type="date" name="date" class="form-control" id="date" placeholder="June 13, 2020">
                    </div>
                </div>
                <div class="form-row pt-2">
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Add to List 👉</button>
                    </div>
                </div>
            </form>

            <hr>

            <section class="agenda__list">
                <table class="table table-bordered">
                    <tr>
                        <th>Name of Event</th>
                        <th>Location</th>
                        <th>Date</th>
                    </tr>
                    <?php
                        $dsn = 'mysql:host=cssgate.insttech.washington.edu;dbname=psim97';
                        $username = 'psim97';
                        $password = 'HanojAwn';
                        $conn = new PDO($dsn, $username, $password);

                        $sql = "SELECT * FROM agenda";
                        $result = $conn-> query($sql);
                        while ($row = $result->fetch()) {
                          echo "<tr><td>". $row["name"] ."</td><td>". $row["location"] ."</td><td>". $row["date"] ."</td></tr>";
                        }
                    ?>
                </table>
            </section>
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
