


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIS HomePage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

    body {
      margin: 0;
      box-sizing: border-box;
    }

    /* CSS for header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
    }

    /* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 520px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://media.istockphoto.com/photos/healthcare-business-graph-data-and-growth-insurance-healthcare-doctor-picture-id1327568875?b=1&k=20&m=1327568875&s=170667a&w=0&h=coOGg4r5WJkKAtMTOoqudH_JZpdZx0u3E0KJN6mL1uM=");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro p {
      font-size: 20px;
      color: #d1d1d1;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .intro button {
      background-color: #5edaf0;
      color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }

    .achievements {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 80px;
    }

    .achievements .work {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .achievements .work i {
      width: fit-content;
      font-size: 50px;
      color: #333333;
      border-radius: 50%;
      border: 2px solid #333333;
      padding: 12px;
    }

    .achievements .work .work-heading {
      font-size: 20px;
      color: #333333;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .achievements .work .work-text {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }

    .about-me {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 80px;
      border-top: 2px solid #eeeeee;
    }

    .about-me img {
      width: 500px;
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .about-me-text h2 {
      font-size: 30px;
      color: #333333;
      text-transform: uppercase;
      margin: 0;
    }

    .about-me-text p {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }

    /* CSS for footer */
    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #302f49;
      padding: 40px 80px;
    }

    .footer .copy {
      color: #fff;
    }

    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .bottom-links .links {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .bottom-links .links span {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .bottom-links .links a {
      text-decoration: none;
      color: #a1a1a1;
      padding: 10px 20px;
    }
  </style>
</head>

<body>
  <header class="header">
    <a href="#" class="logo">Health-Connect</a>
    <nav class="nav-items">
      <a href="homepage.html">Home</a></li>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="appointmentscheduling.php">Appointments Scheduling</a>

            <a href="userprofile.html">Profile</a>
            <a href="aboutus.html">About Us</a>
    </nav>
  </header>
  <main>
    <div class="intro">
      <h1>A Health Information System</h1>
      <p>Your Health Our Concern.</p>
      <button>
        <a href="register.php">Signup</a>
      </button>
    </div>
    <div class="achievements">
      <div class="work">
        <i class="fas fa-atom"></i>
        <p class="work-heading">Mission</p>
        <p class="work-text">Our mission is to leverage technology to improve healthcare outcomes and empower patients to take control of their health.</p>
      </div>
      <div class="work">
        <i class="fas fa-skiing"></i>
        <p class="work-heading">vision</p>
        <p class="work-text">Our vision is to create a healthcare system that is accessible, affordable, and efficient for everyone, regardless of their location or financial situation.</p>
      </div>
      <div class="work">
        <i class="fas fa-ethernet"></i>
        <p class="work-heading">Values</p>
        <p class="work-text">The equitable, sustainable and transparent use our sources to achieve better outcomes and experiences for every user</p>
      </div>
    </div>
    <div class="about-me">
      <div class="about-me-text">
        <h2>HEALTH INFORMATION SYSTEM</h2>
        <p>Our Healthcare Information System (HIS) is a web-based application designed to provide patients with easy access to healthcare services and healthcare professionals with an efficient way to manage their appointments and patient records.</p>
		<p>Health information systems also include those systems that handle data related to the activities of providers and health organizations. As an integrated effort, these may be leveraged to improve patient outcomes, inform research, and influence policy-making and decision-making. Because health information systems commonly access, process, or maintain large volumes of sensitive data, security is a primary concern.</p>
		
		
      </div>
      <img src="https://www.pwc.com/ca/en/healthcare/assets/p1282424-health-care-blog-1200x627-1.jpg" alt="me">
    </div>
  </main>
  <footer class="footer">
    <div class="copy">&copy; 2023 Developer</div>
    <div class="bottom-links">
      <div class="links">
        <span>More Info</span>
        <a href="#">Medical History</a>
            <a href="#">Appointments</a>
            <a href="#">Prescriptions</a>
            <a href="#">Uploads</a>
            <a href="#">Contact Us</a>
      </div>
      <div class="links">
        <span>Social Links</span>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </footer>
</body>

</html>