<section class="about-us-header">
    <div class="container">
        <div class="row">
            <?php if (preg_match('/\/(.*)$/is', $_SERVER['REQUEST_URI'])) { ?>
                <ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb-about">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>
                    <li id="list-style" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">About us</span></li>
                </ul>
            <?php } ?>
            <div id="header-text">
                <h1>About Our Custom Essay Service</h1>
                <p>We know everything about essay writing. In fact, we’ve already<br>helped 100K customers achieve their academic goals.</p>
            </div>
        </div>
    </div>
</section>
