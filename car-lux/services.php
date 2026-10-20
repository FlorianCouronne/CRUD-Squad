<?php
$pageTitle = 'Services'; $active = 'services.php';
require 'includes/services_data.php';
include 'includes/header.php';
?>
<main class="cl-section">
  <div class="container">
    <h2>Services and prices</h2>
    <div class="table-responsive">
      <table class="table cl-table align-middle mb-0">
        <thead><tr><th>Package</th><th>What's included</th><th class="text-end">Price</th></tr></thead>
        <tbody>
          <?php foreach ($services as $s): ?>
            <tr>
              <td class="fw-semibold"><?= htmlspecialchars($s['name']) ?></td>
              <td><?= htmlspecialchars($s['desc']) ?></td>
              <td class="text-end cl-price">Rs <?= number_format($s['price']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <a href="booking.php" class="btn btn-brass mt-4">Book a package</a>
  </div>
</main>
<?php include 'includes/footer.php'; ?>
