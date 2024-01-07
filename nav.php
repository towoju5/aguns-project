
<div class="header">

<!-- Navigation Bar -->
<nav class=" p-4">
    <div class="container mx-auto flex justify-between items-center">

        <!-- Logo or Brand -->
        <div class="text-xl font-semibold flex gap-4">
            <img src="./logo.svg" alt="Logo">
            <span>CARD VALIDATION</span>
        </div>

        <!-- Navigation Links - Desktop -->
        <div class="hidden md:flex space-x-4">
            <a href="./all-cards.php" class="text-dark font-light">ALL GIFTCARDS</a>
            <a href="./page.php?id=1" class="text-dark font-light">APPLE GIFTCARD</a>
            <a href="./page.php?id=2" class="text-dark font-light">EBAY GIFTCARD</a>
            <a href="./page.php?id=3" class="text-dark font-light">VISA GIFTCARD</a>
            <a href="./page.php?id=4" class="text-dark font-light">AMEX GIFTCARD</a>
        </div>

        <!-- Hamburger Menu - Mobile -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="fixed inset-0 bg-gray-800 bg-opacity-75 hidden md:hidden"></div>

<!-- Mobile Menu Content -->
<div id="mobile-menu" class="fixed inset-y-0 left-0 transform translate-x-full bg-white w-64 p-4 shadow-lg overflow-y-auto ease-in-out duration-300 hidden md:hidden">
    <!-- Mobile Navigation Links -->
    <a href="./all-cards.php" class="block py-2 text-gray-800 hover:bg-gray-200">ALL GIFTCARDS</a>
    <a href="./page.php?id=1" class="block py-2 text-gray-800 hover:bg-gray-200">APPLE GIFTCARD</a>
    <a href="./page.php?id=2" class="block py-2 text-gray-800 hover:bg-gray-200">EBAY GIFTCARD</a>
    <a href="./page.php?id=3" class="block py-2 text-gray-800 hover:bg-gray-200">VISA GIFTCARD</a>
    <a href="./page.php?id=4" class="block py-2 text-gray-800 hover:bg-gray-200">AMEX GIFTCARD</a>
</div>

</div>