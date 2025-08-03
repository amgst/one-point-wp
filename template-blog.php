<?php
/*
Template Name: Blog
*/
get_header();
?>

    <!-- Hero Section -->
    <section class="pt-20 bg-slate-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Security <span class="text-stone-400">Insights</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                    Stay informed with the latest security trends, tips, and industry insights from our expert team.
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Posts -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">All Articles</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                // Get all published posts
                $all_posts = get_posts(array(
                    'numberposts' => -1, // Get all posts
                    'post_status' => 'publish'
                ));
                
                if ($all_posts) :
                    foreach ($all_posts as $post) :
                        setup_postdata($post);
                ?>
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover-lift">
                        <div class="h-48 bg-gray-200">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover')); ?>
                            <?php else : ?>
                                <div class="w-full h-full flex items-center justify-center bg-slate-200">
                                    <i class="fas fa-shield-alt text-slate-800 text-4xl"></i>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-3">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    $cat_colors = array(
                                        'technology' => 'bg-blue-100 text-blue-900',
                                        'security-guards' => 'bg-red-100 text-red-900',
                                        'access-control' => 'bg-green-100 text-green-900',
                                        'surveillance' => 'bg-purple-100 text-purple-900'
                                    );
                                    $cat_slug = $categories[0]->slug;
                                    $cat_class = isset($cat_colors[$cat_slug]) ? $cat_colors[$cat_slug] : 'bg-slate-100 text-slate-800';
                                    echo '<span class="' . $cat_class . ' px-2 py-1 rounded text-xs font-bold mr-2">' . esc_html($categories[0]->name) . '</span>';
                                }
                                ?>
                                <span class="text-gray-500 text-sm"><?php echo get_the_date('M j, Y'); ?></span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-800 mb-3 hover:text-slate-600 transition duration-300">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="text-gray-600 mb-4">
                                <?php echo wp_trim_words(get_the_excerpt() ?: get_the_content(), 20); ?>
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center mr-2">
                                        <i class="fas fa-user text-white text-xs"></i>
                                    </div>
                                    <span class="text-sm text-gray-600"><?php the_author(); ?></span>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="text-slate-800 hover:text-slate-600 font-bold text-sm">Read More →</a>
                            </div>
                        </div>
                    </article>
                <?php
                    endforeach;
                    wp_reset_postdata();
                else :
                ?>
                    <div class="col-span-full text-center py-12">
                        <i class="fas fa-newspaper text-6xl text-gray-400 mb-6"></i>
                        <h3 class="text-2xl font-bold text-slate-800 mb-4">No Blog Posts</h3>
                        <p class="text-gray-600">Check back soon for new content!</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php
get_footer();
?>
