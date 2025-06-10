<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About - WKND</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand fw-bold text-white" href="#">WKND</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
        <li class="nav-item"><a class="btn btn-outline-light ms-2" href="order.html" title="_blank">Order</a></li>
      </ul>
    </div>
  </nav>

  <div class="container my-5">
    <h2 class="text-center mb-4">About WKND</h2>
    <p class="lead text-center">WKND is your cozy corner coffee shop focused on quality, community, and calm. We're a <strong>dine-in only</strong> space where friends meet, students focus, and conversations brew as smoothly as our coffee.
        WKND Cupfe finally serves you the weekend vibes as you sip our great-tasting coffee along with our luscious pastries.</p>
  </div>

<!-- Bootstrap JS (Required) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript Mobile Enhancements -->
<script>
  // Auto-collapse navbar on mobile after clicking a link
  document.querySelectorAll('.navbar-nav a').forEach(link => {
    link.addEventListener('click', function () {
      const navbar = document.querySelector('.navbar-collapse');
      if (navbar.classList.contains('show')) {
        new bootstrap.Collapse(navbar).toggle();
      }
    });
  });
</script>
</body>
</html>