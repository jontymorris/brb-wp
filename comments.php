<div class="row">
    <?php if ( have_comments() )  { ?>
        <div class="col-md-7">
            <?php wp_list_comments(
                array(
                    'style' => 'ol',
                    'short_ping' => true
                )
            ); ?>
        
        </div>
    <?php } ?>
    <div class="col-md-5">
        <?php comment_form(); ?>
    </div>
</div>

<?php

    // existing comments
    
?>