<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!--[if lt IE 7]><script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script><![endif]-->
  <!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
<?php wp_head(); ?>
</head>

<body>
<div class="top1">
    <header>
       <div class="main">
           <h1><a href="index.html">industrial.</a></h1>
         <form action="" id="Search"><div class="indent"><div class="rowElem1"><a href="#" onClick="document.getElementById('Search').submit()" class=" fright alignMiddle"><img alt="" src= "<?php echo get_template_directory_uri() ?> /images/button.gif" /></a><input type="text" class="input" value="Quick Search..." onBlur="if(this.value=='') this.value='Quick Search...'" onFocus="if(this.value =='Quick Search...' ) this.value=''"  /></div></div>
         </form>
            <div class="inside">
                <nav>
                    <?php wp_nav_menu(array(
                      'theme_location' => 'primary',
                      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'container' => 'false',
                      'menu_class' => 'sf-menu',
                      'depth' => '2'
                    )); ?>
                </nav>
            </div>
        </div>
    </header>
</div>
