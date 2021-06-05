<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
    #nav
    {
        background:indianred;
        font-weight:bolder;
    }
    .nav-link {
    display: inline-block;
    color: #000;
    text-decoration: none;
}

.nav-link::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background: #000;
    transition: width .3s;
    border-bottom: solid 2px #019fb6;
}

.nav-link:hover::after {
    width: 100%;
    //transition: width .3s;
}
#fa {
  padding: 5px;
  font-size: 40px;
  /* width: 22%; */
  text-align: center;
  text-decoration: none;
  /* margin: 5px 2px; */
  border-radius: 50%;
}
.fa-facebook {
  background: #3B5998;
  color: white;
   width: 15%;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
  width: 15%;
}
.fa-linkedin {
  background: #007bb5;
  color: white;width: 15%;
}
.fa-instagram {
  background: red;
  color: white;width: 15%;
}
#btn:hover
{
text-decoration:none;
color:white;
}
#id{
  border-bottom:0px solid white;
  text-decoration:none;
}

    </style>
</head>
<body><div class="container img-fluid " style="margin-bottom: 67px; ">
    <div class="row-12">
        <header >
            <nav class="navbar navbar-dark navbar-expand-sm bg-color border-bottom fixed-top"id="nav" >
                <a class="navbar-brand" href="#" style="margin-right: 30%"><img src="image/PPPL-LOGO-FNL-158-Y-GRADIENT-KW-LMC_TRANSPARENT_681_681.png" height="42px" width="42px">&nbsp; &nbsp;ｌｉｆｅｄｏｎｅｒ </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbar1">
                    <ul class="navbar-nav mr-auto ">
                        <br>
                        <li class="nav-item active"><a class="nav-link" href="#about"><span class="fa fa fa-lg"></span>About</a></li>
                        <li class="nav-item"><a class="nav-link" href=""><span class="fa fa fa-lg"></span>  &nbsp;&nbsp;Plasma Doner Regester</a></li>
                        <li class="nav-item"><a class="nav-link" href="/need"><span class="fa fa fa-lg"></span>  &nbsp; &nbsp;Need Plasma</a></li>
                        <li class="nav-item"  ><a class="nav-link" href="#faq"><span class="fa fa-card fa-lg"></span>  &nbsp;&nbsp;FAQ</a></li>
                        <li class="nav-item"  ><a class="nav-link" href="#emergency"><span class="fa fa-card fa-lg"></span>  &nbsp;&nbsp;Emergency Contact</a></li>
                        <!-- <li class="nav-item"  ><a class="nav-link" href="#faq"><span class="fa fa-card fa-lg"></span>FAQ</a></li> -->
                        
                    </ul>
                </div>
            </nav>
        </header>
    </div>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      
      <img class="d-block w-100" src="image/pexels-ron-lach-7583386.jpg" alt="First slide" style="height:500px;">
      <div class="carousel-caption d-none d-md-block d-flex h-100 align-items-center justify-content-center">
      <br><br> <br><br><br><br><br><br><br><h1 style="color: rgb(255, 255, 255);"><b> “Your <span style="color:#ff6961">Plasma</span> donation can give a precious smile to someone's face.”</b></h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/pexels-karolina-grabowska-4047146.jpg" alt="Second slide" style="height:500px;">
      <div class="carousel-caption d-none d-md-block d-flex h-100 align-items-center justify-content-center">
      <br><br> <br><br><br><br><br><br><br><h1 style="color: rgb(255, 255, 255);"><b> “Never refuse to donate <span style="color:#ff6961">Plasma</span> if you can, as you may be the next needy.”</b></h1>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/hush-naidoo-yo01Z-9HQAw-unsplash.jpg" alt="Third slide" style="height:500px;">
      <div class="carousel-caption d-none d-md-block d-flex h-100 align-items-center justify-content-center">
      <br><br> <br><br><br><br><br><br><br><h1 style="color: rgb(255, 255, 255);"><b> “Donate <span style="color:#ff6961">Plasma</span> and be a hero of someone’s life.”</b></h1>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    


<div id= "about" class="container-fluid text-center bg-image img-fluid" style="background-color: unset; height:300px;background-size: cover;
background-repeat: no-repeat;">
    <div class="row">

        

       <div class="container">
            <center>
            <br><br>     <br><br>

            <div class="h1" style="border-bottom:2px solid brown;">
            <h1 style="color: indianred;"><b> About</b></h1>
            </div><br><br>
            <div class="para" >
                <p class="p1" style="font-size:20px"><b>If you have fully recovered from <span style="color:#ff6961"> COVID-19 </span>, you may be able to help patients currently fighting the infection by donating your plasma.
Because you fought the infection, your plasma now contains <span style="color:#ff6961"> COVID-19 </span> antibodies. These antibodies provided one way for your immune system to fight the virus when you were sick, so your plasma may be able to be used to help others fight off the disease.</b></p>
<p style="font-size:20px"><b> We are here if you want to doante your plasma because your plasma will help 2-3 peoples </b></p>
            </div>
            </center>
        </div>
</div>
</div>







<div class="container-fluid" id="faq">
<br><br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-12 mx-auto">
        <div class="h1" style="border-bottom:2px solid brown; text-align:center;">
            <h1 style="color: indianred;"><b> FAQ</b></h1>
            </div><br><br>
            <div class="accordion" id="faqExample">
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <button id="btn" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 style="color:black"><b> Q. Who Can Be a Donor?</h5></b>
                            </button>
                          </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                             <h5><b>Who can become an plasma donor?</b></h5>


<p>All adults in the U.S. and in some states people under the age of 18 can indicate their commitment to donation by signing up to be an plasma donor. Whether someone is suitable for donation is determined at the time of death. Authorization by a parent or guardian is generally necessary for individuals under 18 who have died to become an actual donor.</p>

<h5><b>Are there age limits for donating your plasmas</b></h5>
There are no age limitations on who can donate.
Newborns as well as senior citizens have been plasma donors. Whether or not you can donate depends on your physical condition and the condition of your plasmas, not age.

<h5><b>Can non-residents donate and receive plasmas in the U.S.?</b></h5>
Yes. Non-resident aliens—people who don't live in the U.S. or aren't citizens—can both donate and receive plasmas in the United States. plasmas are given to patients according to medical need, not citizenship.

<h5><b>If I have a medical condition, can I still donate?</b></h5>
Don't rule yourself out from being an plasma donor because you have a health condition. You're always encouraged to register. Even with an illness, you may be able to donate your plasmas or tissues.
The transplant team will determine what can be used at the time of your death based on a clinical evaluation, medical history and other factors. Even if there's only one plasma or tissue that can be used, that's one life saved or improved.

<h5><b>Can I be an plasma and tissue donor, and also donate my body to medical science?</b></h5>
Total body donation generally is not an option if you choose to be an plasma and tissue donor. However eye donors still may be accepted. There are also a few medical schools and research plasmaizations that may accept an plasma donor for research.
If you wish to donate your entire body, you should contact the medical plasmaization of your choice directly and make arrangements. Medical schools, research facilities, and other agencies study bodies to understand how disease affects human beings. This research is vital to saving and improving lives.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                        <button id="btn" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h5 style="color:black"><b>Q:Can donors who receive the COVID-19 vaccine immediately donate plasma?</h5></b>
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
                        <p>At this moment, the vaccines approved in the U.S. do not require a wait period to donate plasma. In general, if you feel okay you can donate plasma as long as you meet all other eligibility requirements. CDC has made recommendations that all COVID-19 vaccine recipients be observed for a minimum of 15 minutes for any immediate adverse reactions</p>                  



                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <button id="btn" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5 style="color:black"><b> Q. How is plasma used?</h5></b>
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                        Plasma donated at Grifols plasma donation centers is used to produce medicines to treat or prevent serious diseases and conditions in multiple therapeutic areas: pulmonology, hematology, immunology, neurology, infectious diseases and shock and trauma. Grifols plasma medicines are administered by a provider via infusion, or individually through a subcutaneous injection. Many of these conditions require regular and lifelong treatment with plasma-derived medicines.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <button id="btn" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <h5 style="color:black"><b>Q. How long does it take to donate plasma?</b></h5>
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                        Donating plasma takes longer than donating blood due to thorough health screening requirements. The first plasma donation can take up to three hours and includes a physician examination, comprehensive medical screening and testing, and verification of donor identification and local address. Return donations typically take between one-and-a-half to two hours and also include a donor health screening, donor verification and testing.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/row-->
</div>

<div class="container" id="emergency">
<br><br><br><br>
<div class="h1" style="border-bottom:2px solid brown; text-align:center;">
            <h1 style="color: indianred;"><b> Emergency Contact</b></h1>
            </div><br><br>
        <div class="row">
        
            <div class="col-lg-6 mb-4">
            
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card-body">
                        <h5 class="card-title" style="color:indianred"><b>Punjab</b></h5>
                        <p class="card-text">
                        PUNJAB PLASMA BLOOD BANK : Patiala Government Medical College and Hospital / Amritsar GMCH <br>
                        Contact no.:-108/102
                        </p>
  
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card-body">
                        <h5 class="card-title"  style="color:indianred"><b>Bengaluru</b></h5>
                        <p class="card-text">
                        Bangalore Medical Services Trust: 8526723404 <br> HCL Plasma helpline: 7447118949 <br>   <br>

                      
                        </p>
                          
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
  

<div class=" border-top" style="margin-bottom: 0px ; margin-top: 200px ; background-color:  indianred; font-weight:bolder; color: white;">
    <footer >

      <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row" style="margin-top: 20px">
            <br>

          <!-- Grid column -->
          <div class="col-md-6 mt-md-0 mt-3" >

            <!-- Content -->ｌｉｆｅｄｏｎｅｒ</h5>
            <p>Happy to provide life for all...</p>

          </div>
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase" style="padding-left:25px">Social Media</h5>

            <ul class="list-unstyled">
              <li style="display: inline"><a href="#" class="fa fa-facebook" id="fa" width="32" height="30">
                
              </a>
              </li>
              <li style="display: inline"><a href="#" class="fa fa-instagram"  id="fa" width="32" height="30">
              </a>
              </li>
              <li style="display: inline">
                <a href="#" class="fa fa-twitter" id="fa" width="32" height="30">
                 </a>
              </li>
              <li style="display: inline">
                <a href="#" class="fa fa-linkedin" id="fa" width="32" height="30">           
                </a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Address and contact</h5>

            <ul class="list-unstyled">
              <li>
                Sector:64, Mohali
              </li>
              <li>
                985, 1st floor
              </li>
              <li>
                E-mail: IKTSS@gmail.com
              </li>
              <li>
                Phone: 8427889407
              </li>
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div  class="footer-copyright text-center py-3">

        <p style="font-size: 15px">© 2021 Copyright:ｌｉｆｅｄｏｎｅｒ.com</p>
        <p style="font-size: 20px">  Site designed and maintained by <span style="color:white"><b>IKTSS</b></span> Team</p>
      </div>
      <!-- Copyright -->

    </footer>
</div>
</body>
</html>