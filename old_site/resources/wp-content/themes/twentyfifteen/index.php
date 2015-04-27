<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/preamble.php"); ?>



<title>Solid Source Design</title>

<!--put scripts and page specific links after this-->







<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/header.php"); ?>

<!--preceeding include has opening #content tag-->

<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/text_page_facade.php"); ?> <!--covers bottom shadow of main nav-->





<!--content goes here-->           

         





	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">







		<?php wp_list_categories('title_li=&show_count=0'); ?>



		







		



		</main><!-- .site-main -->

	</div><!-- .content-area -->





<!--include begins with closing #content tag-->			

<?php include ($_SERVER['DOCUMENT_ROOT']."/page_parts/footer.php"); ?>