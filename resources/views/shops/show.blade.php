

    <div class="row justify-content-center">    
        <a href="{{ route('shops.index') }}" class="btn btn-lg btn-secondary">Volver al index</a>
    </div>
    </div>
</div>
</html>
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
<h2 class="col-lg-6 offset-lg-3"><?php echo ($shops->name); ?> </h2>
<div class="col-lg-6 offset-lg-2">
    <div class="col-md-6">
        <div class="container-fluid">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Author: </th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
               @foreach($quadres as $quadre)
               <tr>
                    <td><?php echo ($quadre->author_name); ?></td>
                    <td><?php echo ($quadre->title); ?></td>
                @endforeach         
                </tbody>
            </table>
            
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
