<div class="bottom-bar">
  <a href="/product-slider">
      <ion-icon name="fast-food-outline" class="{{ Request::is('product-slider') ? 'icons actives' : 'icons' }}" onclick="change(this)"></ion-icon>
  </a>
  <a href="/store">
      <ion-icon name="storefront-outline" class="{{ Request::is('store') ? 'icons actives' : 'icons' }}" onclick="change(this)"></ion-icon>
  </a>
  <a href="/home">
      <ion-icon name="home-outline" class="{{ Request::is('home') ? 'icons actives' : 'icons' }}" onclick="change(this)"></ion-icon>
  </a>
  <a href="/categories">
      <ion-icon name="restaurant-outline" class="{{ Request::is('categories') ? 'icons actives' : 'icons' }}" onclick="change(this)"></ion-icon>
  </a>
  <a href="/image-gallery">
      <ion-icon name="image-outline" class="{{ Request::is('image-gallery') ? 'icons actives' : 'icons' }}" onclick="change(this)"></ion-icon>
  </a>
</div>
