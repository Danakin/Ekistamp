<div x-data="{ showNav: false }"" @resize.window=" showNav=window.innerWidth>= 768 ? false : showNav">
    <nav :class=" {'-translate-x-64': !showNav }" class=" w-64 transform transition-transform duration-200 ease-in-out md:translate-x-0
    bg-gray-800 min-h-screen text-white fixed p-4 divide-y-2 divide-white" id="navigation">
        <div class="font-bold">
            Admin Panel
        </div>
        <div class="flex flex-col mt-2">
            <p class="font-semibold">Posts</p>
            <ul class="list-disc list-inside">
                <li>
                    <a href="{{ route('admin.posts.index') }}" class="hover:text-gray-400 underline">Show</a>
                </li>
                <li>
                    <a href="{{ route('admin.posts.create') }}" class="hover:text-gray-400 underline">New</a>
                </li>
            </ul>
        </div>
        <div class="flex flex-col mt-2">
            <p class="font-semibold">Stamps</p>
            <ul class="list-disc list-inside">
                <li>
                    <a href="{{ route('admin.stamps.index') }}" class="hover:text-gray-400 underline">Show</a>
                </li>
                <li>
                    <a href="{{ route('admin.stamps.index.unapproved') }}"
                        class="hover:text-gray-400 underline">Unapproved</a>
                </li>
                <li>
                    <a href="{{ route('admin.stamps.create') }}" class="hover:text-gray-400 underline">New</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="hamburger md:hidden right-0 mt-3 mr-3 fixed" :class="{ 'active': showNav }" @click="showNav = !showNav">
        <div></div>
    </div>
</div>
