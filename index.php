<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ...  existing head content) ... -->
    <style>
        /* Header Styles */
        .top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 10px;
}

.header-column {
    flex: 1;
    text-align: center;
    color: black; /* Add this line to set font color to black */
}

.header-middle h1, .header-middle h3 {
    color: black; /* Set font color for h1 and h3 within the middle column */
}

        /* Navigation Styles */
        .main-nav {
            background-color: #ff6633; /* Adjust the background color */
            opacity: 90%;
            color: #fff; /* Text color for navigation links */
        }

        .main-nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        .main-nav li {
            display: inline;
            margin-right: 20px;
        }

        .main-nav a {
            text-decoration: none;
            color:#ff6633 ff6633;
        }
        #home {
        /* CSS styles for the section with id "home" */
        background-color: #f0f0f0; /* Background color */
        padding: 20px; /* Padding around the content */
        text-align: center; /* Center-align the content */
    }

    #home h1 {
        /* CSS styles for the h1 element within the section */
        font-family: 'serif', cursive; /* Font family */
        color: #333; /* Text color */
    }

    #home p {
        /* CSS styles for the p element within the section */
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; /* Font family */
        color: #666; /* Text color */
    }
  /* About Us Section Styles */
       /* Add this CSS to create a two-column layout within the "about-content" div */
.about-content {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Two equal columns */
    gap: 20px; /* Gap between columns */
    align-items: center; /* Center align content vertically */
}

/* Style the text content within the "about-text" div */
.about-text {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: #333;
}

/* Style the image within the "about-image" div */
.slideshow-container {
            max-width: 100%;
            overflow: hidden;
            position: relative;
        }

        .mySlides {
            display: none;
        }

        .img-fluid {
            max-width: 100%; /* Ensure images don't exceed the width of the container */
            height: auto;
        }

        /* Adjust the width of the about-image column as needed */
        .about-image {
            height: 90%;
            width: 90%; /* For example, you can set it to 50% to occupy half the column */
            float: left; /* Ensure it stays within the column */
        }

/* Style for the "OUR VALUES" section */
.about-text p strong u {
    font-size: 20px; /* Adjust the font size as needed */
    text-decoration: underline;
    color: #333;
}

/* Style for the list */
.about-text li {
    list-style-type: disc; /* Use disc bullets for list items */
    margin-left: 20px; /* Add some left margin to the list items */
    font-size: 16px; /* Adjust the font size as needed */
    font-weight: bold; /* Make the list items bold */
    color: #666;
}
/* Style for the "OUR VALUES" section */
.about-text p strong u {
    font-size: 24px; /* Increase the font size */
    text-decoration: underline;
    color: #333;
    margin-bottom: 10px; /* Add some space below the title */
}

/* Style for the list container */
.about-text ul {
    padding-left: 20px; /* Add left padding for the list items */
}

/* Style for the list items */
.about-text li {
    list-style-type: disc; /* Use disc bullets for list items */
    font-size: 18px; /* Increase the font size */
    font-weight: normal; /* Remove bold font weight */
    color: #444; /* Slightly darker text color */
    margin-bottom: 5px; /* Add space between list items */
}






/*CONTACT styles */
#contact {
    background-color: #f0f0f0; /* Background color */
    padding: 30px 0; /* Padding around the content */
    text-align: center; /* Center-align the content */
}

#contact h2 {
    font-size: 28px; /* Font size for the main heading */
    font-family: 'serif', cursive; /* Font family */
    color: #333; /* Text color */
}

#contact p {
    font-size: 16px; /* Font size for paragraphs */
    font-family: 'sans-serif'; /* Font family */
    color: #666; /* Text color */
    line-height: 1.6; /* Line height for better readability */
}

#contact .contact-info h3 {
    margin-top: 20px; /* Add some space between sections */
}

#contact .social-icons {
    list-style: none;
    padding: 0;
}

#contact .social-icons li {
    display: inline;
    margin-right: 10px;
}

#contact .social-icons a {
    text-decoration: none;
    color: #333;
    font-size: 18px;
}

        

/* Footer Styles */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333; /* Adjust the background color */
            color: white; /* Text color */
        }
    </style>
    <!--CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Include Bootstrap JavaScript and jQuery from a CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script> 

</head>
<body>
<header class="top-bar">
    <div class="header-column">
        <img src="assets/img/logos.png" alt="IITA Logo" width="200" height="150">
    </div>
    <div class="header-column header-middle">
        <h1>INTERNATIONAL INSTITUTE OF TROPICAL AGRICULTURE</h1>
        <h3>BRANCH: DAR-ES SALAAM</h3>
    </div>
    <div class="header-column">
        <img src="assets/img/cgiar.png" alt="CGIAR LOGO" width="200" height="150">
    </div>
</header>


    <nav class="main-nav">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="login.php">SAMS LOGIN</a></li>
        </ul>
    </nav>
    <section id="home" class="section">
    <!-- Home content goes here -->
    <h1 style="font-family: serif, cursive;"><i>Transforming African Agriculture</i></h1>
    <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
        The International Institute of Tropical Agriculture (IITA) is a non-profit institution
        that generates agricultural innovations to meet Africa’s most pressing challenges of hunger,
        malnutrition, poverty, and natural resource degradation. Working with various partners across
        sub-Saharan Africa, we improve livelihoods, enhance food and nutrition security,
        increase employment, and preserve natural resource integrity.
    </p>
</section>

    <!--about us-->
    <section id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="about-content">
                <div class="about-image">
                    <img src="assets/img/nit.jpg" alt="IITA field students" width="650" height="650">
                </div>
                <div class="about-text">
                    <h1>KNOW US MORE</h1>
                    <p>IITA is an award-winning, research-for-development (R4D) organization, providing solutions to hunger, poverty, and the degradation of natural resources in Africa. Since 1967, IITA has worked with international and national partners to improve livelihoods, enhance food and nutrition security, increase employment, and preserve natural resource integrity. IITA has research and administrative hubs and stations spread across the continent. Focusing primarily on sub-Saharan Africa, our hubs are divided into West, Central, East, and Southern. Present in 11 African countries, IITA is uniquely placed to meet the continent’s demands and deliver our research goals directly to communities. Dar Es Salaam is among the branches in the Eastern Africa Hub, and it is also the regional hub.</p>
                    <p><strong><u>OUR VISION</u></strong></p>
                    <p><i>"To be the lead research partner facilitating agricultural solutions to overcome hunger and poverty in the tropics"</i></p>
                    <p><strong><u>OUR MISSION</u></strong></p>
                    <p><i>"To offer leading research partnership that facilitates agricultural solutions to hunger, poverty throughout sub-Saharan Africa."</i></p>
                    <p><u><strong>OUR VALUES</strong></u></p>
                    <ul style="list-style-type: none; padding: 0;"><i>
                        <li style="display: inline-block; margin-right: 10px;">1. Originality</li>
                        <li style="display: inline-block; margin-right: 10px;">2. Collaboration</li>
                        <li style="display: inline-block; margin-right: 10px;">3. Professionalism</li>
                        <li style="display: inline-block; margin-right: 10px;">4. Excellence</li>
                        <li style="display: inline-block; margin-right: 10px;">5. Respect</li>
                        <li style="display: inline-block; margin-right: 10px;">6. Multiculturalism</li>
                        <li style="display: inline-block; margin-right: 10px;">7. Integrity</li>
                        <li style="display: inline-block; margin-right: 10px;">8. Inclusiveness</li>
                        <li style="display: inline-block; margin-right: 10px;">9. Equity</li>
                        <li style="display: inline-block;">10. Multidisciplinary</li></i>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--contact us section-->

<section id="contact" class="section">
    <div class="container">
        <div class="section-title">
            <h2>Contact <span>Us</span></h2>
            
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="wordsofaffirm">
                    
                    <p>We're here to assist you in any way we can. Whether you have general questions, comments about our institute, or technical questions, feel free to reach out to us using the contact details below.</p>
                </div>
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><a href="https://www.iita.org/iita-staff/musiimenta-jacqueline/">Contact Person: Musiimenta, Jacqueline</a></p>
                    <p>Head Finance and Administration Eastern Africa Hub</p>
                    <p>Email: <a href="mailto:j.musiimenta@cgiar.org"> j.musiimenta@cgiar.org</a></p>
                    <p>Tel: +254 208632900</p>
                    <p>Nationality: Ugandan</p>
                    <p>Station: Tanzania</p>
                    <p><u>Additional contact person: Scola Ponera</u></p>
                    <p>Administrator, Banana Project</p>
                    <p>Email: <a href="mailto:S.Ponera@cgiar.org"> S.Ponera@cgiar.org</a></p>
                    <p><strong>Follow us:</strong></p>
                    <a href="https://www.instagram.com/iita_cgiar/" class="fab fa-instagram">INSTAGRAM</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-map">
                    <!-- Replace the iframe src with your Google Maps embed code -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7924.141449406754!2d39.22663878457866!3d-6.76123086867035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4e78fd44cd77%3A0x6358dde168399be8!2sIITA-Tanzania!5e0!3m2!1sen!2stz!4v1694694335530!5m2!1sen!2stz" width="100%" height="450" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>



   

    <footer>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>


    <!--js codes here-->
    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds (adjust as needed)
    }
</script>

</body>
</html>

