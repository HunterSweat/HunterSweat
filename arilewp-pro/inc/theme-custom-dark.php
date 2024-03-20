<?php function arilewp_theme_custom_dark_css() { 

$theme_skin_color = get_theme_mod('arilewp_theme_color_skin', 'theme-light');
if( $theme_skin_color == 'theme-dark') :
?>
<style type="text/css">
/*--------------------------------------------------
=>> Common - Begining Css
--------------------------------------------------*/

body {
	color: #ddd;
}
body,
#wrapper {
	background-color: #18191b;
}

h1, .h1, h2, .h2, .h3, h3, h4, .h4, h5, .h5, .h6, h6 {
    color: #fff;
}

/*--------------------------------------------------
=>> Anchor Links Colors
--------------------------------------------------*/

a { color: #fff; }
a:hover, a:active { color: #fff; }

/*--------------------------------------------------
=>> Theme Core Buttons
--------------------------------------------------*/

.btn-default:hover, .btn-default:focus,
.btn-default-dark:hover, .btn-default-dark:focus {
    background: #fff;
    color: #000 !important;
}

/*--------------------------------------------------
=>>	OWL SLIDER - DOTS/PAGINATION
--------------------------------------------------*/

.owl-theme .owl-dots .owl-dot span {
    border: 2px solid #ddd;
}

/*--------------------------------------------------
=>> Theme Section Title & Subtitle
--------------------------------------------------*/

.theme-section-module .theme-section-subtitle {
	color: #ddd;
}

/*--------------------------------------------------
=>> Site Header Contact Info
--------------------------------------------------*/

.site-header {
    background: #202020;
}

/*--------------------------------------------------
=>>  Navar
--------------------------------------------------*/

.navbar {
    background-color: #18191b;
}
.navbar.navbar-header-wrap {
    background-color: rgba(0, 0, 0, .05);
}
.navbar.navbar-header-wrap.header-fixed-top {
    background-color: #18191b;
}
.navbar.navbar-header-wrap.header-fixed-top .site-branding-text .site-title a {
	color: #fff;
}
.navbar.navbar-header-wrap.header-fixed-top .site-branding-text .site-description {
	color: #ddd;
}
.navbar.navbar-header-wrap.header-fixed-top .nav .btn-border {
    color: #ddd;
}
.navbar .nav .menu-item .nav-link {
    color: #ddd;
}
.dropdown-menu {
    color: #ddd;
    background-color: transparent;
}
.dropdown-item {
    color: #ddd;
}
.navbar.navbar-header-wrap.header-fixed-top .nav .menu-item .nav-link,
.navbar.navbar-header-wrap.header-fixed-top .nav a.cart-icon,
.navbar.navbar-header-wrap.header-fixed-top .nav .theme-search-block a {
    color: #ddd;
}
.navbar-light .navbar-toggler,
.navbar.navbar-header-wrap.header-fixed-top .navbar-toggler {
    color: rgba(255, 255, 255, 0.5);
    border-color: rgba(255, 255, 255, 1);
}
.navbar .navbar-toggler-icon,
.navbar.navbar-header-wrap.header-fixed-top .navbar-toggler-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
.navbar.navbar-header-center {
    border-top: 2px solid #333;
}
.navbar .nav .menu-item .nav-link.add-menu {
    background-color: transparent;
}
.navbar .nav .dropdown-menu > .menu-item > ul.dropdown-menu > .menu-item > .dropdown-item {
    background-color: transparent;
    color: #ddd;
}

@media (min-width: 992px){
	.navbar .nav .dropdown-menu {
		background-color: #18191b;
	}
	.navbar .nav .dropdown-item {
		color: #ddd;
	}
}
@media (max-width: 991px){
	.navbar .nav .menu-item .nav-link {
		border-bottom: 1px solid #626364;
	}
	.navbar.navbar-header-wrap.header-fixed-top .nav .dropdown-item {
		color: #ddd;
	}
	.navbar.navbar-header-wrap.header-fixed-top .nav .woo-cart-block {
		border-left: none;
	}
	.navbar.navbar-header-wrap.classic-header.header-fixed-top .nav .dropdown-menu > .menu-item > ul.dropdown-menu > .menu-item > .dropdown-item {
		background-color: transparent;
		color: #ddd;
	}
}
.theme-search-block a,
.woo-cart-block > a.cart-icon {
    color: #ddd;
}
.btn-border {
    background: #18191b;
    color: #ddd;
}
.woo-cart-block {
    border-left: 1px solid #626364;
}


/*--------------------------------------------------
=>> Theme Info Area
--------------------------------------------------*/

.theme-info-area i.icon {
	background: #fff;
	color: #18191b;
}
.theme-info-area {
	background-color: #202020;
	border: 1px solid #333;
}

/*--------------------------------------------------
=>> Theme Service Area
--------------------------------------------------*/

.theme-services {
    background-color: #18191b;
}
.theme-services .service-content {
    background-color: #202020;
	border: 1px solid #333;
}
.theme-services .service-content-thumbnail i.fa {
	color: #fff;
}
.theme-services .service-content:hover .service-content-thumbnail i.fa {
	color: #fff;
	border: 5px solid #202020;
}
.theme-services .service-title a {
	color: #fff;
}
.service-links a {
	background: #ffffff;
    color: #01012f;
}
.theme-services .service-content:hover .service-links a,
.theme-services .service-content:focus .service-links a {
    color: #fff;
}
.service-links-two, .service-links-two a {
    color: #ddd;
}

/*--------------------------------------------------
=>> Theme Project Area
--------------------------------------------------*/

.theme-block.theme-project {
	background-color: #202020 !important;
}
.theme-project .theme-project-content {
	background-color: #18191b;
	border: 1px solid #333 !important;
}
.theme-project .theme-project-content .content-area:before {
    border-color: transparent transparent #18191b transparent;
}
.theme-project .theme-project-content .theme-project-title,
.theme-project .theme-project-content .theme-project-title a {
	color: #fff;
}
.theme-project .theme-project-content:hover .theme-project-title,
.theme-project .theme-project-content:hover .theme-project-title a,
.theme-project .theme-project-content:focus .theme-project-title a,
.theme-project .theme-project-content:hover p {
	color: #fff;
}

/*--------------------------------------------------
=>> Theme Funfact Area
--------------------------------------------------*/

.theme-funfact.vrsn-two {
    background-color: #18191b;
}
.theme-funfact.vrsn-two .theme-funfact-title {
    color: #fff;
}
.theme-funfact.vrsn-two .col-sm-12 .theme-funfact-inner::before {
	display: none;
}
.theme-funfact.vrsn-two.bg-theme-grey {
    background-color: #202020 !important;
}

/*--------------------------------------------------
=>> Theme Testimonial Area
--------------------------------------------------*/

.theme-testimonial {
	background-image: url('<?php echo get_template_directory_uri();?>/assets/img/testimonial/theme-testi-bg-dark.png');
}
.theme-testimonial-block {
	background-color: rgba(0,0,0,0.6);
    border: 1px solid #333;
}
.theme-testimonial-block .name {
    color: #ffffff;
}
.theme-testimonial-block .position {
    color: #ddd;
}
.testimonial-content.vrsn-two {
	background-color: #18191b;
}

/*--------------------------------------------------
=>> Theme CTA
--------------------------------------------------*/

.theme-cta {
	background-image: url('<?php echo get_template_directory_uri();?>/assets/img/cta/theme-cta-bg-dark.png');
	background-color: #222;
	background-position: bottom;
	background-repeat: no-repeat;
	background-size: contain;
	position: relative;
	width: 100%;
	height: 100%;
}

/*--------------------------------------------------
=>> Theme Team Area
--------------------------------------------------*/

.team-mambers {
	background-color: #18191b;
}
.page-template-about-one .theme-block.team-mambers.theme-bg-grey {
	background-color: #202020 !important;
}

/*--------------------------------------------------
=>> About Page Area
--------------------------------------------------*/

.theme-about .theme-info-area {
    background-color: transparent;
    border: none;
}

/*--------------------------------------------------
=>> Contact Page Area and CF7
--------------------------------------------------*/

.page-template-contact-one .theme-block.theme-bg-grey,
.page-template-contact-two .theme-block.theme-bg-grey {
	background-color: #18191b !important;
}
.page-template-contact-one .theme-contact,
.page-template-contact-two .theme-contact {
	background-color: #202020;
}
.theme-contact-form-info .title h4 {
    border-bottom: 1px solid #333;
}
.theme-contact-widget {
    background-color: #202020;
    border: 1px solid #333;
}
.wpcf7-form input[type="text"],
.wpcf7-form input[type="email"],
.wpcf7-form input[type="url"],
.wpcf7-form input[type="password"],
.wpcf7-form input[type="search"],
.wpcf7-form input[type="number"],
.wpcf7-form input[type="tel"],
.wpcf7-form input[type="range"],
.wpcf7-form input[type="date"],
.wpcf7-form input[type="month"],
.wpcf7-form input[type="week"],
.wpcf7-form input[type="time"],
.wpcf7-form input[type="datetime"],
.wpcf7-form input[type="datetime-local"],
.wpcf7-form input[type="color"],
.wpcf7-form textarea {
	background-color: rgba(0,0,0,.2) !important;
    border: 1px solid #333;
	color: #ddd;
}
label {
    color: #ddd;
}
.wpcf7-form input[type="submit"]:hover,
.wpcf7-form input[type="submit"]:focus {
    background: #fff;
	color: #000;
}

/*--------------------------------------------------
=>> Theme Blog Area - Homepage One News
--------------------------------------------------*/

.theme-block.theme-blog.theme-bg-grey {
	background-color: #202020 !important;
}
.theme-blog .post {
    background-color: #18191b;
	border: 1px solid #333;
}
.theme-blog .post .entry-header::before {
    background-color: #626364;
}
.entry-meta .author a {
	color: #ddd;
}
.more-link {
    background: transparent;
    color: #ddd !important;
}
blockquote {
    background-color: #202020;
    color: #ddd;
}
blockquote cite,
blockquote cite a,
.entry-content blockquote cite a {
    color: #ddd;
}
th {
    background: #202020;
	color: #fff;
}
table, th, td {
    border: 1px solid #333;
}
thead th {
    border-bottom: 2px solid #333;
}
.entry-content a:hover, .entry-content a:focus,
.logged-in-as a:hover, .logged-in-as a:focus {
    color: #ddd;
}
.theme-related-posts {
    background-color: #18191b;
    border: 1px solid #333;
}
.theme-comment-title h4 {
    border-bottom: 1px solid #333;
}
.theme-comment-form {
	background-color: #18191b;
	border: 1px solid #333;
}
.entry-content .wp-block-latest-comments__comment-meta a {
    color: #ddd;
}
.wp-block-latest-comments__comment-date {
    color: #bbb;
}
.wp-block-latest-posts__post-date {
    color: #ddd;
}
.form-control,
input[type="text"],
input[type="email"],
input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], textarea, select {
    background-color: rgba(0,0,0,.2) !important;
    border: 1px solid #333 !important;
	color: #ddd !important;
}
button:hover, button:focus,
input[type="button"]:hover,
input[type="button"]:focus,
input[type="submit"]:hover,
input[type="submit"]:focus,
select option {
    background: #fff;
	color: #000;
}
.sidebar .widget {
    border: 1px solid #333;
    background-color: #18191b;
	color: #ddd;
}
.sidebar .widget .widget-title {
    background-color: #202020;
}
.widget_archive li, .widget_categories li, .widget_links li, .widget_meta li,
.widget_nav_menu li, .widget_pages li, .widget_recent_comments li, .widget_recent_entries li {
    border-bottom: 1px solid #333;
}
.widget td a:hover,
.widget td a:focus,
td a:hover, td a:focus {
    color: #ddd;
}
.widget .tagcloud a {
    background-color: #18191b;
    border: 1px solid #333;
    color: #ddd !important;
}
::-webkit-input-placeholder { color: #ddd !important; }
:-moz-placeholder { color: #ddd !important; }
::-moz-placeholder { color: #ddd !important; }
:-ms-input-placeholder { color: #ddd !important; }
.widget button[type="submit"]:hover,
.widget button[type="submit"]:focus,
.btn-success:hover,
.btn-success:focus {
    color: #000 !important;
    background-color: #fff !important;
    border-color: #fff !important;
}
.calendar_wrap caption {
    background-color: #202020;
    color: #ffffff;
}
.calendar_wrap table#wp-calendar thead th {
    border-bottom: 2px solid #333;
}
.widget_rss ul li {
    border-bottom: 1px solid #333;
}
blockquote:before {
    color: rgba(255, 255, 255, 0.08);
}
.wp-block-table.is-style-stripes tbody tr:nth-child(odd) {
    background-color: #202020;
}
.wp-block-table.is-style-stripes {
    border-bottom: 1px solid #333;
}



/*--------------------------------------------------
=>> Theme Sponsors Area
--------------------------------------------------*/

.theme-sponsors {
	background-color: #18191b;
}
.clients-scroll {
    border: 1px solid #333;
    background-color: #202020;
}
@media (min-width: 992px){
	.custom-bordered .grid-element:nth-child(2), .custom-bordered .grid-element:nth-child(3), .custom-bordered .grid-element:nth-child(4), .custom-bordered .grid-element:nth-child(6), .custom-bordered .grid-element:nth-child(7), .custom-bordered .grid-element:nth-child(8), .custom-bordered .grid-element:nth-child(10), .custom-bordered .grid-element:nth-child(11), .custom-bordered .grid-element:nth-child(12), .custom-bordered .grid-element:nth-child(14), .custom-bordered .grid-element:nth-child(15), .custom-bordered .grid-element:nth-child(16) {
		border-left: 1px solid #333;
	}
}
.custom-bordered .grid-element:after {
    border-top: 1px solid #333;
}
.theme-sponsors .owl-carousel .owl-prev,
.theme-sponsors .owl-carousel .owl-next {
    background-color: #fff;
    color: #01012f;
}

/*--------------------------------------------------
=>> Site Footer Area
--------------------------------------------------*/

.site-footer {
	background-color: #111;
}

/*--------------------------------------------------
=>> Theme Site Info Area
--------------------------------------------------*/

.site-info {
	background-color: #0b0b0b;
}
.site-info,
.site-info a {
	color: #ddd;
}

/*--------------------------------------------------
=>> Shop Products
--------------------------------------------------*/

.woocommerce ul.products li.product .price,
.theme-block.shop .product .price,
.woocommerce div.product p.price ins,
.woocommerce div.product span.price ins,
.woocommerce div.product .woocommerce-tabs ul.tabs li a {
	color: #ddd;
}
.theme-block.shop .product .price ins,
.woocommerce ul.products li.product .price ins,
.woocommerce div.product p.price,
.woocommerce div.product span.price,
.product_meta .sku_wrapper .sku,
.product_meta .posted_in a,
.product_meta .tagged_as a {
	color: #bbbbbb;
}
.woocommerce ul.products li.product .button.add_to_cart_button, .woocommerce ul.products li.product .button.product_type_grouped, .woocommerce ul.products li.product .button.product_type_simple, .woocommerce ul.products li.product .button.product_type_external, .woocommerce ul.products li.product .button.product_type_variable, .theme-block.shop .product .button.add_to_cart_button, .theme-block.shop .product .button.product_type_grouped, .theme-block.shop .product .button.product_type_simple, .theme-block.shop .product .button.product_type_external, .theme-block.shop .product .button.product_type_variable {
    color: #ddd;
	border-bottom: 2px solid #ddd;
}
.woocommerce div.product form.cart .button {
    background: #fff;
	color: #000;
}
.woocommerce div.product form.cart .button:hover,
.woocommerce div.product form.cart .button:focus {
	color: #fff;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
    color: #fff;
}
.woocommerce div.product .woocommerce-tabs ul.tabs::before {
    border-bottom: 1px solid #333;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li a:after {
    background: #333;
}
.woocommerce table.shop_attributes td {
    padding: 8px;
}
.woocommerce-error, .woocommerce-info, .woocommerce-message {
    border-top-color: #bbb;
    background-color: #202020;
    color: #ddd;
}
.woocommerce-error::before, .woocommerce-info::before, .woocommerce-message::before {
    color: #ddd;
}
.woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover, .woocommerce-page .woocommerce-error .button:hover, .woocommerce-page .woocommerce-info .button:hover, .woocommerce-page .woocommerce-message .button:hover {
    background-color: #fff;
	color: #000;
}
.woocommerce table.shop_table {
    border: 1px solid #333;
}
.woocommerce table.shop_table .cart_item:hover {
    background: #202020;
}
.woocommerce table.shop_table th {
    color: #fff;
}
.woocommerce table.shop_table th, .woocommerce table.shop_table td {
    border-right: 1px solid #333;
}
.woocommerce-cart table.cart td.actions .coupon button.button {
    background: #fff;
    color: #000;
}
.woocommerce-cart table.cart td.actions button.button:hover {
    background: #fff;
    color: #000;
}
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover {
    background-color: #fff;
    color: #000;
}

#add_payment_method .cart-collaterals .cart_totals tr td, #add_payment_method .cart-collaterals .cart_totals tr th, .woocommerce-cart .cart-collaterals .cart_totals tr td, .woocommerce-cart .cart-collaterals .cart_totals tr th, .woocommerce-checkout .cart-collaterals .cart_totals tr td, .woocommerce-checkout .cart-collaterals .cart_totals tr th {
    border-top: 1px solid #333;
}
.woocommerce form .form-row span.select2-selection.select2-selection--single {
    border: 1px solid #333 !important;
}
.select2-container--default .select2-selection--single {
    background-color: rgba(0,0,0,.2) !important;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #ddd;
}
.select2-results__option[aria-selected], .select2-results__option[data-selected] {
    color: #000;
}
.woocommerce .woocommerce-billing-fields h3, .woocommerce-checkout .checkout .col-2 h3#ship-to-different-address, .woocommerce-checkout .checkout .col-2 h3#ship-to-different-address label, #order_review_heading {
    color: #ddd;
}
#add_payment_method #payment, .woocommerce-cart #payment, .woocommerce-checkout #payment {
    background: #18191b;
    border: 1px solid #333;
}
#add_payment_method #payment ul.payment_methods, .woocommerce-cart #payment ul.payment_methods,
.woocommerce-checkout #payment ul.payment_methods {
    border-bottom: 1px solid #333;
}
.woocommerce #payment #place_order:hover,
.woocommerce-page #payment #place_order:hover {
    background-color: #fff;
    color: #000;
}
#add_payment_method #payment div.payment_box,
.woocommerce-cart #payment div.payment_box,
.woocommerce-checkout #payment div.payment_box {
    background-color: #202020;
    color: #ddd;
}
#add_payment_method #payment div.payment_box::before,
.woocommerce-cart #payment div.payment_box::before,
.woocommerce-checkout #payment div.payment_box::before {
    border: 1em solid #202020;
}
.woocommerce ul.order_details li strong {
    padding-top: 0.625rem;
}
.woocommerce ul.order_details li {
    font-size: .815em;
}
.woocommerce .woocommerce-customer-details address {
    border: 1px solid #333;
}
.woocommerce .widget_price_filter .ui-slider .ui-slider-range {
    background-color: #333232;
}
.woocommerce.widget_product_categories ul li,
.woocommerce.widget_product_categories ol li {
    border-bottom: 1px solid #333;
}
.woocommerce.widget_products ul.product_list_widget ins, .woocommerce.widget_top_rated_products ul.product_list_widget ins, .woocommerce.widget_recent_reviews ul.product_list_widget .reviewer, .woocommerce.widget_recently_viewed_products ul.product_list_widget ins {
	color: #ddd;
}
.woocommerce .comment_container {
    border-bottom: 2px dotted #333;
}
.woocommerce #review_form #respond .form-submit input {
    background: #fff;
    color: #000;
}
#add_payment_method .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce .woocommerce-form-login .woocommerce-form-login__submit:hover, .woocommerce button.button.woocommerce-Button:hover {
    background-color: #fff;
    color: #000;
}
.checkout_coupon.woocommerce-form-coupon .form-row button.button {
	background-color: #fff;
    color: #000;
}
.woocommerce.widget_products ul.cart_list li, 
.woocommerce.widget_products ul.product_list_widget li, 
.woocommerce.widget_top_rated_products ul.cart_list li, 
.woocommerce.widget_top_rated_products ul.product_list_widget li, 
.woocommerce.widget_recent_reviews ul.cart_list li, 
.woocommerce.widget_recent_reviews ul.product_list_widget li, 
.woocommerce.widget_recently_viewed_products ul.cart_list li, 
.woocommerce.widget_recently_viewed_products ul.product_list_widget li, 
.woocommerce.woocommerce-widget-layered-nav ul.woocommerce-widget-layered-nav-list li, 
.woocommerce.widget_rating_filter ul li {
    border-bottom: 1px solid #333;
}

</style>
<?php endif; }
add_action('wp_footer','arilewp_theme_custom_dark_css');
 ?>