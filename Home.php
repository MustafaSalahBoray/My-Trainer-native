<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    .typed-cursor {
      opacity: 0 !important;
    }
  </style>
  <title>MY-TRAINER</title>
</head>

<body>
  <?php
  require 'inc/Nav.php';
  ?>
  <div class="home ">
    <!-- Start meal  -->
    <div class="h-100 align-items-center justify-content-between d-flex">
      <div class="container position-relative text-light ">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6">
            <div class="home-item text-center">
              <div class="main-heading position-relative ">
                <h1 class=" text-danger fw-bolder type-home">
                </h1>
              </div>
              <p>
                We break the stereotype ‘healthy eating is boring”. Reach
                your weight, health and workout goals with deliciously
                healthy food. We have various diet plans customised to suit
                your specific health and weight requirements. With a new
                changing menu every week, we bring to you food from various
                cuisines, with a healthy twist. We make healthy eating fun
                and effortless!
              </p>
              <a href="Meals.php">
                <button class="btn btn-danger w-50 fw-bold mt-3">
                  Your Meals
                </button>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-home d-flex align-items-center justify-content-center">
              <img src="images/anh-nguyen-kcA-c3f_3FE-unsplash-removebg-preview.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End meal  -->
  <!-- start exercise  -->
  <div class="exercise py-5 my-5">
    <div class="container">
      <div class="row align-items-center text-center">
        <div class="col-md-6">
          <div class="exercise-con" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2500">
            <h1 class="text-danger fw-bold ">
              My Trainer ONLINE PERSONAL TRAINING & NUTRITION
            </h1>
            <p>
              Getting in shape takes time, quality personalised workouts,
              dedication, smart calculated nutrition, and dedicated support.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-exe" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2500">
            <img class="img-fluid rounded-2" src="images/young-healthy-man-athlete-doing-exercise-with-ropes-gym-single-male-model-practicing-hard-training-his-upper-body-concept-healthy-lifestyle-sport-fitness-bodybuilding-wellbeing.jpg" alt="" />
          </div>
        </div>
      </div>
      <div class="exe-btn d-flex align-items-center justify-content-center">
        <a class="btn btn-danger w-50 fw-bold mt-5 " href="Exercise.php">
          Your Exrcies
        </a>
      </div>
    </div>
  </div>
  <!-- End exercise  -->
  <!-- Start blog  -->
  <div class="blogs py-5 my-5 bg-dark">
    <div class="container">
      <div class="title text-center text-danger mb-5">
        <h1 class="fw-bold">Learn more about sports and nutrition</h1>
      </div>
      <div class="row gy-3">
        <div class="col-md-4 d-flex align-items-center justify-content-center " data-aos="fade-up" data-aos-duration="3000">
          <div class="card" style="width: 18rem">
            <img src="Blogs/492898_o.png" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title">Protein Sources</h5>
              <p class="card-text">
               The benefits of carbs for muscles.And the importance of
               these compound sugars for the bodybuilder lies in the fact that they are
               transformed after the process of dismantling them .
              </p>
              <a href="http://localhost/My-Trainer%20native/Blogs/carp.php" class="btn btn-danger">
                 more info!
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="3000">
          <div class="card" style=" width: 18rem">
            <img src="Blogs/pills.jpg" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title">Legumes and cereals</h5>
              <p class="card-text">
                  Legumes and grains are among the important and necessary foods for human 
              health, as they are rich in protein, carbohydrates,
              </p>
              <a href="http://localhost/My-Trainer%20native/Blogs/grains.php" class ="btn btn-danger">
                 more info!
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="3000">
          <div class="card" style=" width: 18rem">
            <img src="Blogs/green.jpg" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title">Vegetabels</h5>
              <p class="card-text">
                Benefits of vegetables · Reducing the possibility of obesity;  Because it does 
              not contain fat, and contains small amounts of calories.  
              An important source of vitamins and minerals
              </p>
              <a href="http://localhost/My-Trainer%20native/Blogs/green.php" class ="btn btn-danger">
                 more info!
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="exe-btn d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="3000">
        <a class="btn btn-danger w-50 fw-bold mt-5 " href="http://localhost/My-Trainer%20native/Blogs.php">
          Read more articles
        </a>
      </div>
    </div>
  </div>
  <!-- End blog  -->
  <!-- Start logos  -->
  <div class="logos py-5 text-center">
    <div class="container">
      <div class="row align-items-center ">
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <div class="img-logo w-75 " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500">
            <img src="images/gnc-live-well-logo-vector-720x400.png.webp" class="img-fluid" alt="" />
          </div>
        </div>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <div class="img-logo w-75 " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500">
            <img src="images/BPI-Logo-600x800-2-640x490-2-522x400.jpg.webp" class="img-fluid" alt="" />
          </div>
        </div>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <div class="img-logo w-75" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500">
            <img src="images/download-9.png" class="img-fluid" alt="" />
          </div>
        </div>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <div class="img-logo w-75" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2500">
            <img src="images/download.png.webp" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End logos  -->
  <?php
  require 'inc/Footer.php';
  ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="JS/typed.js"></script>
  <script>
    AOS.init();
    var typed = new Typed('.type-home', {
      strings: [
        'First',
        'The body achieves what the mind believes.',
        'The best way to predict the future is to create it.',
        'Get Fit, Strong & Motivated.'
      ],
      typeSpeed: 80,
      backSpeed: 100,
      startDelay: 0,
      loop: true
    });
  </script>
</body>

</html>