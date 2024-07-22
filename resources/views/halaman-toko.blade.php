{{-- <!DOCTYPE html>
<html>
<head>
  <title>Reyoreo Shop</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }

    header {
      background-color: #fff;
      padding: 20px;
      text-align: center;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

    .product {
      width: 250px;
      margin: 10px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .product img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .product .info {
      padding: 15px;
    }

    .product h3 {
      margin-top: 0;
    }

    .product .price {
      font-size: 1.2em;
      font-weight: bold;
    }

    .product .sold {
      color: #777;
      font-size: 0.8em;
    }

    .transaction-info {
      display: flex;
      justify-content: space-between;
      padding: 20px;
      background-color: #fff;
      margin-bottom: 20px;
    }

    .transaction-info .icon {
      display: flex;
      align-items: center;
    }

    .transaction-info .icon svg {
      margin-right: 10px;
    }

    .transaction-info .info {
      font-size: 0.9em;
      color: #777;
    }

    .rating {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .rating .stars {
      display: flex;
      align-items: center;
    }

    .rating .stars svg {
      margin-right: 5px;
    }

    .rating .star-count {
      font-size: 0.9em;
      color: #777;
    }

    .review-list {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .review-list h4 {
      margin-top: 0;
    }

    .review-list .review {
      border-bottom: 1px solid #ddd;
      padding: 10px 0;
    }

    .review-list .review:last-child {
      border-bottom: none;
    }

    .review-list .review-content {
      margin-left: 40px;
    }

    .review-list .review-user {
      font-weight: bold;
    }

    .review-list .review-date {
      color: #777;
      font-size: 0.8em;
    }

    .review-list .review-stars {
      display: flex;
      align-items: center;
      margin-bottom: 5px;
    }

    .review-list .review-stars svg {
      margin-right: 5px;
    }

    .button {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <header>
    <h1>Reyoreo</h1>
    <p>Toko Dibuka Sejak 4 Juni 2024</p>
  </header>

  <section class="transaction-info">
    <div class="icon">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
      <div class="info">Pembeli</div>
    </div>
    <div class="info">32 Orang (2 Minggu Terakhir)</div>
  </section>

  <section class="transaction-info">
    <div class="icon">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
      <div class="info">Terjual</div>
    </div>
    <div class="info">100% (98/98)</div>
  </section>

  <section class="transaction-info">
    <div class="icon">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
      <div class="info">Rata-rata Pengiriman</div>
    </div>
    <div class="info">55 menit</div>
  </section>

  <section class="rating">
    <div class="stars">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
    </div>
    <div class="star-count">5/5.0</div>
  </section>

  <section class="review-list">
    <h4>Ulasan Terakhir</h4>
    <div class="review">
      <div class="review-user">John Doe</div>
      <div class="review-date">2023-12-12</div>
      <div class="review-stars">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
      </div>
      <div class="review-content">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.
      </div>
    </div>
  </section>

  <section class="container">
    <div class="product">
      <img src="https://images.unsplash.com/photo-1552053814-d864d3043302?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Product Image">
      <div class="info">
        <h3>Poison Aura - Death Ball</h3>
        <p>Death Ball Roblox</p>
        <div class="price">Rp500</div>
        <div class="sold">5 terjual</div>
      </div>
    </div>

    <div class="product">
      <img src="https://images.unsplash.com/photo-1552053814-d864d3043302?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Product Image">
      <div class="info">
        <h3>Inferno Aura - Death Ball</h3>
        <p>Death Ball Roblox</p>
        <div class="price">Rp500</div>
        <div class="sold">7 terjual</div>
      </div>
    </div>

    <div class="product">
      <img src="https://images.unsplash.com/photo-1552053814-d864d3043302?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Product Image">
      <div class="info">
        <h3>Blood Aura - Death Ball</h3>
        <p>Death Ball Roblox</p>
        <div class="price">Rp500</div>
        <div class="sold">18 terjual</div>
      </div>
    </div>

    <div class="product">
      <img src="https://images.unsplash.com/photo-1552053814-d864d3043302?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Product Image">
      <div class="info">
        <h3>Electrical Aura - Death Ball</h3>
        <p>Death Ball Roblox</p>
        <div class="price">Rp500</div>
        <div class="sold">11 terjual</div>
      </div>
    </div>

    <div class="product">
      <img src="https://images.unsplash.com/photo-1552053814-d864d3043302?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Product Image">
      <div class="info">
        <h3>Rose Aura Death Ball Roblox</h3>
        <p>Death Ball Roblox</p>
        <div class="price">Rp600</div>
        <div class="sold">5 terjual</div>
      </div>
    </div>
  </section>

  <button class="button">Lihat Semua Produk</button>

</body>
</html> --}}
