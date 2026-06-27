<nav>

    <div class="logo">
        LOGO
    </div>

    <?php if(!$this->session->userdata('login')): ?>

        <a href="<?= site_url('auth/login'); ?>">
            Login
        </a>

    <?php else: ?>

        <a href="<?= site_url('website/destination'); ?>">
            Destination
        </a>

        <a href="<?= site_url('website/blog'); ?>">
            Blog
        </a>

        <a href="<?= site_url('website/about'); ?>">
            About Us
        </a>

        <a href="<?= site_url('auth/logout'); ?>">
            Logout
        </a>

    <?php endif; ?>

</nav>