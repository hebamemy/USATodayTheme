<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo (is_home() ? "الرئيسية" : the_title()); ?> | <?php echo get_bloginfo('name'); ?></title>
	</head>
	<header>
		<div id='logo'></div>
		<nav>
			<ul>
			<?php
				$args = array(
					'depth'        => 0,
					'show_date'    => '',
					'date_format'  => get_option('date_format'),
					'child_of'     => 0,
					'exclude'      => '',
					'include'      => '',
					'title_li'     => '',
					'echo'         => 1,
					'authors'      => '',
					'sort_column'  => 'menu_order, post_title',
					'link_before'  => '',
					'link_after'   => '',
					'walker'       => '',
					'post_type'    => 'page',
				        'post_status'  => 'publish' 
				);
				wp_list_pages( $args ); 
			?>
			<ul>
			<menu>
				<ul>
					<li><a href="#"><img src="" alt="البحث" title="البحث" /></a></li>
					<li><a href="#"><img src="" alt="دخول بالفيسبوك" title="دخول بالفيسبوك" /></a></li>
				</ul>
			</menu>
		</nav>
	</header>
	<body>
	<div id="secondary_nav">
		<menu class="sec_nav_menu">
			<ul>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li>
					<ul class="drop_down_nav">
						<li></li>
						<li></li>
					</ul>
				</li>
			</ul>
		</menu>
		<menu class="third_nav_menu">
			<ul>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
			</ul>
		</menu>
	</div>		
		<div id="sections">
			<section>
				<select class="scores_dropdown">
					<option>NFL</option>
					<option>NFL</option>
				</select>
				<div id="score_container">
					<div class="score_div">
						<h6>2013 NFL Pro Bowl</h6>
						<span>Sun 7:99 PM</span>
						<a>
							<ul>
								<li>
									<h6>Club Name</h6>
									<img src="" alt="team" />
								</li>
								@
								<li>
									<h6>Club Name</h6>
									<img src="" alt="team" />
								</li>
							</ul>
						</a>
					</div>
				</div>
			</section>
			<section></section>
			<section></section>
		</div>

	
