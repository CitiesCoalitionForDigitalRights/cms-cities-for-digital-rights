<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="<?php print $classes; ?> clearfix node-<?php print $node->nid; ?>"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || $preview || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="watermark"><?php print t('Unpublished'); ?></mark>
      <?php elseif ($preview): ?>
        <mark class="watermark"><?php print t('Preview'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>

<div class="endorse-section" id="endorse">
            <h3 class="endorse-my-city justify-center" id="social-share-endorse-title">Endorse my city</h3>
            <p class="endorse-your-city-button-text"><i>"I request my city council to join the cities coalition for digital rights and protect and uphold our human rights in my city. The same human rights that people have offline must also be protected online."</i></p>
            <p class="endorse-your-city-button-text"><em>Cities who would like to sign and learn more about the coalition, please review the <a href="/checklist" target="_blank" title="Read the checklist">checklist</a> of digital rights actions and fill out <a href="/endorse-your-city" title="Endorse your city">this form</a> to formally indicate your interest in joining. For more information, contact us at: <a href="mailto:endorse@citiesfordigitalrights.org" target="_blank">endorse@citiesfordigitalrights.org</a></em></p>
          </div>  
         <!-- CITY ENDS !-->
            <div  class="social-share">
            <div class="container">
              <h3 id="social-share-title">Share the declaration</h3>
                <div class="row justify-center">
                  <div class="col-6" id="social-share-col6">
                    <div class="social">
                      <ul>
                          <li><a target="_blank" rel="noopener noreferrer"  href="https://www.facebook.com/sharer/sharer.php?u=http://www.citiesfordigitalrights.org"><i class="fa fa-lg fa-facebook"></i></a></li>

                          <li><a target="_blank" rel="noopener noreferrer" href="https:////twitter.com/intent/tweet/?text=The same human rights that people have offline must also be protected online. I ask my city council to join the coalition for digital rights and protect my rights.&amp;url=YOUR_URL&amp;hashtags=Cities,DigitalRights https://citiesfordigitalrights.org/ &amp;via=NYC_CTO @NYCMayor @AmsterdamNL @barcelona_cat"><i class="fa fa-lg fa-twitter"></i></a></li>

                          <li><a target="_blank" rel="noopener noreferrer" href="whatsapp://send?text=Want to know more about The Cities Coalition for Digital Rights, which aims to protect and uphold human rights on the internet at the local and global level? Get involved! https://www.citiesfordigitalrights.org/"><i class="fa fa-lg fa-whatsapp"></i></a></li>

                          <li><a target="_blank" rel="noopener noreferrer" href="mailto:?subject=I%20support%20the%20global%20Cities%20Coalition%20for%20Digital%20Rights"><i class="fa fa-lg fa-envelope-o"></i></a></li>

                      </ul><!-- ul -->
                    </div><!-- social -->
                  </div><!-- col-6 -->
              </div><!-- row justify-center -->
            </div><!-- container -->
        </div><!-- social-share -->

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
