<?php
/**
 * Template Name: Page
 *
 */
?>

<?php
// https://www.ozessay.com.au/custom-essay/1234123412341234
// remove /1234123412341234

if (preg_match('/\/[0-9]*$/i',
    $_SERVER['REQUEST_URI'])) {
    wp_redirect(site_url() .
        preg_replace('/\/[0-9]*$/i',
            '',
            $_SERVER['REQUEST_URI']),
        301);
    exit();
}

?>
<?php get_header(); ?>

<?php $imagesurl = get_the_post_thumbnail_url(); ?>

<div class="page-header" style="background-image: url('<?php echo $imagesurl; ?>'); background-size: cover;">
    <div class="page-header-block">
    <div class="container">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1 class="page-header-block__title"><?php the_title(); ?></h1>
        <!--            <div class="page-header-block__subtitle">Also, you can ask a writing company to do research that you are not able to handle (like outlining resources). For a professional writer it is just the matter of time to solve this problem. Our custom dissertation writers are highly-educated specialists with impeccable research and writing skills who have vast experience in preparing custom dissertation materials.The team is made up of a balanced combination of writers, university professors and scholars. Every member of out team is expert in knowing the best compiling quality regarding thesis and dissertation writing and well aware to provide such superior quality thesis and dissertation that will ensure to get high grades.</div>-->
        <div class="page-header-block__date">Date: <?php the_date(); ?></div>
        </div>
        </div>
        </div>

        <div class="page-dafault">
        <div class="container">

        <div class="row">

        <div class="col-md-8">

        <?php if (preg_match('/\/blog\/(.*)$/is', $_SERVER['REQUEST_URI'])) { ?>

            <ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> / <a itemprop="item" href="/blog"><span itemprop="name">Blog</span></a><meta itemprop="position" content="2" /></li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> / <span itemprop="name"><?php the_title(); ?></span><meta itemprop="position" content="3" /></li>
            </ul>

        <?php } else if (preg_match('/\/(.*)$/is', $_SERVER['REQUEST_URI'])) { ?>

            <ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> / <span itemprop="name"><?php the_title(); ?></span></li>
            </ul>

        <?php } ?>


        <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

            <div class="page-dafault__content">
                <?php the_content(); ?>
            </div>
            <div class="socials">
                <div class="si-share noborder clearfix">
                    <div class="fb-like" data-href="https://facebook.com/<?php the_permalink(); ?>"
                         data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>

                    <a rel="nofollow" target="_blank"
                       href='http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>'
                       class="social-icon si-borderless si-facebook" title="Share page with friends on Facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a rel="nofollow" target="_blank"
                       href='http://twitter.com/home?status= <?php the_permalink(); ?>: <?php the_title(); ?>'
                       class="social-icon si-borderless si-twitter" title="Share page with followers on Twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a rel="nofollow" target="_blank" href='https://plus.google.com/share?url=<?php the_permalink(); ?>'
                       title="Share page with followers on Google+" class="social-icon si-borderless si-gplus">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
<?php endif; ?>

    <!-- get post for link -->
<?php get_template_part('inc', 'post-artical'); ?>

    </div>

    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>

    </div>

    </div>



    </div>

<?php get_template_part('inc', 'livechat'); ?>
<?php get_footer(); ?>