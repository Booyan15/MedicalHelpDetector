<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MHL</title>
    <link rel="shortcut icon" href="./assets/LOGO UP SHIFT.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo">The Rescue Team</div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Product</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">The Rescue Team</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="./sliki/watch.png" alt="Watch profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, We Are</p>
        <h1 class="title">The Rescue Team</h1>
        <p class="section__text__p2">We invent Medical Help Detector</p>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know Us More</p>
      <h1 class="title">About Us</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img
            src="sliki/about.png"
            alt="Profile picture"
            class="about-pic"
          />
        </div>
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <img
                src="./assets/education.png"
                alt="Education icon"
                class="icon"
              />
              <h3>Members</h3>
              <p>Nadica Apostolovska<br />Monika Stojanova<br />Srna Todosiev<br />Delfina Todosiev</p>
            </div>
          </div>
          <div class="text-container">
            <p>
              Welcome to The Rescue Team, where innovation meets compassion. We are a dedicated team of 
              visionaries on a mission to enhance the lives of older individuals facing health challenges. 
              At the heart of our endeavor is the belief that technology should empower, protect, and provide 
              peace of mind.
            </p>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#experience'"
      />
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore Our Product</p>
      <h1 class="title">ADVANTAGES</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">Medical Help Detector - Smart Watch</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/security.svg"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Security</h3>
                  <p></p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/95457.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Protection</h3>
                  <p></p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/safety.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Saafety</h3>
                  <p></p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/certainty.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Certainty</h3>
                  <p></p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/confidence.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Confidence</h3>
                  <p></p>
                </div>
              </article>
            </div>
          </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
      />
    </section>
    <section id="projects">
      <p class="section__text__p1">Browse Our Recent</p>
      <h1 class="title">Product</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/watchproduct.jpg"
                alt="Project 1"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">MHL - Medical Health Locator</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='detail.php'"
              >
                Purchase
              </button>
            </div>
          </div>
          </div>
        </div>
      </div>
      

    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Product</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2023 <b>The Rescue Team</b>. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
