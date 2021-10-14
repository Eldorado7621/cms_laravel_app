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

    <div class="breadcrumbs-wrap style-2">

      <div class="container wide">
        
        <h1 class="page-title" style="margin-top:100px;">Classic Blog</h1>

       

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">

      <div class="container wide">
        
        <div class="row">
          
          <main id="main" class="col-lg-9">

            <div class="entry-box list-type">
              <!-- Entry -->
              <div class="entry">
                <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                
          
              </div>

            

              <!-- Entry -->
              <div class="entry">
                          
                <!-- - - - - - - - - - - - - - Entry attachment - - - - - - - - - - - - - - - - -->
                <div class="thumbnail-attachment">
                  <div class="responsive-iframe">
                  
                    <iframe src="https://www.youtube.com/embed/_kjSK-PcU9o?rel=0&amp;showinfo=0&amp;autohide=2&amp;controls=0&amp;playlist=J2Y_ld0KL-4&amp;enablejsapi=1"></iframe>

                  </div>
                </div>
                
                <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->
                <div class="entry-body">
          
                  <h4 class="entry-title"><a href="#">Nam Elit Agna Endrerit Sit</a></h4>
                  <div class="entry-meta">
                  
                    <span>on</span>
                    <time class="entry-date" datetime="2018-03-18">March 2, 2018</time>
                    <span>by</span>
                    <a href="#" class="entry-cat">Robert Smith</a>
                    <span>in</span>
                    <a href="#">News</a>
                      
                  </div>

                  <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. </p>
                  <div class="flex-row justify-content-between">
                    <a href="#" class="btn btn-small btn-style-4">Read More</a>
                    <a href="#" class="entry-icon social-btn"><i class="licon-share"></i></a>
                  </div>
          
                </div>
          
              </div>

             

           
              
          
              </div>
              
            </div>

            

          </main>
         

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