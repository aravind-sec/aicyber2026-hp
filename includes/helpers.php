<?php
/**
 * Helper Functions
 */

/**
 * Get countdown data (days, hours, minutes, seconds)
 */
function getCountdownData() {
    $target = strtotime(CONF_DATE_TIMESTAMP);
    $now = time();
    $diff = $target - $now;

    if ($diff <= 0) {
        return array(
            'days' => 0,
            'hours' => 0,
            'minutes' => 0,
            'seconds' => 0,
            'isLive' => true
        );
    }

    return array(
        'days' => floor($diff / (1000 * 60 * 60 * 24)),
        'hours' => floor(($diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
        'minutes' => floor(($diff % (1000 * 60 * 60)) / (1000 * 60)),
        'seconds' => floor(($diff % (1000 * 60)) / 1000),
        'isLive' => false
    );
}

/**
 * Format countdown values with padding
 */
function formatCountdown($value, $length = 2) {
    return str_pad($value, $length, '0', STR_PAD_LEFT);
}

/**
 * Generate track card HTML
 */
function renderTrackCard($track) {
    $html = '<div class="track-card">';
    $html .= '<div class="tnum">TRACK ' . $track['number'] . '</div>';
    $html .= '<h3>' . htmlspecialchars($track['title']) . '</h3>';
    $html .= '<ul>';
    foreach ($track['topics'] as $topic) {
        $html .= '<li>' . htmlspecialchars($topic) . '</li>';
    }
    $html .= '</ul></div>';
    return $html;
}

/**
 * Sanitize output to prevent XSS
 */
function sanitize($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * Get active section (for potential navigation highlighting)
 */
function isActiveSection($section) {
    $current = isset($_GET['section']) ? $_GET['section'] : 'home';
    return $current === $section ? 'active' : '';
}

/**
 * Get image path with fallback
 */
function getImagePath($filename) {
    $path = 'images/' . $filename;
    return $path;
}

/**
 * Format date for display
 */
function formatDate($date) {
    return date('l, F j, Y', strtotime($date));
}

/**
 * Generate badge HTML
 */
function renderBadge($icon, $text) {
    return '<span class="badge"><i class="fas fa-' . sanitize($icon) . '"></i> ' . sanitize($text) . '</span>';
}

?>