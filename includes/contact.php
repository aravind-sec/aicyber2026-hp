<?php
/**
 * Contact Section Component
 */
global $coordinators;
?>
<section class="section-dark" id="contact">
  <div class="wrap contact-grid">
    <div>
      <div class="eyebrow" style="margin-bottom:22px;">Contact</div>
      <h2 style="color:#201f1f;font-size:2rem;margin-bottom:28px;">Get in touch</h2>

      <div class="contact-item">
        <i class="fas fa-envelope fa-fw"></i>
        <div><h5>Email</h5><p><a href="mailto:<?php echo CONF_EMAIL; ?>" class="contact-link"><?php echo CONF_EMAIL; ?></a></p></div>
      </div>
      <div class="contact-item">
        <i class="fas fa-location-dot fa-fw"></i>
        <div><h5>Address</h5><p>S. A. Engineering College (Autonomous)<br>Poonamallee, Avadi Road, Veeraraghavapuram<br>Thiruverkadu, Tamil Nadu 600077</p></div>
      </div>
      <div class="contact-item">
        <i class="fas fa-globe fa-fw"></i>
        <div><h5>Website</h5><p><a href="<?php echo SITE_URL; ?>" target="_blank"><?php echo SITE_URL; ?></a></p></div>
      </div>
    </div>
    <div>
      <div class="eyebrow" style="margin-bottom:22px;">Coordinators</div>
      <?php foreach ($coordinators as $coord): ?>
        <div class="coord-card">
          <h5><?php echo sanitize($coord['name']); ?></h5>
          <p><?php echo sanitize($coord['title']); ?></p>
          <div class="phone"><?php echo sanitize($coord['phone']); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>