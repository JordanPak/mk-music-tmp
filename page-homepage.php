<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<header>

							<?php 
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' );
							?>

							<!--<div class="jumbotron" style="background-image: url('<?php echo $featured_src[0]; ?>'); background-repeat: no-repeat; background-position: 0 0;">-->
							
								<div class="page-header">
									
                                    <img class="pull-left" style="margin-right:30px; margin-left:-20px; margin-bottom: 20px;" src="http://mk.jpakmedia.com/wp-content/themes/mk-music-tmp/images/logo.png">
                                    
                                    <h2>Sheet Music & Recordings <small>(Temporary)</small></h2>
                                    
                                    <a class="btn btn-success" style="margin-right: 10px;" href="sheet-music">Download Sheet Music</a><!--<a class="btn btn-primary" href="http://ucfbands.com/"> Return to UCFBands</a>-->
                                    
                                    
								</div><!-- /.page-header -->	
							<!--</div>-->
						
						</header>
						
						<section class="row post_content">


                                <br><br><br>
                                
                                
                                <div class="col-md-3">
                                    <h3>Documents <span class="glyphicon glyphicon-file"></span></h3>
                                    <ul class="mkul">
                                    	<li><a href="http://mk.jpakmedia.com/wp-content/uploads/2014/07/2014-MK-Handbook.pdf" target="_blank">MK Handbook</a></li>
                                    	<li><a href="http://mk.jpakmedia.com/wp-content/uploads/2014/07/2014-UCF-Drumline-Handbook.pdf" target="_blank">Drumline Handbook</a></li>
                                    	<li><a href="http://mk.jpakmedia.com/wp-content/uploads/2014/07/MK-Summer-Newsletter-2014.pdf" target="_blank">Summer Newsletter</a></li>
                                    </ul>
                                </div>


                                <div class="col-md-3">
                                    <h3>Forms <span class="glyphicon glyphicon-pencil"></span></h3>
                                    <ul class="mkul">
                                    	<li><a href="http://mk.jpakmedia.com/wp-content/uploads/2014/07/Handbook-Acknowledgement-Form.pdf" target="_blank">Handbook Acknowledgement Form</a></li>
                                    	<li><a href="https://docs.google.com/forms/d/1TmTjwCA5K8vhkzPfgYssOnpOiizILohS3IZsJv9ta0U/viewform" target="_blank">MK Info Form</a></li>
                                    	<li><a href="http://mk.jpakmedia.com/wp-content/uploads/2014/07/MK-Shoe-Order-Form-2014.pdf" target="_blank">Shoe Order Form</a></li>
                                    </ul>
                                </div>
								

                                <div class="col-md-6">
                                    <h3>Camp Schedules <span class="glyphicon glyphicon-list-alt"></span></h3>
                                    <table class="table table-striped" style="border:1px solid #CFCFCF;">
                                    <tbody>
                                    <tr>
                                    <th>Group</th>
                                    <th>Dates</th>
                                    <th>Schedule</th>
                                    </tr>
                                    <tr>
                                    <td>Student Staff</td>
                                    <td>August 7 - 10</td>
                                    <td><a href="http://mk.jpakmedia.com/wp-content/uploads/2014/07/MK-STAFF-CAMP-SCHEDULE-2014.pdf" class="btn btn-xs btn-primary" target="_blank"><span class="glyphicon glyphicon-download-alt"></span> Download</a></td>
                                    </tr>
                                    <tr>
                                    <td>Starlet Knights</td>
                                    <td>August 8 - 10</td>
                                    <td><a href="http://mk.jpakmedia.com/wp-content/uploads/2014/07/MK-STARLET-KNIGHT-CAMP-SCHEDULE-2014.pdf" class="btn btn-xs btn-primary" target="_blank"><span class="glyphicon glyphicon-download-alt"></span> Download</a></td>
                                    </tr>
                                    <tr>
                                    <td>Drumline</td>
                                    <td>August 8 - 10</td>
                                    <td><a href="http://mk.jpakmedia.com/wp-content/uploads/2014/07/MK-PERCUSSION-CAMP-SCHEDULE-2014.pdf" class="btn btn-xs btn-primary" target="_blank"><span class="glyphicon glyphicon-download-alt"></span> Download</a></td>
                                    </tr>
                                    <tr>
                                    <td>Full Band</td>
                                    <td>August 10 - 16</td>
                                    <td><a href="http://mk.jpakmedia.com/wp-content/uploads/2014/07/MK-BAND-CAMP-SCHEDULE-2014.pdf" class="btn btn-xs btn-primary" target="_blank"><span class="glyphicon glyphicon-download-alt"></span> Download</a></td>
                                    </tr>
                                    </tbody>
                                    </table>                                
                                </div>
						
							<div class="col-sm-8">
						
								<?php the_content(); ?>
								
							</div>
							
							<?php get_sidebar('sidebar2'); // sidebar 2 ?>
													
						</section> <!-- end article header -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>