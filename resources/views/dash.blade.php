@extends('layouts.app')

@section('title')
    Dashboard
@endsection

{{--custom css files--}}
@section('custom-css')
    <style>

    </style>
@endsection

{{--breadcrmb links--}}
@section('breadcrumb-item')

@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading" href="{{url('/home')}}">Dashboard</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            {{--You are logged in as {{ Auth::user()->name}} !--}}



                    <div class="col-md-4" >

                        <div class="card mb-3 ">
                            <div class="card-header">
                                <i class="fa fa-area-chart"></i> Statistics</div>
                            <div class="card-body">
                                <canvas id="myAreaChart" width="100%" height="30"></canvas>
                            </div>

                        </div>



                    </div>




        </div>
    </div>

    {{--    @include('partials.tables')--}}

@endsection


{{--custom javascript--}}

<!-- Page level plugin JavaScript-->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

<!-- Custom scripts for this page-->
<script src="{{asset('js/sb-admin-charts.min.js')}}"></script>

{{--prepend javascript--}}
@section('js-before')
    <script type="text/javascript">

    </script>
@endsection
{{--append javascript--}}
@section('js-after')
    <!-- Page level plugin JavaScript-->
    {{--<script src="vendor/chart.js/Chart.min.js"></script>--}}
    <!-- Custom scripts for this page-->
    {{--<script src="js/sb-admin-charts.min.js"></script>--}}

    {{--<script src="vendor/datatables/jquery.dataTables.js"></script>--}}
    {{--<script src="vendor/datatables/dataTables.bootstrap4.js"></script>--}}

    {{--<script src="js/sb-admin-datatables.min.js"></script>--}}

    <script type="text/javascript">

    </script>
@endsection
