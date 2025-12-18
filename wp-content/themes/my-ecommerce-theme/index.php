<?php get_header(); ?>

<main>
<?php
if (have_posts()) :
  while (have_posts()) : the_post();
    the_title('<h2>', '</h2>');
    the_content();
  endwhile;
endif;
?>
</main>

<!-- Hero-Section -->
<div class="hero_section">
  <div class="hero_side">
    <h1>Samyang Hot Chicken Ramen</h1>
    <p>Experience the bold, spicy flavor loved by millions worldwide. Perfect for quick meals with maximum kick.</p>
    <button class="btn">
      <i class="fa-solid fa-cart-shopping"></i>
      Shop Now
    </button>
  </div>
  <div class="hero_side">
    <img src="wp-content/themes/astra/assets/image/hero image.png" alt="Hot Chicken Ramen">
  </div>
</div>


<div class="product">
  <h1>Featured Products</h1>
  <div class="product_card_section">
    <div class="product_card" style="background: linear-gradient(to bottom right, #FF7A7C, #FF2427);">
      <div class="top_section">
        <div class="top_section_head">
          <p>Best Seller</p>
          <span>$4.00</span>
        </div>
        <div class="top_section_body">
          <h3>Shin Ramyun Spicy Noodles</h3>
          <p>Hot and delicious Korean ramen</p>
        </div>
      </div>
      <div class="bottom_section">
        <div class="bottom_section_btn">
          <button><i class="fa-solid fa-basket-shopping"></i> Add to cart</button>
          <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
        </div>
        <div class="product_img">
          <img src="../wp-content/themes/astra/assets/image/product.png" alt="">
        </div>
      </div>
    </div>

    <div class="product_card" style="background: linear-gradient(to bottom right, #F4D815, #453C00);">
      <div class="top_section">
        <div class="top_section_head">
          <p>Best Seller</p>
          <span>$4.00</span>
        </div>
        <div class="top_section_body">
          <h3>Shin Ramyun Spicy Noodles</h3>
          <p>Hot and delicious Korean ramen</p>
        </div>
      </div>
      <div class="bottom_section">
        <div class="bottom_section_btn">
          <button><i class="fa-solid fa-basket-shopping"></i> Add to cart</button>
          <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
        </div>
        <div class="product_img">
          <img src="wp-content/themes/astra/assets/image/product (1).png" alt="">
        </div>
      </div>
    </div>

    <div class="product_card" style="background: linear-gradient(to bottom right, #EEECF7, #1D1612);">
      <div class="top_section">
        <div class="top_section_head">
          <p>Best Seller</p>
          <span>$4.00</span>
        </div>
        <div class="top_section_body">
          <h3>Shin Ramyun Spicy Noodles</h3>
          <p>Hot and delicious Korean ramen</p>
        </div>
      </div>
      <div class="bottom_section">
        <div class="bottom_section_btn">
          <button><i class="fa-solid fa-basket-shopping"></i> Add to cart</button>
          <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
        </div>
        <div class="product_img">
          <img src="wp-content/themes/astra/assets/image/product (2).png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>


<div class="products_categories_section">
     <div class="categories_header">
      <h1>Products Categories </h1>
      <div class="categories_icon">
        <a href=""><i class="fa-solid fa-angle-left"></i></a>
        <a href=""><i class="fa-solid fa-angle-right"></i></a>
      </div>
     </div>
  <div class="products_categories">
    <div class="products_categories_card">
      <img src="wp-content/themes/astra/assets/image/product (3).png" alt="">
      <h4>Korean Ramen</h4>
    </div>

    <div class="products_categories_card">
      <img src="wp-content/themes/astra/assets/image/product (4).png" alt="">
      <h4>Korean Noodles</h4>
    </div>

    <div class="products_categories_card">
      <img src="wp-content/themes/astra/assets/image/product (5).png" alt="">
      <h4>Ready-to-Eat Meals</h4>
    </div>
  </div>
</div>



<div class="product">
  <h1>Featured Products</h1>
  <div class="product_card_section">
    <div class="product_card">
      <div class="top_section">
        <div class="top_section_head">
          <p>Latest</p>
          <span>$3.50</span>
        </div>
        <div class="top_section_body">
          <h3>CJ Bibigo Ready-to-Eat Bibimbap Bowl</h3>
          <p>Quick and authentic Korean meal</p>
        </div>
      </div>
      <div class="bottom_section">
        <div class="bottom_section_btn">
          <button><i class="fa-solid fa-basket-shopping"></i> Add to cart</button>
          <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
        </div>
        <div class="product_img">
          <img src="wp-content/themes/astra/assets/image/38e2d82abc88168a330eb3c2f2950687 1.png" alt="">
        </div>
      </div>
    </div>

    <div class="product_card">
      <div class="top_section">
        <div class="top_section_head">
          <p>Latest</p>
          <span>$2.00</span>
        </div>
        <div class="top_section_body">
          <h3>Neoguri Seafood Ramen</h3>
          <p>Instant noodles with a mild seafood flavor</p>
        </div>
      </div>
      <div class="bottom_section">
        <div class="bottom_section_btn">
          <button><i class="fa-solid fa-basket-shopping"></i> Add to cart</button>
          <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
        </div>
        <div class="product_img">
          <img src="wp-content/themes/astra/assets/image/fc33cec66fc56d8080a17ca3347c44d3 1.png" alt="">
        </div>
      </div>
    </div>

    <div class="product_card">
      <div class="top_section">
        <div class="top_section_head">
          <p>Latest</p>
          <span>$2.50</span>
        </div>
        <div class="top_section_body">
          <h3>Ottogi 3-Minute Curry Pack</h3>
          <p>Easy ready-to-eat Korean curry</p>
        </div>
      </div>
      <div class="bottom_section">
        <div class="bottom_section_btn">
          <button><i class="fa-solid fa-basket-shopping"></i> Add to cart</button>
          <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
        </div>
        <div class="product_img">
          <img src="wp-content/themes/astra/assets/image/dfc148b53d33b44f10ee5d2bf7ede043 1.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>


<div class="product">
  <div class="product_head">
    <h1>Hot Deals This Week!</h1>
    <button class="btn">Explore More</button>
  </div>
  <div class="product_card_section">
    <div class="product_card">
      <div class="top_section">
        <div class="top_section_head discount_head">
          <p>Discount 25%</p>
          <span>$4.00 $3.00</span>
        </div>
        <div class="top_section_body">
          <h3>Shin Ramyun Spicy Noodles</h3>
          <p>Hot and delicious Korean ramen</p>
        </div>
      </div>
      <div class="bottom_section">
        <div class="bottom_section_btn discount_btn">
          <button><i class="fa-solid fa-basket-shopping"></i> Add to cart</button>
          <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
        </div>
        <div class="product_img">
          <img src="wp-content/themes/astra/assets/image/product.png" alt="">
        </div>
      </div>
    </div>

    <div class="product_card">
      <div class="top_section">
        <div class="top_section_head discount_head">
          <p>Discount 17%</p>
          <span>$1.80 $1.49</span>
        </div>
        <div class="top_section_body">
          <h3>Yopokki Tteokbokki Cup</h3>
          <p>Soft rice cakes in a sweet–spicy sauce.</p>
        </div>
      </div>
      <div class="bottom_section">
        <div class="bottom_section_btn discount_btn">
          <button><i class="fa-solid fa-basket-shopping"></i> Add to cart</button>
          <button><i class="fa-solid fa-cart-shopping"></i> Buy now</button>
        </div>
        <div class="product_img">
          <img src="wp-content/themes/astra/assets/image/product (2).png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="product">
  <div class="product_head">
    <h1>Cook Korean At Home</h1>
    <button class="btn">Explore More</button>
  </div>
  <div class="product-card-section">
    <div class="product-card">
      <div class="product-img">
        <img src="wp-content/themes/astra/assets/image/product.jpg" alt="">
      </div>
      <div class="product-text">
        <h3>Spicy Ramen Bowl</h3>
        <p>Make a rich, spicy bowl using Samyang or Shin Ramyun with egg, cheese, and veggies.</p>
        <button class="btn btn-review"><i class="fa-solid fa-cart-shopping"></i> View Recipe</button>
      </div>
    </div>
    <div class="product-card">
      <div class="product-img">
        <img src="wp-content/themes/astra/assets/image/product.jpg" alt="">
      </div>
      <div class="product-text">
        <h3>Spicy Ramen Bowl</h3>
        <p>Make a rich, spicy bowl using Samyang or Shin Ramyun with egg, cheese, and veggies.</p>
        <button class="btn btn-review"><i class="fa-solid fa-cart-shopping"></i> View Recipe</button>
      </div>
    </div>
    <div class="product-card">
      <div class="product-img">
        <img src="wp-content/themes/astra/assets/image/product.jpg" alt="">
      </div>
      <div class="product-text">
        <h3>Spicy Ramen Bowl</h3>
        <p>Make a rich, spicy bowl using Samyang or Shin Ramyun with egg, cheese, and veggies.</p>
        <button class="btn btn-review"><i class="fa-solid fa-cart-shopping"></i> View Recipe</button>
      </div>
    </div>
  </div>
</div>



   



<!-- Featured Product -->
 <div></div>
<?php get_footer(); ?>
