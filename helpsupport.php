<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help & Support</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header class="header">
      <a href="index.php" class="back-btn">← Back to Home</a>
      <h1>Help & Support</h1>
    </header>

    <main class="support-container">
      <!-- FAQ Section -->
      <section class="faq-section">
        <h2>Frequently Asked Questions (FAQs)</h2>

        <div class="faq-item">
          <h3>How can I book a train ticket?</h3>
          <p>
            You can book a train ticket through the 'Book Ticket' section on the
            homepage by entering your journey details and clicking 'Search'.
          </p>
        </div>

        <div class="faq-item">
          <h3>How can I cancel my ticket?</h3>
          <p>
            To cancel a ticket, go to 'Cancel Ticket' under the 'Trains' menu
            and enter your PNR number and other required details.
          </p>
        </div>

        <div class="faq-item">
          <h3>What should I do if my payment fails?</h3>
          <p>
            If your payment fails but the amount is debited, it will be
            automatically refunded within 3-5 business days. If not, please fill
            out the form.
          </p>
        </div>

        <div class="faq-item">
          <h3>How can I check my PNR status?</h3>
          <p>
            PNR status can be checked through the 'PNR Enquiry' option under the
            'Trains' menu by entering your PNR number.
          </p>
        </div>
      </section>

      <!-- Contact Form Section -->
      <section class="contact-form">
        <h2>Need More Help?</h2>
        <form action="#" method="POST">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required />

          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required />

          <label for="query">Your Query</label>
          <textarea id="query" name="query" placeholder="Briefly explain your issue" rows="5" required></textarea>

          <button type="submit">Submit</button>
        </form>
      </section>
    </main>
  </body>
</html>
