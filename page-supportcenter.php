<?php 
/* 
  Template Name: SupportCenter Page
*/
?>
<?php get_header(); ?>
    <section class="row banner">
      <div class="text-container">
        <h1><?php the_title(); ?></h1>
        <p>Browse the latest for <?php the_title(); ?></p>
      </div>
    </section>
    <section class="two-column row no-max pad content-pad clear">
      <div class="container clear">
        <div class="secondary small-2 columns clear">
          <!-- page submenu -->
          <?php include 'submenu.php';?>
        </div>
        <div class="primary small-9 columns clear">

          <!-- shopify for supportcenter -->
          <div data-accent_color="555459" data-background_color="ffffff" data-button_background_color="2ab27b" data-button_text_color="ffffff" data-cart_button_text="Cart" data-cart_title="Your cart" data-cart_total_text="Total" data-checkout_button_text="Checkout" data-discount_notice_text="Shipping and discount codes are added at checkout." data-embed_type="cart" data-empty_cart_text="Your cart is empty." data-shop="mep1.myshopify.com" data-sticky="true" data-text_color="333333"></div>
<div data-background_color="ffffff" data-button_background_color="2ab27b" data-button_text_color="ffffff" data-buy_button_out_of_stock_text="Out of Stock" data-buy_button_product_unavailable_text="Unavailable" data-buy_button_text="Buy now" data-collection_handle="mep-for-supportcenter-plus" data-display_size="compact" data-embed_type="collection" data-has_image="true" data-next_page_button_text="Next page" data-product_handle="" data-product_modal="true" data-product_name="" data-product_title_color="000000" data-redirect_to="modal" data-shop="mep1.myshopify.com"></div>
<script type="text/javascript">document.getElementById('ShopifyEmbedScript') || document.write('<script type="text/javascript" src="https://widgets.shopifyapps.com/assets/widgets/embed/client.js" id="ShopifyEmbedScript"><\/script>');</script>

        </div>
      </div>
    </section>
<?php get_footer(); ?>