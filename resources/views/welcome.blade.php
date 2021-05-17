@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.sidebar')

<!DOCTYPE html>
<html lang="en">

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
                <div class="col-md-12">
                    <img src="theme/images/whitecollar.jpg" class="img-fluid .rounded mx-auto d-block" alt="Responsive image">
            
                </div>            
            </div>
        </div>
    </div>   
</div>

</div>
</body>

</html>
<!-- end document-->
