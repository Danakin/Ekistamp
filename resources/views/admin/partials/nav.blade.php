<div x-data="{ showNav: false }"" @resize.window=" showNav=window.innerWidth>= 768 ? false : showNav">
    <nav :class=" {'-translate-x-64': !showNav }" class=" w-64 transform transition-transform duration-200 ease-in-out md:translate-x-0
    bg-gray-800 min-h-screen text-white fixed" id="navigation">
        Admin Nav
    </nav>

    <div class="hamburger md:hidden right-0 mt-3 mr-3 fixed" :class="{ 'active': showNav }" @click="showNav = !showNav">
        <div></div>
    </div>
</div>
