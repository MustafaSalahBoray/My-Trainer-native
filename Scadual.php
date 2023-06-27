<!DOCTYPE html>

<head>
  <title>MY-Trainer</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="table-04/css/style.css" />
  <link href="table-04/dist/css/lightbox.min.css" rel="stylesheet" />
  <?php session_start();?>
</head>

<body> 
  <?php 
    require 'DB_connect.php';
       require 'inc/Nav.php';
         if(isset($_SESSION['users']))
     {
      $id=$_SESSION['users']->UserId;
      $TraninngSystem=$_SESSION['users']->TraninngSystem;}
       if ($TraninngSystem=='muscular build') {
    echo ' <h2 class="mt-2">Traning System: <span class="text-danger">'.$_SESSION['users']->TraninngSystem .'</span></h2> 
       <h2>Count:<span class="text-danger">8-12 Count</span></h2>
       <h2>Weightlifting:<span class="text-danger">Heavy Weights</span></h2>
       <h2>Rest:<span class="text-danger">1 minute</span></h2>
      ';}
      
       elseif ($TraninngSystem=='Muscle increase') {
    
      echo ' <h2 class="mt-2">Traning System: <span class="text-danger">'.$_SESSION['users']->TraninngSystem .'</span></h2> 
       <h2>Count:<span class="text-danger">1-6 count</span></h2>
       <h2>Weightlifting:<span class="text-danger">Heavy Weights</span></h2>
            <h2>Rest:<span class="text-danger">3-5 minute</span></h2>
      ';}
       elseif ($TraninngSystem=='Durability') {
    
      echo ' <h2 class="mt-2">Traning System: <span class="text-danger">'.$_SESSION['users']->TraninngSystem .'</span></h2> 
       <h2>Count:<span class="text-danger">15-20 Count</span></h2>
       <h2>Weightlifting:<span class="text-danger">Light weights</span></h2>
           <h2>Rest:<span class="text-danger">20-60 second</span></h2>
      ';}
       echo' <center><a  class="btn btn-danger text-center w-50"href="cardio.php"><h3 class="text-light">Cardio</h3></a></center>';

        
     $ShowDays=$db->prepare("SELECT * FROM users WHERE UserId='$id'");
     $ShowDays->execute();
     $ShowDays=$ShowDays->fetchAll(PDO::FETCH_ASSOC);
       foreach ($ShowDays as $key ) {
      $Days=explode(',',$key['ChooseDays'] );


    }
      $count=count($Days);

    if ($count==4) {
      // code...
    
  ?>
  <section class="py-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-center mb-4">Exercies Schedule Table</h4>
          <div class="table-wrap">
            <table class="table table-bordered text-center">
              <tr>
                <?php
                   if (in_array('Saturday',$Days)) {

                     
                      if (isset($Days[0])=='Saturday') {
                        echo ' <th>Saturday</th>';
                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                        }
                       elseif (isset($Days[1])=='Saturday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                        elseif (isset($Days[2])=='Saturday') {
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                        elseif (isset($Days[3])=='Saturday') {
                                $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }

                   }else{echo "<th>Saturday</th>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>


                   ";}
                 ?>
                
                
       
              </tr>
              <tr>
                 <?php
                   if (in_array('Sunday',$Days)) {
                    
                     echo ' <th>Sunday</th>';
                        if (isset($Days[0])=='Sunday') {
                             
                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                            
                        }
                       elseif (isset($Days[1])=='Sunday') {

                                  $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                        }
                        elseif (isset($Days[2])=='Sunday') {
                                $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                        elseif (isset($Days[3])=='Sunday') {
                                                          $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                   }else{echo " <th>Sunday</th>
                      <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
              

              </tr>
              <tr>
                 <?php
                   if (in_array('Monday',$Days)) {
                     echo ' <th>Monday</th>';
                       if (isset($Days[0])=='Monday') {
                                                
                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }   
                        }
                       elseif (isset($Days[1])=='Monday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        
                        }
                        elseif (isset($Days[2])=='Monday') {
                                $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                        elseif (isset($Days[3])=='Monday') {
                                                         $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                   }else{echo "<th>Monday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
               
               
              </tr>
              <tr>
                 <?php
                   if (in_array('Tuesday',$Days)) {
                     echo ' <th>Tuesday</th>';
                        if ($Days[0]=='Tuesday') {
                                  $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                       elseif (isset($Days[1])=='Tuesday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                        elseif (isset($Days[2])=='Tuesday') {
                                $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                        elseif (isset($Days[3])=='Tuesday') {
                                                          $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                   }else{echo "<th>Tuesday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                
        
              </tr>
              <tr>
                <?php
                   if (in_array('Wednesday',$Days)) {
                     echo ' <th>Wednesday</th>';
                      if (isset($Days[0])=='Wednesday') {
                                  $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                       elseif (isset($Days[1])=='Wednesday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                        elseif (isset($Days[2])=='Wednesday') {
                                $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                        elseif (isset($Days[3])=='Wednesday') {
                                                         $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                   }else{echo "<th>Wednesday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                
                
              <tr>
                 <?php
                   if (in_array('Thursday',$Days)) {
                     echo ' <th>Thursday</th>';
                       if (isset($Days[0])=='Thursday') {
                                $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                       elseif (isset($Days[1])=='Thursday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }   
                        }
                        elseif (isset($Days[2])=='Thursday') {
                               $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                        elseif (isset($Days[3])=='Thursday') {
                                                          $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                   }else{echo "<th>Thursday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                <th></th>
                         </tr>
              <tr>
                 <?php
                   if (in_array('Friday',$Days)) {
                     echo ' <th>Friday</th>';
                         if (isset($Days[0])=='Friday') {
                                  $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                       elseif (isset($Days[1])=='Friday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }   
                        }
                        elseif (isset($Days[2])=='Friday') {
                                $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                        }
                        elseif (isset($Days[3])=='Friday') {
                            $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                   }else{echo "<th>Friday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
            
              </tr>
              <?php  
               }
               // *****************************************************************************************************************************
          if ($count==5) {
      // code...
    
  ?>
  <section class="py-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-center mb-4">Exercies Schedule Table</h4>
          <div class="table-wrap">
            <table class="table table-bordered text-center">
              <tr>
                <?php
                   if (in_array('Saturday',$Days)) {

                     
                      if (isset($Days[0])=='Saturday') {
                        echo ' <th>Saturday</th>';
                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 8');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                            
                        }
                       elseif (isset($Days[1])=='Saturday') {
                                    $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  }
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 4');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                          
                        }
                        elseif (isset($Days[2])=='Saturday') {
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                          elseif (isset($Days[3])=='Saturday') {
                       $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }    
                        }
                        elseif (isset($Days[4])=='Saturday') {
                                $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }

                   }else{echo "<th>Saturday</th>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>


                   ";}
                 ?>
                
                
       
              </tr>
              <tr>
                 <?php
                   if (in_array('Sunday',$Days)) {
                    
                     echo ' <th>Sunday</th>';
                        if (isset($Days[0])=='Sunday') {
                             
                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 8');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            } 
                            
                            
                        }
                       elseif (isset($Days[1])=='Sunday') {

                              $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 4');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  
                            } 
                        
                        }
                        elseif (isset($Days[2])=='Sunday') {
                                $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }     elseif (isset($Days[3])=='Sunday') {
                       $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }    
                        }
                        elseif (isset($Days[4])=='Sunday') {
                                                          $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                   }else{echo " <th>Sunday</th>
                      <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
              

              </tr>
              <tr>
                 <?php
                   if (in_array('Monday',$Days)) {
                     echo ' <th>Monday</th>';
                       if (isset($Days[0])=='Monday') {
                                                
                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 8');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            } 
                             
                        }
                       elseif (isset($Days[1])=='Monday') {
                                    $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  }
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 4');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  
                            } 
                          
                        
                        }
                        elseif (isset($Days[2])=='Monday') {
                                $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                         elseif (isset($Days[3])=='Sunday') {
                       $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }    
                        }
                        elseif (isset($Days[4])=='Monday') {
                       $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                   }else{echo "<th>Monday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
               
               
              </tr>
              <tr>
                 <?php
                   if (in_array('Tuesday',$Days)) {
                     echo ' <th>Tuesday</th>';
                        if ($Days[0]=='Tuesday') {
                                  $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 8');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            } 

               
                              
                        }
                       elseif (isset($Days[1])=='Tuesday') {
                                    $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  }
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 4');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  
                            } 
                          
                        }
                        elseif (isset($Days[2])=='Tuesday') {
                                $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                         elseif (isset($Days[3])=='Tuesday') {
                       $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }    
                        }
                        elseif (isset($Days[4])=='Tuesday') {
                                                          $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                   }else{echo "<th>Tuesday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                
        
              </tr>
              <tr>
                <?php
                   if (in_array('Wednesday',$Days)) {
                     echo ' <th>Wednesday</th>';
                      if (isset($Days[0])=='Wednesday') {
                                  $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 8');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            } 

                        }
                       elseif (isset($Days[1])=='Wednesday') {
                                    $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  }
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 4');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  
                            } 
                          
                        }
                        elseif (isset($Days[2])=='Wednesday') {
                                $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                         elseif (isset($Days[3])=='Wednesday') {
                       $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }    
                        }
                        elseif (isset($Days[4])=='Wednesday') {
                                                         $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                   }else{echo "<th>Wednesday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                
                
              <tr>
                 <?php
                   if (in_array('Thursday',$Days)) {
                     echo ' <th>Thursday</th>';
                       if (isset($Days[0])=='Thursday') {
                                $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 8');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            } 
                            
                        }
                       elseif (isset($Days[1])=='Thursday') {
                                    $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  }
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 4');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" cl2ass="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  
                            } 
                           
                        }
                        elseif (isset($Days[2])=='Thursday') {
                               $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                         elseif (isset($Days[3])=='Thursday') {
                       $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }    
                        }
                        elseif (isset($Days[4])=='Thursday') {
                                                          $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                   }else{echo "<th>Thursday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                <th></th>
                         </tr>
              <tr>
                 <?php
                   if (in_array('Friday',$Days)) {
                     echo ' <th>Friday</th>';
                         if (isset($Days[0])=='Friday') {
                                  $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 8');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            } 
                                                     
                        }
                       elseif (isset($Days[1])=='Friday') {
                                    $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  }
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 4');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  
                            } 
                           
                        }
                        elseif (isset($Days[2])=='Friday') {
                                $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 8');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            } 
                        }
                         elseif (isset($Days[3])=='Friday') {
                       $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }    
                        }
                        elseif (isset($Days[4])=='Friday') {
                            $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                   }else{echo "<th>Friday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
            
              </tr>
              <?php  
               }
                    // *****************************************************************************************************************************
          if ($count==6) {
      // code...
    
  ?>
  <section class="py-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-center mb-4">Exercies Schedule Table</h4>
          <div class="table-wrap">
            <table class="table table-bordered text-center">
              <tr>
                <?php
                   if (in_array('Saturday',$Days)) {

                     
                      if (isset($Days[0])=='Saturday') {
                        echo ' <th>Saturday</th>';
                           $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }    
                                  
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                            
                        }
                       elseif (isset($Days[1])=='Saturday') {
                                      $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                          
                        }
                        elseif (isset($Days[2])=='Saturday') {
                                   $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                          elseif (isset($Days[3])=='Saturday') {
                             $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }    
                                  
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                        elseif (isset($Days[4])=='Saturday') {
                                 $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }   
                        }
                         elseif (isset($Days[5])=='Saturday') {
                              $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }

                   }else{echo "<th>Saturday</th>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>


                   ";}
                 ?>
                
                
       
              </tr>
              <tr>
                 <?php
                   if (in_array('Sunday',$Days)) {
                    
                     echo ' <th>Sunday</th>';
                        if (isset($Days[0])=='Sunday') {
                             
                                 $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }                                      
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                            
                        } 
                            
                            
                        
                       elseif (isset($Days[1])=='Sunday') {

                             $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }                        
                        }
                        elseif (isset($Days[2])=='Sunday') {
                                         $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }    
                        }     elseif (isset($Days[3])=='Sunday') {
                             $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }    
                                  
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                        elseif (isset($Days[4])=='Sunday') {
                                                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }   
                        }
                          elseif (isset($Days[5])=='Sunday') {
                              $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }

                   }else{echo " <th>Sunday</th>
                      <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
              

              </tr>
              <tr>
                 <?php
                   if (in_array('Monday',$Days)) {
                     echo ' <th>Monday</th>';
                       if (isset($Days[0])=='Monday') {
                                                
                                 $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }                                      
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                            
                        } 
                             
                        
                       elseif (isset($Days[1])=='Monday') {
                                     $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                          
                        
                        }
                        elseif (isset($Days[2])=='Monday') {
                                         $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                         elseif (isset($Days[3])=='Sunday') {
                             $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }    
                                  
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                        elseif (isset($Days[4])=='Monday') {
                        $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                          elseif (isset($Days[5])=='Monday') {
                              $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }

                   }else{echo "<th>Monday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
               
               
              </tr>
              <tr>
                 <?php
                   if (in_array('Tuesday',$Days)) {
                     echo ' <th>Tuesday</th>';
                        if ($Days[0]=='Tuesday') {
                                        $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }                                      
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                            
                        

               
                              
                        }
                       elseif (isset($Days[1])=='Tuesday') {
                                     $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                          
                        }
                        elseif (isset($Days[2])=='Tuesday') {
                                         $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                         elseif (isset($Days[3])=='Tuesday') {
                             $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }    
                                  
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                        elseif (isset($Days[4])=='Tuesday') {
                                                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                          elseif (isset($Days[5])=='Tuesday') {
                              $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }

                   }else{echo "<th>Tuesday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                
        
              </tr>
              <tr>
                <?php
                   if (in_array('Wednesday',$Days)) {
                     echo ' <th>Wednesday</th>';
                      if (isset($Days[0])=='Wednesday') {
                                        $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }                                      
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                            
                        

                        }
                       elseif (isset($Days[1])=='Wednesday') {
                                     $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                          
                        }
                        elseif (isset($Days[2])=='Wednesday') {
                                         $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }    
                        }
                         elseif (isset($Days[3])=='Wednesday') {
                             $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }    
                                  
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                        elseif (isset($Days[4])=='Wednesday') {
                                                          $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }   
                        }
                          elseif (isset($Days[5])=='Wednesday') {
                              $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }

                   }else{echo "<th>Wednesday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                
                
              <tr>
                 <?php
                   if (in_array('Thursday',$Days)) {
                     echo ' <th>Thursday</th>';
                       if (isset($Days[0])=='Thursday') {
                                      $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }                                      
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                            
                         
                               
                        }
                       elseif (isset($Days[1])=='Thursday') {
                                    $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 4');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  }
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 4');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" cl2ass="img-fluid" alt="44" /></a>
                  </div>
               
                </td>';  
                            } 
                           
                        }
                        elseif (isset($Days[2])=='Thursday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                         elseif (isset($Days[3])=='Thursday') {
                             $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }    
                                  
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                        elseif (isset($Days[4])=='Thursday') {
                                                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }   
                        }
                          elseif (isset($Days[5])=='Thursday') {
                              $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }

                   }else{echo "<th>Thursday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                <th></th>
                         </tr>
              <tr>
                 <?php
                   if (in_array('Friday',$Days)) {
                     echo ' <th>Friday</th>';
                         if (isset($Days[0])=='Friday') {
                                        $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }                                      
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                            
                        } 
                                                     
                        
                       elseif (isset($Days[1])=='Friday') {
                                     $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  }
                            
                           
                        }
                        elseif (isset($Days[2])=='Friday') {
                                         $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                         elseif (isset($Days[3])=='Friday') {
                             $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 4');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }    
                                  
                           $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 4');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                        elseif (isset($Days[4])=='Friday') {
                             $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="44" /></a>
                  </div>
               
                </td>'; 
                            }
                               $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 4');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                          elseif (isset($Days[5])=='Friday') {
                              $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }

                   }else{echo "<th>Friday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
            
              </tr>
              <?php  
               }
               // *****************************************************************************************+
                elseif ($count==3) {
      // code...
    
  ?>
  <section class="py-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-center mb-4">Exercies Schedule Table</h4>
          <div class="table-wrap">
            <table class="table table-bordered text-center">
              <tr>
                <?php
                   if (in_array('Saturday',$Days)) {

                     
                      if (isset($Days[0])=='Saturday') {
                        echo ' <th>Saturday</th>';
                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 2');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 2');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                        }
                       elseif (isset($Days[1])=='Saturday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                        elseif (isset($Days[2])=='Saturday') {
                            $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                       $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 3');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                             $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }    
                        }
                   

                   }else{echo "<th>Saturday</th>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>


                   ";}
                 ?>
                
                
       
              </tr>
              <tr>
                 <?php
                   if (in_array('Sunday',$Days)) {
                    
                     echo ' <th>Sunday</th>';
                        if (isset($Days[0])=='Sunday') {
                             
                               $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 2');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 2');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                            
                        }
                       elseif (isset($Days[1])=='Sunday') {

                                  $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                        }
                        elseif (isset($Days[2])=='Sunday') {
                                          $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                       $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 3');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                             $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                       
                   }else{echo " <th>Sunday</th>
                      <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
              

              </tr>
              <tr>
                 <?php
                   if (in_array('Monday',$Days)) {
                     echo ' <th>Monday</th>';
                       if (isset($Days[0])=='Monday') {
                                                
                               $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 2');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 2');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                       elseif (isset($Days[1])=='Monday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        
                        }
                        elseif (isset($Days[2])=='Monday') {
                                          $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                       $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 3');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                             $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                       
                   }else{echo "<th>Monday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
               
               
              </tr>
              <tr>
                 <?php
                   if (in_array('Tuesday',$Days)) {
                     echo ' <th>Tuesday</th>';
                        if ($Days[0]=='Tuesday') {
                                      $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 2');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 2');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                       elseif (isset($Days[1])=='Tuesday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                        elseif (isset($Days[2])=='Tuesday') {
                                          $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                       $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 3');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                             $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }

                   }else{echo "<th>Tuesday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                
        
              </tr>
              <tr>
                <?php
                   if (in_array('Wednesday',$Days)) {
                     echo ' <th>Wednesday</th>';
                      if (isset($Days[0])=='Wednesday') {
                                      $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 2');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 2');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                       elseif (isset($Days[1])=='Wednesday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                        elseif (isset($Days[2])=='Wednesday') {
                                          $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                       $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 3');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                             $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                        elseif (isset($Days[3])=='Wednesday') {
                                                         $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                   }else{echo "<th>Wednesday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                
                
              <tr>
                 <?php
                   if (in_array('Thursday',$Days)) {
                     echo ' <th>Thursday</th>';
                       if (isset($Days[0])=='Thursday') {
                                    $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 2');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 2');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                       elseif (isset($Days[1])=='Thursday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }   
                        }
                        elseif (isset($Days[2])=='Thursday') {
                                         $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                       $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 3');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                             $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                   
                   }else{echo "<th>Thursday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                <th></th>
                         </tr>
              <tr>
                 <?php
                   if (in_array('Friday',$Days)) {
                     echo ' <th>Friday</th>';
                         if (isset($Days[0])=='Friday') {
                                      $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 4');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 2');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 2');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                       elseif (isset($Days[1])=='Friday') {
                                        $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 4');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 2');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 2');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }   
                        }
                        elseif (isset($Days[2])=='Friday') {
                                          $selectshoudlers=$db->prepare('SELECT * FROM shoudlers ORDER BY RAND() LIMIT 4');
                           $selectshoudlers->execute();
                             $selectshoudlers=$selectshoudlers->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectshoudlers as $keyshoudlers  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyshoudlers['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyshoudlers['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                       $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 3');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                             $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                        }
                
                   }else{echo "<th>Friday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
            
              </tr>
              <?php  
               }
               // *************************************************************************************************************************/
                elseif ($count==2) {
      // code...
    
  ?>
  <section class="py-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-center mb-4">Exercies Schedule Table</h4>
          <div class="table-wrap">
            <table class="table table-bordered text-center">
              <tr>
                <?php
                   if (in_array('Saturday',$Days)) {

                     
                      if (isset($Days[0])=='Saturday') {
                        echo ' <th>Saturday</th>';
                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 2');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                        }
                       elseif (isset($Days[1])=='Saturday') {
                              $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                        }
                   

                   }else{echo "<th>Saturday</th>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>


                   ";}
                 ?>
                
                
       
              </tr>
              <tr>
                 <?php
                   if (in_array('Sunday',$Days)) {
                    
                     echo ' <th>Sunday</th>';
                        if (isset($Days[0])=='Sunday') {
                             
                         $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 2');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                        }
                       elseif (isset($Days[1])=='Sunday') {
                         $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                        }
               
                       
                   }else{echo " <th>Sunday</th>
                      <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
              

              </tr>
              <tr>
                 <?php
                   if (in_array('Monday',$Days)) {
                     echo ' <th>Monday</th>';
                       if (isset($Days[0])=='Monday') {
                                                
                          $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 2');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                       elseif (isset($Days[1])=='Monday') {
                              $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                        }
                         
                   }else{echo "<th>Monday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
               
               
              </tr>
              <tr>
                 <?php
                   if (in_array('Tuesday',$Days)) {
                     echo ' <th>Tuesday</th>';
                        if ($Days[0]=='Tuesday') {
                                  $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 2');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                       elseif (isset($Days[1])=='Tuesday') {
                              $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                        
                      
                }
                   }else{echo "<th>Tuesday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                
        
              </tr>
              <tr>
                <?php
                   if (in_array('Wednesday',$Days)) {
                     echo ' <th>Wednesday</th>';
                      if (isset($Days[0])=='Wednesday') {
           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 2');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                       elseif (isset($Days[1])=='Thursday') {
                              $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }
                   
                   }else{echo "<th>Thursday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                <th></th>
                         </tr>
              <tr>
                 <?php
                   if (in_array('Friday',$Days)) {
                     echo ' <th>Friday</th>';
                         if (isset($Days[0])=='Friday') {
                      $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 2');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }  
                        }
                       elseif (isset($Days[1])=='Friday') {
                              $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 8');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }  
                        }

                
                   }else{echo "<th>Friday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
            
              </tr>
              <?php  
               }
                elseif ($count==1) {
      // code...
    
  ?>
  <section class="py-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-center mb-4">Exercies Schedule Table</h4>
          <div class="table-wrap">
            <table class="table table-bordered text-center">
              <tr>
                <?php
                   if (in_array('Saturday',$Days)) {

                     
                      if (isset($Days[0])=='Saturday') {
                        echo ' <th>Saturday</th>';
                           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 1');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                               $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 1');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                        }
                  
                   

                   }else{echo "<th>Saturday</th>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>


                   ";}
                 ?>
                
                
       
              </tr>
              <tr>
                 <?php
                   if (in_array('Sunday',$Days)) {
                    
                     echo ' <th>Sunday</th>';
                        if (isset($Days[0])=='Sunday') {
                             
                         $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 1');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                               $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 1');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                        }
                
               
                       
                   }else{echo " <th>Sunday</th>
                      <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
              

              </tr>
              <tr>
                 <?php
                   if (in_array('Monday',$Days)) {
                     echo ' <th>Monday</th>';
                       if (isset($Days[0])=='Monday') {
                                                
                          $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 1');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                               $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 1');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
               
                         
                   }else{echo "<th>Monday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
               
               
              </tr>
              <tr>
                 <?php
                   if (in_array('Tuesday',$Days)) {
                     echo ' <th>Tuesday</th>';
                        if ($Days[0]=='Tuesday') {
                                  $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 1');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                               $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 1');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
               
                   }else{echo "<th>Tuesday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                
        
              </tr>
              <tr>
                <?php
                   if (in_array('Wednesday',$Days)) {
                     echo ' <th>Wednesday</th>';
                      if (isset($Days[0])=='Wednesday') {
           $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 1');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                               $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 1');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                  
                   }else{echo "<th>Thursday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
                <th></th>
                         </tr>
              <tr>
                 <?php
                   if (in_array('Friday',$Days)) {
                     echo ' <th>Friday</th>';
                         if (isset($Days[0])=='Friday') {
                      $selectChest=$db->prepare('SELECT * FROM chest ORDER BY RAND() LIMIT 2');
                           $selectChest->execute();
                             $selectChest=$selectChest->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectChest as $keyChest  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyChest['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyChest['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selecttricebs=$db->prepare('SELECT * FROM triceps ORDER BY RAND() LIMIT 1');
                           $selecttricebs->execute();
                           foreach ($selecttricebs as $keytricebs  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keytricebs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keytricebs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                                    $selectabs=$db->prepare('SELECT * FROM abs ORDER BY RAND() LIMIT 1');
                           $selectabs->execute();
                             $selectabs=$selectabs->fetchAll(PDO::FETCH_ASSOC);
                        
                           foreach ($selectabs as $keyabs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyabs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyabs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }
                                                     $selectBack=$db->prepare('SELECT * FROM back ORDER BY RAND() LIMIT 1');
                           $selectBack->execute();
                             $selectBack=$selectBack->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectBack as $keyBack  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyBack['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyBack['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            } 
                             $selectbaiceps=$db->prepare('SELECT * FROM baiceps ORDER BY RAND() LIMIT 1');
                           $selectbaiceps->execute();
                           foreach ($selectbaiceps as $keybaiceps  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keybaiceps['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keybaiceps['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            } 
                             $selectforearms=$db->prepare('SELECT * FROM forearms ORDER BY RAND() LIMIT 1');
                           $selectforearms->execute();
                           foreach ($selectforearms as $keyforearms  ) {
                                  echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keyforearms['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keyforearms['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>';  
                            }
                               $selectlegs=$db->prepare('SELECT * FROM legs ORDER BY RAND() LIMIT 1');
                           $selectlegs->execute();
                             $selectlegs=$selectlegs->fetchAll(PDO::FETCH_ASSOC);

                           foreach ($selectlegs as $keylegs  ) {
                                   
                                     echo '  <td>
                  <div class="img rounded-circle mb-2">
                    <a href="table-04/images/'.$keylegs['image'].'" data-lightbox="image-1" ><img src="img_exercise/'.$keylegs['image'].'" class="img-fluid" alt="55" /></a>
                  </div>
               
                </td>'; 
                            }   
                        }
                  

                
                   }else{echo "<th>Friday</th>
                    <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>
                         <td><i class='fa fa-close'></i></td>";}
                 ?>
            
              </tr>
              <?php  
               }
   
   
              
     ?>
              
   
   
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    lightbox.option({
      resizeDuration: 200,
      wrapAround: true,
    });
  </script>
  <script src="table-04/dist/js/lightbox-plus-jquery.min.js"></script>
  <script src="table-04/dist/js/lightbox.js"></script>
  <script src="table-04/js/jquery.min.js"></script>
  <script src="table-04/js/popper.js"></script>
  <script src="table-04/js/bootstrap.min.js"></script>
  <script src="table-04/js/main.js"></script>
</body>

</html>