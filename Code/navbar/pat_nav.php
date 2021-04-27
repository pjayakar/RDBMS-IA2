
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
            <a class="nav-link" href="patient_display.php"><b>Personal Data</b> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active pl-3">
            <a class="nav-link" href="prescription.php"><b>Prescription</b> <span class="sr-only"></span></a>
          </li>
        </ul>
        <ul class='navbar-nav ml-auto'>
        <?php
          if(isset($_SESSION["patient_id"]))
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
