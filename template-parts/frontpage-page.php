<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package lukekohler
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		
		<div class="container-fluid">

			<div class="spacer"></div>

			<div class="row-fluid">
				
				<!--Section 1: Profile-->
				<div class="resume_main profile">
					<div class="col-xs-3">
						<div class="resume_icon"><?php the_field('section_1_icon'); ?></div>
						<div class="resume_section"><?php the_field('section_1_title'); ?></div>
					</div>

					<div class="col-xs-9">
						<div class="resume_content"><?php the_field('section_1_content'); ?></div>
					</div>
				</div>
			
			</div>

			<div class="spacer"></div>
				
			<div class="row-fluid">

				<!--Section 2: Work-->
				<div class="resume_main work">
					<div class="col-xs-3">
						<div class="resume_icon"><?php the_field('section_2_icon'); ?></div>
						<div class="resume_section"><?php the_field('section_2_title'); ?></div>
					</div>

					<div class="col-xs-9">
						<div class="resume_content"><?php the_field('section_2_content'); ?></div>
					</div>
				</div>
			
			</div>

			<div class="spacer"></div>
				
			<div class="row-fluid">

				<!--Section 3: Front-End Skills-->
				<div class="resume_main skills">
					<div class="col-xs-3">
						<div class="resume_icon"><?php the_field('section_3_icon'); ?></div>
						<div class="resume_section"><?php the_field('section_3_title'); ?></div>
					</div>

					<div class="col-xs-9">
						<div class="resume_content"><?php the_field('section_3_content'); ?></div>
					</div>
				</div>
			
			</div>

			<div class="spacer"></div>
				
			<div class="row-fluid">

				<!--Section 4: Design Skills-->
				<div class="resume_main skills">
					<div class="col-xs-3">
						<div class="resume_icon"><?php the_field('section_4_icon'); ?></div>
						<div class="resume_section"><?php the_field('section_4_title'); ?></div>
					</div>

					<div class="col-xs-9">
						<div class="resume_content"><?php the_field('section_4_content'); ?></div>
					</div>
				</div>
			
			</div>

			<div class="spacer"></div>
				
			<div class="row-fluid">

				<!--Section 5: Software Skills-->
				<div class="resume_main skills">
					<div class="col-xs-3">
						<div class="resume_icon"><?php the_field('section_5_icon'); ?></div>
						<div class="resume_section"><?php the_field('section_5_title'); ?></div>
					</div>

					<div class="col-xs-9">
						<div class="resume_content"><?php the_field('section_5_content'); ?></div>
					</div>
				</div>
			
			</div>

			<div class="spacer"></div>
				
			<div class="row-fluid">

				<!--Section 6: Professional Skills-->
				<div class="resume_main skills">
					<div class="col-xs-3">
						<div class="resume_icon"><?php the_field('section_6_icon'); ?></div>
						<div class="resume_section"><?php the_field('section_6_title'); ?></div>
					</div>

					<div class="col-xs-9">
						<div class="resume_content"><?php the_field('section_6_content'); ?></div>
					</div>
				</div>
			
			</div>

			<div class="spacer"></div>
				
			<div class="row-fluid">

				<!--Section 7: Bonus Info-->
				<div class="resume_main skills">
					<div class="col-xs-3">
						<div class="resume_icon"><?php the_field('section_7_icon'); ?></div>
						<div class="resume_section"><?php the_field('section_7_title'); ?></div>
					</div>

					<div class="col-xs-9">
						<div class="resume_content"><?php the_field('section_7_content'); ?></div>
					</div>
				</div>
			
			</div>

			<div class="spacer"></div>

			<div class="row-fluid">

				<!--Section 8: Education-->
				<div class="resume_main school">
					<div class="col-xs-3">
						<div class="resume_icon"><?php the_field('section_8_icon'); ?></div>
						<div class="resume_section"><?php the_field('section_8_title'); ?></div>
					</div>

					<div class="col-xs-9">
						<div class="resume_content"><?php the_field('section_8_content'); ?></div>
					</div>
				</div>
			
			</div>

			<div class="spacer"></div>
				
		</div>
		



	</div><!-- .entry-content -->

	
</article><!-- #post-## -->

