<header class="homeHeaderWhite">
    <div class="container">
        <nav>
            <a class="anchorLogo" href="/" aria-label="To the home page">
                <img src="/images/header_white.png" alt="Logo Diego Navarro Digital Solutions">
            </a>
            <ul>
                <li><a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="/">HOME</a></li>
                <li><a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="/about">ABOUT</a></li>
                <li><a class="<?= $activePage === 'projects' ? 'active' : '' ?>" href="/projects">PROJECTS</a></li>
                <li><a class="<?= $activePage === 'media' ? 'active' : '' ?>" href="/media">MEDIA</a></li>
                <li><a class="<?= $activePage === 'blog' ? 'active' : '' ?>" href="/blog">BLOG</a></li>
                <li><a class="<?= $activePage === 'contact' ? 'active' : '' ?>" href="/contact">CONTACT</a></li>
            </ul>
            <div id="icons"></div>
        </nav>
    </div>
</header>
