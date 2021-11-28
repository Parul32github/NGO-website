<!DOCTYPE html>
<html lang="en">
<head>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
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

<meta charset="UTF-8">
<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
</head>
<body>
    <style>
        body{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: rgb(26, 23, 23);
}
h1{
    text-align: center;
}
.navbar-custom {
  padding-top: 1rem;
  padding-bottom: 1rem;
  background-color: rgba(7, 7, 7, 0.582);
}
.footer{
  text-align: center;
  align-items: center;
  padding: 1rem;
  background-color: gray;
}
    </style>
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
    <div class="container" style="width:80%;margin-right: 10%;margin-left: 10%;margin-top:100px;">
        <form class="form" style="width:40%;margin:auto;justify-content:center;" >
            <h1>PAYMENT FORM</h1>
            <hr>
            <h2>User information : </h2>
            <div class="form-group" style="width:300px">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group" style="width:300px">
            <label for="exampleInputEmail1">Email-id</label>
            <input type ="email" class="form-control" name="email" id="email" required>    
            </div>
            <div class="form-group" style="width:300px">
            <label for="exampleInputEmail1">Phone number</label>
            <input type="number" class="form-control" name="Phone number" id="number"required>   
            </div>
            <div class="form-group" style="width:300px" >
            <label for="exampleInputEmail1">Amount</label>
            <input type="number"  class="form-control" name="Amount" id="amount"required>
            </div>
            <hr>
           <button class="btn btn-primary"type="butoon" id="paymentclick" onclick="pay_now(event)">pay amount</button>

        </div>



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
</body>
</html>
<script>
    function pay_now(e)
    {
        var name  =jQuery('#name').val();
        var amt   =jQuery('#amount').val();
        var phone =jQuery('#number').val();
        var email =jQuery('#email').val();

        var options = {
        "key": "rzp_test_u1D40YsM5Cc0pP",
        "amount": amt*100, 
        "name": "NGO",
        "description": "",
        "image": "images/logo.png",
        "handler": function (response) {
        jQuery.ajax({
        type:"post",
        url:"payment.php",
        data:"payment_id="+response.razorpay_payment_id+"&amt="+amt+"&name="+name+"&phone="+phone+"&email="+email,
        success:function(result)
        {
            Swal.fire(
            'thank you for donation!',
            'payment successful',
            'success'

            )
            setTimeout(() => {
                window.location.href="index.html";

            }, 5000);
        }

        });
        console.log(response);
        },
        "prefill": {
        "name": name, 
        "email": email,
        "contact": phone
        },
        "notes": {
        "address": "address"  
        },
        "theme": {
        "color": "#15b8f3" 
        }
        };
console.log(options);
var propay = new Razorpay(options);
propay.open();
e.preventDefault();


    }

    </script>