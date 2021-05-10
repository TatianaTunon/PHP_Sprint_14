@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.sidebar')

<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
           <!-- HEADER DESKTOP-->
           @include('layouts.header')
    <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Nova Botiga</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="POST" action="{{ route('shops.store') }}" class="form-horizontal">
                                            @csrf <!--token-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="name" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control">
                                                    @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>       
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="capacitat" class=" form-control-label">Capacitat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="capacitat" name="capacitat" placeholder="Capacitat" value="{{ old('capacitat') }}" class="form-control">
                                                    @error('capacitat')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                    </form>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>