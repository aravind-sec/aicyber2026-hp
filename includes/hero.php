<?php
/**
 * Hero Section Component
 */
global $sponsors;
$countdown = getCountdownData();
?>
<section class="hero" id="home">
  <div class="wrap hero-inner">
    <div class="eyebrow">International Conference · IEEE Technically Co‑Sponsored</div>
    <h1><?php echo SITE_NAME; ?><br><em>AI‑Driven Cybersecurity</em></h1>
    <p class="sub">Two days of research, workshops, and cross-industry dialogue on where artificial intelligence and cyber defense meet — hosted by the Department of CSE (Cyber Security), S. A. Engineering College.</p>

    <div class="hero-meta">
      <span><i class="far fa-calendar"></i> 28–29 December 2026</span>
      <span><i class="fas fa-location-dot"></i> <?php echo CONF_LOCATION; ?></span>
    </div>

    <div class="hero-ctas">
      <a href="<?php echo PAPER_SUBMISSION_URL; ?>" target="_blank" rel="noopener" class="btn-primary"><i class="fas fa-paper-plane"></i> Submit Paper</a>
      <a href="#registration" class="btn-outline">View Registration</a>
    </div>

    <div class="countdown" id="countdown">
      <?php if ($countdown['isLive']): ?>
        <div class="cd-item"><div class="n" style="font-size:1.1rem;">Conference is Live</div></div>
      <?php else: ?>
        <div class="cd-item"><div class="n" id="cd-days"><?php echo formatCountdown($countdown['days'], 3); ?></div><div class="l">Days</div></div>
        <div class="cd-item"><div class="n" id="cd-hours"><?php echo formatCountdown($countdown['hours']); ?></div><div class="l">Hours</div></div>
        <div class="cd-item"><div class="n" id="cd-mins"><?php echo formatCountdown($countdown['minutes']); ?></div><div class="l">Minutes</div></div>
        <div class="cd-item"><div class="n" id="cd-secs"><?php echo formatCountdown($countdown['seconds']); ?></div><div class="l">Seconds</div></div>
      <?php endif; ?>
    </div>

    <div class="cosponsor-strip">
      <div class="label">Technically Co‑Sponsored By</div>
      <div class="logo-row">
        <?php foreach ($sponsors as $sponsor): ?>
          <a href="<?php echo sanitize($sponsor['url']); ?>" target="_blank" rel="noopener" class="logo-slot" aria-label="<?php echo sanitize($sponsor['name']); ?>">
            <img src="<?php echo sanitize($sponsor['image']); ?>" alt="<?php echo sanitize($sponsor['name']); ?>" class="fallback-img" data-fallback="<?php echo sanitize($sponsor['name']); ?>">
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>