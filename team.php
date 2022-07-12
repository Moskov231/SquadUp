<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"The Team | SquadUp");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?>  


        <link href="css/creator-portfolio.min.css" rel="stylesheet">
    </head>
    
    <body style="background: #f1f1f1">

        <?php include 'includes/navbar.php'; ?>
   

        <div class="jumbotron text-white" style="background-image: url('img/team-cover.png')">
            <div class="container">
              <h1 class="display-3">The SquadUp Creators</h1>
              <h4>The Brains and Brawns behind all this</h4>
              <h1><a href="https://github.com/moskov231">
                      <i class="fa fa-github" aria-hidden="true"></i>
                  </a> &raquo;</h1>
            </div>
        </div>

        
      <div class="container">
        
        <section class="content-section" id="portfolio">
            
          <div class="container">
              
            <div class="content-section-heading text-center">
              <h3 class="text-secondary mb-0">The Minds Behind SquadUp</h3>
              <h2 class="mb-5">The Team</h2>
            </div>
            <div class="row no-gutters">
              <div class="col-lg-6">
                  <a class="portfolio-item" href="_SquadUp creators/SquadUp_Prateek.php" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Prateek Sahgal</h2>
                      <p class="mb-0 text-white">Malik</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="img/user-cover.png" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="_SquadUp creators/SquadUp_Priyansh.php" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Priyansh Jaiswal</h2>
                      <p class="mb-0 text-white">Useless One</p>
                    </span>
                  </span>
                    <img class="img-fluid" src="img/empty.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </section>
          

      </div>
        
        <?php include 'includes/footer.php'; ?>
        
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>