@include('partials.header')
@include('admin.partials.nav')

<div class="md:ml-64 p-4">
    <div class="mx-auto max-w-3xl">
        @include('partials.error')
        @include('partials.flash')
        @yield('content')
    </div>
</div>

@include('partials.footer')
