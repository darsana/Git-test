<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>"
 dir="<?php print $language->dir ?>">

 <?php
// print $head;
 $pagePath=base_path() . path_to_theme() .'/';  
 
 ?>
<title>Pro-DeGS Business Profile</title>
<link rel="shortcut icon" href="<?php print  $pagePath; ?>images/favicon.ico" type="image/x-icon" />

<link rel="shortcut icon" href="<?php print  $pagePath; ?>images/favicon.ico" type="image/x-icon" />
<link href="<?php print  $pagePath; ?>css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php print  $pagePath; ?>css/menu_style.css" type="text/css" />



<body>
<div id="wrapper">
	<div class="header">
    	<div class="logo">
		
				<?php
				
				 if ($logo || $title)
				 {
						print '<h1><a href="'. check_url($front_page) .'" title="'. $title .'">';
						if ($logo) {
						print '<img src="'. check_url($logo) .'" alt="'. $title .'" id="logo" />';
						}
						//print $site_html .'</a></h1>';
				 }
						
			    ?>

        </div>	
		<h1>
        <?php
			 print render($page["header"]); 
 		
 		?>
		</h1>
    </div>
    <div class="clear"></div>
    <div class="nav-mnu">
    	<div class="menu">
           	<?php
					
				$menu = theme('nice_menus', array('id' => 0, 'direction' => 'down', 'depth' => 1, 'menu_name' => 'main-menu', 'menu' => NULL));
				print $menu['content'];
			 
			?>
	</div>
    </div>
    <div class="clear"></div>
    <div class="banner">
    	 <?php //  print $slideShow 
		 print render($page['slideShow']);?>
    </div>
    <div class="clear"></div>
    <div class="cont-area" style="min-height:450px;">
		
		
		
		
		<?php

		print render($page['homeContent']);
		
		 ?>
		
		
    </div>
    <div class="clear"></div>
</div>
<div class="footer">
	<?php print render($page['footer']); ?>
</div>
</body>
</html>
