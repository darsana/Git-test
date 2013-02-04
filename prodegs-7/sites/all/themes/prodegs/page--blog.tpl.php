<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>"
 dir="<?php print $language->dir ?>">

 <?php
// print $head;
 $pagePath=base_path() . path_to_theme() .'/';  
 
 ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta  content="We provide meaningful professional development to educational institutions and organizations worldwide." name="description" />
<meta  content=" organizational, education/educational, teachers/staff/educators/employees, professional, develop/development, leadership/teams, global/worldwide/international,institutions/schools/organization/business, needs/assessments/evaluation/data, plan, coach/consult/consultant,training/workshops/session, tutoring/mentoring "name="keywords" />
<title>Pro-DeGS Business Profile</title>
<link rel="shortcut icon" href="<?php print  $pagePath; ?>images/favicon.ico" type="image/x-icon" />
<link href="<?php print  $pagePath; ?>css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php print  $pagePath; ?>css/menu_style.css" type="text/css" />


</head>


<body>
<div id="wrapper">
	<div class="header">
    	<div class="logo">
		
				<?php if ($logo || $site_title) {
				print '<h1><a href="'. check_url($front_page) .'" title="'. $site_title .'">';
				if ($logo) {
			print '<img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo" />';
				}
				print $site_html .'</a></h1>';
			}?>

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
				//print $messages; 
			
			?>
	</div>
    </div>
    <div class="clear"></div>
    <div class="banner">
    	 <?php //  print $slideShow 
		 print render($page['slideShow']);?>
    </div>
    <div class="clear"></div>
    <div class="cont-area">
	
	
	
		<?php
	//	 print $messages; 
		print render($page['homeContent']);
		
		 ?>
	
	
	
	
	
    <!--	<div class="cont-area-box" >
        	<table width="300" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="30"><h1> Our Mission </h1></td>
              </tr>
              <tr>
                <td height="140"><img src="images/mis-img.png" alt="Our Mission" border="0"/></td>
              </tr>
              <tr>
                <td height="105"><p> ProDeGS strives to empower, educate, and inform staff at all levels in educational settings by offering quality and meaningful professional development to enhance instruction and performance.</p></td>
              </tr>
              <tr>
                <td height="50"><a href="ourmission.html"> <img src="images/readmore.png" alt="0" border="0"/> </a></td>
              </tr>
            </table>
        </div>
        <div class="cont-area-sep"></div>
        <div class="cont-area-box">
        	<table width="300" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="30"><h1> Our Belief </h1></td>
              </tr>
              <tr>
                <td height="140"><img src="images/philosophy-home-img.png" alt="Our  Philosophy " border="0"/></td>
              </tr>
              <tr>
                <td height="105"><p> We ardently believe in the importance of developing professionals to reach their maximum potential.  Through our Pro-DeGS program, we collaborate closely with educational institutions ... </p></td>
              </tr>
              <tr>
                <td height="50"><a href="ourbelief.html"> <img src="images/readmore.png" alt="0" border="0"/> </a></td>
              </tr>
            </table>
        </div>
        <div class="cont-area-sep"></div>
        <div class="cont-area-box">
        	<table width="300" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="30"><h1> Our Services </h1></td>
              </tr>
              <tr>
                <td height="140"><img src="images/ser-img.png" alt="Our Services" border="0"/></td>
              </tr>
              <tr>
                <td height="105">
                <ul>
                	<li>Onsite sessions</li>
					<li>Coaching sessions</li>
					<li>Website resources and tools</li>
					<li>Group training sessions</li>
				</ul>
			</td>
              </tr>
              <tr>
                <td height="50"><a href="services.html"> <img src="images/readmore.png" alt="0" border="0"/> </a></td>
              </tr>
            </table>
        </div>
		-->
		
		
    </div>
    <div class="clear"></div>
</div>
<div class="footer">
	<?php print render($page['footer']); ?>
</div>
</body>
</html>
