<?php

$conn = mysqli_connect('localhost','root','','contact6_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $services = mysqli_real_escape_string($conn, $_POST['services']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact6_form`(name, email, services, number, date) VALUES('$name','$email','$services','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully, thank you!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Project in Software Engineering</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">NewGen<span>DentalClinic.</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
         </nav>


         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>your new smile awaits you!</h3>
            <p>A dental consultation is a non-invasive visit with your dental care provider where you can discuss your issues, concerns, and treatment options. Many of our dentists offer free consultations, though others do ask for a small consultation fee to cover their time. If you’re considering any major dental procedure, a consultation is a good idea, and can be important for several reasons.</p>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/hakdog-img.jpg" class="w-100 mb-5 mb-md-0" alt=""><br><br><br>
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p>“Every tooth in a man's head is more valuable than a diamond.”- Miguel de Cervantes.</p>
            
         </div>
         <div class="col-md-6 image">
            <img src="images/hg.jpg" class="w-100 mb-5 mb-md-0" alt=""><br><br><br>
            <img src="images/back.jpg" class="w-100 mb-5 mb-md-0" alt=""><br><br><br>
            <img src="images/weh.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Dental Braces</h3>
         <p>Dental braces are designed to help an orthodontist correct certain types of abnormal bites (malocclusions) such as an overbite, crowded teeth and gapped teeth</p>
         <p>- PHP 5.000.00 - Down Payment</p>
      </div>

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Tooth Extraction</h3>
         <p>A tooth extraction is the removal of a tooth.</p>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <p>- PHP 350 / per unit</p>
      </div>

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Tooth Restoration</h3>
         <p>A Fillings are used to fill in a cavity, caused by dental decay.</p>
         <br><br><br><br><br><br>
         <p>- PHP 400.00 / per unit</p>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>Teeth Whitening</h3>
         <p>Teeth whitening involves bleaching the teeth to lighten their colour. After treatment, the teeth look a few shades whiter, but not usually bright white.</p>
         <br><br><br><br><br><br><br><br>
         <p>- PHP 1,000.00 per sesssion</p>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Odondectomy</h3>
         <p>Is a procedure wherein the dentist will remove the tooth by separating and opening the gums, sometimes there is the necessity to remove bone around the tooth. This is especially common to third molar teeth due to the fact that most of the third molars are impacted (embedded under the jaw bone).</p>
         <p>- starts at PHP 6,000.00</p>
      </div>
      

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Oral Prophylaxis</h3>
         <p>Oral prophylaxis is a highly effective way to reduce the risk of oral decay and remove plaque from the teeth.</p>
         <br><br><br><br><br><br><br><br><br><br>
         <p>- PHP 400.00</p>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>Dental Consultation</h3>
         <p>Dental hygienist jobs involve preventive work. They evaluate the patients’ dental health and focus on identifying and treating any gum disease. A dental hygienist course trains any specialist on how to take care of teeth and gums by removing plaque and tartar.</p>
         <p>-Free</p>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>Live dental advisory</h3>
         <p>A professional who is trained and typically licensed to provide services and guidance to a dentist for the purpose of growing and protecting a dental practice and/or dental real estate.</p>
         <br>
         <br>
         <br>
         <br>
         <p>-Free</p>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Cavity inspection</h3>
         <p>a visual inspection of your mouth, teeth, and gums is conducted to see if anything is out of the ordinary. A cavity may be identified by a discoloration, holes in your teeth, or signs of tooth enamel damage.</p>
         <br>
         <br>
         <p>-Free</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Cosmetic Dentistry</h3>
         <p>the branch of dentistry that focuses on improving the appearance of your smile. Common cosmetic dental treatments include teeth whitening, dental bonding and veneers.</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>is an age-defined specialty that provides. both primary and comprehensive preventive and therapeutic. oral health care for infants and children through adolescence, including those with special health care needs.</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p>Dental implants are replacement tooth roots. Implants provide a strong foundation for fixed (permanent) or removable replacement teeth that are made to match your natural teeth.</p>
      </div>

   </div>

</section>
<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

   <div class="box">
         <img src="images/c1.jpg" alt="">
         <p>Thanks for taking care of our teeth...The best dental care I have ever experienced! Professional, courteous, and friendly staff made me feel like family… would highly recommend to anyone!!!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Christopher</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/c2.jpg" alt="">
         <p>highly recomended, and very affordable</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Angel Mancanes</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/c3.jpg" alt="">
         <p>Amazing experience with all the staff from the front door to NewGen. He told me what I needed and what I didn’t very very happy with their service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ellaine Tablega Martinez</h3>
         <span>satisfied client</span>
      </div>


   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span> Select services :</span><br><br>
  <select name="services" class="custom-select custom-select-lg mb-4">
      <option selected>enter your services</option>
      <option value="Dental Braces">Dental Braces</option>
      <option value="tooth extraction">Tooth Extraction</option>
      <option value="Tooth Restoration">Tooth Restoration</option>
      <option value="Teeth Whitening">Teeth Whitening</option>
      <option value="Odondectomy">Odondectomy</option>
      <option value="Oral Prophylaxis">Oral Prophylaxis</option>
      <option value="Dental Consultation">Dental Consultation</option>
      <option value="Live Dental Advisory">Live Dental Advisory</option>
      <option value="Cavity Inspection">Cavity Inspection</option>
    </select>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>0933-8159800</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Unit 4, Balgan place 1, Mayaman corner kalayaan St.,Quezon City.</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>Monday - Saturday</p>
         <p>9am - 6pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>newgendentalclinic@gmail.com</p>
      </div>

         <h2>Our Social Media links:</h2>
         <div class="box">
      <i class="fa-brands fa-2x fa-facebook"></i>
    <a href="https://www.facebook.com/newgendentalclinic" target="_blank">
        <h3>facebook</h3>
        <p>NewGen Dental Clinic</p>
      </a>
      </div>
      <div class="box">
      <i class="fa-brands fa-2x fa-instagram"></i>
      <a href="https://instagram.com/dentalclinicnewgen?igshid=YmMyMTA2M2Y=" target="_blank">
         <h3>Instagram</h3>
         <p>dentalclinicnewgen</p>
      </div>

   </div>


</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>