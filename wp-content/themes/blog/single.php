<?php
get_header();
the_post()
?>
<section id="news" class="section">
    <div class="container text-center">
        <h6 class="subtitle">NEWS</h6>
        <div class="custom-card card border">
            <div class="card-body">
                <i class="icon ti-crown"></i>
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>
