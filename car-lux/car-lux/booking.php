<?php
session_start();
// Placeholder for Member 6 (Anti-CSRF). Replace with the team's final token code.
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$pageTitle = 'Book Online'; $active = 'booking.php';
require 'includes/services_data.php';
include 'includes/header.php';
?>
<main class="cl-section">
  <div class="container" style="max-width: 640px;">
    <h2>Book online</h2>
    <div class="cl-card">
      <!-- POST keeps booking data out of the URL (SR-3). Member 5 handles book_service.php. -->
      <form action="book_service.php" method="POST" class="needs-validation" novalidate>
        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['token']) ?>">

        <div class="mb-3">
          <label for="service" class="form-label">Service package</label>
          <select id="service" name="service_id" class="form-select" required>
            <option value="">Choose a package</option>
            <?php foreach ($services as $s): ?>
              <option value="<?= (int)$s['id'] ?>"><?= htmlspecialchars($s['name']) ?> (Rs <?= number_format($s['price']) ?>)</option>
            <?php endforeach; ?>
          </select>
          <div class="invalid-feedback">Choose a package to continue.</div>
        </div>

        <div class="row g-3 mb-3">
          <div class="col-sm-6">
            <label for="date" class="form-label">Date</label>
            <input type="date" id="date" name="booking_date" class="form-control" required>
            <div class="invalid-feedback">Pick a date.</div>
          </div>
          <div class="col-sm-6">
            <label for="time" class="form-label">Time slot</label>
            <select id="time" name="time_slot" class="form-select" required>
              <option value="">Select a slot</option>
              <?php foreach (['08:00-10:00','10:00-12:00','12:00-14:00','14:00-16:00','16:00-18:00'] as $slot): ?>
                <option value="<?= $slot ?>"><?= $slot ?></option>
              <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">Choose a time slot.</div>
          </div>
        </div>

        <div class="row g-3 mb-4">
          <div class="col-sm-6">
            <label for="vehicle" class="form-label">Vehicle type</label>
            <select id="vehicle" name="vehicle_type" class="form-select" required>
              <option value="">Select type</option>
              <?php foreach (['Sedan','SUV','Hatchback','Pickup'] as $v): ?><option><?= $v ?></option><?php endforeach; ?>
            </select>
            <div class="invalid-feedback">Choose a vehicle type.</div>
          </div>
          <div class="col-sm-6">
            <label for="plate" class="form-label">License plate number</label>
            <input type="text" id="plate" name="plate" class="form-control" maxlength="12" pattern="[A-Za-z0-9 \-]{2,12}" required>
            <div class="invalid-feedback">Enter a valid plate (letters, digits, spaces or hyphens).</div>
          </div>
        </div>

        <button type="submit" class="btn btn-cyan w-100">Confirm booking</button>
      <p class="cl-muted small mt-3 mb-0">You must be logged in to book. <a href="register.php">Create an account</a> or <a href="login.php">sign in</a>.</p>
      </form>
    </div>
  </div>
</main>
<script>
// Client-side validation (SR-4). The server must validate again in book_service.php.
document.querySelector('.needs-validation').addEventListener('submit', function (e) {
  if (!this.checkValidity()) { e.preventDefault(); e.stopPropagation(); }
  this.classList.add('was-validated');
});
document.getElementById('date').min = new Date().toISOString().split('T')[0];
</script>
<?php include 'includes/footer.php'; ?>
