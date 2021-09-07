<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,100&display=swap" rel="stylesheet">
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<svg class="brand-img" viewBox="0 0 101.58 48" xmlns="http://www.w3.org/2000/svg"><defs><clipPath id="a"><path transform="translate(0 137.46)" d="M26.791-137.465l-9.358 20.332L7.8-137.465H0l14.847 28.672h5.172l14.857-28.672h-8.085" clip-rule="evenodd" fill="#ae0f09" data-name="Path 2"></path></clipPath><clipPath id="b"><path transform="translate(-224.35 167.41)" d="M224.35-160.6h6.49v-6.808h-6.49z" clip-rule="evenodd" fill="#ae0f09" data-name="Path 4"></path></clipPath><clipPath id="c"><path transform="translate(-108.71 139.65)" d="M108.71-139.65h39.325v39.632H108.71z" clip-rule="evenodd" fill="#ae0f09" data-name="Path 11"></path></clipPath><clipPath id="d"><path fill="#ae0f09" data-name="Rectangle 1" d="M0 0h39.748v40.032H0z"></path></clipPath><clipPath id="e"><path transform="translate(-108.71 139.65)" d="M124.06-134.22c4.369 0 7.786 2.882 8.249 6.521h-15.97a7.554 7.554 0 017.721-6.521zm-.108 24.895a15.757 15.757 0 0015.358-11.155h-7.336c-1.213 3.408-3.794 5.66-8.5 5.66a7.54 7.54 0 01-7.338-7.971h23.684c0-.4-.009-.958-.009-1.362 0-10.3-8.21-15.5-15.859-15.5a15.183 15.183 0 00-15.242 15.07c0 8.828 6.06 15.257 15.244 15.257z" clip-rule="evenodd" fill="#ae0f09" data-name="Path 7"></path></clipPath><clipPath id="f"><path transform="translate(-108 140)" d="M108-100.252h39.748V-140H108z" fill="#ae0f09" data-name="Path 6"></path></clipPath><clipPath id="g"><path transform="translate(-203.88 137.46)" d="M216.18-137.46h-6.52v29.043a3.841 3.841 0 01-4.072 4.049h-1.711v5.935s1.02-.011 1.656 0a12.563 12.563 0 005.794-1.014 8.2 8.2 0 003.711-3.9 14.313 14.313 0 001.142-5.869v-28.246" clip-rule="evenodd" fill="#ae0f09" data-name="Path 10"></path></clipPath><clipPath id="h"><path transform="translate(-253.18 139.87)" d="M275.4-122.605c-.047 6.222-4.969 7.784-8.943 7.713-3.9-.07-5.962-1.885-5.962-4.022 0-2.253 2.1-2.619 3.951-2.792 3.235-.4 8.494-.378 10.955-2.011zm-6.305-17.265c-5.2 0-8.192.713-10.7 2.388a8.77 8.77 0 00-3.721 6.868c0 .4-.009.768 0 1.064l7.035.019.009-.158c-.046-3.258 3.548-4.928 7.476-4.928 3.7 0 5.992 1.489 5.992 3.974 0 .4.13 2.611-4.49 2.9l-8.838.52c-5.882.144-8.674 3.509-8.674 8.188 0 5.833 4.688 9.775 12.833 9.775a15.314 15.314 0 009.283-2.94v1.68h6.546v-20.477c0-4.415-3.341-8.877-12.756-8.877z" clip-rule="evenodd" fill="#ae0f09" data-name="Path 13"></path></clipPath></defs><g data-name="logo veja"><g transform="translate(0 8.72)" clip-path="url(#a)" data-name="Group 1"><path d="M-1.42 30.086h37.715V-1.425H-1.42z" fill="#ae0f09" data-name="Path 1"></path></g><g transform="translate(64.394)" clip-path="url(#b)" data-name="Group 2"><path d="M-1.42 8.23h9.329v-9.647H-1.42z" fill="#ae0f09" data-name="Path 3"></path></g><g transform="translate(31.383 8.37)" clip-path="url(#c)" data-name="Group 8"><g transform="translate(-.201 -.099)" clip-path="url(#d)" data-name="Group 7"><g transform="translate(.201 .099)" clip-path="url(#e)" data-name="Group 4"><g transform="translate(-.201 -.099)" clip-path="url(#f)" data-name="Group 3"><path d="M-1.22 31.84h33.949V-1.326H-1.22z" fill="#ae0f09" data-name="Path 5"></path></g></g><g transform="translate(27.221 .72)" clip-path="url(#g)" data-name="Group 6"><g transform="translate(-27.221 -.72)" clip-path="url(#f)" data-name="Group 5"><path d="M25.8 41.16h15.144V-.708H25.8z" fill="#ae0f09" data-name="Path 8"></path></g></g></g></g><g transform="translate(72.911 8.04)" clip-path="url(#h)" data-name="Group 9"><path d="M-1.42 32.03h31.506V-1.421H-1.42z" fill="#ae0f09" data-name="Path 12"></path></g></g></svg>
				</div>
				<div class="col-md-6">
					<nav class="header-nav">
						<?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
					</nav>
				</div>
			</div>
		</div>
	</header>