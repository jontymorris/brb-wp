<div class="row mt-3 comment-divider">
    <div class="col-md-12 mt-3">
        <?php comment_form(); ?>
    </div>

    <?php if ( have_comments() )  { ?>
        <div class="col-md-12 mt-3">
            <?php wp_list_comments(
                array(
                    'style' => 'ol',
                    'short_ping' => true
                )
            ); ?>
        
        </div>
    <?php } ?>
</div>