  <?php ?>

  <!-- Footer -->
  <footer class="main-footer">
    <div class="footer-container">
      <div class="footer-item-1">
        <h4>Jean Petit</h4>
        <p>I am a Software Engineer who is passionate about making life easier through the use of software.</p>
      </div>
      <div class="footer-item-2">
        <div class="footer-items-container">
          <h5>Languages</h5>
          <div class="footer-items-item">C#</div>
          <div class="footer-items-item">Visual Basic</div>
          <div class="footer-items-item">Java</div>
          <div class="footer-items-item">PHP</div>
          <div class="footer-items-item">HTML</div>
          <div class="footer-items-item">CSS</div>
          <div class="footer-items-item">SQL</div>
        </div>
      </div>
      <div class="footer-item-3">
        <div class="footer-items-container">
          <h5>Frameworks</h5>
          <div class="footer-items-item">.NET Framework</div>
          <div class="footer-items-item">.NET Core</div>
          <div class="footer-items-item">Bootstrap</div>
        </div>
      </div>
      <div class="footer-item-4">
        <div class="footer-items-container">
          <h5>Tools</h5>
          <div class="footer-items-item">Visual Studio</div>
          <div class="footer-items-item">Visual Studio Code</div>
          <div class="footer-items-item">SQL Server Management Studio</div>
          <div class="footer-items-item">Git</div>
          <div class="footer-items-item">Bash</div>
          <div class="footer-items-item">Wordpress</div>
          <div class="footer-items-item">Azure DevOps</div>
          <div class="footer-items-item">Github</div>
        </div>
      </div>
    </div>
    <hr />
    <div class="secondary-footer-container">
      <div class="secondary-footer-item-1">
        &copy;2024 <a href=".">Jean Petit</a>. All Rights Reserved.
      </div>
      <div class="secondary-footer-item-2">
        <div class="social-container">
          <a class="social-item" href="https://www.linkedin.com/in/jpetit257" target="_blank">
            <i class="fab fa-linkedin-in fa-2x"></i>
          </a>
          <a class="social-item" href="#">
            <i class="fab fa-github fa-2x"></i>
          </a>
          <a class="social-item" href="#">
            <i class="fab fa-twitter fa-2x"></i>
          </a>
          <a class="social-item" href="#">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>









  

  <script>
    const navEl = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
      if (window.scrollY >= 80) {
        navEl.classList.add('navbar-scrolled');
        navEl.classList.add('navbar-light');
        navEl.classList.remove('navbar-dark');
      }
      else if (window.scrollY < 80) {
        navEl.classList.remove('navbar-scrolled')
        navEl.classList.remove('navbar-light')
        navEl.classList.add('navbar-dark')
      }
    })
  </script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>