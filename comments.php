<div class="row mt-3 comments-padding">
    <?php if ( have_comments() )  { ?>
        <div class="col-md-12">
            <?php wp_list_comments(
                array(
                    'style' => 'ol',
                    'short_ping' => true
                )
            ); ?>
        
        </div>
    <?php } ?>
    <div class="col-md-12">
        <?php comment_form(); ?>
    </div>
</div>