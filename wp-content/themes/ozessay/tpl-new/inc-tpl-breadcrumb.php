<div class="container" xmlns="http://www.w3.org/1999/html">


    <ol itemscope itemtype="https://schema.org/BreadcrumbList"
        class="breadcrumb-writers col-lg-6 col-md-6 col-sm-10 col-xs-10">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/"><span
                        itemprop="name">Home</span></a>
            <meta itemprop="position" content="1"/>
        </li>
        <li>/</li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="<?php bloginfo('url'); echo $_SERVER["REQUEST_URI"] ?>"><span
                        itemprop="name"><?php the_title(); ?></span></a>
            <meta itemprop="position" content="2"/>
        </li>
    </ol>


</div>