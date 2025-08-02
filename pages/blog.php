<?php
$pageTitle = "Blog - Diego Navarro";
$pageDescription = "Blog about travel experiences and destinations.";
$activePage = "blog";
include '../components/head.php';
include '../components/header.php';
?>
<main>
    <div class="boxShadowGeneral">
        <div class="container">
            <div class="blogFlex">
                <div class="blogGeneralLeft">
                    <h1>Blog.</h1>
                    <h2>Roaming Beyond Horizons: Exploring the World and Creating Experiences</h2>
                </div>
                <div class="blogGeneralRight">
                    <div class="radiusImg">
                        <img class="passportStamp" src="../../images/blog/passport.jpg" alt="Passport with stamps">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container blogContent blogArticlesGeneral">
      <article>
        <h3>Few destinations</h3>
      </article>
      <section class="blogArticles">
        <a href="destination-pages/iran">
          <div class="card">
            <img class="cardImage" src="../../images/blog/iran-flag.jpg" alt="Iranian flag">
            <div class="cardContent">
              <h2>Exploring the Rich Tapestry of Iran</h2>
              <p>Embark on an enchanting journey through culture, history, and heritage.</p>
            </div>
          </div>
        </a>
        <a href="destination-pages/indonesia">
          <div class="card">
            <img class="cardImage" src="../../images/blog/indonesia-flag.jpg" alt="Indonesian flag">
            <div class="cardContent">
              <h2>Discovering the Beauty of Indonesia</h2>
              <p>Embark on a mesmerizing journey through stunning landscapes and diverse cultures.</p>
            </div>
          </div>
        </a>
        <a href="destination-pages/mexico">
          <div class="card">
            <img class="cardImage" src="../../images/blog/mexico-flag.jpg" alt="Mexican flag">
            <div class="cardContent">
              <h2>Exploring the Charm of East Mexico</h2>
              <p>Embark on a captivating journey through picturesque landscapes and vibrant local traditions.</p>
            </div>
          </div>
        </a>
        <a href="destination-pages/thailand">
          <div class="card">
            <img class="cardImage" src="../../images/blog/thailand-flag.jpg" alt="Thai flag">
            <div class="cardContent">
              <h2>Discovering the Magic of Thailand</h2>
              <p>Embark on an enchanting journey through lush landscapes and immerse yourself in Thai culture.</p>
            </div>
          </div>
        </a>
        <a href="destination-pages/japan">
          <div class="card">
            <img class="cardImage" src="../../images/blog/japan-flag.jpeg" alt="Japan flag">
            <div class="cardContent">
              <h2>Experiencing the Wonders of Japan</h2>
              <p>Embark on an awe-inspiring journey through the unique blend of tradition and modernity in Japan.</p>
            </div>
          </div>
        </a>
        <a href="destination-pages/tenerife">
          <div class="card">
            <img class="cardImage" src="../../images/blog/spain-flag.jpg" alt="Spanish flag">
            <div class="cardContent">
              <h2>Exploring the Beauty of Tenerife</h2>
              <p>Embark on a breathtaking journey through the stunning landscapes and vibrant culture of the Canary Islands.</p>
            </div>
          </div>
        </a>
      </section>
    </div>
</main>
<?php include '../components/footer.php'; ?>
