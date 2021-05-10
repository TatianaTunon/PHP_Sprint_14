@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.sidebar')

<!DOCTYPE html>
<html lang="en">

<body class="animsition">
<div class="page-wrapper">

<!-- PAGE CONTAINER-->
<div class="page-container">
@include('layouts.header')

<!-- MAIN CONTENT-->

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card">
                        <div class="card-header">
                        <strong> Editar Quadre </strong>
                        <form method="POST" action="{{ route('quadres.update', $quadre->id) }}">
                        @csrf <!--token-->
                        @method('PUT')                      
                        </div>
                        <div class="card-body card-block">
                            <form method="POST" action="{{ route('quadres.store') }}" class="form-horizontal">
                                @csrf <!--token-->
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="author_name" class=" form-control-label">Author</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="author_name" name="author_name" placeholder="Author" value="{{ old('author_name', $quadre->author_name) }}" class="form-control">
                                        @error('author_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="title" class=" form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="title" name="title" placeholder="Title" value="{{ old('title', $quadre->title) }}" class="form-control">
                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="price" class=" form-control-label">Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="price" name="price" placeholder="Price" value="{{ old('price', $quadre->price) }}" class="form-control">
                                        @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">             
                                    <div class="col col-md-3">
                                        <label for="shop_id" class=" form-control-label">botiga</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="shop_id" id="shop_id" class="form-control">
                                        @foreach($shops as $shop)
                                            <option value="{{ $shop ['id'] }}">
                                                {{ $shop ['name'] }}
                                            </option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>    
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Edit
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
</body>

</html>
<!-- end document-->
