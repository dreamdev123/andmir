<?php
/**
 * The template for displaying all single jobs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package isa
 */

$allow_crawling = get_field('allow_crawling');
$date_posted = get_field('date_posted');
$validthrough = get_field('validthrough');
$job_description = get_field('job_description');
$employment_type = get_field('employment_type');
$industry = get_field('industry');
$organization = get_field('organization');
$organization_url = get_field('organization_url');
$salary_currency = get_field('salary_currency');
$base_salary = get_field('base_salary');
$job_benefits = get_field('job_benefits');
$incentive_compensation = get_field('incentive_compensation');
$education_requirements = get_field('education_requirements');
$work_hours = get_field('work_hours');
$skills = get_field('skills');
$experience_requirements = get_field('experience_requirements');
$job_location_street_address = get_field('job_location_street_address');
$job_location_region = get_field('job_location_region');
$job_location_locality = get_field('job_location_locality');
$address_country = get_field('address_country');
$postal_code = get_field('postal_code');

get_header();
?>
	<?php

	$expiration = get_field('validthrough'); 

	$not_expired = true; 
  if ($expiration != "") {
    $dtime = DateTime::createFromFormat("Y-m-d", $expiration);
		$timestamp = $dtime->getTimestamp();
		if ($tiemstamp < time() )
			$not_expired = false; 
  }

	if( $allow_crawling && $not_expired ) { ?>
		<script type="application/ld+json">
		{
	    "@context": "http://schema.org",
		  "@type": "JobPosting",
		  "title": "<?php  the_title(); ?>",
		  "baseSalary": {
			  "@type": "MonetaryAmount",
			  "currency": "<?php echo get_field("salary_currency"); ?>",
			  "value": {
			    "@type": "QuantitativeValue",
			    "value": "<?php echo get_field("base_salary"); ?>",
			    "unitText": ""
			  }
			},
		  "jobBenefits": "<?php echo get_field("job_benefits"); ?>",
		  "datePosted": "<?php echo (!empty(get_field("date_updated")))? date("Y-m-d", strtotime(get_field("date_updated"))): date("Y-m-d", strtotime(get_field("date_posted"))) ?>",
		  "description": "<p><?php echo $job_description; ?></p>",
		  "hiringOrganization": {
			  "@type": "Organization",
			  "name": "<?php echo get_field("organization"); ?>",
			  "sameAs": "<?php echo get_field("organization_url"); ?>"
			},
		  "employmentType": "<?php echo get_field("employment_type"); ?>",
		  "educationRequirements": "<?php echo get_field("education_requirements"); ?>",
		  "experienceRequirements": "<?php echo get_field("experience_requirements"); ?>",
		  "incentiveCompensation": "<?php echo get_field("incentive_compensation"); ?>",
		  "industry": "<?php echo get_field("industry"); ?>",
		  "jobLocation": {
		    "@type": "Place",
		    "address": {
		      "@type": "PostalAddress",
		      "streetAddress": "<?php echo get_field("job_location_street_address"); ?>",
		      "addressLocality": "<?php echo get_field("job_location_locality"); ?>",
		      "addressRegion": "<?php echo get_field("job_location_region"); ?>",
		      "postalCode": "<?php echo get_field("postal_code"); ?>",
    			"addressCountry": "<?php echo get_field("address_country"); ?>"
		    }
		  },
		  "occupationalCategory": "",
		  "qualifications": "<?php echo get_field("qualifications"); ?>",
		  "salaryCurrency": "<?php echo get_field("salary_currency"); ?>",
		  "skills": "<?php echo get_field("skills"); ?>",
		  "workHours": "<?php echo get_field("work_hours"); ?>"
	  }
		</script>
		<?php
	} ?>

	<?php 
		$featured_img = get_the_post_thumbnail_url();
		if( empty($featured_img) ) {
			$featured_img = get_template_directory_uri() . '/images/banner.jpg';
		}
	?>

	<style type="text/css">
		.hero-section {
	    padding-top: 6rem;
	    padding-bottom: 6rem;
	    background-size: cover;
	    background-position: center center;
	    background-repeat: no-repeat;
	    position: relative;
	    width: 100%;
	    height: 30rem;
	  }
	  .hero-section::before {
	    content: "";
	    position: absolute;
	    left: 0;
	    top: 0;
	    width: 100%;
	    height: 100%;
	    background-color: rgba(0, 0, 0, 0.25);
	    z-index: 1;
	  }
	  .hero-section .container {
	    height: 100%;
	  }
	  .hero-section .container .content {
	    height: 100%;
	    display: flex;
	    align-items: center;
	  }
	  .hero-section .container .content h1 {
	  	width: 100%;
	  	color: #fff;
	  	position: relative;
	  	z-index: 3;
	  }
	  .site-main {
	  	padding-top: 4rem;
	  	padding-bottom: 4rem;
	  }
	</style>

	<section class="hero-section" style="background-image: url(<?php echo $featured_img;?>;">
		<div class="container">
			<div class="text-center content">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</section>

	<main id="main" class="site-main">

		<div class="container">
			<div class="row">
				<div class="col-md-12 main">
					<strong>Date Posted</strong><br>
					<?php echo $date_posted; ?><br><br>

					<strong>Expired Date</strong><br>
					<?php echo $validthrough; ?><br><br>

					<strong>Description</strong><br>
					<?php echo $job_description; ?><br><br>

					<strong>Employment Type</strong><br>
					<?php echo $employment_type; ?><br><br>

					<strong>Industry</strong><br>
					<?php echo $industry; ?><br><br>

					<strong>Organization</strong><br>
					<?php echo $organization; ?><br><br>

					<strong>Organization URL</strong><br>
					<?php echo $organization_url; ?><br><br>

					<strong>Base Salary</strong><br>
					<?php echo $base_salary; ?> <?php echo $salary_currency; ?><br><br>

					<strong>Job Benefits</strong><br>
					<?php echo $job_benefits; ?><br><br>

					<strong>Incentive Compensation</strong><br>
					<?php echo $incentive_compensation; ?><br><br>

					<strong>Education Requirements</strong><br>
					<?php echo $education_requirements; ?><br><br>

					<strong>Work Hours</strong><br>
					<?php echo $work_hours; ?> Hours<br><br>

					<strong>Skills</strong><br>
					<?php echo $skills; ?><br><br>

					<strong>Experience Requirements</strong><br>
					<?php echo $experience_requirements; ?><br><br>

					<strong>Job Location</strong><br>
					<?php echo $job_location_street_address; ?><br>
					<?php echo $job_location_locality; ?><br>
					<?php echo $postal_code; ?><br>
					<?php echo $address_country; ?><br><br>

				</div>

			</div>
		</div>
	</main><!-- #main -->

<?php

get_footer();
