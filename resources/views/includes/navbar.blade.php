<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="position: fixed;">

    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
    @include('includes.right_nav')

    <ul class="navbar-nav navbar-right ml-auto">
        {{--include the dropdown notifications--}}
        @include('partials.notifications.notifications')
        {{--include the search input box--}}
        @include('partials.search')

        @auth
            @include('partials.top-nav.top-nav')
        @endauth
        {{--@endguest--}}
    </ul>
    </div>
</nav>