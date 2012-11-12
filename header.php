<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
     <!--<h4>PHPMVC</h4> -->
	
    	<p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>   
     	<!-- MENY-->
        <nav>
           <ul>           
        	<li>
            	<a href="index.php" <?php if ($currentPage == 'index.php') {echo 'id="here"';} ?>>Home</a>
            </li>           
           	<li>
            	<a href="blog.php" <?php if ($currentPage == 'blog.php') {echo 'id="here"';} ?>>Blog</a>
          	</li>           
            <li>
            	<a href="gallery.php" <?php if ($currentPage == 'gallery.php') {echo 'id="here"';} ?>>Gallery</a>
            </li>           
            <li>
            	<a href="contact.php" <?php if ($currentPage == 'contact.php') {echo 'id="here"';} ?>>Contact</a>
			</li>
         </ul>
		
        </nav>

              
		
