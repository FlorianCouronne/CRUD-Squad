<?php
$pageTitle = 'Gallery'; $active = 'gallery.php';
include 'includes/header.php';

// Add your photos to /images and list the file names here.
// Until a file exists, the tile shows a green placeholder with its caption.
$photos = [
    ['file' => 'ceramic-coating.jpg',  'caption' => 'Ceramic coating on a black SUV'],
    ['file' => 'paint-correction.jpg', 'caption' => 'Paint correction, before and after'],
    ['file' => 'deep-clean.jpg',       'caption' => 'Interior deep clean'],
    ['file' => 'basic-wash.jpg',       'caption' => 'Basic wash finish'],
    ['file' => 'wheels.jpg',           'caption' => 'Wheel and tyre detail'],
    ['file' => 'sedan.jpg',            'caption' => 'Sedan after full detail'],
];
?>
<main class="cl-section">
  <div class="container">
    <h2>The CarLux Standard</h2>
    <p class="cl-muted mb-4">A glimpse of the results we deliver. Every service is completed with precision and attention to detail.</p>
    <div class="row g-3">
      <?php foreach ($photos as $p): ?>
        <div class="col-6 col-lg-4">
          <figure class="cl-tile m-0">
            <?php if (file_exists(__DIR__ . '/images/' . $p['file'])): ?>
              <img src="images/<?= htmlspecialchars($p['file']) ?>" alt="<?= htmlspecialchars($p['caption']) ?>" loading="lazy">
            <?php endif; ?>
            <span><?= htmlspecialchars($p['caption']) ?></span>
          </figure>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php include 'includes/footer.php'; ?>
