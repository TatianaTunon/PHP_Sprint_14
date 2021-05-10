@extends('layouts.head')
@extends('layouts.footer')
@extends('layouts.sidebar')

<body class="animsition">
    <div class="page-wrapper">
    

<!-- PAGE CONTAINER-->
<div class="page-container2">
<!-- HEADER DESKTOP-->
<header class="header-desktop2">
@include('layouts.header')
</header>
<!-- END HEADER DESKTOP-->

<!-- BREADCRUMB-->
<section class="au-breadcrumb m-t-75">
<x-app-layout>
    <x-slot name="header"></x-slot>
</x-app-layout>
</section>
<!-- END BREADCRUMB-->
<section class="au-breadcrumb m-t-75">
</section>
           
            <!-- END STATISTIC-->

        
</body>

