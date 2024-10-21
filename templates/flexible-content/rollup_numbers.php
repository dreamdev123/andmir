<style> 
	.rollup-numbers {
		padding-top:  4rem;
		padding-bottom:  4rem;
	}
	.rollup-numbers .rollup-wrp {
		margin-left:  -15px;
		margin-right:  -15px;
		display:  flex;
	}
	.rollup-numbers .rollup-wrp .each {
		padding-left: 15px;
		padding-right: 15px;
	}
	.rollup-numbers .rollup-wrp .each .inner-wrp .img-wrapper {
		width: 100%;
		max-width: 200px;
		margin-left: auto;
		margin-right: auto;
	}
	.rollup-numbers .rollup-wrp .each .inner-wrp .img-wrapper .img-wrp {
		
	}
	.rollup-numbers .rollup-wrp .each .inner-wrp .img-wrapper .img-wrp {
    display: block;
    width: 100%;
    height: 0;
    padding-bottom: 100%;
    position: relative;
  }
  .rollup-numbers .rollup-wrp .each .inner-wrp .img-wrapper .img-wrp img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
  }
  .rollup-numbers .rollup-wrp .each .inner-wrp .content-wrp .title {
  	font-size: 24px;
  	font-weight: 700;
  	text-align: center;
  	margin-bottom: 0;
  	padding-top: 30px;
  }
  .rollup-numbers .rollup-wrp .each .inner-wrp .content-wrp .number-count {
  	font-size: 30px;
  	font-weight: 700;
  	text-align: center;
  	margin-bottom: 0;
  }
  .rollup-numbers .rollup-wrp .each .inner-wrp .content-wrp .description p {
  	font-size: 16px;
  	text-align: center;
  }
</style> 

<?php

$columns = get_sub_field('#_of_columns');
$stat = get_sub_field('stat');

?>

<div class="rollup-numbers">
	<div class="container">
		<div class="rollup-wrp">
			<?php
			foreach ($stat as $each) :?>
				<div class="each" style="width: <?php echo 100 / $columns; ?>%;">
					<div class="inner-wrp">
						<div class="img-wrapper">
							<div class="img-wrp">
								<img src="<?php echo $each['icon']; ?>">
							</div>
						</div>
						<div class="content-wrp">
							<p class="title"><?php echo $each['title']; ?></p>
	            <h2 class="number-count"><?php echo $each['number']; ?></h2>
	            <div class="description"><?php echo $each['description']; ?></div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<script type="text/javascript">
	(function($){
		$(document).ready(function(){ 

			Number.prototype.numberFormat = function(decimals, dec_point, thousands_sep) {
	      dec_point = typeof dec_point !== 'undefined' ? dec_point : '.';
	      thousands_sep = typeof thousands_sep !== 'undefined' ? thousands_sep : ',';

	      var parts = this.toFixed(decimals).split('.');
	      parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);

	      return parts.join(dec_point);
	    }

			var number_section = document.querySelector('.rollup-numbers');

		  var the_number_section_check = true;

		  function check_position_for_number_counting() {    
		    if (number_section) {
		      if(number_section.getBoundingClientRect().top - window.innerHeight <= 0) {
		        if ( the_number_section_check ) {
		          $('.rollup-numbers .number-count').each(function () {

		            $(this).prop('Counter',0).animate({
		              Counter: $(this).text()
		            }, {
		              duration: 2000,
		              easing: 'swing',
		              step: function (now) {
		                  $(this).text(now.numberFormat(0));
		              }
		            });
		          });

		          the_number_section_check = false;
		        }          
		      }
		    }

		  }

		  window.addEventListener('scroll', check_position_for_number_counting);
		  check_position_for_number_counting();

		});	  

	})(jQuery);

</script>
