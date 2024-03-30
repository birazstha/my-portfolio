@extends('system.layouts.master')


@section('content')
    <section class="content mr-3 ml-3">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $errors->first() }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-title">
                        @section('title')
                            Details
                        @show
                    </div>

                    @section('back')
                        <div class="card-tools">
                            <a href="{{ url()->previous() }}" class="btn btn-info btn-sm"><i
                                    class="fas fa-chevron-left"></i>
                                Back</a>
                        </div>
                    @show
                </div>

                <div class="card-body">
                    @yield('content-first-title')
                    <div class="row">
                        <div class="col-6">
                            @yield('content-first-left')
                        </div>
                        <div class="col-6">
                            @yield('content-first-right')
                        </div>
                    </div>
                </div>



                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @yield('content-second')
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @yield('content-third')
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @yield('content-fourth')
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
