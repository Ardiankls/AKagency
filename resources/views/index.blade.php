@extends('layouts.app')
@section('content')
<div class="carousel slide" data-ride="carousel" id="carousel-1">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/redvv.png" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/izone.jpg" alt="Slide Image"></div>
        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/iu.jpg" alt="Slide Image"></div>
    </div>
    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
    <ol
        class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
    </ol>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection()
