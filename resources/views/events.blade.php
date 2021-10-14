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

    <div class="breadcrumbs-wrap">

      <div class="container">
        
        <h1 class="page-title" style="margin-top:100px;">Events List</h1>

        <ul class="breadcrumbs">

          <li><a href="index.html">Home</a></li>
          <li>Events List</li>

        </ul>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->
    
    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">
      
      <div class="container wide">
        
        <div class="content-element6">
          
          <div class="tribe-events-bar">
            
            <div class="row col-no-space">
              <div class="col-lg-10">
                
                <form>
                  <div class="row col-no-space">
                    <div class="col-sm-4">
                      <label>Events From</label>
                      <input type="text" placeholder="2019-03">
                    </div>
                    <div class="col-sm-8 ">
                      <label>Search</label>
                      <button type="submit" class="btn btn-style-5 f-right"><i class="licon-magnifier"></i>Find Event</button>
                      <div class="wrapper">
                        <input type="text" placeholder="Search">
                      </div>
                    </div>
                  </div>
                </form>
        
              </div>
              <div class="col-lg-2">
                
                <label>View as</label>
                <div class="mad-custom-select">
                  <select data-default-text="List">
                    <option value="Month">Month</option>
                    <option value="Week">Week</option>
                    <option value="Map">Map</option>
                    <option value="Photo">Photo</option>
                  </select>
                </div>
        
              </div>
            </div>
        
          </div>

          <div class="tribe-events-filters">
              
            <a href="#javascript;" id="tribe_events_filters_toggle" class="btn btn-small btn-style-6">Show Filters</a>
      
            <div class="tribe-events-filters-content">
              
              <div class="flex-row justify-content-between">
                
                <label class="tribe-events-filters-label">Narrow Your Results</label>
      
                <div id="tribe_events_filter_control" class="tribe-filter-control">
                  <a href="#javascript;" id="tribe_events_filters_close_filters" class="btn btn-small btn-style-6" data-state="Show Advanced Filters">Collapse Filters</a>
                  <a href="#javascript;" id="tribe_events_filters_reset" class="btn btn-small btn-style-6">Reset Filters</a>
                </div>
      
              </div>
      
              <form>
                <div class="tribe_events_filter_item">
                  <h6 class="tribe-events-filters-group-heading">Featured Events</h6>
      
                  <div class="tribe-events-filter-group tribe-events-filter-checkboxes">
                    <div class="mad-custom-select">
                      <select data-default-text="Select">
                        <option value="menu">Option 1</option>
                        <option value="menu">Option 2</option>
                        <option value="menu">Option 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="tribe_events_filter_item">
                  <h6 class="tribe-events-filters-group-heading">Day</h6>
      
                  <div class="tribe-events-filter-group tribe-events-filter-checkboxes">
                    <div class="mad-custom-select">
                      <select data-default-text="Select">
                        <option value="menu">Option 1</option>
                        <option value="menu">Option 2</option>
                        <option value="menu">Option 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="tribe_events_filter_item">
                  <h6 class="tribe-events-filters-group-heading">Time</h6>
      
                  <div class="tribe-events-filter-group tribe-events-filter-checkboxes">
                    <div class="mad-custom-select">
                      <select data-default-text="Select">
                        <option value="menu">Option 1</option>
                        <option value="menu">Option 2</option>
                        <option value="menu">Option 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="tribe_events_filter_item">
                  <h6 class="tribe-events-filters-group-heading">Event Category</h6>
      
                  <div class="tribe-events-filter-group tribe-events-filter-checkboxes">
                    <div class="mad-custom-select">
                      <select data-default-text="Select">
                        <option value="menu">Option 1</option>
                        <option value="menu">Option 2</option>
                        <option value="menu">Option 3</option>
                      </select>
                    </div>
                  </div>
                </div>    
                <div class="tribe_events_filter_item">
                  <h6 class="tribe-events-filters-group-heading">Organizers</h6>
      
                  <div class="tribe-events-filter-group tribe-events-filter-checkboxes">
                    <div class="mad-custom-select">
                      <select data-default-text="Select">
                        <option value="menu">Option 1</option>
                        <option value="menu">Option 2</option>
                        <option value="menu">Option 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="tribe_events_filter_item">
                  <h6 class="tribe-events-filters-group-heading">Venues</h6>
      
                  <div class="tribe-events-filter-group tribe-events-filter-checkboxes">
                    <div class="mad-custom-select">
                      <select data-default-text="Select">
                        <option value="menu">Option 1</option>
                        <option value="menu">Option 2</option>
                        <option value="menu">Option 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="tribe_events_filter_item">
                  <h6 class="tribe-events-filters-group-heading">Country</h6>
      
                  <div class="tribe-events-filter-group tribe-events-filter-checkboxes">
                    <div class="mad-custom-select">
                      <select data-default-text="Select">
                        <option value="menu">Option 1</option>
                        <option value="menu">Option 2</option>
                        <option value="menu">Option 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="tribe_events_filter_item">
                  <h6 class="tribe-events-filters-group-heading">State/Province</h6>
      
                  <div class="tribe-events-filter-group tribe-events-filter-checkboxes">
                    <div class="mad-custom-select">
                      <select data-default-text="Select">
                        <option value="menu">Option 1</option>
                        <option value="menu">Option 2</option>
                        <option value="menu">Option 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="tribe_events_filter_item">
                  <h6 class="tribe-events-filters-group-heading">City</h6>
      
                  <div class="tribe-events-filter-group tribe-events-filter-checkboxes">
                    <div class="mad-custom-select">
                      <select data-default-text="Select">
                        <option value="menu">Option 1</option>
                        <option value="menu">Option 2</option>
                        <option value="menu">Option 3</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
      
            </div>
          
          </div>

        </div>

        <div class="content-element2">
          
          <h3 class="title">Events For March 2019</h3>

          <a href="#" class="btn btn-small btn-style-6 prev-btn type2">Previous Events</a>

          <hr class="item-divider">

        </div>

        <div class="event-box style-2 list-type">
          
          <!-- Event -->
          <div class="event">

            <div class="event-date">
              
              <h3 class="numb">18</h3>
              <h6 class="month">March</h6>
              <div class="day">Monday</div>

            </div>

            <div class="event-img">
              
              <a href="#"><img src="images/545x308_img1.jpg" alt=""></a>

            </div>
            
            <div class="event-body">
              
              <h5 class="event-title"><a href="#">Mission Vision School</a> <span class="price">Free</span></h5>

              <p class="e-info">March 18, 2018 @ 12:00 AM - 5:00 PM <br>
              8901 Marmora Road, Glasgow, D04 89GR</p>

              <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.  Aliquam erat volutpat. </p>

              <div class="event-action flex-row align-items-center">
                    
                <a href="#" class="btn btn-style-3">More Details</a>
                <div class="event-icons">
                  
                  <a href="#"><i class="licon-share2"></i></a>
                  <a href="#"><i class="licon-map-marker"></i></a>
                  <a href="#"><i class="licon-at-sign"></i></a>

                </div>

              </div>

            </div>

          </div>

          <!-- Event -->
          <div class="event">

            <div class="event-date">
              
              <h3 class="numb">21</h3>
              <h6 class="month">March</h6>
              <div class="day">Tuesday</div>

            </div>

            <div class="event-img">
              
              <a href="#"><img src="images/545x308_img2.jpg" alt=""></a>

            </div>
            
            <div class="event-body">
              
              <h5 class="event-title"><a href="#">Mother’s Day</a> <span class="price">$10.00</span></h5>

              <p>March 21, 2018 @ 12:00 AM - 5:00 PM
              8901 Marmora Road, Glasgow, D04 89GR</p>

              <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.  Aliquam erat volutpat. </p>

              <div class="event-action flex-row align-items-center">
                    
                <a href="#" class="btn btn-style-3">More Details</a>
                <div class="event-icons">
                  
                  <a href="#"><i class="licon-share2"></i></a>
                  <a href="#"><i class="licon-map-marker"></i></a>
                  <a href="#"><i class="licon-at-sign"></i></a>

                </div>

              </div>

            </div>

          </div>
          
          <!-- Event -->
          <div class="event">

            <div class="event-date">
              
              <h3 class="numb">24</h3>
              <h6 class="month">March</h6>
              <div class="day">Sanday</div>

            </div>

            <div class="event-img">
              
              <a href="#"><img src="images/545x308_img3.jpg" alt=""></a>

            </div>
            
            <div class="event-body">
              
              <h5 class="event-title"><a href="#">Easter Sunday</a><span class="price">Free</span></h5>

              <p>March 24, 2018 @ 12:00 AM - 5:00 PM
              8901 Marmora Road, Glasgow, D04 89GR</p>

              <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.  Aliquam erat volutpat. </p>

              <div class="event-action flex-row align-items-center">
                    
                <a href="#" class="btn btn-style-3">More Details</a>
                <div class="event-icons">
                  
                  <a href="#"><i class="licon-share2"></i></a>
                  <a href="#"><i class="licon-map-marker"></i></a>
                  <a href="#"><i class="licon-at-sign"></i></a>

                </div>

              </div>

            </div>

          </div>

          <!-- Event -->
          <div class="event">

            <div class="event-date">
              
              <h3 class="numb">27</h3>
              <h6 class="month">March</h6>
              <div class="day">Wednesday</div>

            </div>

            <div class="event-img">
              
              <a href="#"><img src="images/545x308_img4.jpg" alt=""></a>

            </div>
            
            <div class="event-body">
              
              <h5 class="event-title"><a href="#">Faith Path</a><span class="price">Free</span></h5>

              <p>March 27, 2018 @ 12:00 AM - 5:00 PM
              8901 Marmora Road, Glasgow, D04 89GR</p>

              <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.  Aliquam erat volutpat. </p>

              <div class="event-action flex-row align-items-center">
                    
                <a href="#" class="btn btn-style-3">More Details</a>
                <div class="event-icons">
                  
                  <a href="#"><i class="licon-share2"></i></a>
                  <a href="#"><i class="licon-map-marker"></i></a>
                  <a href="#"><i class="licon-at-sign"></i></a>

                </div>

              </div>

            </div>

          </div>

          <!-- Event -->
          <div class="event">

            <div class="event-date">
              
              <h3 class="numb">31</h3>
              <h6 class="month">March</h6>
              <div class="day">Sunday</div>

            </div>

            <div class="event-img">
              
              <a href="#"><img src="images/545x308_img5.jpg" alt=""></a>

            </div>
            
            <div class="event-body">
              
              <h5 class="event-title"><a href="#">Celebrate Recovery</a> <span class="price">$35.00</span></h5>

              <p>March 31, 2018 @ 12:00 AM - 5:00 PM
              8901 Marmora Road, Glasgow, D04 89GR</p>

              <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.  Aliquam erat volutpat. </p>

              <div class="event-action flex-row align-items-center">
                    
                <a href="#" class="btn btn-style-3">More Details</a>
                <div class="event-icons">
                  
                  <a href="#"><i class="licon-share2"></i></a>
                  <a href="#"><i class="licon-map-marker"></i></a>
                  <a href="#"><i class="licon-at-sign"></i></a>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="page-nav">
          <div class="flex-item"><a href="#" class="btn btn-small btn-style-6 prev-btn">February</a></div>
          <div class="flex-item"><a href="#" class="btn btn-small btn-style-6 exp">Export Events</a></div>
          <div class="flex-item"><a href="#" class="btn btn-small btn-style-6 next-btn">April</a></div>
        </div>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->


        <!-- main footer -->
        

    @include("includes/footer")

    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

  </div>

  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

  <!-- JS Libs & Plugins
  ============================================ -->
  
 @include("includes/plugins")
  
</body>
</html>