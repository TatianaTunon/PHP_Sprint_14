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
   
        <h2 class="col-lg-6 offset-lg-5"> Shops </h2>

<div class="col-lg-6 offset-lg-2">
    <div class="col-md-6">
        <div class="container-fluid">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Capacitat</th>
                        <th> <a href="{{ route('shops.create') }}" class="btn btn-mg btn-secondary">Nueva shop</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($shops as $shop)
                    <tr>
                    <td>{{ $shop->id }}</td>
                    <td>{{ $shop->name}}</td>
                    <td>{{ $shop->capacitat}}</td>
                    
                <!-- EDIT Y DELETE-->
                    <td> <div class="btn-group">
                    <a href="{{route('shops.edit', $shop->id)}}" class="btn btn-warning ">Editar</a>
                    <form method="POST" action="{{route('shops.destroy', $shop->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" href="{{route('shops.destroy', $shop->id)}}" class="btn btn-danger">Borrar</button>
                    </div> </td>
                    </form>
                @endforeach
                    </tr>            
                </tbody>
            </table>
            
        </div>   
    </div>
</div>   
   
   <!-- BOTÓN SEARCH -->  
<div class="col-lg-12 offset-lg-3 mt-1">
<form>
<div class="input-group">
  <div class="form-outline">
  <input name="buscar" class="form-control" type="search" placeholder="search shop" aria-label="Search">
  </div>
  <button type="submit" class="btn btn-secondary">
    <i class="fas fa-search"></i>
  </button>
</div>
</form>
</div>

</div>

</div>
</div>
</body>
</html>
<!-- end document-->
