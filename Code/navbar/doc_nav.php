
<header>

        <nav class="navbar navbar-expand-lg navbar-light main-navigation" style="background-color: #add8e6">
        <a class="navbar-brand" href="#">
          <img src="images/logo.PNG" width="200" height="50" class="d-inline-block align-center" alt="">
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active pl-3">
            <a class="nav-link" href="doc_display.php"><b>Patient Records</b> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active pl-3">
            <a class="nav-link" href="calender.php"><b>Schedule</b> <span class="sr-only"></span></a>
          </li>
        </ul>
        <ul class='navbar-nav ml-auto'>
        <?php
          if(isset($_SESSION["username"]))
          {
            #echo $_SESSION["first_name"];
            echo "<li class='nav-item dropdown'>";
            echo "<a class='nav-link' href='logout.php' style='color: black;'><b>Logout</b></a>";
          }
          else
           {
            echo "
            <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                  <b>Hospital Login</b>
                </a>
                <div class='dropdown-menu' aria-labelled by='navbarDropdown'>
                  <a class='dropdown-item' href='doclog.php'>Doctor Login</a>
                  <div class='dropdown-divider'></div>
                  <a class='dropdown-item' href='patlog.php'>Patient Login</a>
                </div>
              </li>
          </ul>";
        }
          ?>
      </div>
    </nav>
    </header>
    <footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><a href="#!">About</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Contact</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">© Your Website 2021. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#!"><i class="fab fa-facebook fa-2x fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#!"><i class="fab fa-twitter-square fa-2x fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#!"><i class="fab fa-instagram fa-2x fa-fw"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
