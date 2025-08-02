<?php
$pageTitle = "Contact - Diego Navarro";
$pageDescription = "Get in touch with Diego Navarro by a contact form, social media, or email.";
$activePage = "contact";
include '../components/head.php';
include '../components/header.php';
?>
    <main>
        <div class="boxShadowGeneral">
            <div class="container">
                <div class="contactFlex">
                    <div class="contactGeneralLeft">
                        <h1>Contact.</h1>
                        <section class="contact">
                            <h2>Get in touch with me via social media or email.</h2>
                        </section>
                    </div>
                    <div class="contactGeneralRight">
                        <div class="radiusImg">
                            <img src="../images/aaron-burden-xG8IQMqMITM-unsplash (1).jpg" alt="photo de Diego Navarro">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
          <section class="contactForm">
            <h3>Inquiry Form</h3>
            <div id="formMessage" style="display:none;"></div>
            <form id="contactForm" action="../php/mail.php" method="post">
                <fieldset>
                    <div class="contactNameEmail">
                        <p><input type="text" id="name" name="name" placeholder="Name..." required></p>
                        <p><input type="email" id="email" name="email" placeholder="Email..." required></p>
                        <p><input type="tel" id="tel" name="tel" placeholder="Phone..."></p>
                    </div>
                    <div class="contactMessage">
                        <p><input type="text" id="subject" name="subject" placeholder="Subject..." required></p>
                        <p><textarea name="message" id="message" cols="30" rows="5" placeholder="Your message..." required></textarea></p>
                    </div>
                    <p style="display:none;">
                      <label>Leave this field empty:</label>
                      <input type="text" name="website" value="">
                    </p>
                    <button type="submit" aria-label="Submit form">SUBMIT</button>
                </fieldset>
            </form>
          </section>
          <section class="contactOther">
            <h3>Reach Out Through</h3>
            <div class="cardsContainer">
              <a href="https://www.linkedin.com/in/diego-navarro-7b148227b/" target="_blank">
                <div class="card">
                  <div class="card-header">
                    <img src="../images/skills/linkedin-color.svg" alt="">
                  </div>
                  <div class="card-body">
                    <p class="moreAboutMe">Message me</p>
                  </div>
                </div>
              </a>

              <a href="https://wa.me/33699863433?text=Hello,%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank">
                <div class="card">
                  <div class="card-header">
                    <img src="../images/skills/whatsapp-color.svg" alt="">
                  </div>
                  <div class="card-body">
                    <p class="moreAboutMe">WhatsApp me</p>
                  </div>
                </div>
              </a>

              <a href="mailto:diegnavpro@gmail.com?subject=Inquiry%20about%20your%20services&body=Hello%20Diego,%0A%0AI%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank">
                <div class="card">
                  <div class="card-header">
                    <img src="../images/skills/gmail-color.svg" alt="">
                  </div>
                  <div class="card-body">
                    <p class="moreAboutMe">Direct mail</p>
                  </div>
                </div>
              </a>
            </div>
          </section>
          <div id="successModal" class="modal" style="display:none;">
            <div class="modal-content">
              <span class="close-btn">&times;</span>
              <h2>Merci !</h2>
              <p>Votre demande a bien été envoyée.</p>
            </div>
          </div>
          <div id="errorModal" class="modal" style="display:none;">
            <div class="modal-content">
              <span class="close-btn">&times;</span>
              <h2>Une erreur est survenue</h2>
              <p>Veuillez réessayer, merci.</p>
            </div>
          </div>
        </div>
    </main>
<?php include '../components/footer.php'; ?>