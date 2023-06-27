<?php   require 'Header.php';?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark justify-content-between">
    <div class="container">
        <a class="navbar-brand fw-bold text-danger">My Trainer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/My-Trainer%20native/Home.php">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/My-Trainer%20native/Meals.php">
                        Meals
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/My-Trainer%20native/Exercise_ch.php">
                        Exercise
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/My-Trainer%20native/Supplements.php">
                        Supplements
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/My-Trainer%20native/Blogs.php">
                        Blogs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/My-Trainer%20native/About.php">
                        About You
                    </a>
                </li> <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/My-Trainer native\Chat.php">
                       Chat
                    </a>
                </li>
            </ul>
        </div>
        <div>
      <!-- Logout -->

        <div>
            <ul class="navbar-nav m-auto mb-2 mb-lg-0 flex-row">
                <form method="POST"> <li class="nav-item btn btn-danger text-danger p-0 me-2">
                   <a name="Logout" class="nav-link" href="http://localhost/My-Trainer%20native/inc/Logout.php">
                        <i class="fa-sharp  fa-regular   fa fa-arrow-up-left-from-circle">Logout</i></button>
                    </a>
                </li></form>
               
            </ul>
        </div>
  
    </div>
</nav>

