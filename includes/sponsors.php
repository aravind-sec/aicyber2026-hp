<?php
/**
 * Sponsors Section Component
 */
global $sponsors;
?>
<section id="sponsors" class="section-alt">
  <div class="wrap">
    <div class="section-head center">
      <div class="eyebrow dark" style="justify-content:center;">Partners</div>
      <h2>Powered by industry leaders</h2>
      <p>AICYBER 2026 is technically co-sponsored by leading IEEE societies and the Department of CSE (Cyber Security) at S. A. Engineering College.</p>
    </div>
    <div class="sponsor-grid">
      <?php foreach ($sponsors as $sponsor): ?>
        <a href="<?php echo sanitize($sponsor['url']); ?>" target="_blank" rel="noopener" class="sponsor-cell">
          <img src="<?php echo sanitize($sponsor['image']); ?>" alt="<?php echo sanitize($sponsor['name']); ?>" class="remove-on-error">
          <span class="sponsor-name"><?php echo sanitize($sponsor['name']); ?></span>
          <span class="sponsor-cta">Visit site →</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>