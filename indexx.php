<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawfeed - Law Firm</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100..700;1,100..700&family=Merienda:wght@300..900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <style>
            .footer {
            background: black;
            color: white;
            text-align: center;
            padding: 20px 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .social-icons a {
            display: inline-block;
            background: white;
            color: black;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 20px;
        }

        .footer-nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .footer-nav a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .footer-nav a:hover {
            text-decoration: underline;
        }

        .copyright {
            font-size: 14px;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f5f5f5;
            color: #333;
        }
   
.faq-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
}

.faq-item {
    margin-bottom: 10px;
}

.faq-question {
    width: 100%;
    padding: 15px;
    font-size: 16px;
    text-align: left;
    background-color: #f1f1f1;
    border: none;
    cursor: pointer;
    outline: none;
    transition: background-color 0.3s ease;
}

.faq-question:hover {
    background-color: #ddd;
}

.faq-answer {
    display: none;
    padding: 10px;
    background-color: #f9f9f9;
    border-left: 3px solid #ccc;
}

.faq-answer p {
    margin: 0;
}

        header {
            background-color: white;
            padding: 15px 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
            margin-left: auto;
        }
        .nav-links li {
            display: inline;
        }
        .nav-links li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s;
        }
        .nav-links li a:hover {
            color: gray;
        }
        .menu-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }
        .nav-buttons {
            display: flex;
            align-items: center;
            margin-left: 30px;
        }
        .btn-outline {
            border: 1px solid black;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 25px;
            color: black;
            transition: all 0.3s ease;
            font-size: 14px;
        }
        .btn-outline:hover {
            background: black;
            color: white;
        }
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 120px 10% 50px;
            background: url('R.jpg') no-repeat center center/cover;
            height: 500px;
            color: white;
        }
        .hero-content {
            max-width: 50%;
        }
        .hero h1 {
            font-size: 36px;
            margin-bottom: 15px;
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .about {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 100px 10%;
            background-color: white;
            font-family: 'Times New Roman', serif;
        }
        .about h2 {
            font-size: 28px;
            text-transform: uppercase;
           
            letter-spacing: 1.5px;
            color: #666;
            flex: 1;
            font-family: "Josefin Slab", serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;
            text-align: left;
        }
        .about-content {
            flex: 2;
            text-align: right;
            font-size: 24px;
            font-weight: bold;
            line-height: 1.5;
        }
        .about .btn-outline {
            display: inline-block;
            margin-top: 20px;
            font-size: 16px;
            padding: 12px 20px;
            border-radius: 50px;
        }
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
                height: auto;
                padding-bottom: 30px;
            }
            .hero-content, .hero-image {
                max-width: 100%;
            }
            .hero-buttons {
                justify-content: center;
            }
            .menu-toggle {
                display: block;
            }
            .nav-links {
                display: none;
                flex-direction: column;
                text-align: center;
            }
            .nav-links.active {
                display: flex;
            }
            .about {
                flex-direction: column;
                text-align: center;
            }
            .about h2, .about-content {
                text-align: center;
            }

        }



        main {
  position: relative;
  width: calc(min(90rem, 90%));
  margin: 0 auto;
  min-height: 100vh;
  column-gap: 3rem;
  padding-block: min(20vh, 3rem);
}

.bg {
  position: fixed;
  top: -4rem;
  left: -12rem;
  z-index: -1;
  opacity: 0;
}

.bg2 {
  position: fixed;
  bottom: -2rem;
  right: -3rem;
  z-index: -1;
  width: 9.375rem;
  opacity: 0;
}

main > div span {
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-size: 1rem;
  color: #717171;
}

main > div h1 {
  text-transform: capitalize;
  letter-spacing: 0.8px;
  font-family: "Roboto", sans-serif;
  font-weight: 900;
  font-size: clamp(3.4375rem, 3.25rem + 0.75vw, 4rem);
  background-color: #005baa;
  background-image: linear-gradient(45deg, #005baa, #000000);
  background-size: 100%;
  background-repeat: repeat;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -moz-background-clip: text;
  -moz-text-fill-color: transparent;
}

main > div hr {
  display: block;
  background: #005baa;
  height: 0.25rem;
  width: 6.25rem;
  border: none;
  margin: 1.125rem 0 1.875rem 0;
}

main > div p {
  line-height: 1.6;
}

main a {
  display: inline-block;
  text-decoration: none;
  text-transform: uppercase;
  color: #717171;
  font-weight: 500;
  background: #fff;
  border-radius: 3.125rem;
  transition: 0.3s ease-in-out;
}

main > div > a {
  border: 2px solid #c2c2c2;
  margin-top: 2.188rem;
  padding: 0.625rem 1.875rem;
}

main > div > a:hover {
  border: 0.125rem solid #005baa;
  color: #005baa;
}

.swiper {
  width: 100%;
  padding-top: 3.125rem;
}

.swiper-pagination-bullet,
.swiper-pagination-bullet-active {
  background: #fff;
}

.swiper-pagination {
  bottom: 1.25rem !important;
}

.swiper-slide {
  width: 18.75rem;
  height: 28.125rem;
  display: flex;
  flex-direction: column;
  justify-content: end;
  align-items: self-start;
}

.swiper-slide h2 {
  color: #fff;
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.4;
  margin-bottom: 0.625rem;
  padding: 0 0 0 1.563rem;
  text-transform: uppercase;
}

.swiper-slide p {
  color: #dadada;
  font-family: "Roboto", sans-serif;
  font-weight: 300;
  padding: 0 1.563rem;
  line-height: 1.6;
  font-size: 0.75rem;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.swiper-slide a {
  margin: 1.25rem 1.563rem 3.438rem 1.563rem;
  padding: 0.438em 1.875rem;
  font-size: 0.9rem;
}

.swiper-slide a:hover {
  color: #005baa;
}

.swiper-slide div {
  display: none;
  opacity: 0;
  padding-bottom: 0.625rem;
}

.swiper-slide-active div {
  display: block;
  opacity: 1;
}

.swiper-slide--one {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("OIP.jpg") no-repeat 50% 50%/cover;
}

.swiper-slide--two {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("l1.jpg") no-repeat 50% 50%/cover;
}

.swiper-slide--three {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("33.avif") no-repeat 50% 50%/cover;
}

.swiper-slide--four {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("ww.jpg") no-repeat 50% 50%/cover;
}

.swiper-slide--five {
  background: linear-gradient(to top, #0f2027, #203a4300, #2c536400), url("male.avif") no-repeat 50% 50%/cover;
}

.swiper-3d .swiper-slide-shadow-left,
.swiper-3d .swiper-slide-shadow-right {
  background-image: none;
}

@media screen and (min-width: 48rem) {
  main {
    display: flex;
    align-items: center;
  }

  .bg,
.bg2 {
    opacity: 0.1;
  }
}
@media screen and (min-width: 93.75rem) {
  .swiper {
    width: 85%;
  }
}
  
    </style>
</head>
<?php

 if (isset($_SESSION['register_error'])): ?>
    <div class="error-message">
        <?php echo $_SESSION['register_error']; ?>
    </div>
    <?php unset($_SESSION['register_error']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['register_success'])): ?>
    <div class="success-message">
        <?php echo $_SESSION['register_success']; ?>
    </div>
    <?php unset($_SESSION['register_success']); ?>
<?php endif; ?>



<body>
    <header>
        <nav class="navbar">
            <div class="logo">LAWFEED</div>
            <ul class="nav-links">
                <li class="l"><a href="inddex.php">Profile</a></li>
                <li><a href="#mainn">Our lawyers</a></li>
                <li><a href="#about-text">About Us</a></li>
             
            </ul>
            <div class="nav-buttons">
                <a href="#faq" class="btn-outline">Questions ↗</a>
            </div>
        </nav>
    </header>
    
    <section class="hero">
        <div class="hero-content">
            <h1>Experienced lawyers are ready to help</h1>
            <p>Upload your documents and have our best lawyers review it.</p>

        </div>
    </section>
    
    <section class="about" id="about-text">
        <h2>About Us</h2>
        <div class="about-content">
            <p>Lawfeed is a USA multi-service law firm, full of dynamic and intelligent people. We operate with a defined quality management system to ensure excellence.</p>
        </div>
    </section>
   <section id="mainn">
<main>
  <div>
    <span>Lawfeed</span>
    <h1>Our lawyers</h1>
    <hr>
    <p>Dedicated lawyers, delivering expert legal solutions with integrity and precision</p>
   
  </div>
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide--one">
        <div>
          <h2>Riley Sutton</h2>
       
        </div>
      </div>
      <div class="swiper-slide swiper-slide--two">
        <div>
          <h2>Alex Carter</h2>
         
         
        </div>
      </div>

      <div class="swiper-slide swiper-slide--three">

        <div>
          <h2>Casey Reid</h2>
         

        </div>
      </div>

      <div class="swiper-slide swiper-slide--four">

        <div>
          <h2>Cameron Hayes</h2>
         
    
        </div>
      </div>

      <div class="swiper-slide swiper-slide--five">

        <div>
          <h2>Peyton Clarke</h2>
          

        </div>
      </div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</main> 
</section>
<section id="faq">
        <div class="faq-container">
            <h2>FAQ</h2>
            <div class="faq-item">
                <button class="faq-question">How do I upload my documents to the law firm?</button>
                <div class="faq-answer">
                    <p>You can upload your documents securely through our website's client portal. Simply log in to your account, click on the "Upload Documents" section, and follow the instructions to select and submit the files from your device.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">What if I don’t have access to a computer?</button>
                <div class="faq-answer">
                    <p>If you are unable to access a computer, you can upload your documents through a smartphone or tablet by using our mobile-friendly portal. Alternatively, contact our office to explore other ways to submit your documents..</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">What should I do if I can’t upload my documents?</button>
                <div class="faq-answer">
                    <p>If you are experiencing technical difficulties, please contact our support team at [lawfeed@email.com] or call us at [0445892911], and we will assist you with the uploading process.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How long will it take for the law firm to review my documents after I upload them?</button>
                <div class="faq-answer">
                    <p>Our team will aim to review your documents within 4-5 business days. We will notify you if we require additional information or if further action is needed..</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do I need to schedule an appointment to submit my documents?</button>
                <div class="faq-answer">
                    <p> No, you do not need to schedule an appointment. You can upload your documents at any time, and our team will review them as part of the ongoing case process..</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question"> What happens after I upload my documents?</button>
                <div class="faq-answer">
                    <p>Once your documents are uploaded, our legal team will review them and may contact you if additional information or clarification is required. We will then proceed with advising you based on the information provided.</p>
                </div>
            </div>
        </div>
</section>



        <footer class="footer">
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="footer-nav">
            <a href="#">Home</a>
            
            <a href="#">About</a>
            <a href="#">Contact Us</a>
            <a href="#">Our Team</a>
        </div>
        <div class="copyright">
            Copyright &copy;2022; Designed by LAWFEED
        </div>
    </footer>






        
    

    
    <script>
        ScrollReveal().reveal('.hero h1, .hero p, .hero .btn-outline', { delay: 300, origin: 'bottom', distance: '50px', duration: 1000, easing: 'ease-in-out' });
        ScrollReveal().reveal('.about h2', { delay: 500, origin: 'left', distance: '50px', duration: 1000, easing: 'ease-in-out' });
        ScrollReveal().reveal('.about-content', { delay: 700, origin: 'right', distance: '50px', duration: 1000, easing: 'ease-in-out' });
    
    
        const faqQuestions = document.querySelectorAll('.faq-question');

faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    });
});


/*
inspiration
https://dribbble.com/shots/4684682-Aquatic-Animals
*/

var swiper = new Swiper(".swiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 3,
    slideShadows: true
  },
  keyboard: {
    enabled: true
  },
  mousewheel: {
    thresholdDelta: 70
  },
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  breakpoints: {
    640: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 1
    },
    1024: {
      slidesPerView: 2
    },
    1560: {
      slidesPerView: 3
    }
  }
});
function parallax() {
  var parallax = document.getElementById("parallax");
  parallax.style.top = -(window.pageYOffset / 4)+'px';
}

window.addEventListener("scroll", parallax, false);


    </script>
</body>
</html>

