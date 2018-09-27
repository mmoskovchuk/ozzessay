<div class="breadcrumb-blog" xmlns="http://www.w3.org/1999/html">

    <div class="container">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList"
            class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/"><span
                            itemprop="name">Home</span></a>
                <meta itemprop="position" content="1"/>
            </li>
            <li>/</li>
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item"
                                                                                               href="<?php bloginfo('url');
                                                                                               echo $_SERVER["REQUEST_URI"] ?>"><span
                            itemprop="name"><?php the_title(); ?></span></a>
                <meta itemprop="position" content="2"/>
            </li>
        </ol>
    </div>

</div>