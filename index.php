<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<div class="row"></div>
				<div class="row">
					<div class="col-xs-6"></div>
					<div class="col-xs-6"></div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="row">
					<div class="col-xs-6"></div>
					<div class="col-xs-6"></div>
				</div>
				<div class="row">
					<div class="col-xs-6"></div>
					<div class="col-xs-6"></div>
				</div>
				<div class="row">
					<div class="col-xs-6"></div>
					<div class="col-xs-6"></div>
				</div>
			</div>
		</div>

		<div class="content">

				<?php get_template_part( 'loop', 'index' );	?>
		</div> <!--/.content -->

		<!-- <?php get_sidebar(); ?> -->
	</div> <!-- div.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>

