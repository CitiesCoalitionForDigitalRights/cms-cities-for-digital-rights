
<?php

/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>
<html <?php print $html_attributes . $rdf_namespaces; ?>>
<head><?php print $head; ?><title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width">
  <?php endif; ?>
<meta name="twitter:image" content="https://citiesfordigitalrights.org/sites/default/files/field/image/visual_per_twitter_01_small.png"/>
<meta property="og:image" content="https://citiesfordigitalrights.org/sites/default/files/field/image/visual_per_twitter_01_small.png" />
<meta property="og:image:type" content="image/png" />
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php if ($add_html5_shim): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5shiv.min.js"></script>
    <![endif]-->
  <?php endif; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

  <meta name="description" content="Cities Coalition for Digital Rights aims to protect and uphold human rights on the internet at the local and global level." />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <?php /* $baseurl = "https://citiesfordigitalrights.org/sites/all/themes/zen" */?>
  <?php $baseurl = "https:///citiesfordigitalrights.org/sites/all/themes/zen" ?>
    <!-- MAIN CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl ?>/zen-internals/css/main.css" media="screen" />

    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://use.fontawesome.com/5c37fc08fc.js"></script>

<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#2ea0ff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
<link href="https://www.barcelona.cat/assets/core/stylesheets/core.css" rel="stylesheet">

<script src='/sites/all/themes/zen/templates/matomo.js'></script>


</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div class="main-nav">

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" aria-labelledby="button-toggle-id">
    
    <a id="button-toggle-id" class="navbar-brand" href="/"><strong>Cities for Digital Rights</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
      <span class="navbar-toggler-icon" id="toggle" style="text-indent:-999px"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav text-right justify-content-end">
        <li class="nav-item nav-item-01">
          <a class="nav-link" href="/cities">Cities</a>
        </li>

       <li class="nav-item nav-item-02">
          <a class="nav-link" href="/blog" title="Read the Blog">Blog</a>
        </li> 

      <!--<li class="nav-item nav-item-02">
          <a class="nav-link" href="assets/NYC-AMS-BCN-LaunchGlobalCoalitionToProtectDigitalRights.pdf" target="_blank" rel="noopener noreferrer">Press</a>
        </li>!-->



        <li class="nav-item-declaration-icon">
          <a class="nav-link" href="assets/Declaration_Cities_for_Digital_Rights.pdf" target="_blank" rel="noopener noreferrer" aria-label="Download the Declaration" title="Download the Declaration">
            <img class="declaration-download-icon" src="<?php echo $baseurl ?>/zen-internals/img/download-icon-white.svg" alt="Download Declaration">
            <span>Download the declaration</span>
          </a>
        </li>
        <li>
          <a href="#1" class="search_trigger" id="desk"><i class="fas fa-search"></i></a>  
        </li>
      </ul>

    </div>
  </nav>

</div>
<a href="#1" class="search_trigger" id="movil"><i class="fas fa-search"></i></a>
  <?php if ($skip_link_text && $skip_link_anchor): ?>
    
  <?php endif; ?>
  <?php print $page_top; ?>


  


  <?php print $page; ?>

  

  <?php print $page_bottom; ?>
  
</body>
</html>
