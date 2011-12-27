<html <?php language_attributes( 'html' ) ?>>
<head>
	<title><?php wp_title(); ?></title>
	<!-- Basic Meta Data -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- WordPress -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="background-wrapper">
    <div id="container">
      <div id="header">
        <div id="title">
          <?php if ( is_front_page() ) echo( '<h1>' ); ?>
            <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
          <?php if ( is_front_page() ) echo( '</h1>' ); ?>
        </div>

      </div><!--end header-->
      <nav>
        <ul>
        <?php
          wp_list_categories(
            array(
              'title_li' => '',
              'child_of' => 3
              )
            );
        ?>
        </ul>
      </nav>
