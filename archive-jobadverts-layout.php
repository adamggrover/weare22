




<div class="job-advert-post row p-0" >

    <div class="job-advert-left-archive col-sm-4 p-0">
        <img class="job-adverts-logo img-fluid" src="../wp-content/themes/kow22/Assets/logos/kings-icon.svg" alt="">

    </div>

    <div class="job-advert-right-archive col-sm-8 p-4">
        
     <a href="<?php the_permalink();?>" class="announcement-post-title-link"><h1 class="announcement-post-title"><?php the_title(); ?></h1></a>
    
     <h4 class="h6">Closing Date: <?php echo get_post_meta($post->ID, 'Closing Date', true); ?></h4>
     <h4 class="h6">Interview Date: <?php echo get_post_meta($post->ID, 'Interview Date', true); ?><h4>
     <a class="job-advert-link" href="<?php the_permalink();?>"><p><small>READ MORE</small></p></a>
      
      
    
    </div>

  
</div>



