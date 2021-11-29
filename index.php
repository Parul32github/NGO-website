<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!--main css-->
    <link rel="stylesheet" href="main.css" />


    <script
      src="https://kit.fontawesome.com/c041cc118c.js"
      crossorigin="anonymous"
    ></script>


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />



    <!--animate-->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="javascript.js"></script>

    <title>TREASURES WORLD</title>
  </head>
  <body>
      <!---Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light nav-bg fixed-top py-2"
      id="mainNav">
      <div class="container">
          <a class="navbar-brand text-white font-alter"href="#">OLD ROYAL</a>
          <button class="navbar-toggler navbar-toggler-right"type="button"
          data-toggle="collapse"data-target="#myNavbar"aria-controls="myNavbar"aria-expanded="false"aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Stories</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Team</a></li>
                <li class="nav-item"><a class="nav-link" href="donate.php">Donation</a></li>
            </ul>
        </div>
      </div>
      </nav>

      <!---End of Navbar-->
      <!--Hero Section-->
      <section id="hero" class="d-flex justify-content-center align-items-center">
        
          <div id="heroCarousel"class="container carousel carousel-fade"
          data-ride="carousel">
        <!--Slide-1-->
        <div class="carousel-item active">
            
            <div class="carousel-container">
                
                <h2 class="animate__animated animate__backInDown">
                    <span>Let's Help</span>
                </h2>
                <p class="animate__animated animate__fadeInUp home-text">
                    Home away from Home
                </p>
                <a href="donate.php"class="btn hero-btn animate__animated animate__backInUp">
                    Donate Now
                </a>
            </div>
        </div>
        <!--End of Slide-1-->
        <!--Slide-1-->
        <div class="carousel-item">
            <div class="carousel-container">
                
                <h2 class="animate__animated animate__backInDown">
                    Treasure them!
                </h2>
                <p class="animate__animated animate__fadeInUp home-text">
                    Parents who were given equal respect & recognition to God, now their children have other priorities before looking after their old & dependent parents.
                </p>
                <a href="donate.php"class="btn hero-btn animate__animated animate__backInUp">
                    Donate Now
                </a>
            </div>
        </div>
        <!--End of Slide-1-->
        <!--Slide-1-->
        <div class="carousel-item">
            <div class="carousel-container">
                
                
                <p class="animate__animated animate__fadeInUp" id="special-text">
                    OUR SERVICE IS ABOUT <span> CARE, COMPASSION </span> AND DEDICATION 
                </p>
                <a href="donate.php"class="btn hero-btn animate__animated animate__backInUp">
                    Donate Now
                </a>
            </div>
        </div>
        <!--End of Slide-1-->
        <a class="carousel-control-prev"href="#heroCarousel"role="button"
        data-slide="prev">
        <span class="carousel-control-prev-icon fas fa-chevron-left"aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    
    </a>
    <a class="carousel-control-next"href="#heroCarousel"role="button"
        data-slide="next">
        <span class="carousel-control-next-icon fas fa-chevron-right"aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    
    </a>
        
        </div>
      </section>

      <!--end of hero Section-->

      <!--About us-->
      <section class="mt-5">
          <div class="container">
              <div class="row justify-content-center mb-5">
                  <div class="col-md-8 text-center heading-section">
                      <span  class="ab-us">About Us</span>
                     
                      <h2 class="mb-3">Our Mission | Vision & Plans</h2>
                      <div class="border-below"></div>
                  </div>
              </div>
              <!------>
              <div class="row tabs mt-4">
                  <div class="col-md-4">
                      <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                          <li class="nav-item text-left">
                              <a class="nav-link active py-4"data-toggle="tab"
                              href="#about-1">About us</a>
                          </li>
                          <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-2">Our Beginning</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-3">Our Mission</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-4">Aims and Objectives</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-5">Our Mandate</a>
                        </li>
                        <li class="nav-item text-left">
                            <a class="nav-link py-4"data-toggle="tab"
                            href="#about-6">How to Donate</a>
                        </li>
                      </ul>
                  </div>
                  <!----->
                  <div class="col-md-8">
                      <div class="tab-content">
                          <div class="tab-pane container p-0 active"id="about-1">
            <div class="img">
            <img src="./images/old-age2.jpg" alt=""></div>
            <h3><a href="#">About Us</a></h3>
            <p>Old Royal India is a secular, not-for-profit organization in India, registered under the Societies’ Registration Act of 1860. Set up in 1978, the organization works for ‘the cause and care of disadvantaged older persons to improve their quality of life. We envision a society where elderly have the right to an active, healthy and dignified life. Old Royal is known for its exemplary work in the field of ageing, relief efforts work and recognition of the organization’s outstanding contribution to population issues and efforts in the realization of older persons rights in India.</p>
                          </div>
                          <!----->
             <div class="tab-pane container p-0"id="about-2">
                <div class="img">
                    <img src="./images/old-age3.jpg" alt="">
                </div>
             <h3><a href="#">Our Beginning</a></h3>
               <p>Old Royal India came into being in 1978 with Cecil Jackson Cole, founder of The first step was taken by Mr. Vijay Kumar, who had a passion to do something when- ever he saw the neglected old people. But this dream came true when he saw the two old persons.The Old Age Home was initially started in a small rented place, but slowly the organization was noticed by other social workers and renowned people of the society & finally a strong team was built to make this organization’s foundation strong and also made this an example for others to follow.</p>
                    </div>
            <!----->
            <div class="tab-pane container p-0"id="about-3">
                <div class="img">
                    <img src="./images/mission.jpg" alt="">
                </div>
             <h3><a href="#">Our Mission</a></h3>
               <p>The mission of OLD ROYAL Age Home is to 'Serve the  living temple of God' by attending their needs, wounds and  agony at the dusk-time of their life given by their own  children.</p>
                    </div>
            <!----->
            <div class="tab-pane container p-0"id="about-4">
                <div class="img">
                    <img src="./images/old.jpg"="">
                </div>
             <h3><a href="#">Aims and Objectives</a></h3>
               <p>To provide comprehensive and quality care and to ensure that the resident senior citizens live with respect and dignity in a secure, compassionate, congenial environment and surroundings. <br>

                To act as a center where the knowledge and experiences of life of the senior citizens are utilized in a constructive manner so as to contribute more meaningfully to both, the residents and the society. <br>
                
                To establish a social institution where society not only interacts and looks after senior citizens but also learns from them “the much needed values of a healthy and peaceful society”.</p>
                    </div>
            <!----->
            <div class="tab-pane container p-0"id="about-5">
                <div class="img"> <img src="./images/old-age4.jpg" alt=""></div>
             <h3><a href="#">Our Mandate</a></h3>
               <p>The following services are provided at the Old Age Homes which are as under:
                   <br>
                1.Free boarding/lodging at the state run Old Age Homes for free seats.
                <br>
                2.Medical care & Counseling.
                <br>
                3.Recreational facilities and Rehabilitation programme.</p>
                    </div>
            <!----->
            <div class="tab-pane container p-0"id="about-6">
                <div class="img">
                    <img src="./images/help.jpg" alt="">
                </div>
             <h3><a href="#">Our Plans</a></h3>
               <p>Royal Old Age Home is be supported by the kind hearted people of the society and will run independently, only through donations. <br>

               <b> Donations may be in all forms which our respected donors like:</b> <br>
                1. Adoption of Inmates <br>
                2. Salary of employees <br>
                3. Regular donations
                <br>
                <b>Also donate on the occasion like :</b> <br>
                1. On your success or success of any of your family members. <br>
                2. On Birthday  <br>
                3. On Marriage Anniversary <br>
                4. Festivals</p>
                    </div>
 
                      </div>
                  </div>
                 
                          
                      
                  </div>
              </div>
          </div>
      </section>
      <!--End About us-->
   
      <!---facilities Section-->
      <section class="mt-3">
          <div class="stories">
              <div class="container">
                  <div class="section-title text-center">
                      <span>Facilities</span>
                      <h4>In Care We Believe</h4>
                      <div class="border-below"></div>
                  </div>
                  
                  <div class="row">
                      <div class="col-md-4">
                          <div class="story-box overlay shadow">
                              <div class="story-icon">
                                  <i class="fas fa-ambulance"></i>
                              </div>
                              <h2>Hospice & Medical Care</h2>
                              <p>This hi-tech venture is committed to the care of medically-challenged seniors.</p>
                          </div>
                      </div>
                      <!----->
                      <div class="col-md-4">
                        <div class="story-box overlay shadow">
                            <div class="story-icon">
                                <i class="fas fa-dove"></i>
                            </div>
                            <h2>Recreational Activities</h2>
                            <p>Old Royal Old Age Home encourages the residents to be active participants in the environment.</p>
                        </div>
                    </div>
                    <!----->
                    <div class="col-md-4">
                        <div class="story-box overlay shadow">
                            <div class="story-icon">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <h2>Adult Day Care Center</h2>
                            <p>Adult day care center operate during day time hours, in a safe, supportive, cheerful environment.</p>
                        </div>
                    </div>
                    <div class="border-below"></div>
                  </div>
              </div>
          </div>
      </section>
 <!--- End of facilities Section-->
 <!---Projects Section-->
 <section class="project py-5">
     <div class="container">
         <div class="row my-3">
             <div class="col-10 mx-auto text-center">
                 <h1 class="text-uppercase head">Our Latest Projects</h1>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, provident.</p>
             </div>
         </div>
         <!----->
         <div class="row">
             <!--single Project-->
             <div class="col-10 col-md-6 col-lg-4">
                 <div class="project-container p-5 outline">
                     <img src=".images/img-1.jpg"class="img-fluid grow"alt="">
                     <a herf="donate.php"class="donation text-capitalize">Donate Now</a>
                 </div>
                 <h4 class="text-capitalize text-center my-2">Project-1</h4>
                 <h6 class="text-center">
                    Lions club members  came to Old Royal and spent their precious time with the inmates of Moksha. They feel happy and get blessed by senior citizen .
                 </h6>
             </div>
             <!--End of Single Project-->
             <!--single Project-->
             <div class="col-10 col-md-6 col-lg-4">
                <div class="project-container p-5 outline">
                    <img src="Images/img-2.jpg"class="img-fluid grow"alt="">
                    <a herf="#"class="donation text-capitalize">Donate Now</a>
                </div>
                <h4 class="text-capitalize text-center my-2">Project-2</h4>
                <h6 class="text-center">
                    In the memory of Late Shri Balwant Tayal Kids Zee Liitle House students came to Moksha and get blessing of old people. Inmates of Old Royal felt delighted and they came child with them. 
                </h6>
            </div>
            <!--End of Single Project-->
            <!--single Project-->
            <div class="col-10 col-md-6 col-lg-4">
                <div class="project-container p-5 outline">
                    <img src=".images/img-3.jpg"class="img-fluid grow"alt="">
                    <a herf="donate.php"class="donation text-capitalize">Donate Now</a>
                </div>
                <h4 class="text-capitalize text-center my-2">Project-3</h4>
                <h6 class="text-center">
                    Dainik Bhaskar & Holy Child School both sponsored the blanket for the inmates of Old Royal Old Age Home. Blankets are distributed by the students of Holy Child .
                </h6>
            </div>
            <!--End of Single Project-->
            <!--single Project-->
            <div class="col-10 col-md-6 col-lg-4">
                <div class="project-container p-5 outline">
                    <img src=".images/img-4.jpg"class="img-fluid grow"alt="">
                    <a herf="donate.php"class="donation text-capitalize">Donate Now</a>
                </div>
                <h4 class="text-capitalize text-center my-2">Project-4</h4>
                <h6 class="text-center">
                    Dainik Tribune covers the story of inmates of  Old Royal Old Age Home. How they spend their life in the youth and how they get fail in the last innings of their lifes. 
                </h6>
            </div>
            <!--End of Single Project-->
            <!--single Project-->
            <div class="col-10 col-md-6 col-lg-4">
                <div class="project-container p-5 outline">
                    <img src=".images/img-5.jpg"class="img-fluid grow"alt="">
                    <a herf="donate.php"class="donation text-capitalize">Donate Now</a>
                </div>
                <h4 class="text-capitalize text-center my-2">Project-5</h4>
                <h6 class="text-center">
                    Jai Narayan Trust donated the Refrigerator to the old Royal Old Age Home,  in the memory of the founder of the trust  Late Sh. Jai Narayan ex- member of Lok Sabha. 
                </h6>
            </div>
            <!--End of Single Project-->
            <!--single Project-->
            <div class="col-10 col-md-6 col-lg-4">
                <div class="project-container p-5 outline">
                    <img src="Images/img-6.jpg"class="img-fluid grow"alt="">
                    <a herf="donate.php"class="donation text-capitalize">Donate Now</a>
                </div>
                <h4 class="text-capitalize text-center my-2">Project-6</h4>
                <h6 class="text-center">
                    Old Royal Old Age is completely based on the donation coming from donate-rs. We are very thankful to all  who support in this noble cause.
                </h6>
            </div>
            <!--End of Single Project-->

         </div>
     </div>
 </section>
<!---End of the Projects Section-->
<!-- Team Section-->
<section class="team">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center">Our Volunteers</h2>
           
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src=".images/team1.jpg"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>Vijay Kumar</h4>
                        <span>Donner</span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src=".images/team2.jpg"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>Ayush kapoor</h4>
                        <span>Volunteer</span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src=".images/team3.jpg"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>Sonam sharma</h4>
                        <span>Volunteer</span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team-1">
                    <div class="pic">
                        <img src=".images/team4.jpg"class="img-fluid"alt="">
                    </div>
                    <div class="team-info">
                        <h4>Amit Kumar</h4>
                        
                        <span>Donner</span>
                        <div class="social">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
</section>
<!---End of Team Section-->

<!---Donation Section-->
<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-55">
                    <h3>Make a Donation</h3>
                </div>
            </div>
        </div>
        <!---->
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <form class="donation-form">
               <div class="row align-items-center">
                <div class="col-md-4">
             <div class="amount">
           <div class="input-field">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">₹</span></div>
                             
            <input type="text" class="form-control"placeholder="10,000"
            aria-label="Username">
                     </div>
                                </div>
                            </div>
                        </div>
                        <!----->
                        <div class="col-md-8">
                         <div class="amount">
                       <div class="need d-flex align-items-center
                        justify-content-between">
                        <div class="select">
                            <h5>Select Amount</h5>
                        </div>
                        <div class="funds">
                            <input type="radio"name="radio-group">
                            <label for="fund-1">10</label>
                        </div>
                        <div class="funds">
                            <input type="radio"name="radio-group">
                            <label for="fund-2">50</label>
                        </div>
                        <div class="funds">
                            <input type="radio"name="radio-group">
                            <label for="Other">Other</label>
                        </div>
                    
                    
                    </div>
                       
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <div class="donation-btn text-center">
                    <a href="donate.php"class="btn btn-don">Donate Now</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---End of Donation section Section-->
<footer class="footer mt-5">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-des">
                        <h3>Treasure World</h3>
                        <p class="pb-3">
                            <em>Get Started Today.
                                Help,  When They Need!</em>
                        </p>
                        <p>Noreal Street <br>
                        SP 12345, India <br><br><strong>
                            Phone;
                        </strong>
                        +55 61 1234 5678 9<br>
                        <strong>
                            Email:
                        </strong>
                        Contact@info.com<br>
                    
                    </p>
                    <div class="social-links mt-3">
                        <a href=""><i class="fab fa-twitter">

                        </i></a>
                        <a href=""><i class="fab fa-facebook">
                            
                        </i></a>
                        <a href=""><i class="fab fa-instagram">
                            
                        </i></a>
                        <a href=""><i class="fab fa-linkedin">
                            
                        </i></a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>About Us</h4>
                    <ul>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">About</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Facilities</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Project</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Donation</a>

                            
                        </li>
                        
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful links</h4>
                    <ul>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">+2(305) 587-3407</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href=""> info@loveuscharity.com</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">Flat 20, Reynolds Neck</a>
                           
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href="">FV77 8WS</a>

                            
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                            <a href=""> North Helenaville</a>

                            
                        </li>
                        
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our News Letters</h4>
                    <p>Register and Subscribe to get updates</p>
                    <form>
                        <input type="email" name="email" placeholder="email@mail.com">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>



























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



 
