{{--<div class="table-component">--}}
    <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> {{$title}}</div>
        <div class="card-body">
            <div class="table-responsive">
                {{$slot}}
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>

                        {{ $thead }}
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>

                        {{$tfoot}}
                    </tr>
                    </tfoot>
                    <tbody>

                        {{ $tbody }}
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">{{$card_footer}}</div>
    </div>
{{--</div>--}}