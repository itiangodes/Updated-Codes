<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WKND Coffee</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Navbar -->
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

  <!-- Hero Section -->
  <div class="text-center text-white hero-section d-flex align-items-center justify-content-center">
    <div>
      <h1 class="display-4">WKND Coffee</h1>
      <p class="lead">Dine-In Only | Handcrafted Coffee | Local Comfort</p>
      <a href="order.html" class="btn btn-dark mt-3">Order Now</a>
    </div>
  </div>

  <!-- Menu Section -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Our Menu</h2>
    <div class="row g-4">
      <div class="col-md-3">
          <div class="card">
            <img src="kape1.jpg" class="card-img-top" alt="Cappuccino">
              <div class="card-body text-center">
              <h5 class="card-title">Cappuccino</h5>
            <p class="card-text">Rich and creamy favorite.</p>
          <button class="btn btn-dark" onclick="addToCart('Cappuccino')">Add to Cart</button>
        </div>
      </div>
  </div>
      <div class="col-md-3">
        <div class="card">
          <img src="kape2.jpg" class="card-img-top" alt="Pumpkin Spice Latte">
          <div class="card-body text-center">
            <h5 class="card-title">Purple Yam</h5>
            <p class="card-text">Purple yam Godness in a Cup.</p>
          <button class="btn btn-dark" onclick="addToCart('Cappuccino')">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="kape3.jpg" class="card-img-top" alt="Pumpkin Spice Latte">
          <div class="card-body text-center">
            <h5 class="card-title">Signature Chocolate</h5>
            <p class="card-text">Creamy and Chocolate Taste in Every Sip</p>
            <button class="btn btn-dark" onclick="addToCart('Cappuccino')">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="kape8.jpg" class="card-img-top" alt="Pumpkin Spice Latte">
          <div class="card-body text-center">
            <h5 class="card-title">Iced Latte</h5>
            <p class="card-text">Creamy and bold.</p>
            <button class="btn btn-dark" onclick="addToCart('Cappuccino')">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="kape4.jpg.jpg" class="card-img-top" alt="Pumpkin Spice Latte">
          <div class="card-body text-center">
            <h5 class="card-title">Pumpkin Spice Latte</h5>
            <p class="card-text">Creamy and bold with a Pumpkin Spice finish.</p>
            <button class="btn btn-dark" onclick="addToCart('Cappuccino')">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="kape5.jpg.jpg" class="card-img-top" alt="Cookie Monster">
          <div class="card-body text-center">
            <h5 class="card-title">Cookie Monster</h5>
            <p class="card-text">Smooth milk over Cookies.</p>
            <button class="btn btn-dark" onclick="addToCart('Cappuccino')">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="kape6.jpg.jpg" class="card-img-top" alt="Spanish Latte">
          <div class="card-body text-center">
            <h5 class="card-title">Spanish Latte</h5>
            <p class="card-text">Sweetness and bold in a tiny cup.</p>
            <button class="btn btn-dark" onclick="addToCart('Cappuccino')">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="kape7.jpg.jpg" class="card-img-top" alt="Cold Brew Latte">
          <div class="card-body text-center">
            <h5 class="card-title">Cold Brew Latte</h5>
            <p class="card-text">Cold and energizing with a hint of sweet.</p>
            <button class="btn btn-dark" onclick="addToCart('Cappuccino')">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container my-5">
<h3 class="text-center mb-4">🛒 Your Cart</h3>
<ul class="list-group mb-3" id="cart-list"></ul>

  <div class="text-center">
    <button class="btn btn-success" onclick="submitOrder()">Submit Order</button>
    <button class="btn btn-outline-danger" onclick="clearCart()">Clear Cart</button>
  </div>
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

