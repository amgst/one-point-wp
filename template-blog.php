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

    <!-- Featured Article -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4 text-center">Featured Article</h2>
            </div>
            
            <?php
            // Get the most recent post as featured
            $featured_post = get_posts(array(
                'numberposts' => 1,
                'post_status' => 'publish'
            ));
            
            if ($featured_post) :
                $post = $featured_post[0];
                setup_postdata($post);
            ?>
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover-lift">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="p-8">
                            <div class="flex items-center mb-4">
                                <span class="bg-slate-800 text-white px-3 py-1 rounded-full text-sm font-bold mr-3">Featured</span>
                                <span class="text-gray-500 text-sm"><?php echo get_the_date('F j, Y'); ?></span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold text-slate-800 mb-4">
                                <a href="<?php the_permalink(); ?>" class="hover:text-slate-600 transition duration-300">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                <?php echo wp_trim_words(get_the_excerpt() ?: get_the_content(), 30); ?>
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-slate-800 rounded-full flex items-center justify-center mr-3">
                                        <i class="fas fa-user text-white"></i>
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900"><?php the_author(); ?></p>
                                        <p class="text-sm text-gray-500">Security Expert</p>
                                    </div>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300">
                                    Read More
                                </a>
                            </div>
                        </div>
                        <div class="lg:p-8">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="h-64 lg:h-full rounded-lg overflow-hidden">
                                    <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                                </div>
                            <?php else : ?>
                                <div class="h-64 lg:h-full bg-slate-800 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-shield-alt text-white text-6xl"></i>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <div class="bg-gray-50 rounded-lg p-12 text-center">
                    <i class="fas fa-newspaper text-6xl text-gray-400 mb-6"></i>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">No Posts Yet</h3>
                    <p class="text-gray-600">Check back soon for security insights and industry updates!</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
                            </div>
                            <a href="<?php echo home_url('/blog/ai-surveillance'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <svg width="100%" height="400" viewBox="0 0 500 400" class="w-full h-full">
                            <!-- AI/Tech background -->
                            <rect width="500" height="400" fill="#1c222c" opacity="0.1"/>
                            
                            <!-- Network nodes -->
                            <g fill="#978d86" opacity="0.7">
                                <circle cx="100" cy="100" r="8"/>
                                <circle cx="200" cy="80" r="6"/>
                                <circle cx="300" cy="120" r="10"/>
                                <circle cx="400" cy="90" r="7"/>
                                <circle cx="150" cy="200" r="9"/>
                                <circle cx="350" cy="180" r="8"/>
                                <circle cx="250" cy="250" r="6"/>
                                <circle cx="120" cy="300" r="7"/>
                                <circle cx="380" cy="280" r="9"/>
                            </g>
                            
                            <!-- Connection lines -->
                            <g stroke="#978d86" stroke-width="2" opacity="0.5">
                                <line x1="100" y1="100" x2="200" y2="80"/>
                                <line x1="200" y1="80" x2="300" y2="120"/>
                                <line x1="300" y1="120" x2="400" y2="90"/>
                                <line x1="100" y1="100" x2="150" y2="200"/>
                                <line x1="300" y1="120" x2="350" y2="180"/>
                                <line x1="150" y1="200" x2="250" y2="250"/>
                                <line x1="250" y1="250" x2="350" y2="180"/>
                                <line x1="150" y1="200" x2="120" y2="300"/>
                                <line x1="350" y1="180" x2="380" y2="280"/>
                            </g>
                            
                            <!-- AI Camera -->
                            <g transform="translate(200,150)">
                                <rect x="0" y="0" width="100" height="60" fill="#374151" rx="10"/>
                                <circle cx="50" cy="30" r="20" fill="#1f2937"/>
                                <circle cx="50" cy="30" r="15" fill="#978d86"/>
                                <circle cx="50" cy="30" r="8" fill="#1f2937"/>
                                
                                <!-- AI indicators -->
                                <rect x="10" y="10" width="15" height="3" fill="#10b981" rx="1"/>
                                <rect x="10" y="15" width="20" height="3" fill="#978d86" rx="1"/>
                                <rect x="10" y="20" width="12" height="3" fill="#ef4444" rx="1"/>
                                
                                <!-- Scanning lines -->
                                <g stroke="#978d86" stroke-width="1" opacity="0.8">
                                    <line x1="50" y1="30" x2="150" y2="10"/>
                                    <line x1="50" y1="30" x2="150" y2="50"/>
                                    <line x1="50" y1="30" x2="150" y2="90"/>
                                </g>
                            </g>
                            
                            <!-- Data visualization -->
                            <g transform="translate(320,200)">
                                <rect x="0" y="0" width="120" height="80" fill="#f3f4f6" stroke="#9ca3af" stroke-width="2" rx="5"/>
                                <rect x="10" y="10" width="100" height="60" fill="#1f2937" rx="3"/>
                                
                                <!-- Chart bars -->
                                <g fill="#10b981">
                                    <rect x="20" y="50" width="8" height="15"/>
                                    <rect x="35" y="40" width="8" height="25"/>
                                    <rect x="50" y="35" width="8" height="30"/>
                                    <rect x="65" y="45" width="8" height="20"/>
                                    <rect x="80" y="30" width="8" height="35"/>
                                    <rect x="95" y="38" width="8" height="27"/>
                                </g>
                                
                                <!-- Screen glow -->
                                <rect x="10" y="10" width="100" height="60" fill="none" stroke="#978d86" stroke-width="1" opacity="0.5" rx="3"/>
                            </g>
                            
                            <!-- Security shield -->
                            <g transform="translate(50,250)">
                                <path d="M30,0 L60,0 L60,20 L45,35 L15,35 L0,20 L0,0 L30,0 Z" fill="#1c222c"/>
                                <path d="M30,5 L55,5 L55,20 L45,30 L15,30 L5,20 L5,5 L30,5 Z" fill="#978d86"/>
                                <circle cx="30" cy="17" r="8" fill="#1c222c"/>
                                <path d="M26,17 L29,20 L34,15" stroke="white" stroke-width="2" fill="none"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Categories -->
    <section class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Browse by Category</h2>
                <p class="text-gray-600 text-lg">Explore our security insights organized by topic</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg hover-lift interactive-card">
                    <div class="text-center">
                        <div class="bg-slate-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-slate-800 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-2">Security Technology</h3>
                        <p class="text-gray-600 text-sm mb-4">Latest innovations in security systems and technology</p>
                        <span class="bg-slate-800 text-white px-3 py-1 rounded-full text-xs">12 Articles</span>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg hover-lift interactive-card">
                    <div class="text-center">
                        <div class="bg-slate-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-building text-slate-800 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-2">Commercial Security</h3>
                        <p class="text-gray-600 text-sm mb-4">Business security strategies and best practices</p>
                        <span class="bg-slate-800 text-white px-3 py-1 rounded-full text-xs">8 Articles</span>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg hover-lift interactive-card">
                    <div class="text-center">
                        <div class="bg-slate-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-home text-slate-800 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-2">Residential Security</h3>
                        <p class="text-gray-600 text-sm mb-4">Home security tips and residential protection</p>
                        <span class="bg-slate-800 text-white px-3 py-1 rounded-full text-xs">6 Articles</span>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg hover-lift interactive-card">
                    <div class="text-center">
                        <div class="bg-slate-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-gavel text-slate-800 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-2">Industry News</h3>
                        <p class="text-gray-600 text-sm mb-4">Security industry updates and regulatory changes</p>
                        <span class="bg-slate-800 text-white px-3 py-1 rounded-full text-xs">10 Articles</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Articles -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Recent Articles</h2>
                <p class="text-gray-600 text-lg">Stay up to date with our latest security insights</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                // Get recent posts (excluding the featured post)
                $recent_posts = get_posts(array(
                    'numberposts' => 6,
                    'post_status' => 'publish',
                    'offset' => 1 // Skip the first post as it's used as featured
                ));
                
                if ($recent_posts) :
                    foreach ($recent_posts as $post) :
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
                        <h3 class="text-2xl font-bold text-slate-800 mb-4">No Recent Articles</h3>
                        <p class="text-gray-600">Check back soon for more security insights!</p>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="text-center mt-12">
                <?php if (get_posts(['numberposts' => 1])) : ?>
                    <a href="<?php echo home_url('/blog'); ?>" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        View All Articles
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
        <!-- Newsletter Signup -->
    <section class="bg-slate-800">
        <div class="max-w-4xl mx-auto px-4 py-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Stay Ahead of Threats</h2>
            <p class="text-stone-400 text-lg mb-8">
                Subscribe to our newsletter for the latest security news, tips, and special offers.
            </p>
            <form class="flex flex-col md:flex-row justify-center items-center gap-4 max-w-lg mx-auto">
                <input 
                    type="email" 
                    placeholder="Enter your email" 
                    class="w-full md:w-auto flex-grow px-4 py-3 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-stone-400"
                >
                <button 
                    type="submit"
                    class="w-full md:w-auto bg-stone-500 hover:bg-stone-600 text-slate-800 font-bold py-3 px-8 rounded-lg transition duration-300"
                >
                    Subscribe
                </button>
            </form>
        </div>
    </section>

<?php
get_footer();
?>
