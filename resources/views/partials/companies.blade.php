@component('components.tables.table')
    @slot('title')
        Companies
    @endslot

 <a href="{{ route('companies.create') }}" class="btn btn-success">Add Company</a>
    Search: <input type="text" name="search">
    @slot('thead')
        <th>Company Name</th>
        <th>Registration Number</th>
        <th>License Expiry Date</th>
        <th>Operations</th>
    @endslot

    @slot('tfoot')
        <th>Company Name</th>
        <th>Registration Number</th>
        <th>License Expiry Date</th>
        <th>Operations</th>
    @endslot

    @slot('tbody')
      @foreach($companies as $company)
          <tr>
              <td>{{$company->name}}</td>
              <td>{{$company->registration}}</td>
              {{--<td></td> License Expiry Date --}}
              <td>
                  <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-default pull-left" data-toggle="tooltip" rel="tooltip" title="Edit" style="margin-right: 3px;">
                      <i class="fa fa-edit"></i> </a>
                  {!! Form::open(['method' => 'DELETE', 'route' => ['companies.destroy', $company->id], 'id' => 'delete-form', 'onsubmit' => 'return ConfirmDelete()' ]) !!}
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
            var x = confirm ("Are you sure you want to delete this membership?");
            if (x)
                return true;
            else
                return false;
        }
    </script>