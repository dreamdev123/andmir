<style type="text/css">
  /* latest article section style */
  .latest_articles-sc {
    padding-top: 4rem;
    padding-bottom: 4rem; 
  }
  .latest_articles-sc .latest-news-wrp {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    -ms-flex-wrap: wrap;
      flex-wrap: wrap; 
  }
  .latest_articles-sc .latest-news-wrp .inner-col {
    margin-bottom: 20px; 
  }
  .latest_articles-sc .latest-news-wrp .inner-col a.img-wrp {
    display: block;
    width: 100%;
    height: 0;
    padding-bottom: 65.25%;
    margin-bottom: 30px;
    position: relative; 
    overflow: hidden;
  }
  .latest_articles-sc .latest-news-wrp .inner-col a.img-wrp img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
       object-fit: cover;
    -o-object-position: center center;
       object-position: center center; 
    transition: all 0.3s ease;
  }
  .latest_articles-sc .latest-news-wrp .inner-col a.img-wrp:hover img {
    transform: scale(1.05);
  }
  .latest_articles-sc .latest-news-wrp .inner-col .desc a {
    color: #333; 
    text-decoration: none; 
  }
  .latest_articles-sc .latest-news-wrp .inner-col .desc a h4 {
    font-size: 1.5rem;
    color: #0083be;
    font-weight: 500;
    width: 100%; 
  }
  .latest_articles-sc .latest-news-wrp .inner-col .img-wrp {
    width: 100%;
    height: 0;
    padding-bottom: 65.25%;
    position: relative;
    margin-bottom: 30px; 
  }
  .latest_articles-sc .latest-news-wrp .inner-col .img-wrp img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
     object-fit: cover;
    -o-object-position: center center;
     object-position: center center; 
  }
  .latest_articles-sc .latest-news-wrp .inner-col .post-desc {
   
    background-color: #fff;
    position: relative; 
  }
  .latest_articles-sc .latest-news-wrp .inner-col .post-desc .desc {
  }
  .latest_articles-sc .latest-news-wrp .inner-col .post-desc .desc a h4 {
    font-size: 24px;
    font-weight: 700;     
    text-decoration: none;
    margin-bottom: 0.3em;
    margin-top: 0.3em; 
    color: #222;
  }
  .latest_articles-sc .latest-news-wrp .inner-col .post-desc .excerpt {
    font-size: 18px;
  }
  .latest_articles-sc .latest-news-wrp .inner-col .post-desc .btn-wrp {
    margin-top: 20px;
    margin-bottom: 10px; 
  }            
  /*.latest_articles-sc .latest-news-wrp .inner-col .post-desc .btn-wrp a {
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-right: 2em;
    color: #54236c;
    font-size: 14px;
  }
  .latest_articles-sc .latest-news-wrp .inner-col .post-desc .btn-wrp a span {
    position: relative;
    display: inline-block;
    line-height: 2.285712;
  }
  .latest_articles-sc .latest-news-wrp .inner-col .post-desc .btn-wrp a span:after {
    content: "";
    border-bottom: 1px solid #63b1e5;
    bottom: 0;
    display: block;
    left: 0;
    position: absolute;
    width: 100%;
    transition: all .1s ease;
  }
  .latest_articles-sc .latest-news-wrp .inner-col .post-desc .btn-wrp a:hover span:after {
    width: 12px;
  }
  .latest_articles-sc .see-all-news {
    float: right;
    margin: 50px 0;
  }*/
  /*.latest_articles-sc .see-all-news a {
    padding: 15px 30px;
    border: 2px solid #63b1e5;
    border-radius: 0;
    color: #54236c;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 2px;
  }
  .latest_articles-sc .see-all-news a:hover {
    background-color: #63b1e5;
    text-decoration: none;
  }*/
</style>

<?php

$number_of_cols = get_sub_field('number_of_cols');
$number_of_rows = get_sub_field('number_of_rows');
$category = get_sub_field('category');
$inner_col_class = 'col-lg-4 col-md-6';
$anchor_name = get_sub_field('anchor_name');



if (empty($number_of_cols)):
  $number_of_cols = 3;
else:
  $inner_col_class = 'col-lg-'. (12/$number_of_cols) . ' col-md-' . (12/$number_of_cols);
endif;

if (empty($number_of_rows)):
  $number_of_rows = 2;
endif;

$number_of_articles = $number_of_cols * $number_of_rows;
if (!empty($category)):
  $args = array(
    'post_type'      => 'post',
    'posts_per_page' => $number_of_articles,
    'orderby' => 'publish_date', 
    'order' => 'DESC',
    'cat'   => $category
  );
else:
  $args = array(
    'post_type'      => 'post',
    'posts_per_page' => $number_of_articles,
    'orderby' => 'publish_date', 
    'order' => 'DESC'
  );
endif;

$query = new WP_Query( $args ); 

if ($query->have_posts()):  ?> 
  <div class="latest_articles-sc" id="<?php echo $anchor_name; ?>">
    <div class="container">
      <div class="row latest-news-wrp">
        <?php 
        while($query->have_posts()): $query->the_post(); 
          $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full');
          if (isset($large_image_url[0])) {
            $featured_img = $large_image_url[0];
          } else {
            $featured_img = '';
          } ?>
          <div class="<?php echo $inner_col_class; ?> mb-4">
            <div class="inner-col">
              <div class="social-share-img-wrp">
                <a href="<?php the_permalink(); ?>" class="img-wrp">
                  <img src="<?php echo $featured_img; ?>" alt="">
                </a>
              </div>
              <div class="post-desc">
                <div class="desc">
                  <a href="<?php the_permalink(); ?>"><h4><?php echo get_the_title(); ?></h4></a>
                </div>
                
                <div class="excerpt">
                  <?php 
                    if ( strlen(get_the_excerpt()) < 50 ) {
                      $excerpt = get_the_excerpt();
                    } else {
                      $excerpt = substr(get_the_excerpt(), 0, 50) . '...';
                    }                            
                    echo $excerpt; 
                  ?>
                </div>
                <div class="btn-wrp">
                  <a class="btn" href="<?php the_permalink(); ?>" target="_blank">Read More</a>
                </div>
              </div>
            </div>
          </div>
        <?php 
        endwhile; ?>
      </div>

      <div class="see-all-news">
        <a class="btn" href="">See all news</a>
      </div>

    </div>
  </div>

<?php 
endif;

wp_reset_query(); ?>
