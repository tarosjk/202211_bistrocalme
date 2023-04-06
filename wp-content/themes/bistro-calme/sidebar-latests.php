<?php
    $args = [
        'post_type' => 'post', //投稿タイプ（投稿、固定ページ、メディア...)
        'posts_per_page' => 5,
    ];
    $the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) : ?>
    <aside class="archive">
        <h2 class="archive_title">最新記事</h2>
        <ul class="archive_list">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
            <?php
            // $postを元に戻す
            wp_reset_postdata();
            ?>
        </ul>
    </aside>
<?php endif; ?>