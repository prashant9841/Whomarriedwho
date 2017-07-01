<?php 
/*
Template Name: Search Page
*/
get_header();

 ?>
 <style>
 	.search-page {
 		padding: 0 100px;
 		min-height: 32vh;
 	}
 	.search-page .search-header{
 		margin: 25px auto !important;
 		text-align: center;
 		color: #666 !important;
 	}

		li.search-item {
			padding: 25px 100px;
			box-shadow: 5px 5px 5px #ddd;
			margin: 30px 0;
			border: 1px solid #eee;
		}
		li.search-item:hover {
			box-shadow: 5px 5px 5px #ccc;
		}

			li.search-item a {
				display: block;
				height: 200px;
				overflow: hidden;
			}
			li.search-item a:hover {
				color: #333;
			}
			li.search-item .img-div {
				width: 200px;
				height: 200px;
				overflow: hidden;
				float: left;
			}
			li.search-item .thecontent {
				padding-left: 250px;
			}
			.thecontent h2{
				margin-bottom: 25px !important;
			}
	
 </style>

 
 <div class="page search-page">
 	

	<?php
	$s=get_search_query();
	if (empty($s)) { ?>
		<h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
	        <div class="alert alert-info">
	          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
	        </div>

	<?php } else { 


	$args = array(
	                's' =>$s
	            );

	    // The Query
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {
	        _e("<h2 style='font-weight:bold;color:#000' class='search-header'>Search Results for: ".get_query_var('s')."</h2>");
	        while ( $the_query->have_posts() ) {
	           $the_query->the_post();
	           $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	                    <li class="search-item row">
	                        <a href="<?php the_permalink(); ?>">
	                        	<div class="img-div">
	                        		<img src="<?php echo $imgsrc; ?>" alt="">
	                        	</div>
	                        	<div class="thecontent">
	                        		<h2><?php the_title(); ?></h2>
	                        		<?php the_content(); ?>
	                        	</div>
	                        </a>
	                    </li>
	                 <?php
	        }
	    }else{
	?>
	        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
	        <div class="alert alert-info">
	          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
	        </div>
<?php } } ?>
</div>
<?php 
get_footer(); 

?>