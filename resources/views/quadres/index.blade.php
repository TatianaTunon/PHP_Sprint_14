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
  
    <h2 class="col-lg-6 offset-lg-4"> Quadres </h2> 

<div class="col-lg-6">
    <div class="col-md-6">
        <div class="container-fluid">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Author</th>
                        <th>Name</th>
                        <th>Preu</th>
                        <th>Date</th>
                        <th>Botiga</th>
                        <th> <a href="{{ route('quadres.create') }}" class="btn btn-mg btn-secondary">Nueva quadre</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($quadres as $quadre)
                    <tr>
                    <td>{{ $quadre->id }}</td>
                    <td>{{ $quadre->author_name}}</td>
                    <td>{{ $quadre->title}}</td>
                    <td>{{ $quadre->price}}</td>
                    <td>{{ $quadre->created_at}}</td>
                    <td>{{ $quadre->shop->name}}</td> 

                <!-- EDIT Y DELETE-->
                    <td> <div class="btn-group">
                    <a href="{{route('quadres.edit', $quadre->id)}}" class="btn btn-warning ">Editar</a>
                    <form method="POST" action="{{route('quadres.destroy', $quadre->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" href="{{route('quadres.destroy', $quadre->id)}}"class="btn btn-danger">Borrar</button>
                    </div> </td>
                    </form>
                @endforeach
                    </tr>            
                </tbody>
            </table>
            
        </div>   
    </div>
  
</div>

  
</div>

</div>
</body>

</html>
<!-- end document-->
