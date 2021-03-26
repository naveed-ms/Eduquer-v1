@extends('layouts.app')
    <link rel="stylesheet" href="css/countries.css">
    <link rel="stylesheet" href="css/we-understand.css">


@include('layouts.partials.header')
@include('layouts.partials.we_all_understand')
<div class="container">
    <div class="row ">
        <div class="main-reason">
            we are the main reason
        </div>
    </div>
    <div class="row">
        <div class="Acces-to-more">
            Access to More Opportunities <br>
        </div>
    </div>
    <div class="row">
        <br>
        <div class="k1 col-lg-3 col-md-6 col-sm-12 flex flex-col items-center">
            <div>@svg('images/aus2.svg')</div><br>
            <h3 class="h3">Australia</h3><br><br>@svg('images/Group_1.svg')
        </div>
        <br>
        <div class="k2 col-lg-3 col-md-6 col-sm-12 flex flex-col items-center">
            <div>@svg('images/canada2.svg')</div><br>
            <h3 class="h3">Canada</h3><br><br>@svg('images/group2.svg')
        </div>
        <br>
        <div class="k3 col-lg-3 col-md-6 col-sm-12 flex flex-col items-center">
            <div>@svg('images/uk2.svg')</div><br>
            <h3 class="h3">U.K</h3><br><br>@svg('images/group3.svg')
        </div>
        <br>
        <div class="k4 col-lg-3 col-md-6 col-sm-12 flex flex-col items-center">
            <div>@svg('images/us2.svg')</div><br>
            <h3 class="h3">U.S.A</h3><br><br>
            @svg('images/group4.svg')
        </div>
    </div>
</div>
@include('layouts.partials.footer2')
