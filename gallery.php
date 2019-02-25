<?php require 'includes/header.php'?>

<?php require 'includes/navbar.php'?>
<!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">GYDA Gallery</h2>
            <h3 class="section-subheading text-muted">Projects we have done So far.</h3>
          </div>
        </div>
        <div class="row">
          <!-- Booklist  -->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#booklist">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/Slide20.JPG" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Booklist</h4>
              <p class="text-muted">Education</p>
            </div>
          </div>
          <!-- Zakathul Fithr -->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#fitr">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/Slide4.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Zakathul Fitr</h4>
              <p class="text-muted">Charity</p>
            </div>
          </div>
          <!-- Qurban -->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#qurban">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/Slide21.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Qurban</h4>
              <p class="text-muted">Sacrifice</p>
            </div>
          </div>
          <!-- Ramazan -->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#ramazan">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/Slide7.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Ramadhan Pack</h4>
              <p class="text-muted">Charity</p>
            </div>
          </div>
          <!-- Ifthar -->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#ifthar">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/Slide11.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Ifthar</h4>
              <p class="text-muted">Unity</p>
            </div>
          </div>
          <!-- Shramadana -->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#shramadana">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/Slide14.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Shramadana Campaign</h4>
              <p class="text-muted">Community Service</p>
            </div>
          </div>
          <!-- Futsal -->
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#sports">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/Slide23.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Futsal</h4>
              <p class="text-muted">Health & Fitness</p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Modals -->
    <?php require "gallery-imgs/booklist.php"?>

    <?php require "gallery-imgs/fitr.php"?>

    <?php require "gallery-imgs/qurban.php"?>

    <?php require "gallery-imgs/ramazan.php"?>
    
    <?php require "gallery-imgs/ifthar.php"?>

    <?php require "gallery-imgs/shramadana.php"?>

    <?php require "gallery-imgs/sports.php"?>

  

    
    <?php include "includes/footer.php" ?>
