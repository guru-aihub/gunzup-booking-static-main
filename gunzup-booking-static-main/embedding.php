<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$title = "Home";
include 'partials/title-meta.php'
?>

<!-- Fullcalendar css -->
<link href="assets/vendor/fullcalendar/main.min.css" rel="stylesheet" type="text/css" />
<?php include 'partials/head-css.php' ?>
</head>

<body>
<!-- START Wrapper -->
<div class="wrapper">
  <?php include 'partials/menu.php' ?>
  
  <!-- ==================================================== --> 
  <!-- Start right Content here --> 
  <!-- ==================================================== -->
  <div class="page-content"> 
    <!-- Start Container -->
    <div class="container-xxl">
      <h4>Embedding</h4>
      <div class="card">
        <div class="card-body">
            
            <div class="row"><div class="col-md-4 mb-5">
          <label for="validationDefault01" class="form-label">Checkout Embed Page Url*</label>
          <input type="url" class="form-control" id="" placeholder="ie: https://website.com/checkout.page"  data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Checkout Embed" data-bs-content="This is the page on your website where the event registration and checkout process will take place." required>
          
          <!-- Booking Flow Button -->
          <div class="mt-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingFlowModal">
              <i class="bx bx-calendar-event me-2"></i>Booking Flow
            </button>
          </div>
        </div>
            <div class="col-md-8 mb-5">
         <div class="alert alert-warning" role="alert"> <p><i class='bx bx-info-circle'></i>  Be sure that all embed codes are placed in sections / pages that have full width layouts to allow for readability.</p></div>
        </div></div>
            
            
         <p class="mt-3">The following can be embedded on any page.</p>    
            
            
          <h5>Events Calendar</h5>
          <div class="row">
            <div class="embed-bg embed-styles col-sm-10 col-md-4 mb-3">
              <div class="row embed-styles-calendar mt-2">
                <div class="col"> <span class=""></span> </div>
                <div class="col"> <span class=""></span> </div>
                <div class="col"> <span class=""></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                  <div class="col"> <span class="featured-img embed-bg "></span> </div>
              </div>
              <div class="row embed-styles-calendar">
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
              </div>
              <div class="row embed-styles-calendar">
              <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
              </div>
              <div class="row embed-styles-calendar">
              <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
              </div>
              <div class="row embed-styles-calendar mb-2">
             
              <div class="col"> <span class="featured-img embed-bg "></span> </div>
              <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class="featured-img embed-bg "></span> </div>
                <div class="col"> <span class=""></span> </div>
                <div class="col"> <span class=""></span> </div>
              </div>
            </div>
            <div class="col-sm-10 col-md-8">
              <div class="highlight mb-3">
                <div class="highlight-toolbar"> <small class="text-uppercase">30 Day Events Calendar Embed Code</small>
                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy"> Copy </button>
                </div>
                <div class="code">
                  <pre class="language-html" tabindex="0">
                <code id="buttonBadge" class="language-html">    
                    <Script id="packagListStyleEmbed"><div>etc.</div>
                    </Script>
                </code>
                </pre>
                </div>
              </div>             
            </div>
          </div>
          <h5>Package Column Style</h5>
          <div class="row">
            <div class="col-sm-10 col-md-4">
              <div class="row embed-bg embed-styles mb-3">
                <div class="col col-4 mb-3"> <span class="featured-img embed-bg"></span> <span class="embed-title"></span> <span class="embed-desc"></span> </div>
                <div class="col col-4 mb-3"> <span class="featured-img embed-bg"></span> <span class="embed-title"></span> <span class="embed-desc"></span> </div>
                <div class="col col-4 mb-3"> <span class="featured-img embed-bg"></span> <span class="embed-title"></span> <span class="embed-desc"></span> </div>
                <div class="col col-4 mb-3"> <span class="featured-img embed-bg"></span> <span class="embed-title"></span> <span class="embed-desc"></span> </div>
                <div class="col col-4 mb-3"> <span class="featured-img embed-bg"></span> <span class="embed-title"></span> <span class="embed-desc"></span> </div>
                <div class="col col-4 mb-3"> <span class="featured-img embed-bg"></span> <span class="embed-title"></span> <span class="embed-desc"></span> </div>
              </div>
            </div>
            <div class="col-sm-10 col-md-8">
              <div class="highlight mb-3">
                <div class="highlight-toolbar"> <small class="text-uppercase">Events Column Style Embed Code</small>
                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy"> Copy </button>
                </div>
                <div class="code">
                  <pre class="language-html" tabindex="0">
                <code id="buttonBadge" class="language-html">    
                    <Script id="packagListStyleEmbed"><div>etc.</div>
                    </Script>
                </code>
                </pre>
                </div>
              </div>
              <div class="highlight mb-3">
                <div class="highlight-toolbar"> <small class="text-uppercase">Package Column Style Embed Code</small>
                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy"> Copy </button>
                </div>
                <div class="code">
                  <pre class="language-html" tabindex="0">
                <code id="buttonBadge" class="language-html">    
                    <Script id="packagListStyleEmbed"><div>etc.</div>
                    </Script>
                </code>
                </pre>
                </div>
              </div>
              <div class="highlight mb-3">
                <div class="highlight-toolbar"> <small class="text-uppercase">Membership Column Style Embed Code</small>
                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy"> Copy </button>
                </div>
                <div class="code">
                  <pre class="language-html" tabindex="0">
                <code id="buttonBadge" class="language-html">    
                    <Script id="packagListStyleEmbed"><div>etc.</div>
                    </Script>
                </code>
                </pre>
                </div>
              </div>
              <div class="highlight mb-3">
                    <div class="highlight-toolbar"> <small class="text-uppercase">Gift Certificates Column Style Embed Code</small>
                      <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy"> Copy </button>
                    </div>
                    <div class="code">
                    <pre class="language-html" tabindex="0">
                    <code id="buttonBadge" class="language-html">    
                    <Script id="packagListStyleEmbed"><div>etc.</div>
                    </Script>
                    </code>
                    </pre>
                  </div>
              </div>
              <p class="mt-3">Replace number in "column="3" for desired columns (2, 3, 4, 6)</p>
            </div>
          </div>
          <h5>Package List Style</h5>
          <div class="row">
            <div class="col-sm-10 col-md-4">
              <div class="row embed-bg embed-styles mb-3">
                <div class="col col-4 mb-3"> <span class="featured-img embed-bg"></span> </div>
                <div class="col col-8 mb-3"> <span class="embed-title"></span> <span class="embed-desc"></span> </div>
                <div class="col col-4 mb-3"> <span class="featured-img embed-bg"></span> </div>
                <div class="col col-8 mb-3"> <span class="embed-title"></span> <span class="embed-desc"></span> </div>
                <div class="col col-4 mb-3"> <span class="featured-img embed-bg"></span></div>
                <div class="col col-8 mb-3"> <span class="embed-title"></span> <span class="embed-desc"></span> </div>
              </div>
            </div>
            <div class="col-sm-10 col-md-8">
              <div class="highlight mb-3">
                <div class="highlight-toolbar"> <small class="text-uppercase">Events List Style Embed Code</small>
                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy"> Copy </button>
                </div>
                <div class="code">
                  <pre class="language-html" tabindex="0">
                <code id="buttonBadge" class="language-html">    
                    <Script id="packagListStyleEmbed"><div>etc.</div>
                    </Script>
                </code>
                </pre>
                </div>
              </div>
              <div class="highlight mb-3">
                <div class="highlight-toolbar"> <small class="text-uppercase">Package List Style Embed Code</small>
                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy"> Copy </button>
                </div>
                <div class="code">
                  <pre class="language-html" tabindex="0">
                <code id="buttonBadge" class="language-html">    
                    <Script id="packagListStyleEmbed"><div>etc.</div>
                    </Script>
                </code>
                </pre>
                </div>
              </div>
              
                <div class="highlight mb-3">
                  <div class="highlight-toolbar"> <small class="text-uppercase">Membership List Style Embed Code</small>
                    <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy"> Copy </button>
                  </div>
                  <div class="code">
                    <pre class="language-html" tabindex="0">
                  <code id="buttonBadge" class="language-html">    
                    <Script id="packagListStyleEmbed"><div>etc.</div>
                    </Script>
                  </code>
                  </pre>
                </div>
                
              </div>
              <div class="highlight mb-3">
                    <div class="highlight-toolbar"> <small class="text-uppercase">Gift Certificates List Style Embed Code</small>
                      <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy"> Copy </button>
                    </div>
                    <div class="code">
                    <pre class="language-html" tabindex="0">
                    <code id="buttonBadge" class="language-html">    
                    <Script id="packagListStyleEmbed"><div>etc.</div>
                    </Script>
                    </code>
                    </pre>
                  </div>
              </div>
          </div>
            
          <div class="row">
            <div class="col-12 embedcolors mt-3 mb-5">              
              <h5>Embedded Colors</h5>
                  <div class="embedcolors">  
                    <div class="row align-items-center">
                      <div class="col-md-2">
                        <div class="d-flex align-items-center">
                        <input type="color" class="form-control form-control-color" id="bgColorPicker" value="#f6f8fb" title="Choose background color">
                        <label class="form-label me-3 mb-0">Section background color</label>
                          
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="d-flex align-items-center">
                        <input type="color" class="form-control form-control-color" id="titleColorPicker" value="#eef2f7" title="Choose title color">
                        <label class="form-label me-3 mb-0">Title color</label>
                          
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="d-flex align-items-center">                          
                          <input type="color" class="form-control form-control-color" id="descColorPicker" value="#eef2f7" title="Choose description color">
                          <label class="form-label me-3 mb-0">Description text color</label>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
            
            
            
            
            
            <h5>Waiver</h5>
          <div class="row">
              <div class="col-12">
                  <div class="highlight mb-3">
                  <div class="highlight-toolbar"> <small class="text-uppercase">Waiver Embed Code</small>
                    <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy"> Copy </button>
                  </div>
                  <div class="code">
                    <pre class="language-html" tabindex="0">
                <code id="buttonBadge" class="language-html">    
                    <Script id="packagListStyleEmbed"><div>etc.</div>
                    </Script>
                </code>
                </pre>
                  </div>
              </div>
              </div>
        </div>
           
            
              </div>  
              
              
        <!-- end card body --> 
      </div>
      <!-- end card --> 
    </div>
    
    <!-- End Container -->
    <?php include  'partials/footer.php' ?>
</div>
<!-- ==================================================== --> 
<!-- End Page Content --> 
<!-- ==================================================== -->
</div>
<!-- END Wrapper -->

<?php include 'partials/vendor-scripts.php' ?>

<!-- Full Calendar --> 
<script src="assets/vendor/fullcalendar/main.min.js"></script> 
<script>
// Color picker functionality
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing color pickers...');
    
    // Test if elements exist
    const bgPicker = document.getElementById('bgColorPicker');
    const titlePicker = document.getElementById('titleColorPicker');
    const descPicker = document.getElementById('descColorPicker');
    
    console.log('bgPicker:', bgPicker);
    console.log('titlePicker:', titlePicker);
    console.log('descPicker:', descPicker);
    
    // Remove existing style elements when creating new ones
    let bgStyle = null;
    let titleStyle = null;
    let descStyle = null;

    function hexToRgb(hex) {
        var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
        return result ? {
            r: parseInt(result[1], 16),
            g: parseInt(result[2], 16),
            b: parseInt(result[3], 16)
        } : null;
    }

    // Background color picker
    if (bgPicker) {
        bgPicker.addEventListener('input', function(e) {
            console.log('Background color changed to:', e.target.value);
            const color = e.target.value;
            const rgb = hexToRgb(color);
            if (rgb) {
                // Remove existing style
                if (bgStyle) {
                    bgStyle.remove();
                }
                // Apply to embed-bg elements
                bgStyle = document.createElement('style');
                bgStyle.innerHTML = `
                    .embed-bg {
                        background-color: rgba(${rgb.r}, ${rgb.g}, ${rgb.b}, 0.5) !important;
                    }
                `;
                document.head.appendChild(bgStyle);
                console.log('Background style applied');
            }
        });
    }

    // Title color picker
    if (titlePicker) {
        titlePicker.addEventListener('input', function(e) {
            console.log('Title color changed to:', e.target.value);
            const color = e.target.value;
            // Remove existing style
            if (titleStyle) {
                titleStyle.remove();
            }
            // Apply to embed-title elements
            titleStyle = document.createElement('style');
            titleStyle.innerHTML = `
                .embed-title {
                    background-color: ${color} !important;
                }
            `;
            document.head.appendChild(titleStyle);
            console.log('Title style applied');
        });
    }

    // Description color picker
    if (descPicker) {
        descPicker.addEventListener('input', function(e) {
            console.log('Description color changed to:', e.target.value);
            const color = e.target.value;
            // Remove existing style
            if (descStyle) {
                descStyle.remove();
            }
            // Apply to embed-desc elements
            descStyle = document.createElement('style');
            descStyle.innerHTML = `
                .embed-desc {
                    background-color: ${color} !important;
                }
            `;
            document.head.appendChild(descStyle);
            console.log('Description style applied');
        });
    }

    // Copy to clipboard functionality
    function initializeCopyButtons() {
        const copyButtons = document.querySelectorAll('.btn-copy-clipboard');
        
        copyButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Find the associated code element
                const highlight = this.closest('.highlight');
                const codeElement = highlight.querySelector('code');
                
                if (codeElement) {
                    // Get the text content from the code element
                    const textToCopy = codeElement.textContent.trim();
                    
                    // Copy to clipboard using the modern Clipboard API
                    if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(textToCopy).then(function() {
                            showCopyFeedback(button, 'success');
                        }).catch(function(err) {
                            console.error('Failed to copy text: ', err);
                            fallbackCopyToClipboard(textToCopy, button);
                        });
                    } else {
                        // Fallback for older browsers
                        fallbackCopyToClipboard(textToCopy, button);
                    }
                } else {
                    console.error('Code element not found');
                    showCopyFeedback(button, 'error');
                }
            });
        });
    }

    // Fallback copy method for older browsers
    function fallbackCopyToClipboard(text, button) {
        const textArea = document.createElement('textarea');
        textArea.value = text;
        textArea.style.position = 'fixed';
        textArea.style.left = '-999999px';
        textArea.style.top = '-999999px';
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        
        try {
            const successful = document.execCommand('copy');
            if (successful) {
                showCopyFeedback(button, 'success');
            } else {
                showCopyFeedback(button, 'error');
            }
        } catch (err) {
            console.error('Fallback copy failed: ', err);
            showCopyFeedback(button, 'error');
        }
        
        document.body.removeChild(textArea);
    }

    // Show visual feedback when copying
    function showCopyFeedback(button, status) {
        const originalText = button.textContent;
        const originalClasses = button.className;
        
        if (status === 'success') {
            button.textContent = 'Copied!';
            button.className = button.className.replace('btn-outline-success', 'btn-success');
        } else {
            button.textContent = 'Error!';
            button.className = button.className.replace('btn-outline-success', 'btn-danger');
        }
        
        // Reset button after 2 seconds
        setTimeout(function() {
            button.textContent = originalText;
            button.className = originalClasses;
        }, 2000);
    }

    // Initialize copy buttons
    initializeCopyButtons();
});
    
    </script> 
<!-- Page Js --> 
<script src="assets/js/pages/app-calendar.js"></script>

<!-- Booking Flow Modal -->
<div class="modal fade" id="bookingFlowModal" tabindex="-1" aria-labelledby="bookingFlowModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookingFlowModalLabel">Book Your Experience</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="card border-0">
            <div class="card-body">
              <div class="mb-5">
                <form>
                  <div id="horizontalwizard">
                    <ul class="nav nav-pills nav-justified icon-wizard form-wizard-header bg-light p-1" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2 active" aria-selected="true" role="tab">
                          <i class="bx bx-calendar fs-26"></i>
                          Booking Details </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" role="tab" tabindex="-1">
                          <iconify-icon icon="iconamoon:shopping-bag-duotone" class="fs-26"></iconify-icon>
                          Add-ons & Notes </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1" role="tab">
                          <iconify-icon icon="iconamoon:profile-duotone" class="fs-26"></iconify-icon>
                          Customer Info </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="#basictab4" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1" role="tab">
                          <iconify-icon icon="iconamoon:credit-card-duotone" class="fs-26"></iconify-icon>
                          Payment </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="#basictab5" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1" role="tab">
                          <iconify-icon icon="iconamoon:check-circle-1-duotone" class="fs-26"></iconify-icon>
                          Review & Receipt </a>
                      </li>
                    </ul>

                    <div class="tab-content mb-0">
                      <!-- Step 1: Booking Details -->
                      <div class="tab-pane active show" id="basictab1" role="tabpanel">
                        <h4 class="fs-16 fw-semibold mb-1">Booking Details</h4>
                        <p class="text-muted">Select your package, group size, and preferred date & time</p>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="mb-3">
                              <label for="modalGroupId" class="form-label">Group Name/ID *</label>
                              <input id="modalGroupId" type="text" class="form-control" placeholder="Enter Group Name" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Group Name" data-bs-content="Please specify a name for your group ie: Johnny's Birthday" />
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Please specify the total number of guests in your group. Self equipped guests will not be calculated as requiring a package.">
                              <label for="modalTotalGuests" class="form-label">Total Guests *</label>
                              <input id="modalTotalGuests" type="number" class="form-control" placeholder="Enter number of attendees" min="1" max="999" />
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Attention!" data-bs-content="Self equipped guests are assumed to have all gear, including required safety gear to participate.">
                              <label for="modalSelfEquippedGuests" class="form-label">Self Equipped Guests</label>
                              <input id="modalSelfEquippedGuests" type="number" class="form-control" placeholder="0" min="0" max="999" />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="modalBookedPackage" class="form-label">Package / Game Type *</label>
                              <select class="form-control" id="modalBookedPackage" data-choices data-choices-search-false data-choices-removeItem>
                                <option value="">Select Package</option>
                                <option value="paintball1">Paintball Package 1</option>
                                <option value="paintball2">Paintball Package 2</option>
                                <option value="lowimpact">Low Impact Paintball</option>
                                <option value="bowtag">Bow Tag</option>
                                <option value="nerf">Nerf Under 12</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <!-- Package Display Section -->
                        <div class="row mt-4" id="modal-package-display-section" style="display: none;">
                          <div class="col-12">
                            <h5 class="mb-3">Selected Package</h5>
                            <div class="card">
                              <div class="card-body">
                                <div class="row align-items-center">
                                  <div class="col-md-3 text-center mb-3 mb-md-0">
                                    <img src="assets/images/placeholder-img.png" alt="Package Image" class="img-fluid rounded" id="modal-package-featured-image" style="max-height: 150px; width: auto;">
                                  </div>
                                  <div class="col-md-9">
                                    <h4 class="mb-2" id="modal-package-title">Package Title</h4>
                                    <p class="text-muted mb-0" id="modal-package-description">Package description will appear here when you select a package above.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Calendar Section -->
                        <div class="row mt-4">
                          <div class="col-12">
                            <h5 class="mb-3">Select Your Date</h5>
                            <div class="card">
                              <div class="card-body">
                                <div id="modal-booking-calendar"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Time Slots Section -->
                        <div class="row mt-4" id="modal-time-slots-section" style="display: none;">
                          <div class="col-12">
                            <h5 class="mb-3">Select Your Time Slot</h5>
                            <p class="text-muted mb-3" id="modal-selected-date-display">Please select a date above to view available time slots</p>
                            <div class="card">
                              <div class="card-body">
                                <div class="row" id="modal-time-slots-container">
                                  <!-- Time slot buttons will be generated by JavaScript -->
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="8:00 AM" onclick="selectModalTimeSlot(this)">8:00 AM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="8:30 AM" onclick="selectModalTimeSlot(this)">8:30 AM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="9:00 AM" onclick="selectModalTimeSlot(this)">9:00 AM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="9:30 AM" onclick="selectModalTimeSlot(this)">9:30 AM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="10:00 AM" onclick="selectModalTimeSlot(this)">10:00 AM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="10:30 AM" onclick="selectModalTimeSlot(this)">10:30 AM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="11:00 AM" onclick="selectModalTimeSlot(this)">11:00 AM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="11:30 AM" onclick="selectModalTimeSlot(this)">11:30 AM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="12:00 PM" onclick="selectModalTimeSlot(this)">12:00 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="12:30 PM" onclick="selectModalTimeSlot(this)">12:30 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="1:00 PM" onclick="selectModalTimeSlot(this)">1:00 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="1:30 PM" onclick="selectModalTimeSlot(this)">1:30 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="2:00 PM" onclick="selectModalTimeSlot(this)">2:00 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="2:30 PM" onclick="selectModalTimeSlot(this)">2:30 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="3:00 PM" onclick="selectModalTimeSlot(this)">3:00 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="3:30 PM" onclick="selectModalTimeSlot(this)">3:30 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="4:00 PM" onclick="selectModalTimeSlot(this)">4:00 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="4:30 PM" onclick="selectModalTimeSlot(this)">4:30 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="5:00 PM" onclick="selectModalTimeSlot(this)">5:00 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="5:30 PM" onclick="selectModalTimeSlot(this)">5:30 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="6:00 PM" onclick="selectModalTimeSlot(this)">6:00 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="6:30 PM" onclick="selectModalTimeSlot(this)">6:30 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="7:00 PM" onclick="selectModalTimeSlot(this)">7:00 PM</button>
                                  </div>
                                  <div class="col-2 mb-3">
                                    <button type="button" class="time-slot w-100" data-time="7:30 PM" onclick="selectModalTimeSlot(this)">7:30 PM</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Step 2: Add-ons & Notes -->
                      <div class="tab-pane" id="basictab2" role="tabpanel">
                        <h4 class="fs-16 fw-semibold mb-1">Add-ons & Notes</h4>
                        <p class="text-muted">Select additional equipment and add any special notes</p>

                        <div id="modal-available-addons-container">
                          <div class="row g-3 mb-3 available-addon-row">
                            <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this booking.">
                              <label for="payment-status" class="form-label">Assign Available Add-ons</label>
                              <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                                <option value="">None</option>
                                <option value="">Grenade + $12.00</option>
                                <option value="">Upgraded Gun package+ $100.00</option>
                                <option value="">Add-ons selected available for chosen package</option>
                              </select>
                            </div>
                            <div class="col-md-1 d-flex align-items-end align-items-center">
                              <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeModalAvailableAddonRow(this)" title="Remove this add-on"></i>
                              <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addModalAvailableAddonRow()" title="Add another add-on"></i>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12 mb-3">
                            <label for="modalBookingNotes" class="form-label">Booking Notes</label>
                            <textarea class="form-control" id="modalBookingNotes" rows="4" placeholder="Any special requests or notes for your booking..."></textarea>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12 mb-3">
                            <label for="modalDiscountCode" class="form-label">Discount Code (Optional)</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="modalDiscountCode" placeholder="Enter discount code">
                              <button class="btn btn-outline-secondary" type="button" id="modalApplyDiscount">Apply</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Step 3: Customer Information -->
                      <div class="tab-pane" id="basictab3" role="tabpanel">
                        <h4 class="fs-16 fw-semibold mb-1">Customer Information</h4>
                        <p class="text-muted">Enter your contact details for the booking</p>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="modalFirstName" class="form-label">First Name *</label>
                              <input id="modalFirstName" type="text" class="form-control" placeholder="Enter First Name" required />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="modalLastName" class="form-label">Last Name *</label>
                              <input id="modalLastName" type="text" class="form-control" placeholder="Enter Last Name" required />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="modalCustomerEmail" class="form-label">Email *</label>
                              <input id="modalCustomerEmail" type="email" class="form-control" placeholder="Enter Email Address" required />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="modalCustomerPhone" class="form-label">Phone</label>
                              <input id="modalCustomerPhone" type="text" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000" placeholder="(xxx) xxx-xxxx" />
                              <span class="fs-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-check mb-3">
                              <input class="form-check-input" type="checkbox" id="modalMailingListCheckbox" name="modalMailingListCheckbox" checked data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Marketing Mailing List" data-bs-content="This will add you to any marketing mailing lists.">
                              <label class="form-check-label" for="modalMailingListCheckbox">
                                Sign me up for the mailing list
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Step 4: Payment Information -->
                      <div class="tab-pane" id="basictab4" role="tabpanel">
                        <h4 class="fs-16 fw-semibold mb-1">Payment Information</h4>
                        <p class="text-muted">Choose your payment method and complete the transaction</p>

                        <!-- Payment Method Selection -->
                        <div class="row mb-4" id="modal-payment-method-selection">
                          <div class="col-12">
                            <div class="d-flex flex-column align-items-center gap-3">
                              <button type="button" class="btn btn-primary btn-lg w-50" id="modal-credit-card-btn">
                                <i class="bx bx-credit-card me-2"></i>Pay with Credit Card
                              </button>
                              <button type="button" class="btn btn-outline-primary btn-lg w-50" id="modal-paypal-btn">
                                <i class="bx bxl-paypal me-2"></i>Pay with PayPal
                              </button>
                            </div>
                          </div>
                        </div>

                        <!-- Credit Card Form (initially hidden) -->
                        <div id="modal-credit-card-form" style="display: none;">
                          <div class="row mb-3">
                            <div class="col-12">
                              <div class="d-flex align-items-center mb-3">
                                <button type="button" class="btn btn-link p-0 me-2" id="modal-back-to-payment-methods">
                                  <i class="bx bx-arrow-back"></i>
                                </button>
                                <h5 class="mb-0">Credit Card Information</h5>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="modalCardholderName" class="form-label">Cardholder Name *</label>
                                <input id="modalCardholderName" type="text" class="form-control" placeholder="Enter Cardholder Name" required />
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="modalCardNumber" class="form-label">Card Number *</label>
                                <input id="modalCardNumber" type="text" class="form-control" placeholder="1234 5678 9012 3456" data-toggle="input-mask" data-mask-format="0000 0000 0000 0000" required />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="modalExpiryDate" class="form-label">Expiry Date *</label>
                                <input id="modalExpiryDate" type="text" class="form-control" placeholder="MM/YY" data-toggle="input-mask" data-mask-format="00/00" required />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="modalCvvCode" class="form-label">CVV *</label>
                                <input id="modalCvvCode" type="text" class="form-control" placeholder="123" data-toggle="input-mask" data-mask-format="000" required />
                              </div>
                            </div>
                          </div>

                          <!-- Billing Address -->
                          <h5 class="mb-3 mt-4">Billing Address</h5>
                          <div class="row">
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="modalBillingAddress" class="form-label">Street Address *</label>
                                <input id="modalBillingAddress" type="text" class="form-control" placeholder="Enter Street Address" required />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="mb-3">
                                <label for="modalBillingCity" class="form-label">City *</label>
                                <input id="modalBillingCity" type="text" class="form-control" placeholder="Enter City" required />
                              </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="mb-3">
                                <label for="modalBillingState" class="form-label">State *</label>
                                <select class="form-control" id="modalBillingState" data-choices data-choices-search-false required>
                                  <option value="">Select State</option>
                                  <option value="AL">Alabama</option>
                                  <option value="AK">Alaska</option>
                                  <option value="AZ">Arizona</option>
                                  <option value="AR">Arkansas</option>
                                  <option value="CA">California</option>
                                  <option value="CO">Colorado</option>
                                  <option value="CT">Connecticut</option>
                                  <option value="DE">Delaware</option>
                                  <option value="FL">Florida</option>
                                  <option value="GA">Georgia</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-3">
                              <div class="mb-3">
                                <label for="modalBillingZip" class="form-label">ZIP Code *</label>
                                <input id="modalBillingZip" type="text" class="form-control" placeholder="12345" data-toggle="input-mask" data-mask-format="00000" required />
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- PayPal Section (initially hidden) -->
                        <div id="modal-paypal-section" style="display: none;">
                          <div class="row mb-3">
                            <div class="col-12">
                              <div class="d-flex align-items-center mb-3">
                                <button type="button" class="btn btn-link p-0 me-2" id="modal-back-to-payment-methods-paypal">
                                  <i class="bx bx-arrow-back"></i>
                                </button>
                                <h5 class="mb-0">PayPal Payment</h5>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-12">
                              <div class="text-center py-5">
                                <div class="mb-4">
                                  <i class="bx bxl-paypal text-primary" style="font-size: 4rem;"></i>
                                </div>
                                <h5 class="mb-3">Secure PayPal Payment</h5>
                                <p class="text-muted mb-4">You will be redirected to PayPal to complete your payment securely.</p>
                                
                                <div class="d-grid gap-2 col-6 mx-auto">
                                  <button type="button" class="btn btn-warning btn-lg" id="modal-paypal-checkout-btn" disabled>
                                    <i class="bx bxl-paypal me-2"></i>Continue with PayPal
                                  </button>
                                  <small class="text-muted">PayPal integration coming soon</small>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Step 5: Review & Receipt -->
                      <div class="tab-pane" id="basictab5" role="tabpanel">
                        <h4 class="fs-16 fw-semibold mb-1">Review & Receipt</h4>
                        <p class="text-muted">Review your booking details and complete the purchase</p>

                        <!-- Booking Summary -->
                        <div class="row mb-4">
                          <div class="col-12">
                            <h5 class="mb-3">Booking Summary</h5>
                            <div class="table-responsive">
                              <table class="table table-bordered">
                                <thead class="bg-light">
                                  <tr>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                  </tr>
                                </thead>
                                <tbody id="modal-booking-summary-tbody">
                                  <tr>
                                    <td>Package</td>
                                    <td>1</td>
                                    <td>$80.00</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                        <!-- Totals -->
                        <div class="row mb-4">
                          <div class="col-12">
                            <div class="d-flex justify-content-end">
                              <div style="min-width: 300px;">
                                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                  <span class="fw-medium">Sub-total:</span>
                                  <span>$80.00</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                  <span class="fw-medium">Discount:</span>
                                  <span>$0.00</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                  <h5 class="fw-medium mb-0">Total:</h5>
                                  <h5 class="mb-0">$80.00</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="row mb-4">
                          <div class="col-12">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="modalTermsConditions" required />
                              <label class="form-check-label" for="modalTermsConditions">
                                I agree with the <a href="#" class="text-primary">Terms and Conditions</a> and <a href="#" class="text-primary">Waiver Agreement</a>
                              </label>
                            </div>
                          </div>
                        </div>

                        <!-- Success Message (hidden initially) -->
                        <div class="row" id="modal-booking-success" style="display: none;">
                          <div class="col-12">
                            <div class="text-center">
                              <div class="avatar-md mx-auto mb-3">
                                <div class="avatar-title bg-success bg-opacity-10 text-success rounded-circle">
                                  <iconify-icon icon="iconamoon:check-circle-1-duotone" class="fs-36"></iconify-icon>
                                </div>
                              </div>
                              <h3 class="mt-0 text-success">Booking Confirmed!</h3>
                              <p class="w-75 mb-2 mx-auto">Your booking has been successfully processed. You will receive a confirmation email shortly.</p>
                              <p class="mb-3"><strong>Booking Reference:</strong> <span id="modal-booking-reference">#BK-2024-001</span></p>
                              <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-primary" type="button">Download Receipt</button>
                                <button class="btn btn-outline-primary" type="button">Send Receipt via Email</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Navigation Buttons - Positioned at bottom -->
                  <div class="border-top pt-3 mt-4">
                    <div class="d-flex justify-content-between gap-3">
                      <div class="previous">
                        <a href="javascript:void(0);" class="btn btn-primary disabled" id="modal-prev-btn">
                          <i class="bx bx-left-arrow-alt me-2"></i>Previous
                        </a>
                      </div>
                      <div class="next">
                        <a href="javascript:void(0);" class="btn btn-primary" id="modal-next-btn">
                          Next<i class="bx bx-right-arrow-alt ms-2"></i>
                        </a>
                      </div>
                      <div class="complete" style="display: none;">
                        <a href="javascript:void(0);" class="btn btn-primary" id="modal-complete-btn">
                          Complete Booking
                        </a>
                      </div>
                    </div>
                  </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Modal Booking Flow JavaScript -->
<script>
    let modalCurrentStep = 1;
    const modalTotalSteps = 5;
    let modalSelectedDate = null;
    let modalSelectedTime = null;
    let modalBookingCalendar = null;

    // Modal-specific validation functions
    function validateModalStep1() {
        const groupId = document.getElementById('modalGroupId');
        const bookedPackage = document.getElementById('modalBookedPackage');
        const totalGuests = document.getElementById('modalTotalGuests');
        
        const groupIdValue = groupId ? groupId.value.trim() : '';
        const bookedPackageValue = bookedPackage ? bookedPackage.value : '';
        const totalGuestsValue = totalGuests ? totalGuests.value : '';
        
        return groupIdValue !== '' && bookedPackageValue !== '' && totalGuestsValue !== '' && modalSelectedDate !== null && modalSelectedTime !== null;
    }

    function validateModalStep2() {
        return true; // Step 2 has no required fields
    }

    function validateModalStep3() {
        const firstName = document.getElementById('modalFirstName').value.trim();
        const lastName = document.getElementById('modalLastName').value.trim();
        const customerEmail = document.getElementById('modalCustomerEmail').value.trim();
        
        return firstName !== '' && lastName !== '' && customerEmail !== '';
    }

    function validateModalStep4() {
        const creditCardForm = document.getElementById('modal-credit-card-form');
        const paypalSection = document.getElementById('modal-paypal-section');
        const paymentSelection = document.getElementById('modal-payment-method-selection');
        
        if (paymentSelection.style.display !== 'none') {
            return false;
        }
        
        if (creditCardForm.style.display !== 'none') {
            const cardholderName = document.getElementById('modalCardholderName').value.trim();
            const cardNumber = document.getElementById('modalCardNumber').value.trim();
            const expiryDate = document.getElementById('modalExpiryDate').value.trim();
            const cvvCode = document.getElementById('modalCvvCode').value.trim();
            const billingAddress = document.getElementById('modalBillingAddress').value.trim();
            const billingCity = document.getElementById('modalBillingCity').value.trim();
            const billingState = document.getElementById('modalBillingState').value;
            const billingZip = document.getElementById('modalBillingZip').value.trim();
            
            return cardholderName !== '' && cardNumber !== '' && expiryDate !== '' && 
                   cvvCode !== '' && billingAddress !== '' && billingCity !== '' && 
                   billingState !== '' && billingZip !== '';
        }
        
        if (paypalSection.style.display !== 'none') {
            return true;
        }
        
        return false;
    }

    function validateModalStep5() {
        const termsCheckbox = document.getElementById('modalTermsConditions');
        return termsCheckbox && termsCheckbox.checked;
    }

    // Modal time slot selection
    function selectModalTimeSlot(element) {
        if (element.classList.contains('unavailable')) return;
        
        document.querySelectorAll('#modal-time-slots-container .time-slot.selected').forEach(slot => {
            slot.classList.remove('selected');
        });
        
        element.classList.add('selected');
        modalSelectedTime = element.getAttribute('data-time');
        
        updateModalButtonStates();
    }

    // Modal package display functionality
    function updateModalPackageDisplay() {
        const packageSelect = document.getElementById('modalBookedPackage');
        const packageDisplaySection = document.getElementById('modal-package-display-section');
        const packageTitle = document.getElementById('modal-package-title');
        const packageDescription = document.getElementById('modal-package-description');
        
        if (!packageSelect || !packageDisplaySection) return;
        
        const selectedValue = packageSelect.value;
        
        const packageData = {
            'paintball1': {
                title: 'Paintball Package 1',
                description: 'Our standard paintball experience includes all basic equipment, protective gear, and ammunition for an exciting battle simulation. Perfect for beginners and groups looking for action-packed fun.'
            },
            'paintball2': {
                title: 'Paintball Package 2', 
                description: 'Enhanced paintball experience with upgraded equipment, additional ammunition, and extended game time. Includes premium protective gear and special game scenarios for maximum excitement.'
            },
            'lowimpact': {
                title: 'Low Impact Paintball',
                description: 'Perfect for younger players or those new to paintball. Features lower velocity markers and softer paintballs while maintaining all the excitement of traditional paintball games.'
            },
            'bowtag': {
                title: 'Bow Tag',
                description: 'Unique archery-based combat game using foam-tipped arrows and protective gear. Combines the skill of archery with tactical team gameplay for an unforgettable experience.'
            },
            'nerf': {
                title: 'Nerf Under 12',
                description: 'Safe and fun Nerf battle experience designed specifically for children under 12. Includes all Nerf equipment, protective eyewear, and age-appropriate game scenarios.'
            }
        };
        
        if (selectedValue && packageData[selectedValue]) {
            packageDisplaySection.style.display = 'block';
            packageTitle.textContent = packageData[selectedValue].title;
            packageDescription.textContent = packageData[selectedValue].description;
        } else {
            packageDisplaySection.style.display = 'none';
            packageTitle.textContent = 'Package Title';
            packageDescription.textContent = 'Package description will appear here when you select a package above.';
        }
    }

    // Modal button state management
    function updateModalButtonStates() {
        const nextBtn = document.getElementById('modal-next-btn');
        const prevBtn = document.getElementById('modal-prev-btn');
        const completeBtn = document.getElementById('modal-complete-btn');
        
        // Update Previous button
        if (modalCurrentStep === 1) {
            prevBtn.classList.add('disabled');
            prevBtn.style.pointerEvents = 'none';
        } else {
            prevBtn.classList.remove('disabled');
            prevBtn.style.pointerEvents = 'auto';
        }

        // Validate current step
        let isCurrentStepValid = false;
        switch(modalCurrentStep) {
            case 1: isCurrentStepValid = validateModalStep1(); break;
            case 2: isCurrentStepValid = validateModalStep2(); break;
            case 3: isCurrentStepValid = validateModalStep3(); break;
            case 4: isCurrentStepValid = validateModalStep4(); break;
            case 5: isCurrentStepValid = validateModalStep5(); break;
        }

        // Update Next/Complete button
        if (modalCurrentStep === modalTotalSteps) {
            nextBtn.style.display = 'none';
            document.querySelector('#bookingFlowModal .complete').style.display = 'block';
            
            if (isCurrentStepValid) {
                completeBtn.classList.remove('disabled', 'btn-secondary');
                completeBtn.classList.add('btn-primary');
                completeBtn.style.pointerEvents = 'auto';
            } else {
                completeBtn.classList.add('disabled', 'btn-secondary');
                completeBtn.classList.remove('btn-primary');
                completeBtn.style.pointerEvents = 'none';
            }
        } else {
            nextBtn.style.display = 'block';
            document.querySelector('#bookingFlowModal .complete').style.display = 'none';
            
            if (isCurrentStepValid) {
                nextBtn.classList.remove('disabled', 'btn-secondary');
                nextBtn.classList.add('btn-primary');
                nextBtn.style.pointerEvents = 'auto';
            } else {
                nextBtn.classList.add('disabled', 'btn-secondary');
                nextBtn.classList.remove('btn-primary');
                nextBtn.style.pointerEvents = 'none';
            }
        }
        
        updateModalTabStates();
    }

    // Modal tab state management
    function updateModalTabStates() {
        const wizardTabs = document.querySelectorAll('#bookingFlowModal #horizontalwizard .nav-link');
        
        wizardTabs.forEach((tab, index) => {
            const step = index + 1;
            const canAccess = canAccessModalStep(step);
            
            if (canAccess) {
                tab.style.pointerEvents = 'auto';
                tab.style.opacity = '1';
            } else {
                tab.style.pointerEvents = 'none';
                tab.style.opacity = '0.5';
            }
        });
    }

    function canAccessModalStep(targetStep) {
        if (targetStep <= modalCurrentStep) return true;
        
        for (let step = 1; step < targetStep; step++) {
            let isValid = false;
            switch(step) {
                case 1: isValid = validateModalStep1(); break;
                case 2: isValid = validateModalStep2(); break;
                case 3: isValid = validateModalStep3(); break;
                case 4: isValid = validateModalStep4(); break;
                case 5: isValid = validateModalStep5(); break;
            }
            if (!isValid && step !== 2) {
                return false;
            }
        }
        return true;
    }

    // Modal step navigation
    function goToModalStep(step) {
        if (step < 1 || step > modalTotalSteps) return;
        
        document.querySelector('#bookingFlowModal .tab-pane.active.show').classList.remove('active', 'show');
        document.querySelector('#bookingFlowModal .nav-link.active').classList.remove('active');
        
        document.getElementById(`basictab${step}`).classList.add('active', 'show');
        document.querySelector(`#bookingFlowModal a[href="#basictab${step}"]`).classList.add('active');
        
        if (step === 4) {
            showModalPaymentSelection();
        }
        
        modalCurrentStep = step;
        updateModalButtonStates();
    }

    // Modal payment method functions
    function showModalPaymentMethod(method) {
        const paymentSelection = document.getElementById('modal-payment-method-selection');
        const creditCardForm = document.getElementById('modal-credit-card-form');
        const paypalSection = document.getElementById('modal-paypal-section');
        
        paymentSelection.style.display = 'none';
        
        if (method === 'credit-card') {
            creditCardForm.style.display = 'block';
            paypalSection.style.display = 'none';
        } else if (method === 'paypal') {
            creditCardForm.style.display = 'none';
            paypalSection.style.display = 'block';
        }
        
        updateModalButtonStates();
    }

    function showModalPaymentSelection() {
        const paymentSelection = document.getElementById('modal-payment-method-selection');
        const creditCardForm = document.getElementById('modal-credit-card-form');
        const paypalSection = document.getElementById('modal-paypal-section');
        
        paymentSelection.style.display = 'block';
        creditCardForm.style.display = 'none';
        paypalSection.style.display = 'none';
        
        updateModalButtonStates();
    }

    // Modal calendar functionality
    function displayModalTimeSlots(dateStr) {
        const timeSlotsSection = document.getElementById('modal-time-slots-section');
        const selectedDateDisplay = document.getElementById('modal-selected-date-display');
        
        timeSlotsSection.style.display = 'block';
        
        const formattedDate = new Date(dateStr).toLocaleDateString('en-US', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
        selectedDateDisplay.textContent = `Available time slots for ${formattedDate}`;
        
        // Get unavailable slots for this date
        const unavailableSlots = getModalUnavailableTimeSlots(dateStr);
        
        const timeSlotButtons = document.querySelectorAll('#modal-time-slots-container .time-slot');
        timeSlotButtons.forEach(button => {
            const timeValue = button.getAttribute('data-time');
            
            button.classList.remove('unavailable', 'selected');
            button.disabled = false;
            
            if (unavailableSlots.includes(timeValue)) {
                button.classList.add('unavailable');
                button.disabled = true;
            } else {
                button.disabled = false;
            }
        });
        
        modalSelectedTime = null;
    }

    function getModalUnavailableTimeSlots(dateStr) {
        const unavailableSlots = {
            '2024-12-14': ['10:00 AM', '2:00 PM', '6:00 PM'],
            '2024-12-15': ['9:00 AM', '1:00 PM', '5:00 PM'],
            '2025-01-04': ['11:00 AM', '3:00 PM'],
            '2025-01-05': ['12:00 PM', '4:00 PM', '7:00 PM']
        };
        return unavailableSlots[dateStr] || [];
    }

    function initializeModalBookingCalendar() {
        const calendarEl = document.getElementById('modal-booking-calendar');
        if (!calendarEl) return;

        const today = new Date();
        const availableDates = [];
        const bookedDates = [];
        
        // Generate dates for next 3 months
        for (let monthOffset = 0; monthOffset < 3; monthOffset++) {
            const targetDate = new Date(today.getFullYear(), today.getMonth() + monthOffset, 1);
            const year = targetDate.getFullYear();
            const month = targetDate.getMonth();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            
            for (let day = 1; day <= daysInMonth; day++) {
                const date = new Date(year, month, day);
                const dayOfWeek = date.getDay();
                const dateStr = date.toISOString().split('T')[0];
                
                if (date < today) continue;
                
                if (dayOfWeek === 0 || dayOfWeek === 6) {
                    if (day % 28 === 7 || day % 28 === 8) {
                        bookedDates.push(dateStr);
                    } else {
                        availableDates.push(dateStr);
                    }
                }
                
                if (dayOfWeek === 4 && day % 14 === 5) {
                    availableDates.push(dateStr);
                }
                
                if (dayOfWeek === 5 && month === 7) {
                    if (day === 1 || day === 8 || day === 22) {
                        availableDates.push(dateStr);
                    } else if (day === 15 || day === 29) {
                        bookedDates.push(dateStr);
                    }
                }
            }
        }

        modalBookingCalendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: 'legend'
            },
            customButtons: {
                legend: {
                    text: '',
                    click: function() {}
                }
            },
            height: 'auto',
            selectable: true,
            selectMirror: true,
            dayMaxEvents: true,
            validRange: {
                start: new Date()
            },
            datesSet: function(info) {
                setTimeout(() => {
                    applyModalDateStyles();
                    addModalLegendContent();
                }, 200);
            },
            dayCellDidMount: function(info) {
                const dateStr = info.date.toISOString().split('T')[0];
                const dayEl = info.el;
                
                if (availableDates.includes(dateStr)) {
                    dayEl.classList.add('available-date');
                    dayEl.style.backgroundColor = '#8cb43d';
                    dayEl.style.cursor = 'pointer';
                } else if (bookedDates.includes(dateStr)) {
                    dayEl.classList.add('booked-out-date');
                    dayEl.style.backgroundColor = '#9ba588';
                    dayEl.style.cursor = 'not-allowed';
                    dayEl.style.opacity = '0.8';
                }
            },
            dateClick: function(info) {
                const dateStr = info.date.toISOString().split('T')[0];
                
                if (!availableDates.includes(dateStr)) {
                    if (bookedDates.includes(dateStr)) {
                        alert('This date is fully booked. Please select another date.');
                    } else {
                        alert('This date is not available for booking. Please select a highlighted date.');
                    }
                    return;
                }
                
                modalSelectedDate = dateStr;
                modalSelectedTime = null;
                
                calendarEl.querySelectorAll('.fc-day').forEach(day => {
                    day.classList.remove('selected-date');
                });
                
                if (info.dayEl.classList.contains('available-date')) {
                    info.dayEl.classList.add('selected-date');
                }
                
                displayModalTimeSlots(dateStr);
                updateModalButtonStates();
            }
        });

        modalBookingCalendar.render();
        
        setTimeout(() => {
            applyModalDateStyles();
            addModalLegendContent();
        }, 500);
        
        function applyModalDateStyles() {
            const allDayCells = calendarEl.querySelectorAll('.fc-daygrid-day');
            
            allDayCells.forEach(dayCell => {
                const dateAttr = dayCell.getAttribute('data-date');
                if (!dateAttr) return;
                
                if (availableDates.includes(dateAttr)) {
                    dayCell.classList.add('available-date');
                    dayCell.style.backgroundColor = '#8cb43d';
                    dayCell.style.cursor = 'pointer';
                } else if (bookedDates.includes(dateAttr)) {
                    dayCell.classList.add('booked-out-date');
                    dayCell.style.backgroundColor = '#9ba588';
                    dayCell.style.cursor = 'not-allowed';
                    dayCell.style.opacity = '0.8';
                }
            });
        }
        
        function addModalLegendContent() {
            const legendButton = calendarEl.querySelector('.fc-legend-button');
            if (legendButton) {
                legendButton.innerHTML = `
                    <div style="line-height: 1.2; text-align: left;">
                        <div style="margin-bottom: 2px;">
                            <div style="width: 10px; height: 10px; background-color: #8cb43d; display: inline-block; margin-right: 5px; vertical-align: middle;"></div>
                            <small>Available</small>
                        </div>
                        <div style="margin-bottom: 2px;">
                            <div style="width: 10px; height: 10px; background-color: #9ba588; display: inline-block; margin-right: 5px; vertical-align: middle;"></div>
                            <small>Fully Booked</small>
                        </div>
                        <div>
                            <div style="width: 10px; height: 10px; background-color: #f8f9fa; border: 1px solid #dee2e6; display: inline-block; margin-right: 5px; vertical-align: middle;"></div>
                            <small>Not Available</small>
                        </div>
                    </div>
                `;
            }
        }
    }

    // Modal add-ons functionality
    function addModalAvailableAddonRow() {
        const container = document.getElementById('modal-available-addons-container');
        const newRow = document.createElement('div');
        newRow.className = 'row g-3 mb-3 available-addon-row';
        
        newRow.innerHTML = `
            <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this booking.">
                <label for="payment-status" class="form-label">Assign Available Add-ons</label>
                <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                    <option value="">None</option>
                    <option value="">Grenade + $12.00</option>
                    <option value="">Upgraded Gun package+ $100.00</option>
                    <option value="">Add-ons selected available for chosen package</option>
                </select>
            </div>
            <div class="col-md-1 d-flex align-items-end align-items-center">
                <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeModalAvailableAddonRow(this)" title="Remove this add-on"></i>
                <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addModalAvailableAddonRow()" title="Add another add-on"></i>
            </div>
        `;
        
        container.appendChild(newRow);
        
        const rows = container.querySelectorAll('.available-addon-row');
        rows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < rows.length - 1) {
                plusButton.style.display = 'none';
            }
        });
        
        const newSelect = newRow.querySelector('.available-addon-select');
        if (newSelect && typeof Choices !== 'undefined') {
            new Choices(newSelect, {
                searchEnabled: false,
                removeItemButton: true
            });
        }
    }

    function removeModalAvailableAddonRow(element) {
        const row = element.closest('.available-addon-row');
        const container = document.getElementById('modal-available-addons-container');
        
        if (container.children.length <= 1) {
            return;
        }
        
        row.remove();
        
        const remainingRows = container.querySelectorAll('.available-addon-row');
        if (remainingRows.length > 0) {
            const lastRow = remainingRows[remainingRows.length - 1];
            const plusButton = lastRow.querySelector('.bxs-plus-circle');
            if (plusButton) {
                plusButton.style.display = 'inline';
            }
            
            remainingRows.forEach((row, index) => {
                const plusButton = row.querySelector('.bxs-plus-circle');
                if (plusButton && index < remainingRows.length - 1) {
                    plusButton.style.display = 'none';
                }
            });
        }
    }

    // Initialize modal when it opens
    document.getElementById('bookingFlowModal').addEventListener('shown.bs.modal', function () {
        // Reset modal to first step
        modalCurrentStep = 1;
        modalSelectedDate = null;
        modalSelectedTime = null;
        
        // Reset form
        document.querySelector('#bookingFlowModal form').reset();
        
        // Reset wizard to first tab
        document.querySelector('#bookingFlowModal .tab-pane.active.show')?.classList.remove('active', 'show');
        document.querySelector('#bookingFlowModal .nav-link.active')?.classList.remove('active');
        
        document.getElementById('basictab1').classList.add('active', 'show');
        document.querySelector('#bookingFlowModal a[href="#basictab1"]').classList.add('active');
        
        // Hide package display
        document.getElementById('modal-package-display-section').style.display = 'none';
        document.getElementById('modal-time-slots-section').style.display = 'none';
        
        // Reset payment section
        showModalPaymentSelection();
        
        // Hide success section
        document.getElementById('modal-booking-success').style.display = 'none';
        document.querySelectorAll('#bookingFlowModal #basictab5 .row:not(#modal-booking-success)').forEach(row => {
            row.style.display = 'block';
        });
        
        // Initialize calendar
        setTimeout(() => {
            initializeModalBookingCalendar();
        }, 200);
        
        // Add form field listeners
        const allFields = document.querySelectorAll('#bookingFlowModal input, #bookingFlowModal select, #bookingFlowModal textarea');
        allFields.forEach(field => {
            field.addEventListener('input', updateModalButtonStates);
            field.addEventListener('change', updateModalButtonStates);
        });

        // Package select listener
        const packageSelect = document.getElementById('modalBookedPackage');
        if (packageSelect) {
            packageSelect.addEventListener('change', updateModalPackageDisplay);
        }

        // Navigation button listeners
        document.getElementById('modal-next-btn').addEventListener('click', function(e) {
            e.preventDefault();
            if (!this.classList.contains('disabled') && modalCurrentStep < modalTotalSteps) {
                goToModalStep(modalCurrentStep + 1);
            }
        });

        document.getElementById('modal-prev-btn').addEventListener('click', function(e) {
            e.preventDefault();
            if (!this.classList.contains('disabled') && modalCurrentStep > 1) {
                goToModalStep(modalCurrentStep - 1);
            }
        });

        document.getElementById('modal-complete-btn').addEventListener('click', function(e) {
            e.preventDefault();
            if (!this.classList.contains('disabled') && modalCurrentStep === modalTotalSteps && validateModalStep5()) {
                const successDiv = document.getElementById('modal-booking-success');
                if (successDiv) {
                    successDiv.style.display = 'block';
                    document.querySelectorAll('#bookingFlowModal #basictab5 .row:not(#modal-booking-success)').forEach(row => {
                        row.style.display = 'none';
                    });
                }
            }
        });

        // Payment method listeners
        document.getElementById('modal-credit-card-btn').addEventListener('click', function() {
            showModalPaymentMethod('credit-card');
        });

        document.getElementById('modal-paypal-btn').addEventListener('click', function() {
            showModalPaymentMethod('paypal');
        });

        document.getElementById('modal-back-to-payment-methods').addEventListener('click', function() {
            showModalPaymentSelection();
        });

        document.getElementById('modal-back-to-payment-methods-paypal').addEventListener('click', function() {
            showModalPaymentSelection();
        });

        // Tab navigation listeners
        document.querySelectorAll('#bookingFlowModal #horizontalwizard .nav-link').forEach((tab, index) => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                const targetStep = index + 1;
                
                if (canAccessModalStep(targetStep)) {
                    goToModalStep(targetStep);
                }
            });
        });

        // Discount code listener
        document.getElementById('modalApplyDiscount').addEventListener('click', function() {
            const discountCode = document.getElementById('modalDiscountCode').value;
            if (discountCode) {
                alert('Discount code "' + discountCode + '" applied! This would update pricing in a real implementation.');
            }
        });

        // Initial button state
        updateModalButtonStates();
    });

    // Make modal functions globally available
    window.selectModalTimeSlot = selectModalTimeSlot;
    window.addModalAvailableAddonRow = addModalAvailableAddonRow;
    window.removeModalAvailableAddonRow = removeModalAvailableAddonRow;
</script>

</body>
</html>