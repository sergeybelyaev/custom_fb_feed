<?php

/**
 * @file
 * This template handles the layout of Custom Facebook Feed block.
 *
 * Variables available:
 * - $facebook: An array of the Facebook feeds.
 */
?>
<?php if ($facebook): ?>
  <ul>
    <?php foreach ($facebook as $facebook_feed): ?>
    <li>
      <?php //dpm($facebook_feed); // Enable Devel and uncomment this line to explore feed data or use print_r(). ?>
      <?php if (isset($facebook_feed['message'])): ?>
        <p><?php print $facebook_feed['message']; ?></p>
      <?php endif; ?>
      <?php if (isset($facebook_feed['story'])): ?>
        <p><?php print $facebook_feed['story']; ?></p>
      <?php endif; ?>
      <?php if (isset($facebook_feed['link'])): ?>
        <p><?php print l(t('Read more'), $facebook_feed['link'], array('external' => true, 'attributes' => array('target' => '_blank'))); ?></p>
      <?php endif; ?>
    </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
