<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>   
       <!-- MENY-->
           <ul>           
        	<li>
            	<a href="./index.php" <?php if ($currentPage == 'index.php') {echo 'id="here"';} ?>>Me</a>
            </li>           
           	<li>
            	<a href="./phpmvcOne.php" <?php if ($currentPage == 'phpmvcOne.php') {echo 'id="here"';} ?>>Redovisning</a>
          	</li>           
            <li>
            	<a href="./sourcecode.php" <?php if ($currentPage == 'sourcecode.php') {echo 'id="here"';} ?>>Källkod</a>
            </li>     
            <li>
            	<a href="../hal" target="_blank"?>HAL</a>
            </li>        
         </ul>
		

              
		
