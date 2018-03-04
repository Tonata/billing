@component('components.tables.table')
    @slot('title')
        Users
    @endslot

@section('custom-css')

    <style>

    </style>

@endsection

<a href="{{ route('users.create') }}" class="btn btn-success">New User</a>

@slot('thead')
    <th>Name</th>
    {{--<th>Surname</th>--}}
    <th>Email</th>
    {{--<th>Menu Access</th>--}}
    <th>Operations</th>
@endslot

@slot('tfoot')
    <th>Name</th>
    {{--<th>Surname</th>--}}
    <th>Email</th>
    {{--<th>Menu Access</th>--}}
    <th>Operations</th>
@endslot

@slot('tbody')
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            {{--<td>{{$user->getPermissionsViaRoles()}}</td>--}}
            {{--<?--}}
                {{--$user->getPermissionsViaRoles();--}}
            {{--?>--}}
            {{--<td>{{$user->surname}}</td>--}}
            <td>{{$user->email}} </td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-default pull-left" data-toggle="tooltip" rel="tooltip" title="Edit" style="margin-right: 3px;">
                    <i class="fa fa-edit"></i> </a>
                {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'id' => 'delete-form', 'onsubmit' => 'return ConfirmDelete()' ]) !!}
                {!! Form::macro('SubmitBtn',function (){
                    return '<button type="submit" class="btn btn-default"> <i class="fa fa-remove" data-toggle="tooltip" rel="tooltip" title="Delete" style="color: red;"></i> </button>';
                }) !!}
                {!! Form::SubmitBtn() !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
@endslot

@slot('card_footer')
    Updated at 11:59 PM
@endslot
@endcomponent

<script>
    function ConfirmDelete(){
        var x = confirm ("Are you sure you want to delete this user?");
        if (x)
            return true;
        else
            return false;
    }
</script>