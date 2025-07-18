<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WKND - Dine-In Order</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom Style -->
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light text-dark">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    <a class="navbar-brand fw-bold text-white" href="#">WKND</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
        <li class="nav-item"><a class="btn btn-outline-light ms-2" href="order.html">Order</a></li>
      </ul>
    </div>
  </nav>

  <!-- Order Form Section -->
<div class="container my-5">
  <div class="card shadow-sm p-4 bg-white border-0 rounded">
    <h2 class="mb-4 text-center text-uppercase">Dine-In Order Form</h2>
    <form onsubmit="submitOrder(event)">
      <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="mb-3">
        <label for="coffee" class="form-label">Select Your Drink</label>
        <select class="form-select" id="coffee" name="coffee" required>
          <option value="">-- Select --</option>
          <option value="Pumpkin Spice Latte">Pumpkin Spice Latte</option>
          <option value="Cookie Monster">Cookie Monster</option>
          <option value="Spanish Latte">Spanish Latte</option>
          <option value="Cold Brew Latte">Cold Brew Latte</option>
          <option value="Christmas Treat">Christmas Treat</option>
          <option value="Purple Yam">Purple Yam</option>
          <option value="Signature Chocolate">Signature Chocolate</option>
          <option value="Iced Latte">Iced Latte</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" required>
      </div>

      <div class="mb-3">
        <label for="notes" class="form-label">Notes (Optional)</label>
        <textarea class="form-control" id="notes" name="notes" rows="4"></textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-dark px-4">Submit Order</button>
      </div>
    </form>
  </div>
</div>


<!-- Bootstrap JS (Required) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript Form & Toast Logic -->
<script>
  function submitOrder(event) {
    event.preventDefault();

    const name = document.getElementById("name").value.trim();
    const coffee = document.getElementById("coffee").value;
    const quantity = document.getElementById("quantity").value;
    const notes = document.getElementById("notes").value.trim();

    if (!name || !coffee || quantity <= 0) {
      alert("Please fill all fields with valid information.");
      return false;
    }

    // Pass data to confirmation.html via URL
    const query = `confirmation.html?name=${encodeURIComponent(name)}&coffee=${encodeURIComponent(coffee)}&quantity=${encodeURIComponent(quantity)}&notes=${encodeURIComponent(notes)}`;
    window.location.href = query;

    return false;
  }

  // Auto-collapse mobile nav
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