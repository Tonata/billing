@component('components.tables.table')
    @slot('title')
        Testing
    @endslot

<a href="{{ route('model.create') }}" class="btn btn-success">Add Model</a>

    @slot('thead')
        <th>Name</th>
        <th>Position</th>

    @endslot

    @slot('tfoot')
        <th>Name</th>
        <th>Position</th>

    @endslot

    @slot('tbody')
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
        </tr>
    @endslot

    @slot('card_footer')
        Updated yesterday at 11:59 PM
    @endslot
@endcomponent
