<?php

include('db.php');

//declare and receive connection
$pdo = pdo_connect_mysql();


//select all from products if you want to display products 
$stmt = $pdo->prepare('SELECT * FROM products');
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <!-- bootsrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- header starts -->
    <header>
        <div class="row ">
            <div class="col-4">
                <h3>Shree</h3>


            </div>
            <div class="col-8">
                <ul class="list-unstyled d-flex justify-content-evenly myline mt-3">
                    <li>Home</li>
                    <li>About</li>
                    <li>Vegetable</li>
                    <li>Testimonial</li>
                    <li>Contact Us</li>
                </ul>

            </div>

        </div>

    </header>
        <!-- header starts -->
<!-- main starts here -->
    <main>
     <section class="sect1 ">
        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row ">
                    <div class="col-6">
                        <div class="res pl-5">
                            <span class="sp">Welcome to Shree</span>
                            <h1>Vegetables Shop</h1>

                            <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout.The point of using lorem Ipsum is that it has a more or less normal </p>

                            <div class="input-group mb-3 " style="width: 70%;">
                                <input type="text" class="form-control" placeholder="Vegetable" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text btn-lg btn-dark " id="basic-addon2">Search</span>
                              </div>

                              <div>
                                  <button class="btn-lg btn-dark rounded-pill" style="background-color: black;">Contact us</button>
                                  <button class="btn-lg btn-dark rounded-pill" style="background-color: black;">Vegetable</button>
                              </div>
                        </div>

                    </div>
                    <div class="col-6 pt-4">
                        <div class="pt-4">
                            <img class="broco" src="brocoli.png" alt="">
                        </div>

                    </div>

                </div>
              </div>
              <div class="carousel-item">
                <div class="row ">
                    <div class="col-6">
                        <div class="res pl-5">
                            <span class="sp">Do you need legumes ? </span>
                            <h1>Vegetables Shop</h1>

                            <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout.The point of using lorem Ipsum is that it has a more or less normal </p>

                            <div class="input-group mb-3 " style="width: 70%;">
                                <input type="text" class="form-control" placeholder="Vegetable" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text btn-lg btn-dark " id="basic-addon2">Search</span>
                              </div>

                              <div>
                                  <button class="btn-lg btn-dark rounded-pill" style="background-color: black;">Contact us</button>
                                  <button class="btn-lg btn-dark rounded-pill" style="background-color: black;">Vegetable</button>
                              </div>
                        </div>

                    </div>
                    <div class="col-6 pt-4">
                        <div class="pt-4">
                            <img class="broco" src="https://cdn.pixabay.com/photo/2021/12/28/16/50/collard-greens-6899781__480.png" alt="">
                        </div>

                    </div>

                </div>
             
              </div>
              <div class="carousel-item">
                <div class="row ">
                    <div class="col-6">
                        <div class="res pl-5">
                            <span class="sp">Shop with us</span>
                            <h1>Legumes Store</h1>

                            <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout.The point of using lorem Ipsum is that it has a more or less normal </p>

                            <div class="input-group mb-3 " style="width: 70%;">
                                <input type="text" class="form-control" placeholder="Vegetable" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text btn-lg btn-dark " id="basic-addon2">Search</span>
                              </div>

                              <div>
                                  <button class="btn-lg btn-dark rounded-pill" style="background-color: black;">Contact us</button>
                                  <button class="btn-lg btn-dark rounded-pill" style="background-color: black;">Vegetable</button>
                              </div>
                        </div>

                    </div>
                    <div class="col-6 ">
                        <div class="">
                            <img class="broco" src="brocoli.png" alt="">
                        </div>

                    </div>

                </div>
              
                
              </div>
            </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="hidden"></span>
            </button> 
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="hidden"></span>
            </button>
          </div>

     </section>
     <section class="vege">
         <div class="row">
             <div class="offset-2 col-4 pt-4">
                 <div>
                     <p class="abt mt-3 ">About us</p>
                    <p class="pt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages andIt is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many</p> 
                <button class="btn-lg btn-dark rounded-pill" style="background-color: black;">Read more</button> 
                </div>

             </div>
             <div class="col-6">
                 <div>
                     <img class="leg" src="legumes.jpeg" alt="">
                 </div>

             </div>

         </div>

     </section>
     <div class="row text-center mt-2 pt-2">
         <h1>FRESH <small style="color: green; font-weight: 700;">VEGETABLE</small></h1>

     </div>
     <section class="sect2">
         <div class="row mt-4 pt-4">
             <div class="offset-1 col-4">
                 <div>
                     <h4  style="font-size: 34px; color: black;">Best Vegetables Shop</h4>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages andIt is a long established fact that a reader will be distracted</p>
                 </div>

             </div>
             <div class="col-6">
                 <div>
                     <img src="tomatoe.jpeg" alt="">

                 </div>

             </div>
             <div class="row">
                <div>
                    <img class="opo" src="potatoes.jpeg" alt="">

                </div>

             </div>

         </div>

     </section>
     <section class="sect09">
         <div class="row">
             <div class="offset-9 col-4">
                 <h1 style="font-size: 50px; font-weight: 800;">TESTIMONIAL</h1>
             </div>


         </div>
         <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="cara">
                      <div class="row">
                          <div class="col-4">
                              <div class="picpic">
                                  <img style="width:179px;" class="gl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCz_S3hjf3ajWtpjQi1kdFOIAha6ko_GbU-g&usqp=CAU" alt="">
                                  <img class="ic" src="colo.png" alt="">
                              </div>

                          </div>
                          <div class="col-8">
                              <div class="pt-5 jame">
                                  <h3>Ryan Reynolds</h3>
                                  <small>Actor</small>
                                  <p>Be Real in whatever you do and don't turn backwards readable content of a page when looking at it's layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and</p>
                              </div>


                        </div>

                      </div>

                  </div>
              </div>
              <div class="carousel-item">
                <div class="cara">
                    <div class="row">
                        <div class="col-4">
                            <div class="picpic">
                                <img class="gl" src="glasses.jpeg" alt="">
                                <img class="ic" src="colo.png" alt="">
                            </div>

                        </div>
                        <div class="col-8">
                            <div class="pt-5 jame">
                                <h3>Reminix</h3>
                                <small>Review</small>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and</p>
                            </div>


                      </div>

                    </div>

                </div>
              </div>
              <div class="carousel-item">
                <div class="cara">
                    <div class="row">
                        <div class="col-4">
                            <div class="picpic">
                                <img class="gl" style="width: 180px;" src="https://media.istockphoto.com/id/1344418500/photo/call-centre-rep.jpg?b=1&s=170667a&w=0&k=20&c=1l1-HpY48kO-ueZ8I6df50c-Y_AWN_-FvhTmxoq2MO0=" alt="">
                                <img class="ic" src="colo.png" alt="">
                            </div>

                        </div>
                        <div class="col-8">
                            <div class="pt-5 jame">
                                <h3>Greder</h3>
                                <small>Review</small>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at it's layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and</p>
                            </div>


                      </div>

                    </div>

                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

     </section>

        <div class="row text-center mt-2 p-3">
            <h1>FRESH <small style="color: green; font-weight: 700;">VEGETABLE</small></h1>
   
        </div>
        <section class="sect20 mt-3">
            <div class="row">
                <div class="offset-1 col-5">
                    <div class="ftm p-3">
                        <div>
                            <div class="mb-3 pt-2 ">
                                <input type="text" placeholder="Your name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3 pt-2">
                                <input type="text" placeholder="Email " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3 pt-2">
                                <input type="" placeholder="Phone Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Write your message ..</label>

                                <button class=" mt-4 btn-lg rounded-pill btn-primary" style="width: 200px; background-color: green; border: 2px solid green;">Send</button>
                              </div>

                           
                        </div>

                    </div>

                </div>
                <div class="col-4">
                    
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2802.1943611407164!2d9.147831315554832!3d45.38524997910007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786dcacd2d89723%3A0x639a36f412f6889a!2sVia%20Milano%2C%2034%2C%2020089%20Rozzano%20MI!5e0!3m2!1sen!2sit!4v1675171632520!5m2!1sen!2sit" width="600" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                


                </div>

            </div>

        </section>


    </main>
    <!-- main ends here -->
    <!-- footer starts -->
    <footer class="p-4 myfoot pt-3">
        <div class="row offset-1 p-3 col-2">
            <p class="shee">Shree</p>


        </div>
        <div class="row">
            
            <div class="offset-1 col-4">
                
                
                <div>
                    <h5>Address</h5>
                    
                    <p style="width: 250px;">it is long establish fact that a reader will be (+71 765675862) name@domain.com</p>

                </div>

            </div>
            <div class="col-3">

                <div>
                    <h5>Social Link</h5>
                    <ul class="list-unstyled">
                        <li>Twitter</li>
                        <li>Facebook</li>
                        <li>Instgram</li>
                        <li>Linkedin</li>
                    </ul>

                </div>

            </div>
            <div class="col-3">
                <h5>Newsletter</h5>
                <input class="mail" type="text" placeholder="Enter your mail">
                <div class="row col-8 mt-3">
                    <button class="btn-lg btn-primary rounded-pill pl-2" style="background-color: green; border: 2px solid green;">Subsribe</button>


                </div>

            </div>

        </div>

    </footer>
</footer>
<!-- footer ends here -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>