<?php
/**
 * About Section Component
 */
global $highlights;
?>
<section id="about">
  <div class="wrap about-grid">
    <div>
      <div class="eyebrow dark">About the Conference</div>
      <h2 style="margin-top:14px;font-size:2rem;">Where AI meets cyber defense</h2>
      <p><?php echo SITE_NAME; ?> brings together researchers, practitioners, and students to examine artificial intelligence as the central force shaping the future of cybersecurity — from intrusion detection to adversarial ML and digital forensics.</p>
      <p>Hosted by S. A. Engineering College (Autonomous), Chennai — AICTE-approved, NAAC & NBA 'A'-grade accredited, autonomous since 2019 — the conference provides a platform to publish original research and connect with the wider IEEE Madras community.</p>
      <div class="badge-row">
        <?php 
          echo renderBadge('book', 'IEEE Xplore submission track');
          echo renderBadge('award', 'Best Paper & Young Researcher Awards');
          echo renderBadge('venus', 'Women in Cybersecurity Recognition');
        ?>
      </div>
    </div>
    <ul class="highlight-list">
      <?php 
        $num = 1;
        foreach ($highlights as $highlight):
      ?>
        <li><span class="hnum"><?php echo str_pad($num, 2, '0', STR_PAD_LEFT); ?></span><span class="htext"><?php echo sanitize($highlight); ?></span></li>
      <?php 
          $num++;
        endforeach;
      ?>
    </ul>
  </div>
</section>