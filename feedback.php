<!--  <?php include("connect.php");
       error_reporting(0);
 ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INCLOUD</title>


</head>
<style type="text/css">
    
/*\\\\\\\\...........style.css............\\\\\\\\\\\\*/

@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

*,
*::after,
*::before {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

.html {
  font-size: 62.5%;
}

body {
  font-family: "Poppins", sans-serif;
}

/* ///////////..utility classes../////////// */

.container {
  max-width: 1200px;
  width: 90%;
  margin: auto;
}

.btn {
  display: inline-block;
  padding: 0.5em 1.5em;
  text-decoration: none;
  border-radius: 50px;
  cursor: pointer;
  outline: none;
  margin-top: 1em;
  text-transform: uppercase;
  font-weight: small;
}

.btn-primary {
  color: #fff;
  background: #16a083;
}

.btn-primary:hover {
  background: #117964;
  transition: background 0.3s ease-in-out;
}

/* ............/navbar/............ *

/* desktop mode............/// */

.navbar input[type="checkbox"],
.navbar .hamburger-lines {
  display: none;
}

.navbar {
  box-shadow: 0px 5px 10px 0px #aaa;
  position: fixed;
  width: 100%;
  background: #fff;
  color: #000;
  opacity: 0.85;
  height: 50px;
  z-index: 12;
}

.navbar-container {
  display: flex;
  justify-content: space-between;
  height: 64px;
  align-items: center;
}

.menu-items {
  order: 2;
  display: flex;
}

.menu-items li {
  list-style: none;
  margin-left: 1.5rem;
  margin-bottom: 0.5rem;
  font-size: 1.2rem;
}

.menu-items a {
  text-decoration: none;
  color: #444;
  font-weight: 500;
  transition: color 0.3s ease-in-out;
}

.menu-items a:hover {
  color: #117964;
  transition: color 0.3s ease-in-out;
}

.logo {
  order: 1;
  font-size: 2.3rem;
  margin-bottom: 0.5rem;
  color: #16a083;
}



/* ............//// Showcase styling ////......... */

.showcase-area {
  height: 50vh;
  background: linear-gradient(
      rgba(240, 240, 240, 0.144),
      rgba(255, 255, 255, 0.336)
    ),
    url("./photo/header-image2.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.showcase-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100%;
  font-size: 1.6rem;
}

.main-title {
  text-transform: uppercase;
  margin-top: 1.5rem;
}

/* ......//about us//...... */

#about {
  padding: 50px 0;
  background: #f5f5f7;
}

.about-wrapper {
  display: flex;
  flex-wrap: wrap;
}

#about h2 {
  font-size: 1.3rem;
  text-align: left;
}

#about p {
  font-size: 1.2rem;
  color: #555;
  text-align: justify;
}
#about .small-2{
  font-size: 1.2rem;
  color: #555;
  text-align: justify;
}

#about .small {
  font-size: 1.6rem;
  color: #666;
  font-weight: 600;
  text-align: left;
}

.about-img {
  flex: 1 1 400px;
  padding: 30px;
  transform: translateX(150%);
  animation: about-img-animation 1s ease-in-out forwards;

}

@keyframes about-img-animation {
  100% {
    transform: translate(0);
  }
}

.about-text {
  flex: 1 1 400px;
  padding: 30px;
  margin: auto;
  transform: translate(-150%);
  animation: about-text-animation 1s ease-in-out forwards;
}

@keyframes about-text-animation {
  100% {
    transform: translate(0);
  }
}

.about-img img {
  display: block;
  height: 400px;
  max-width: 100%;
  margin: auto;
  object-fit: cover;
  object-position: right;
}

/* ..........////Food category///........... */

#food {
  padding: 5rem 0 10rem 0;
}

#food h2 {
  text-align: center;
  font-size: 2.5rem;
  font-weight: 400;
  margin-bottom: 40px;
  text-transform: uppercase;
  color: #555;
}

.food-container {
  display: flex;
  justify-content: space-between;
}

.food-container img {
  display: block;
  width: 100%;
  margin: auto;
  max-height: 300px;
  object-fit: cover;
  object-position: center;
}

.img-container {
  margin: 0 1rem;
  position: relative;
}

.img-content {
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  z-index: 2;
  text-align: center;
  transition: all 0.3s ease-in-out 0.1s;
}

.img-content h3 {
  color: #fff;
  font-size: 2.2rem;
}

.img-content a {
  font-size: 1.2rem;
}

.img-container::after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.871);
  opacity: 0;
  z-index: 1;

  transform: scaleY(0);
  transform-origin: 100% 100%;
  transition: all 0.3s ease-in-out;
}

.img-container:hover::after {
  opacity: 1;
  transform: scaleY(1);
}

.img-container:hover .img-content {
  opacity: 1;
  top: 40%;
}

/* .........../Food Menu/............ */

.food-menu-heading {
  text-align: center;
  font-size: 1.8rem;
  font-weight: 400;
  color: #070707;
  text-transform: capitalize;
  font-style: unset;
  font-weight: bold;
}

.food-menu-heading2 {
  text-align: center;
  font-size: 2.3rem;
  font-weight: 600;
  color: #666;
  text-transform: uppercase;
  font-style: inherit;
}


.food-menu-container {
  display: flex;
  flex-wrap: wrap;
  padding: 50px 0px 30px 0px;
}

.food-menu-container img {
  display: block;
  width: 170px;
  height: 170px;
  border-radius: 50%;
  object-fit: cover;
  object-position: center;
}

.food-menu-item {
  display: flex;
  flex: 1 1 600px;
  justify-content: space-evenly;
  justify-content: flex-start;
  margin-bottom: 3rem;
}

.food-description {
  margin: auto 1.5rem;
}

.font-title {
  font-size: 1.8rem;
  font-weight: 400;
  color: #444;
}

.food-description p {
  font-size: 1.4rem;
  color: #555;
  font-weight: 500;
}

.food-description .food-price {
  color: #117964;
  font-weight: 700;
}

/* ........./ Testimonial /.......... */

#founder {
  padding: 5rem 0;
  background: rgba(243, 243, 243);
}

.founder-title {
  text-align: center;
  font-size: 2.5rem;
  font-weight: 400;
  text-transform: uppercase;
  color: #555;
}

.founder-container {
  display: flex;
  justify-content: space-between;
  font-size: 1rem;
  padding: 1rem;
}

.founder-box .checked {
  color: #ff9529;
}

.founder-box .founder-text {
  margin: 1rem 0;
  color: #444;
}

.founder-box {
  text-align: center;
  padding: 1rem;
}

.customer-photo img {
  display: block;
  width: 100px;
  height: 100px;
  object-fit: cover;
  object-position: center;
  border-radius: 50%;
  margin: auto;
}

/* ........ Contact Us........... */

#contact {
  padding: 5rem 0;
  background: rgb(226, 226, 226);
}

.contact-container {
  display: flex;
  background: #fff;
}

.contact-img {
  width: 50%;
}

.contact-img img {
  display: block;
  height: 400px;
  width: 100%;
  object-position: center;
  object-fit: cover;
}

.form-container {
  padding: 1rem;
  width: 50%;
  margin: auto;
  
}

.form-container input {
  display: block;
  width: 100%;
  border: none;
  border-bottom: 2px solid #ddd;
  padding: 1rem 0;
  box-shadow: none;
  outline: none;
  margin-bottom: 1rem;
  color: #444;
  font-weight: 500;
}

.form-container textarea {
  display: block;
  width: 100%;
  border: none;
  border-bottom: 2px solid #ddd;
  color: #444;
  outline: none;
  padding: 1rem 0;
  resize: none;
}

.form-container h2 {
  font-size: 2.7rem;
  font-weight: 500;
  color: #444;
  margin-bottom: 1rem;
  margin-top: -1.2rem;
  text-align: center;
}

.form-container a {
  font-size: 1.3rem;
}

#footer h2 {
  text-align: center;
  font-size: 1rem;
  padding: 2.6rem;
  font-weight: 500;
  /* color: #fff; */
  color: #000;
  /* background: rgb(65, 65, 65); */
  background: #ddd;
}

/* ......../ media query /.......... */

@media (max-width: 768px) {
  .navbar {
    opacity: 0.95;
  }

  .navbar-container input[type="checkbox"],
  .navbar-container .hamburger-lines {
    display: block;
  }

  .navbar-container {
    display: block;
    position: relative;
    height: 64px;
  }

  .navbar-container input[type="checkbox"] {
    position: absolute;
    display: block;
    height: 32px;
    width: 30px;
    top: 20px;
    left: 20px;
    z-index: 5;
    opacity: 0;
  }

  .navbar-container .hamburger-lines {
    display: block;
    height: 23px;
    width: 35px;
    position: absolute;
    top: 17px;
    left: 20px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .navbar-container .hamburger-lines .line {
    display: block;
    height: 4px;
    width: 100%;
    border-radius: 10px;
    background: #333;
  }

  .navbar-container .hamburger-lines .line1 {
    transform-origin: 0% 0%;
    transition: transform 0.4s ease-in-out;
  }

  .navbar-container .hamburger-lines .line2 {
    transition: transform 0.2s ease-in-out;
  }

  .navbar-container .hamburger-lines .line3 {
    transform-origin: 0% 100%;
    transition: transform 0.4s ease-in-out;
  }

  .navbar .menu-items {
    padding-top: 100px;
    background: #fff;
    height: 100vh;
    max-width: 300px;
    transform: translate(-150%);
    display: flex;
    flex-direction: column;
    margin-left: -40px;
    padding-left: 50px;
    transition: transform 0.5s ease-in-out;
    box-shadow: 5px 0px 10px 0px #aaa;
  }

  .navbar .menu-items li {
    margin-bottom: 1.5rem;
    font-size: 1.3rem;
    font-weight: 500;
  }

  .logo {
    position: absolute;
    top: 5px;
    right: 15px;
    font-size: 2.3rem;
  }

  .navbar-container input[type="checkbox"]:checked ~ .menu-items {
    transform: translateX(0);
  }

  .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
    transform: rotate(35deg);
  }

  .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
    transform: scaleY(0);
  }

  .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
    transform: rotate(-35deg);
  }

  /* ......./ food /......... */

  .food-container {
    flex-direction: column;
    align-items: stretch;
  }

  .food-type:not(:last-child) {
    margin-bottom: 3rem;
  }

  .food-type {
    box-shadow: 5px 5px 10px 0 #aaa;
  }

  .img-container {
    margin: 0;
  }
}

@media (max-width: 500px) {
  html {
    font-size: 65%;
  }

  .navbar .menu-items li {
    font-size: 1.6rem;
  }

  .founder-container {
    flex-direction: column;
    text-align: center;
  }

  .food-menu-container img {
    margin: auto;
  }

  .food-menu-item {
    flex-direction: column;
    text-align: center;
  }

  .form-container {
    width: 90%;
  }

  .contact-container {
    display: flex;
    flex-direction: column;
  }

  .contact-img {
    width: 90%;
    margin: 3rem auto;   
  }

  .logo {
    position: absolute;
    top: 06px;
    right: 15px;
    font-size: 3rem;
  }


  .navbar .menu-items li {
    margin-bottom: 2.5rem;
    font-size: 1.8rem;
    font-weight: 500;
  }
}

@media (min-width: 769px) and (max-width: 1200px) {
  .img-container h3 {
    font-size: 1.5rem;
  }

  .img-container .btn {
    font-size: 0.7rem;
  }
}

@media (orientation: landscape) and (max-height: 500px) {
  .showcase-area {
    height: 50vmax;
  }
}





/*//////////////........end............////////////*/

/*/////////////........contact.........////////////*/


* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container2 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}



/*//////////////.............end............////////////*/

</style>

<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="index.html">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#food">Category</a></li>
                <li><a href="#food-menu2">Menu</a></li>
                <!-- <li><a href="#founder">Founder</a></li> -->
                <li><a href="#contact">Feedback</a></li>
            </ul>
            <h1 class="logo">INCLOUD</h1>
        </div>
    </nav>
    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">Eat Right Food</h1>
            <p>Eat Healty, it is good for our health.</p>
            <a href="index.html" class="btn btn-primary">Home</a>
            <!-- <a href="#contact" class="btn btn-primary">Feedback</a> -->
        </div>
    </section>



  <div class="container2">
    <div style="text-align:center">
      <h1>Feedback Us</h1>
      <p></p>
    </div>
    <div class="row">
      <div class="column">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.717375560814!2d75.83006975182704!3d22.701562683442784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fdb44d199509%3A0x2e17f07b155af5a2!2sShri%20Vaishnav%20College%20of%20Commerce!5e0!3m2!1sen!2sin!4v1682685446321!5m2!1sen!2sin" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
      </div><div class="column">
        <div class="container2">
        
      <!--   <div style="text-align:center">
            <h2>Feedback Us</h2>
            <p></p>
          </div> -->
        <form>
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          <label>Email Address</label>
          <input type="text" placeholder="Enter Email" name="email" required>
  
          <label for="subject">Subject</label>
          <textarea id="subject" name="subj" placeholder="Write something.." style="height:170px"></textarea>
          <input type="submit" value="Submit" name="sub">
        </form>
      </div>
    </div>
  </div>  



   </section>
    <footer id="footer">
        <h2>Canteen &copy; all rights reserved</h2>
    </footer>
    </body>
    </html>
 <?php

     if($_GET['sub']);
{

    $Firstname=$_GET['firstname'];
     $Lastname=$_GET['lastname'];
          $Email=$_GET['email'];
           $Subject=$_GET['subj'];

                        $query="INSERT INTO contact values('$Firstname', '$Lastname', '$Email',  '$Subject')";

            $data= mysqli_query($conn,$query);

            if($data)
            {
             // echo "Data inserted into Database";
            }

            else
            {
             //echo "failed to insert Data inserted into Database";
            }
            }
?>

