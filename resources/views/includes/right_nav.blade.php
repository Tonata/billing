<!-- {{--@hasrole( $roles )--}} -->
{{--<li><a href="/users">Users</a></li>--}}
{{--@endhasrole--}}
{{--@hasrole('Admin')--}}
{{--<li><a href="/roles">Roles</a></li>--}}
{{--<li><a href="/permissions">Permissions</a></li>--}}
{{--@endhasrole--}}
{{--<li><a href="/posts">Posts</a></li>--}}
{{--</div>--}}
{{--</div>--}}

<?php
// create array to store roles
$roles = new ArrayObject();

// find all the roles needed and add then to this array
// $roles = \Spatie\Permission\Models\Role::findByName('Admin');
// $roles = \Spatie\Permission\Models\Role::findByName('Client');
?>

<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
    @include('partials.right-nav.links')

    {{-- code ( the closing tag ) continues on the next page (inludes/navbar.blade.php) --}}
