@include("includes/header")

<body>

  <div class="loader"></div>

  <!--cookie-->
  <!-- <div class="cookie">
          <div class="container">
            <div class="clearfix">
              <span>Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.</span>
              <div class="f-right"><a href="#" class="button button-type-3 button-orange">Accept Cookies</a><a href="#" class="button button-type-3 button-grey-light">Read More</a></div>
            </div>
          </div>
        </div>-->

  <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

  <div id="wrapper" class="wrapper-container">

    <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

    <nav id="mobile-advanced" class="mobile-advanced"></nav>

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    @include('includes/menu_header')
    <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->
    
    <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

    <div class="breadcrumbs-wrap style-2 align-center">

      <div class="container wide">

        <h1 class="page-title" style="margin-top:100px;">Contact Pastor</h1>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content">

      <div class="page-section">
        
        <div class="container wide">

          <div class="row">
           
            <div class="col-lg-8">
              
              <h2>We'd Love To Hear From You!</h2>
              <p>Feel free to send us any questions you may have. We are happy to answer them.</p>

              <form id="contact-form" class="contact-form style-2">

                <div class="contact-item">
                  
                  <label class="required">Your Name</label>
                  <input type="text" name="cf-name" required>

                </div>

                <div class="contact-item">
                  
                  <label class="required">Your Email</label>
                  <input type="email" name="cf-email" required>

                </div>

                <div class="contact-item">
                  
                  <label>Phone</label>
                  <input type="tel" name="cf-phone">

                </div>

                <div class="contact-item">
                  
                  <label>I'm interested in</label>
                  <input type="text" name="cf-subject">

                </div>

                <div class="contact-item">
                  
                  <label>Message</label>
                  <textarea rows="4" name="cf-message"></textarea>

                </div>

                <div class="contact-item">
                  
                  <button type="submit" class="btn btn-style-4" data-type="submit">Submit</button>

                </div>

              </form>

            </div>
          </div>

        </div>

      </div>

     
      
    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

    @include("includes/footer")
    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

  </div>

  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

  <!-- JS Libs & Plugins
  ============================================ -->
  @include("includes/plugins")
  
</body>
</html>