<?php 
function arilewp_custom_color_css() {
	
	$arilewp_theme_custom_color = get_theme_mod('arilewp_theme_custom_color');
	list($r, $g, $b) = sscanf($arilewp_theme_custom_color, "#%02x%02x%02x");
	$r = $r - 50;
	$g = $g - 25;
	$b = $b - 40;
	
	if ( $arilewp_theme_custom_color != '#ff0000' ) :
	?>
<style type="text/css">

/*--------------------------------------------------
=>> Common - Begining Css
--------------------------------------------------*/


blockquote {
	border-left: 3px solid <?php echo $arilewp_theme_custom_color; ?>;
}
td a {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}
button,
input[type="button"],
input[type="submit"] {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
}
.btn-default,
.btn-default-dark,
.btn-light:hover,
.btn-light:focus {
	background: <?php echo $arilewp_theme_custom_color; ?>;
}
.btn-light {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}
.btn-border,
.btn-border:hover,
.btn-border:focus {
	border: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.btn-border:hover,
.btn-border:focus {
    background: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Navbar
--------------------------------------------------*/

.navbar.navbar-header-wrap.header-fixed-top .nav .btn-border {
    border: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.navbar.navbar-header-wrap .nav .btn-border:hover,
.navbar.navbar-header-wrap .nav .btn-border:focus,
.navbar.navbar-header-wrap.header-fixed-top .nav .btn-border:hover,
.navbar.navbar-header-wrap.header-fixed-top .nav .btn-border:focus {
    background: <?php echo $arilewp_theme_custom_color; ?>;
	color: #ffffff;
	border: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.navbar .nav .menu-item:hover .nav-link,
.navbar .nav .menu-item.active .nav-link,
.navbar.navbar-header-wrap .nav .menu-item:hover .nav-link,
.navbar.navbar-header-wrap .nav .menu-item:focus .nav-link,
.navbar.navbar-header-wrap .nav .menu-item.active .nav-link,
.navbar.navbar-header-wrap.header-fixed-top .nav .menu-item:hover .nav-link,
.navbar.navbar-header-wrap.header-fixed-top .nav .menu-item:focus .nav-link,
.navbar.navbar-header-wrap.header-fixed-top .nav .menu-item.active .nav-link {
    color: <?php echo $arilewp_theme_custom_color; ?>;
}
.navbar .nav .dropdown-item:focus,
.navbar .nav .dropdown-item:hover,
.navbar.navbar-header-wrap .nav .dropdown-item:focus,
.navbar.navbar-header-wrap .nav .dropdown-item:hover,
.navbar.navbar-header-wrap.header-fixed-top .nav .dropdown-item:focus,
.navbar.navbar-header-wrap.header-fixed-top .nav .dropdown-item:hover {
    color: <?php echo $arilewp_theme_custom_color; ?>;
}

.navbar .nav .dropdown-menu .menu-item.active .dropdown-item {
    color: <?php echo $arilewp_theme_custom_color; ?>;
}
.navbar .nav .dropdown-menu > .menu-item > ul.dropdown-menu .menu-item.active .dropdown-item,
.navbar .nav .dropdown-menu > .menu-item > ul.dropdown-menu > .menu-item > .dropdown-item:hover,
.navbar.navbar-header-wrap.classic-header .nav .dropdown-menu > .menu-item > ul.dropdown-menu > .menu-item.active > .dropdown-item,
.navbar.navbar-header-wrap.classic-header .nav .dropdown-menu > .menu-item > ul.dropdown-menu > .menu-item > .dropdown-item:hover,
.navbar.navbar-header-wrap.classic-header.header-fixed-top .nav .dropdown-menu > .menu-item > ul.dropdown-menu > .menu-item > .dropdown-item:hover {
    color: <?php echo $arilewp_theme_custom_color; ?>;
}

@media (min-width: 992px) {
	.navbar .nav .dropdown-menu {
		border-bottom: 3px solid <?php echo $arilewp_theme_custom_color; ?> !important;
	}
	/*Navbar Classic Header*/
	.navbar.navbar-header-wrap.classic-header .nav .menu-item.active .nav-link{
		background-color: <?php echo $arilewp_theme_custom_color; ?>;
	}
	.navbar.navbar-header-wrap.classic-header .nav .menu-item .nav-link:before {
		background: <?php echo $arilewp_theme_custom_color; ?>;
	}
}
@media (max-width: 992px) {
	.navbar.navbar-header-wrap.classic-header .nav .menu-item .nav-link:hover,
	.navbar.navbar-header-wrap.classic-header.header-fixed-top .nav .menu-item .nav-link:hover {
		color: <?php echo $arilewp_theme_custom_color; ?> !important;
	}
}
@media (max-width: 500px) {
	.navbar.navbar-header-wrap.classic-header .nav .menu-item .nav-link:hover,
	.navbar.navbar-header-wrap.classic-header.header-fixed-top .nav .menu-item .nav-link:hover {
		color: <?php echo $arilewp_theme_custom_color; ?>;
	}
}

/*Add Menu*/
.navbar .nav .menu-item .nav-link.add-menu {
    border: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.navbar .nav .menu-item .nav-link.add-menu:hover,
.navbar .nav .menu-item .nav-link.add-menu:focus {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
}
.navbar.navbar-header-wrap .nav .menu-item .nav-link.add-menu {
	background: transparent;
	border: 2px solid #fff;
}
.navbar.navbar-header-wrap.header-fixed-top .nav .menu-item .nav-link.add-menu {
	border: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.navbar.navbar-header-wrap .nav .menu-item .nav-link.add-menu:hover,
.navbar.navbar-header-wrap .nav .menu-item .nav-link.add-menu:focus,
.navbar.navbar-header-wrap.header-fixed-top .nav .menu-item .nav-link.add-menu:hover,
.navbar.navbar-header-wrap.header-fixed-top .nav .menu-item .nav-link.add-menu:focus {
    background: <?php echo $arilewp_theme_custom_color; ?>;
	color: #ffffff;
	border: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Header Center Logo with Navbar
--------------------------------------------------*/

.navbar.navbar-header-center {
	border-bottom: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Search Popup Box For Header
--------------------------------------------------*/

#search-popup .btn {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
	border-color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Site Header Contact Info
--------------------------------------------------*/

.theme-contact-block i { color: <?php echo $arilewp_theme_custom_color; ?>; }
.custom-social-icons li a.social-hover:hover,
.custom-social-icons li a.social-hover:focus {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Combined Classes
--------------------------------------------------*/

.theme-bg-default { background-color: <?php echo $arilewp_theme_custom_color; ?> !important; }
.text-default { color: <?php echo $arilewp_theme_custom_color; ?> !important; }

.entry-header .entry-title a:hover,
.entry-header .entry-title a:focus {
	color: <?php echo $arilewp_theme_custom_color; ?> !important;
}

/*--------------------------------------------------
=>> WooCommerce Menubar Cart Info
--------------------------------------------------*/

.woo-cart-block > a .cart-total {
	background: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Main Slider
--------------------------------------------------*/

.divider-sm-center, .divider-sm-left, .divider-sm-right {
	border-top: 6px solid <?php echo $arilewp_theme_custom_color; ?>;
	border-top: 6px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.theme-caption-bg {
	border-left: 3px solid <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Slider Next/Prev Button Styles
--------------------------------------------------*/

.owl-carousel .owl-prev:hover,
.owl-carousel .owl-prev:focus,
.owl-carousel .owl-next:hover,
.owl-carousel .owl-next:focus,
.theme-sponsors .owl-carousel .owl-prev:hover,
.theme-sponsors .owl-carousel .owl-next:hover {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
}
.owl-theme .owl-dots .owl-dot.active span {
	border: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.testimonial.bg-default .owl-theme .owl-dots .owl-dot.active span {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Page Header Area
--------------------------------------------------*/

.theme-page-header-area .overlay {
    background-color: rgba(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>, 1);
}

/*--------------------------------------------------
=>> Theme Section Title & Subtitle
--------------------------------------------------*/

.theme-separator-line-horrizontal-full {
	background-color: <?php echo $arilewp_theme_custom_color; ?>!important;
}

/*--------------------------------------------------
=>> Theme Info Area
--------------------------------------------------*/

.theme-info-area .media:hover i.icon,
.theme-info-area .media i.icon.active {
	background: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Info Area Two
--------------------------------------------------*/

.container.vrsn-two#theme-info-area {
    background-color: <?php echo $arilewp_theme_custom_color; ?>;
}
.container.vrsn-two#theme-info-area .theme-info-area i.icon {
    color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Service Area
--------------------------------------------------*/

.theme-services .service-content-thumbnail a { color: <?php echo $arilewp_theme_custom_color; ?>; }
.theme-services .service-content-thumbnail i.fa {
	background: <?php echo $arilewp_theme_custom_color; ?>;
}
.theme-services .service-content:hover .service-content-thumbnail i.fa {
	background: <?php echo $arilewp_theme_custom_color; ?>;
    box-shadow: 0px 0px 0px 1px <?php echo $arilewp_theme_custom_color; ?>;
}
.theme-services .service-title a:hover,
.theme-services .service-title a:focus {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}
.service-links a {
    border: 1px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.theme-services .service-content:hover .service-links a,
.theme-services .service-content:focus .service-links a {
	background: <?php echo $arilewp_theme_custom_color; ?>;
    border: 1px solid <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Service Area Two
--------------------------------------------------*/

.theme-services .service-content-thumbnail-two,
.theme-services .service-content-thumbnail-two a {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}
.service-links-two a {
	border-bottom: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.service-links-two a:hover,
.service-links-two a:focus {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Project Filter
--------------------------------------------------*/

.filter-tabs .nav-item.show .nav-link,
.filter-tabs .nav-link.active,
.filter-tabs .nav-link:hover {
    color: <?php echo $arilewp_theme_custom_color; ?>;
}

.filter-tabs .nav-item .nav-link::after {
    background: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Project Area
--------------------------------------------------*/

.theme-project .theme-project-content:hover {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
}
.theme-project .theme-project-content:hover .content-area:before {
    border-color: transparent transparent <?php echo $arilewp_theme_custom_color; ?> transparent;
}
.theme-project .theme-project-content .click-view a:hover,
.theme-project .theme-project-content .click-view a:hover {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Funfact Area
--------------------------------------------------*/
.theme-funfact-overlay {
    background-color: rgba(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>, 0.95);
}
.theme-funfact.vrsn-two .theme-funfact-icon {
    color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Testimonial Area
--------------------------------------------------*/

.theme-testimonial-block,
.theme-testimonial-block:hover {
	border-top: 3px solid <?php echo $arilewp_theme_custom_color; ?> !important;
}
.theme-testimonial-block::after,
.testimonial-content.vrsn-two::before {
    color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme CTA
--------------------------------------------------*/

.youtube-click i.fa {
    color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Team Area
--------------------------------------------------*/

.team-block .team-content {
	background: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Contact Page Area
--------------------------------------------------*/

.theme-contact-widget i.fa {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> 404 Error Page Area
--------------------------------------------------*/

.theme-error-page .error-title b,
.theme-error-page .error-title i {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Blog Sidebar
--------------------------------------------------*/

.entry-content a {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Blog Meta Info
--------------------------------------------------*/

.entry-meta a:hover,
.entry-meta a:focus {
	color: <?php echo $arilewp_theme_custom_color; ?> !important;
}
.entry-meta .cat-links a {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}
.entry-meta .tag-links a:hover,
.entry-meta .tag-links a:focus {
    background-color: <?php echo $arilewp_theme_custom_color; ?>;
    border: 1px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.more-link {
	border: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.more-link:hover, .more-link:focus {
	border: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
    background: <?php echo $arilewp_theme_custom_color; ?>;
	color: #fff !important;
}
.pagination a:hover,
.pagination a.active,
.page-links a:hover,
.post-nav-links a:hover,
.post-nav-links .post-page-numbers.current {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
	border: 1px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.pagination .nav-links .page-numbers.current {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
	border: 1px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.comment-date a:hover { color: <?php echo $arilewp_theme_custom_color; ?>; }
.pull-left-comment img {
	border: 3px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.reply a {
    border: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.reply a:hover, .reply a:focus {
	border: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
}
.logged-in-as a {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Widgets Area
--------------------------------------------------*/

.widget a:hover,
.widget a:focus {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}
.sidebar .widget .widget-title {
    border-top: 3px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.widget button[type="submit"],
.btn-success {
    background-color: <?php echo $arilewp_theme_custom_color; ?>;
	border-color: <?php echo $arilewp_theme_custom_color; ?>;
}
.widget .tagcloud a:hover,
.widget .tagcloud a:focus {
    background-color: <?php echo $arilewp_theme_custom_color; ?>;
    border: 1px solid <?php echo $arilewp_theme_custom_color; ?>;
}
address i {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}
.widget_recent_comments .recentcomments a {
	color: <?php echo $arilewp_theme_custom_color; ?> !important;
}

/*--------------------------------------------------------------
## Captions
--------------------------------------------------------------*/
.wp-caption-text a { color: <?php echo $arilewp_theme_custom_color; ?>; }


/*--------------------------------------------------
=>> Site Footer Area
--------------------------------------------------*/

.site-footer {
	border-top: 3px solid <?php echo $arilewp_theme_custom_color; ?>;
	border-bottom: 3px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.footer-sidebar .widget a:hover,
.footer-sidebar .widget a:focus {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Theme Site Info Area
--------------------------------------------------*/

.site-info a:hover, .site-info a:focus { color: <?php echo $arilewp_theme_custom_color; ?>; }

/*--------------------------------------------------
=>> Page Scroll Up/Down Area
--------------------------------------------------*/

.page-scroll-up a,
.page-scroll-up a:hover,
.page-scroll-up a:active {
	background: <?php echo $arilewp_theme_custom_color; ?>;
}

/*--------------------------------------------------
=>> Shop Products
--------------------------------------------------*/

/*Product Buttons*/
.woocommerce ul.products li.product .button.add_to_cart_button:hover,
.woocommerce ul.products li.product .button.product_type_grouped:hover,
.woocommerce ul.products li.product .button.product_type_simple:hover,
.woocommerce ul.products li.product .button.product_type_external:hover,
.woocommerce ul.products li.product .button.product_type_variable:hover,
.theme-block.shop .product .button.add_to_cart_button:hover,
.theme-block.shop .product .button.product_type_grouped:hover,
.theme-block.shop .product .button.product_type_simple:hover,
.theme-block.shop .product .button.product_type_external:hover,
.theme-block.shop .product .button.product_type_variable:hover {
	color: <?php echo $arilewp_theme_custom_color; ?>;
	border-bottom: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.woocommerce ul.products li.product a.added_to_cart,
.theme-block.shop .product a.added_to_cart {
	color: <?php echo $arilewp_theme_custom_color; ?>;
	border-bottom: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}
.woocommerce ul.products li.product a.added_to_cart:hover,
.theme-block.shop .product a.added_to_cart:hover {
	color: <?php echo $arilewp_theme_custom_color; ?>;
	border-bottom: 2px solid <?php echo $arilewp_theme_custom_color; ?>;
}

/*Product Single View*/

.woocommerce div.product form.cart .button:hover,
.woocommerce div.product form.cart .button:hover {
	background: <?php echo $arilewp_theme_custom_color; ?>;
}
.woocommerce table.shop_table td.product-name,
.woocommerce table.shop_table td.product-name a {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}
.product_meta .posted_in a:hover,
.product_meta .tagged_as a:hover {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}
.woocommerce #review_form #respond .form-submit input:hover {
    background: <?php echo $arilewp_theme_custom_color; ?>;
}

/*Product Cart View*/
.woocommerce .woocommerce-error .button,
.woocommerce .woocommerce-info .button,
.woocommerce .woocommerce-message .button,
.woocommerce-page .woocommerce-error .button,
.woocommerce-page .woocommerce-info .button,
.woocommerce-page .woocommerce-message .button {
    background-color: <?php echo $arilewp_theme_custom_color; ?>;
}
/*Product Cart Table*/
.woocommerce table.shop_table td.product-name a:hover,
.woocommerce table.shop_table td.product-subtotal .woocommerce-Price-amount {
	color: <?php echo $arilewp_theme_custom_color; ?>;
}
.woocommerce-cart table.cart td.actions .coupon button.button:hover {
	background: <?php echo $arilewp_theme_custom_color; ?>;
    color: #fff;
}
.woocommerce-cart table.cart td.actions button.button {
	background: <?php echo $arilewp_theme_custom_color; ?>;
    color: #fff;
}
#add_payment_method .wc-proceed-to-checkout a.checkout-button,
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
.woocommerce .woocommerce-form-login .woocommerce-form-login__submit,
.woocommerce button.button.woocommerce-Button {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
}
.checkout_coupon.woocommerce-form-coupon .form-row button.button:hover {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
}
.woocommerce #payment #place_order,
.woocommerce-page #payment #place_order {
    background-color: <?php echo $arilewp_theme_custom_color; ?>;
}

/*WooCommerce Widgets*/
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
    background-color: <?php echo $arilewp_theme_custom_color; ?>;
}
.woocommerce .widget_price_filter .price_slider_amount .button {
    background-color: <?php echo $arilewp_theme_custom_color; ?>;
}
.woocommerce-mini-cart__buttons.buttons a.button,
.widget .woocommerce-mini-cart__buttons.buttons a.button:hover,
.widget .woocommerce-mini-cart__buttons.buttons a.button:focus {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
	color: #fff;
}

/*WooCommerce Pagination*/
.woocommerce nav.woocommerce-pagination ul li a:focus,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce nav.woocommerce-pagination ul li span.current {
	background-color: <?php echo $arilewp_theme_custom_color; ?>;
    border: 1px solid <?php echo $arilewp_theme_custom_color; ?>;
    color: #fff;
}

</style>
<?php endif; } ?>