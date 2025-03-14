<div class="header section">
    <div class="header-main">
        <div class="container">
            <div class="header-wrapper">
                
                <!-- Logo -->
                <div class="header-logo">
                    <a href="./"><img src="assets/images/easyhnf-logo-dark.png" width="200" alt="Logo"></a>
                </div>

                <!-- Desktop Navigation -->
                <div class="header-menu d-none d-lg-flex">
                    <ul class="nav-menu">
                        <li><a class="<?= ($page == 'About') ? 'active' : ''; ?>" href="about">About</a></li>
                        <li><a class="<?= ($page == 'Faq') ? 'active' : ''; ?>" href="faq">Faq</a></li>
                        <li><a class="<?= ($page == 'Blog') ? 'active' : ''; ?>" href="https://medium.com/@easyhnf">Blog</a></li>
                    </ul>

                    <div class="header-btn">
                            <!-- <a class="btn btn-hover-primary" href="login">Log In</a> -->
                            <a class="btn btn-secondary btn-hover-primary" href="https://paystack.shop/easyhnf">Store NGN</a>
                            <!-- <a class="btn btn-secondary btn-hover-primary" href="https://paystack.shop/easyhnf-usd">Store USD</a> -->
                        </div>

                    <!-- Store Dropdown -->
                    <!-- <div class="header-btn">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="currencyDropdown"  aria-expanded="false">
                                Store
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="currencyDropdown">
                                <li><a class="dropdown-item" href="https://paystack.shop/easyhnf">NGN</a></li>
                                <li><a class="dropdown-item" href="https://paystack.shop/easyhnf-usd">USD</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>

                <!-- Mobile Menu Toggle Button -->
                <div class="header-toggle d-lg-none">
                    <a href="#" class="menu-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Mobile Menu -->
<div class="mobile-menu">
    <a class="menu-close" href="javascript:void(0)">
        <i class="icofont-close-line"></i>
    </a>

    <div class="mobile-menu-items">
        <ul class="nav-menu">
            <li><a class="<?= ($page == 'About') ? 'active' : ''; ?>" href="about">About</a></li>
            <li><a class="<?= ($page == 'Faq') ? 'active' : ''; ?>" href="faq">Faq</a></li>
            <li><a class="<?= ($page == 'Blog') ? 'active' : ''; ?>" href="https://medium.com/@easyhnf">Blog</a></li>
        </ul>

        <!-- Store Dropdown in Mobile -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="mobileCurrencyDropdown"  aria-expanded="false">
                Store
            </button>
            <ul class="dropdown-menu w-100" aria-labelledby="mobileCurrencyDropdown">
                <li><a class="dropdown-item" href="https://paystack.shop/easyhnf">NGN</a></li>
                <li><a class="dropdown-item" href="https://paystack.shop/easyhnf-usd">USD</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- CSS Styles -->
<style>
/* Dropdown styling */
.dropdown-menu {
    min-width: 100%;
    padding: 0.5rem 0;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
    background-color: #fff;
    display: none; /* Initially hidden */
}

.dropdown-menu.show {
    display: block !important;
}

.dropdown-item {
    padding: 0.5rem 1rem;
    text-align: left;
    white-space: nowrap;
}

.dropdown-item:hover, .dropdown-item:focus {
    background-color: #f8f9fa;
    text-decoration: none;
}

/* Mobile dropdown styling */
.mobile-menu {
    position: fixed;
    top: 0;
    right: -100%;
    width: 250px;
    height: 100%;
    background: #fff;
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2);
    transition: right 0.3s ease-in-out;
    padding: 20px;
}

.mobile-menu.show {
    right: 0;
}

.mobile-menu .dropdown {
    margin: 15px 0;
    width: 100%;
}

.mobile-menu .dropdown-toggle {
    width: 100%;
    text-align: center;
    margin-bottom: 5px;
}

.mobile-menu .dropdown-menu {
    position: static !important;
    width: 100%;
    transform: none !important;
    padding: 0;
    margin-top: 0;
    border-radius: 0;
    box-shadow: none;
    border: 1px solid #eee;
}

.mobile-menu .dropdown-item {
    padding: 10px 15px;
    text-align: center;
}

/* Active Menu Item */
.nav-menu .active {
    font-weight: bold;
    color: #007bff !important;
}
</style>

<!-- JavaScript for Dropdowns and Mobile Menu -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    function setupDropdowns() {
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function(event) {
                event.preventDefault();
                event.stopPropagation();

                const dropdownMenu = this.nextElementSibling;

                // Check if the dropdown is open
                const isOpen = dropdownMenu.classList.contains('show');

                // Close all dropdowns
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                    menu.previousElementSibling.setAttribute('aria-expanded', 'false');
                });

                // Toggle dropdown only if it was not open before
                if (!isOpen) {
                    dropdownMenu.classList.add('show');
                    this.setAttribute('aria-expanded', 'true');
                }
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                    menu.previousElementSibling.setAttribute('aria-expanded', 'false');
                });
            }
        });
    }

    setupDropdowns();
});


</script>
