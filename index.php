<?php
// IRCTC
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RTBS</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!-- Header Section -->

    <header id="home" class="header">
      <div class="logo">
        <img src="images/logo.png" alt="Logo" />
      </div>
      <div class="nav-top">
        <a href="index.php">HOME</a>
        <a id="contact-link" href="javascript:void(0);" onclick="openPopup()"
          >CONTACT US</a
        >
        <a href="helpsupport.php?ref=home">HELP & SUPPORT</a>
        <span id="date-time"></span>
      </div>
      <div class="nav-bottom">
        <div class="dropdown-container">
          <a href="#" class="dropdown-toggle">
            Trains <span class="arrow">&#9660;</span>
          </a>
          <div class="dropdown">
            <a href="#">Book Ticket</a>
            <a href="#">Cancel Ticket</a>
            <a href="#">PNR Enquiry</a>
            <a href="#">Train Schedule</a>
            <a href="#">Track Your Train</a>
          </div>
        </div>
        <a href="#">Buses</a>
        <a href="#">Flights</a>
        <a href="#">Hotels</a>
        <a href="#">Holidays</a>
        <a href="#">Meals</a>
      </div>
      <div class="login">
        <button>LOGIN</button>
      </div>
    </header>

    <!-- Contact Us Popup -->
    <div id="contact-popup" class="popup-container">
      <div class="popup-content">
        <div class="popup-header">
          <span>You may contact us</span>
          <button class="close-btn" onclick="closePopup()">×</button>
        </div>

        <div class="popup-body">
          <h3>For Railway tickets booked through IRCTC</h3>
          <p>
            Customer Care Numbers: <a href="tel:14646">14646</a> /
            <a href="tel:08044647999">08044647999</a> (Language: Hindi and
            English)
          </p>
          <p>
            Customers can use enhanced interface for their IRCTC related
            queries:
            <a href="https://equery.irctc.co.in/" target="_blank"
              >https://equery.irctc.co.in/</a
            >
          </p>
          <h3>General Information:</h3>
          <p>
            I-tickets/e-tickets:
            <a href="https://equery.irctc.co.in/" target="_blank"
              >https://equery.irctc.co.in</a
            >
          </p>
          <p>
            For Cancellation of E-tickets:
            <a href="mailto:etickets@irctc.co.in">etickets@irctc.co.in</a>
          </p>
          <hr />
          <h3>Registered Office - Corporate Office</h3>
          <p>Indian Railway Catering and Tourism Corporation Ltd.,</p>
          <p>B-148, 11th Floor, Statesman House,</p>
          <p>Barakhamba Road, New Delhi 110001</p>
        </div>
      </div>
    </div>

    <!-- Book Ticket Section -->

    <section id="booking" class="booking-section">
      <div class="grid-section">
        <div class="book-ticket">
          <h1>BOOK TICKET</h1>
          <form>
            <!-- From and To Fields with Swapping -->
            <div class="from-to">
              <div class="input-container">
                <input
                  type="text"
                  id="from"
                  name="from"
                  placeholder=" "
                  required
                />
                <label for="from">From</label>
              </div>
              <span class="swap-arrow" onclick="swapValues()">⇅</span>

              <div class="input-container">
                <input type="text" id="to" name="to" placeholder=" " required />
                <label for="to">To</label>
              </div>
            </div>

            <!-- Class and Quota Fields -->
            <div class="class-quota">
              <select name="class" id="class">
                <option value="All Classes">All Classes</option>
                <option value="AC First Class (1A)">AC First Class (1A)</option>
                <option value="AC 2 Tier (2A)">AC 2 Tier (2A)</option>
                <option value="AC 3 Tier (3A)">AC 3 Tier (3A)</option>
                <option value="AC 3 Economy (3E)">AC 3 Economy (3E)</option>
                <option value="Sleeper (SL)">Sleeper (SL)</option>
                <option value="Second Sitting (2S)">Second Sitting (2S)</option>
              </select>

              <select name="quota" id="quota">
                <option value="General">General</option>
                <option value="Ladies">Ladies</option>
                <option value="Tatkal">Tatkal</option>
                <option value="Person with Disability">
                  Person with Disability
                </option>
                <option value="Duty Pass">Duty Pass</option>
                <option value="Lower Berth/ Sr. Citizen">
                  Lower Berth/ Sr. Citizen
                </option>
              </select>
            </div>

            <!-- Calendar Input -->
            <input type="date" id="travel-date" class="date-picker" required />

            <!-- Checkboxes -->
            <div class="checkboxes">
              <div>
                <input
                  type="checkbox"
                  id="disability"
                  name="disability"
                  value="disability"
                />
                <label for="disability"
                  >Person with Disability Concession</label
                >
              </div>
              <div>
                <input type="checkbox" id="date" name="date" value="date" />
                <label for="date">Flexible With Date</label>
              </div>
              <div>
                <input type="checkbox" id="berth" name="berth" value="berth" />
                <label for="berth">Train with Available Berth</label>
              </div>
              <div>
                <input
                  type="checkbox"
                  id="concession"
                  name="concession"
                  value="concession"
                />
                <label for="concession">Railway Pass Concession</label>
              </div>
            </div>

            <!-- Search Button -->
            <input class="search" type="submit" value="Search" />
          </form>
        </div>
      </div>
    </section>

    <hr>

    <!-- Services Section -->
    <section id="services" class="services">
      <h2>Find a service suitable for you here.</h2>
      <div class="service-container">
        <div class="service-item">
          <div class="service-circle">
            <i class="fa-solid fa-plane"></i>
          </div>
          <p class="service-text">FLIGHTS</p>
        </div>
        <div class="service-item">
          <div class="service-circle">
            <i class="fa-solid fa-bed"></i>
          </div>
          <p class="service-text">HOTELS</p>
        </div>
        <div class="service-item">
          <div class="service-circle">
            <i class="fa-solid fa-utensils"></i>
          </div>
          <p class="service-text">E-CATERING</p>
        </div>
        <div class="service-item">
          <div class="service-circle">
            <i class="fa-solid fa-bus"></i>
          </div>
          <p class="service-text">BUS</p>
        </div>
      </div>
      <img
        draggable="false"
        src="images/attention.jpeg"
        alt="Centered Image"
        class="service-bottom-image"
      />
    </section>
    <hr>

    <!-- Holidays section -->

    <section id="holidays" class="holidays">
      <h2>HOLIDAYS</h2>
      <div class="holiday-grid">
        <!-- Card 1 -->
        <div class="holiday-card">
          <img src="images/holiday1.jpg" alt="Maharajas' Express" class="holiday-image" />
          <h3>Maharajas' Express</h3>
          <p>Redefining Royalty, Luxury and Comfort, Maharajas' express takes you on a sojourn to the era of bygone stately splendour of princely states. Sylvan furnishings, elegant ambience and modern amenities are amalgamated for an “Experience Unsurpassed”. It has been a winner of “World’s Leading Luxury train” by World Travel Awards consecutively for last six years.</p>
          <a href="https://www.irctc.co.in" class="read-more-btn" target="_blank">Read More</a>
        </div>
        <!-- Card 2 -->
        <div class="holiday-card">
          <img src="images/holiday2.jpg" alt="International Packages" class="holiday-image" />
          <h3>International Packages</h3>
          <p>Best deals in International Holiday packages, handpicked by IRCTC, for Thailand, Dubai, Sri Lanka, Hong Kong, China, Macau, Bhutan, Nepal, U.K., Europe, USA, Australia etc. The packages are inclusive of sightseeing, meals, visa charges and overseas medical insurance to give you a hassle-free and memorable experience.</p>
          <a href="https://www.irctc.co.in" class="read-more-btn" target="_blank">Read More</a>
        </div>
        <!-- Card 3 -->
        <div class="holiday-card">
          <img src="images/holiday3.jpg" alt="Domestic Air Packages" class="holiday-image" />
          <h3>Domestic Air Packages</h3>
          <p>Be it the spiritual devotee seeking blessings of Tirupati, Shirdi or Mata Vaishno Devi or the leisure traveller wanting to relish the Blue mountains of North East, Sand-dunes of Rajasthan, Hamlets of Ladakh, Wonders of Himalayas, Serene lakes or Picturesque Islands, IRCTC has it all. Discover India through IRCTC!</p>
          <a href="https://www.irctc.co.in" class="read-more-btn" target="_blank">Read More</a>
        </div>
        <!-- Card 4 -->
        <div class="holiday-card">
          <img src="images/holiday4.jpg" alt="Bharat Gaurav Tourist Train" class="holiday-image" />
          <h3>Bharat Gaurav Tourist Train</h3>
          <p>IRCTC operates Bharat Gaurav Tourist Train having AC III-Tier accommodation on train specially designed to promote domestic tourism in India. This train runs on various theme based circuits covering pilgrimage and heritage destinations in its itinerary on a 5 days to 20 days trip and showcase India’s rich cultural heritage.</p>
          <a href="https://www.irctc.co.in" class="read-more-btn" target="_blank">Read More</a>
        </div>
        <!-- Card 5 -->
        <div class="holiday-card">
          <img src="images/holiday5.jpg" alt="Rail Tour Packages" class="holiday-image" />
          <h3>Rail Tour Packages</h3>
          <p>IRCTC offers Exclusive Rail tour packages with confirmed train tickets, sight-seeing and meals for enchanting Nilgiri Mountains, Darjeeling, Kullu Manali, Kashmir, Gangtok or divine tours of Mata Vaishno Devi, Rameswaram, Madurai, Shirdi, Tirupati etc. Holiday packages/ Land packages to these destinations are also available.</p>
          <a href="https://www.irctc.co.in" class="read-more-btn" target="_blank">Read More</a>
        </div>
      </div>
    </section>

    <!-- Footer Section -->

    <section id="footer" class="footer">

      <div class="box-container">
  
        <div class="box">
          <h3>Social Media</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
          <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
          <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
        </div>
        
        <div class="box">
          <h3>Quick Links</h3>
          <a href="#home"><i class="fas fa-arrow-right"></i>Home</a>
          <a href="#booking"><i class="fas fa-arrow-right"></i>Booking</a>
          <a href="#services"><i class="fas fa-arrow-right"></i>Services</a>
          <a href="#holidays"><i class="fas fa-arrow-right"></i>Holidays</a>
        </div>
  
        <div class="box">
          <h3>Contact Us</h3>
          <a href="#"> <i class="fas fa-phone"></i> +91 1234567890 </a>
          <a href="#"> <i class="fas fa-phone"></i> +91 9876543210 </a>
          <a href="#"> <i class="fas fa-envelope"></i> irctc@gmail.com </a>
        </div>
        
        <div class="box">
          <h3>Help & Support</h3>
          <a href="helpsupport.php?ref=footer"><i class="fas fa-arrow-right"></i> Ask query </a>
        </div>
  
      </div>
      
    </section>
    
    <script src="script.js"></script>
  </body>
</html>
