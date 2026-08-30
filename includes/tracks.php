<?php
/**
 * Tracks Section Component
 */
global $tracks;
?>
<section id="tracks" class="section-alt">
  <div class="wrap">
    <div class="section-head center">
      <div class="eyebrow dark" style="justify-content:center;">Call for Papers</div>
      <h2>Six tracks, one mission</h2>
      <p>Original, unpublished research is invited across the following areas — full papers up to 8 pages, IEEE double-column format, submitted via Microsoft CMT.</p>
    </div>
    <div class="track-grid">
      <?php 
        foreach ($tracks as $track):
          echo renderTrackCard($track);
        endforeach;
      ?>
    </div>
  </div>
</section>