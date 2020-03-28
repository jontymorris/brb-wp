<div class="row mt-3 comments-padding">
    <?php if ( have_comments() )  { ?>
        <div class="col-md-12 pt-4 pb-3 comment-divider">
            <?php wp_list_comments(
                array(
                    'style' => 'ol',
                    'short_ping' => true
                )
            ); ?>
        
        </div>
    <?php } ?>
    <div class="col-md-12 pt-4 comment-divider">
        <?php comment_form(); ?>
    </div>
</div>