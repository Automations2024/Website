<?php
/**
 * Template Name: Blog Page
 */
get_header();

// 1) Define all blog cards here (you can add more later)
$blogs = [
    [
        'title'   => 'Enhancing Inventory Management with AI in Oracle Inventory Cloud',
        'image'   => get_stylesheet_directory_uri() . '/top/h/assets/img/666abfa747fb7.jpg',
        'link'    => 'https://your-link-here.com',
        'date_d'  => '13',
        'date_m'  => 'June',
        'excerpt' => 'In the dynamic world of supply chain management, effective inventory management is essential for optimizing operations, reducing costs, and meeting customer demands. With the advent of Artificial Intelligence (AI), organizations now have the opportunity to revolutionize their inventory management processes and drive greater efficiency and accuracy. In this blog, we explore how AI is transforming inventory management within Oracle Inventory Cloud and the myriad benefits it brings to organizations.',
    ],
    // next blogs...

 [
        'title'   => 'Leveraging AI to Revolutionize Procurement: Exploring Oracle Procurement Cloud',
        'image'   => get_stylesheet_directory_uri() . '/top/h/assets/img/666ac0f712ce1.jpg',
        'link'    => 'https://your-link-here.com',
        'date_d'  => '13',
        'date_m'  => 'June',
        'excerpt' => ' In todays rapidly evolving business landscape, organizations are constantly seeking innovative solutions to streamline their procurement processes and drive efficiency. Artificial Intelligence (AI) has emerged as a game-changer in the realm of procurement, offering unprecedented opportunities for automation, optimization, and strategic decision-making. In this blog, we delve into the transformative power of AI within Oracle Procurement Cloud and how it is reshaping the future of procurement.',
    ],

    

    // Add more blogs here in future (no code change needed for pagination)
];

// 2) Pagination setup (2 per page)
$per_page   = 2;
$total      = count( $blogs );
$total_page = ( $total > 0 ) ? ceil( $total / $per_page ) : 1;

$current = isset( $_GET['page'] ) ? max( 1, intval( $_GET['page'] ) ) : 1;
if ( $current > $total_page ) {
    $current = $total_page;
}

$offset     = ( $current - 1 ) * $per_page;
$currentSet = array_slice( $blogs, $offset, $per_page );
?>

<div class="breadcrumb-area shadow dark bg-cover text-center text-light" style="background-image: url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/top/h/assets/img/blog.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Blogs</h1>
            </div>
        </div>
    </div>
</div>

<div class="blog-area full-blog blog-standard full-blog grid-colum default-padding">
    <div class="container">
        <div class="blog-items content-less">
            <div class="blog-content">
                <div class="blog-item-box">
                    <div class="row">

                        <?php if ( ! empty( $currentSet ) ) : ?>
                            <?php foreach ( $currentSet as $blog ) : ?>
                                <div class="col-lg-6 col-md-6 single-item">
                                    <div class="item">
                                        <div class="thumb blog_img">
                                            <a href="<?php echo esc_url( $blog['link'] ); ?>">
                                                <img class="h-100" src="<?php echo esc_url( $blog['image'] ); ?>" alt="<?php echo esc_attr( $blog['title'] ); ?>">
                                            </a>
                                            <div class="date">
                                                <strong><?php echo esc_html( $blog['date_d'] ); ?></strong>
                                                <span><?php echo esc_html( $blog['date_m'] ); ?></span>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4 class="blog__title">
                                                <a href="<?php echo esc_url( $blog['link'] ); ?>">
                                                    <?php echo esc_html( $blog['title'] ); ?>
                                                </a>
                                            </h4>
                                            <p><?php echo esc_html( $blog['excerpt'] ); ?></p>
                                            <a class="btn circle btn-theme-border btn-sm" href="<?php echo esc_url( $blog['link'] ); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="col-12">
                                <p>No blogs found.</p>
                            </div>
                        <?php endif; ?>

                    </div>

                    <!-- Pagination -->
                    <?php if ( $total_page > 1 ) : ?>
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <!-- Prev -->
                                        <li class="page-item <?php echo $current <= 1 ? 'disabled' : ''; ?>">
                                            <a class="page-link" href="<?php echo $current > 1 ? esc_url( add_query_arg( 'page', $current - 1, get_permalink() ) ) : '#'; ?>">
                                                <i class="fas fa-angle-double-left"></i>
                                            </a>
                                        </li>

                                        <?php for ( $i = 1; $i <= $total_page; $i++ ) : ?>
                                            <li class="page-item <?php echo $i === $current ? 'active' : ''; ?>">
                                                <a class="page-link" href="<?php echo esc_url( add_query_arg( 'page', $i, get_permalink() ) ); ?>">
                                                    <?php echo esc_html( $i ); ?>
                                                </a>
                                            </li>
                                        <?php endfor; ?>

                                        <!-- Next -->
                                        <li class="page-item <?php echo $current >= $total_page ? 'disabled' : ''; ?>">
                                            <a class="page-link" href="<?php echo $current < $total_page ? esc_url( add_query_arg( 'page', $current + 1, get_permalink() ) ) : '#'; ?>">
                                                <i class="fas fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- /Pagination -->

                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
