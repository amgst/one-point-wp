<?php
get_header();
?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <!-- Article Header -->
        <section class="pt-20 bg-slate-800 text-white">
            <div class="max-w-4xl mx-auto px-4 py-20">
                <div class="mb-6">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo '<span class="bg-stone-400 text-slate-800 px-3 py-1 rounded-full text-sm font-bold mr-3">' . esc_html($categories[0]->name) . '</span>';
                    }
                    ?>
                    <span class="text-gray-300 text-sm"><?php echo get_the_date('F j, Y'); ?></span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?>
                    <p class="text-xl text-gray-300 leading-relaxed">
                        <?php the_excerpt(); ?>
                    </p>
                <?php endif; ?>
            </div>
        </section>

        <!-- Featured Image -->
        <?php if (has_post_thumbnail()) : ?>
            <section class="bg-white">
                <div class="max-w-4xl mx-auto px-4 py-8">
                    <div class="rounded-lg overflow-hidden shadow-lg">
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Article Content -->
        <article class="py-12 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <div class="prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>

                <!-- Author Info -->
                <div class="mt-12 p-8 bg-gray-50 rounded-xl flex items-center">
                    <div class="w-16 h-16 bg-slate-800 rounded-full flex items-center justify-center mr-6">
                        <i class="fas fa-user text-white text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-slate-800 mb-2">
                            <?php the_author(); ?>
                        </h4>
                        <p class="text-gray-600">
                            Published on <?php echo get_the_date('F j, Y'); ?>
                            <?php if (get_the_modified_date() !== get_the_date()) : ?>
                                • Updated on <?php echo get_the_modified_date('F j, Y'); ?>
                            <?php endif; ?>
                        </p>
                        <?php if (get_the_author_meta('description')) : ?>
                            <p class="text-gray-600 mt-2">
                                <?php the_author_meta('description'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Tags -->
                <?php
                $tags = get_the_tags();
                if ($tags) : ?>
                    <div class="mt-8">
                        <h4 class="text-lg font-bold text-slate-800 mb-4">Tags:</h4>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($tags as $tag) : ?>
                                <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">
                                    <?php echo esc_html($tag->name); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Navigation -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <div class="flex justify-between items-center">
                        <div class="text-left">
                            <?php
                            $prev_post = get_previous_post();
                            if ($prev_post) : ?>
                                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="text-slate-800 hover:text-slate-600 transition duration-300">
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    <span class="text-sm text-gray-600 block">Previous Article</span>
                                    <span class="font-bold"><?php echo wp_trim_words($prev_post->post_title, 6); ?></span>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="text-right">
                            <?php
                            $next_post = get_next_post();
                            if ($next_post) : ?>
                                <a href="<?php echo get_permalink($next_post->ID); ?>" class="text-slate-800 hover:text-slate-600 transition duration-300">
                                    <span class="text-sm text-gray-600 block">Next Article</span>
                                    <span class="font-bold"><?php echo wp_trim_words($next_post->post_title, 6); ?></span>
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Related Posts -->
        <?php
        $categories = get_the_category();
        if ($categories) {
            $category_ids = array();
            foreach ($categories as $category) {
                $category_ids[] = $category->term_id;
            }
            
            $related_posts = get_posts(array(
                'category__in' => $category_ids,
                'numberposts' => 3,
                'post__not_in' => array(get_the_ID()),
                'orderby' => 'rand'
            ));
            
            if ($related_posts) : ?>
                <section class="py-20 bg-gray-100">
                    <div class="max-w-7xl mx-auto px-4">
                        <h2 class="text-3xl font-bold text-slate-800 mb-12 text-center">Related Articles</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <?php foreach ($related_posts as $post) : setup_postdata($post); ?>
                                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover-lift">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="h-48 bg-gray-200">
                                            <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover')); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="p-6">
                                        <div class="flex items-center mb-3">
                                            <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)) {
                                                echo '<span class="bg-slate-800 text-white px-2 py-1 rounded text-xs font-bold mr-2">' . esc_html($categories[0]->name) . '</span>';
                                            }
                                            ?>
                                            <span class="text-gray-500 text-xs"><?php echo get_the_date('M j, Y'); ?></span>
                                        </div>
                                        <h3 class="text-xl font-bold text-slate-800 mb-3 hover:text-slate-600 transition duration-300">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="text-slate-800 font-bold text-sm hover:text-slate-600 transition duration-300">
                                            Read More <i class="fas fa-arrow-right ml-1"></i>
                                        </a>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
                <?php wp_reset_postdata(); ?>
            <?php endif;
        }
        ?>

        <!-- Comments Section -->
        <?php if (comments_open() || get_comments_number()) : ?>
            <section class="py-20 bg-white">
                <div class="max-w-4xl mx-auto px-4">
                    <?php comments_template(); ?>
                </div>
            </section>
        <?php endif; ?>

    <?php endwhile; ?>
<?php else : ?>
    <!-- No post found -->
    <section class="pt-20 py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold text-slate-800 mb-6">Article Not Found</h1>
            <p class="text-gray-600 text-lg mb-8">
                Sorry, the article you're looking for doesn't exist or has been moved.
            </p>
            <a href="<?php echo home_url('/blog'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-4 px-8 rounded-lg transition duration-300">
                Back to Blog
            </a>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
