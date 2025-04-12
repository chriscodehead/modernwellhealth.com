<!-- top-bar -->
<div class="tf-top-bar style-has-logo">
  <div class="wrap-top-bar">
    <div class="top-bar-left">
      <ul class="top-info">
        <li class="text-2">
          <div class="title text-2">Call Us Now:</div>
          <div class=" text-3 fw-6"><a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a></div>
        </li>
        <li class="text-2">
          <div class="title text-2">Support 24/7:</div>
          <div class=" text-3 fw-6"><a href="mailto:<?php print $siteEmail; ?>"><?php print $siteEmail; ?></a></div>
        </li>
      </ul>
    </div>
    <div class="top-logo">
      <a href="./" class="site-logo">
        <img alt="" src="img/logo-horizontal.png">
      </a>
    </div>
    <div class=" top-bar-right">
      <ul class="list">
        <li>
          <ul class="tf-social style-1">
            <li><a href="<?php print $siteFacebook; ?>">
                <img src="img/facebook-new.png" />
              </a>
            </li>
            <li><a href="<?php print $siteTwitter; ?>">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_11072_5632)">
                    <path d="M3.75 3.125H7.5L16.25 16.875H12.5L3.75 3.125Z" stroke="#3C210E"
                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.89687 11.2129L3.75 16.8746" stroke="#3C210E"
                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16.2484 3.125L11.1016 8.78672" stroke="#3C210E"
                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0_11072_5632">
                      <rect width="20" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a></li>
            <li><a href="<?php print $siteInstagram; ?>">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_11072_5638)">
                    <path
                      d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
                      stroke="#3C210E" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path
                      d="M13.75 2.5H6.25C4.17893 2.5 2.5 4.17893 2.5 6.25V13.75C2.5 15.8211 4.17893 17.5 6.25 17.5H13.75C15.8211 17.5 17.5 15.8211 17.5 13.75V6.25C17.5 4.17893 15.8211 2.5 13.75 2.5Z"
                      stroke="#3C210E" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path
                      d="M14.0625 6.71875C14.494 6.71875 14.8438 6.36897 14.8438 5.9375C14.8438 5.50603 14.494 5.15625 14.0625 5.15625C13.631 5.15625 13.2812 5.50603 13.2812 5.9375C13.2812 6.36897 13.631 6.71875 14.0625 6.71875Z"
                      fill="#3C210E" />
                  </g>
                  <defs>
                    <clipPath id="clip0_11072_5638">
                      <rect width="20" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- top-bar -->

<!-- header -->
<header id="header-main" class="header style-1 style-no-logo header-default">
  <div class="header-inner">
    <div class="header-inner-wrap w-1320">
      <div class="mobile-button" data-bs-toggle="offcanvas" data-bs-target="#menu-mobile"
        aria-controls="menu-mobile">
        <i class="icon-menu"></i>
      </div>
      <div class="header-left">
        <div class="header-logo-2">
          <a href="./" class="site-logo">
            <img id="logo_header" alt="" src="img/logo-horizontal.png"
              data-retina="img/logo-horizontal.png">
          </a>
        </div>
        <nav class="main-menu mx-0">
          <ul class="navigation" style="margin-left: 30px;">
            <li class="relative <?php print @$active1; ?>">
              <a href="./">Home</a>
            </li>

            <li class="has-child relative <?php print @$active2; ?>">
              <a href="javascript:void(0)">About</a>
              <ul class="sub-menu">
                <li>
                  <a href="about">About</a>
                </li>
                <li>
                  <a href="book-appointment">Appointment</a>
                </li>
              </ul>
            </li>

            <li class="has-child relative <?php print @$active3; ?>">
              <a href="javascript:void(0)">The Clarity</a>
              <ul class="sub-menu">
                <li>
                  <a href="the-clarity-method">The Clarity Method</a>
                </li>
                <li>
                  <a href="tracker-resource">Tracker/Resource</a>
                </li>
              </ul>
            </li>

            <li class="relative <?php print @$active4; ?>">
              <a href="blog">Health Tips/Blog</a>
            </li>

            <li class="relative <?php print @$active5; ?>">
              <a href="contact">Contact</a>
            </li>
          </ul>
        </nav>
        <div class="header-logo">
          <a href="./" class="site-logo">
            <img style="width: 150px;" id="logo_header" alt="" src="img/logo-horizontal.png"
              data-retina="img/logo-horizontal.png">
          </a>
        </div>

      </div>
      <div class="header-right">
        <div class="btn-get" style="margin-right: 20px;">
          <a class="tf-btn style-default btn-color-secondary pd-40" href="book-appointment">
            <span>
              Get Your Consult!
            </span>
          </a>
        </div>
      </div>
    </div>

  </div>
</header>
<!-- /header -->