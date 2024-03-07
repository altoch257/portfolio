<?php
  include 'includes/mail.inc.php';
  require('_Layout/header.php');
?>

  <!-- Hero Section -->
  <section class="hero">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
      <a class="navbar-brand text-uppercase ml-3" href="."><img class="profile" src="./img/D1C_2527.png" alt="">Jean Petit</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse justify-content-end mr-3" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php active('index') || active(''); ?>" href=".">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="hero-content">
      <h1 class="text-center">Software Engineer</h1>
      <div class="mt-3">
        Crafting Code, Building Futures:<br> Explore the Power of Innovation in Every Line
      </div>
      <a class="btn btn-primary mt-5" href="#projects">Projects</a>
    </div>
  </section>

  <section id="about" class="section-white">
    <h2>About Me</h2>
    <div class="about-container">
      This section offers further insights into who I am, my endeavors, and my current capabilities, with a primary emphasis on programming and technology skills.
    </div>
    <div class="about-container pt-5">
      <div class="about-item">
        <h4>A little bit about me</h4>
        <p>
          I'm a Software Engineer specializing in Backend Development, with a proven track record of designing and implementing 
          robust server-side solutions that power the core functionality of websites and web applications. Leveraging my expertise 
          in programming languages such as .NET, C#, VB.NET, and SQL, I architect scalable and efficient systems that handle complex 
          data processing, authentication, and API integrations.
        </p>
        <p>
          My interest in coding started back in 2008 when I started customizing my "MySpace" profile with custom
          css and became part of a growing community of enthusiasts sharing their knowledge and collaborate with each other. 
          Beyond my technical contributions, I am deeply passionate about fostering knowledge sharing and collaboration within the 
          developer community. 
        </p>
        <p>
          As I continue to expand my horizons and pursue new opportunities, I am driven by a commitment to continual learning and 
          professional growth. I am actively seeking roles where I can leverage my backend development skills to make a meaningful 
          impact while also embracing new challenges and acquiring new knowledge. 
        </p>
        <p>
          Feel free to reach out via LinkedIn or email to discuss potential collaborations or job opportunities. I am eager to 
          bring my passion for Software Development and my dedication to excellence to a dynamic and forward-thinking organization.
        </p>
      </div>
      <div class="about-item">
        <h4>My Skills</h4>
        <div class="skills-container">
          <div class="skills-item">.NET</div>
          <div class="skills-item">C#</div>
          <div class="skills-item">Visual Basic</div>
          <div class="skills-item">SQL</div>
          <div class="skills-item">PHP</div>
          <div class="skills-item">Java</div>
          <div class="skills-item">Python</div>
          <div class="skills-item">Git</div>
          <div class="skills-item">HTML</div>
          <div class="skills-item">CSS</div>
        </div>
      </div>
    </div>
  </section>


  <!-- Projects Section -->
  <section id="projects" class="section-gray">
    <h2>Projects</h2>
  </section>


  <!-- Contact Section -->
  <section id="contact" class="section-white">
    <h2>Contact</h2>
    <div class="contact-container text-center px-5">
      Feel free to drop me a line using the form below and I will get back to you asoon as possible
    </div>
    <div class="contact-container pt-3">
      <div class="contact-item">
        <form method="post" class="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" id="name" autocomplete="off" tabindex="1" placeholder="Enter your name" 
              value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>">
          </div>
          <div class="form-group">
            <label for="email">Email <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="email" id="email" autocomplete="off" tabindex="2" placeholder="Enter Your Email" 
              value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>">
          </div>
          <div class="form-group">
            <label for="message">Message <span class="text-danger">*</span></label>
            <textarea class="form-control" name="message" id="message" cols="30" rows="8" tabindex="3" placeholder="Message or Comment" 
              value="<?php echo !empty($postData['message']) ? $postData['message'] : ''; ?>"></textarea>
          </div>
          <div class="col-sm-10 pb-3">
            <?php
              if (isset($statusMsgs[0])) {
                foreach ($statusMsgs[0] as $nameErrors) {
                  echo "<div><p class='small-text text-danger ml-1 my-0 py-0'>" . $nameErrors . "</p></div>";
                }
              }
            ?>
          </div>
          <div class="col-sm-10 pb-3">
            <?php
              if (isset($statusMsgs[1])) {
                foreach ($statusMsgs[1] as $emailErrors) {
                  echo "<div><p class='small-text text-danger ml-1 my-0 py-0'>" . $emailErrors . "</p></div>";
                }
              }
            ?>
          </div>
          <div class="col-sm-10 pb-3">
            <?php
              if (isset($statusMsgs[2])) {
                foreach ($statusMsgs[2] as $messageErrors) {
                  echo "<div><p class='small-text text-danger ml-1 my-0 py-0'>" . $messageErrors . "</p></div>";
                }
              }
            ?>
          </div>
          <div class="status">
						<?php if (!empty($statusMsg)) : ?>
              <p class="statusMsg <?php echo !empty($msgClass) ? $msgClass : ''; ?>">
                <?php echo $statusMsg; ?>
              </p>
						<?php endif; ?>
					</div>
          <button type="submit" name="contact_btn" class="btn btn-primary" tabindex="4">Send</button>
        </form>
      </div>
    </div>
  </section>

<?php
  include_once '_Layout/footer.php';
?>
