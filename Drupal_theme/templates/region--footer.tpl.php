<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>

  <footer id="footer-section">
      <div class="container">

    <h5 id="footer-endorsing-cities-title">Promoted by</h5>

    <div class="row justify-content-center">

        <div class="col-md-4 col-sm-4 col-xs-3" id="footer-element-01">

          <div class="footer-logo-01">
          	<a href="/barcelona" title="Go to Barcelona page">		
            	<img src="/img/logos/bcn-logo.svg" alt="Barcelona logo">
          	</a>
          </div>
        </div> <!-- col -->

        <div class="col-md-4 col-sm-4 col-xs-3" id="footer-element-02">
          <div class="footer-logo-02">
          	<a href="/amsterdam" title="Go to Amsterdam page">
	            <img src="/img/logos/ams-logo.svg" alt="Amsterdam city logo">
    		</a>
          </div>
        </div> <!-- col -->

        <div class="col-md-4 col-sm-4 col-xs-3" id="footer-element-03">
          <div class="footer-logo-03">
          	<a href="/new-york-city" title="Go to New York City page">
	            <img src="/img/logos/nyc-logo.svg" alt="New York City logo">
    		</a>
          </div>
        </div> <!-- col -->

      </div>

      <div class="row justify-content-center" style="margin-top:40px">

        <div class="col-md-4 col-sm-4 col-xs-3" id="footer-element-04">

          <div class="footer-logo-01">
            <a href="https://unhabitat.org/" target="_blank" rel="noreferrer" title="Visit Unhabitat.org"><img src="/img/logos/un-habitat-logo.svg" alt="UN-Habitat Logo"></a>
          </div>
        </div> <!-- col -->

        <div class="col-md-4 col-sm-4 col-xs-3" id="footer-element-05">
          <div class="footer-logo-02">
            <a href="https://www.eurocities.eu/eurocities/home" target="_blank" rel="noreferrer" title="Visit Eurocities.eu"><img src="/img/logos/eurocities-logo.png" alt="Euro Cities Logo" id="euro-cities-logo"></a>
          </div>
        </div> <!-- col -->

        <div class="col-md-4 col-sm-4 col-xs-3" id="footer-element-06">
          <div class="footer-logo-03">
            <a href="https://uclg.org" target="_blank" rel="noreferrer" title="Visit uclg.org"><img src="/img/logos/uclg-logo.svg" alt="UCGL Logo" id="uclg-logo"></a>
          </div>
        </div> <!-- col -->

      </div>



<hr id="footer-hr">

    <div class="footer-arrow-back-to-top">
      <a href="#" id="footer-go-to-top-arrow">
        <img src="/img/arrow-go-to-top.svg" alt="Go to top">
        <h6 id="footer-title-arrow">Go to top</h6>
      </a>
    </div> <!-- footer-arrow-back-to-top -->

  </div> <!-- container-logos -->

  <div class="footer-credits">
      <ul>
          <li><a href="/privacy-policy" target="_blank" rel="noreferrer" title="Read our Privacy Policy">Privacy Policy</a></li>
          <li><a href="/cookie-policy" target="_blank" rel="noreferrer" title="Read our Cookie Policy">Cookie Policy</a></li>
          <li><a href="/legal-notice" target="_blank" rel="noreferrer" title="Read our Legal Notice">Legal Notice</a></li>  
      </ul>  	
    
    <p id="design-notice">Web design, development & illustrations by <a href="https://edgaar.net/" title="Visit Edgaar.com" target="_blank" rel="noopener noreferrer">edgaar</a> + <a href="https://soko.tech/" title="Visit soko.tech" target="_blank" rel="noopener noreferrer">SokoTech</a> + <a href="https://interdigital.es" title="Visit Interdigital.es" target="_blank" rel="noopener noreferrer">Interdigital</a>. &nbsp;We are open source, find our webpage code <a href="https://github.com/CitiesCoalitionForDigitalRights/cms-cities-for-digital-rights" title="View project on GitHub" target="_blank" rel="noopener noreferrer">here.</a></p>
    <p id="cc"><img src="/img/cc-by-sa.svg" alt="Creative Commons by SA"/>All our content is licensed under a Creative Commons Attribution-ShareAlike 4.0 International License, unless it says otherwise <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noreferrer" title="Visit Creativecommons.org">creativecommons.org/licenses/by-sa/4.0</a></p>
  </div> <!-- footer-arrow-back-to-top -->

  <div id="validations">
      <img src="/img/valid-html401-blue-v.svg" alt="HTML Valid" />
      <img src="/img/valid-css-blue-v.svg" alt="CSS Valid" />
  </div>  

  </footer>
  <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



<script src='https://www.barcelona.cat/assets/core/javascripts/core.js'></script>
<!--<script src='/sites/all/themes/zen/templates/cookie.js'></script>!-->

<script>
  jQuery(document).ready(function(){
    //jQuery( "nav.header__secondary-menu").remove();
    
    //ADD CONTAINER TO FORM CONFIRMATION
    jQuery( ".webform-progressbar, .webform-confirmation, .links" ).wrapAll( "<div class='conf_cont' />");

    //SEARCH FORM TRIGGER
    jQuery('a.search_trigger').click(function(){
    	jQuery('#block-custom-search-blocks-1').toggleClass('show');
    });

    jQuery('a.search_trigger').on('focusout', function () {
	   jQuery('#block-custom-search-blocks-1').removeClass('show');
  	});


  });
</script>
