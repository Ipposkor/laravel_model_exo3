@extends('layout.app')


<div class="dropdown flex justify-center sticky top-0">
    <label tabindex="0" class="btn m-1">Click</label>
    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href="#everybody">Everybody</a></li>
        <li><a href="#allMen">Men Only</a></li>
        <li><a href="#allWomen">Women Only</a></li>
        <li><a href="#menFit">Men (18 -> 24)</a></li>
        <li><a href="#womenFit">Women (18 -> 24)</a></li>
        <li><a href="#noCondition">Less than 18 & more than 24</a></li>
    </ul>
</div>
<h1 class="text-4xl text-center">Number of Members : {{ $users->count() }}</h1>
@section('content')
    <h1 class="flex justify-center text-4xl mt-5 mb-5 " id="everybody">Everybody</h1>
    @include('partials.allMembers')
    <h1 class="flex justify-center text-4xl mt-5 mb-5 text-blue-600 " id="allMen">Men Only</h1>
    <h1 class="text-4xl text-center mb-5">Number of Members : {{ $mens->count() }}</h1>
    @include('partials.allMen')
    <h1 class="flex justify-center text-4xl mt-5 mb-5 text-pink-600 " id="allWomen">Women Only</h1>
    <h1 class="text-4xl text-center mb-5">Number of Members : {{ $womens->count() }}</h1>
    @include('partials.allWomen')
    <h1 class="flex justify-center text-4xl mt-5 mb-5 text-blue-600 " id="menFit">Men (18 -> 24)</h1>
    <h1 class="text-4xl text-center mb-5">Number of Members : {{ $mensfit->count() }}</h1>
    @include('partials.allMenFit')
    <h1 class="flex justify-center text-4xl mt-5 mb-5 text-pink-600 " id="womenFit">Women (18 -> 24)</h1>
    <h1 class="text-4xl text-center mb-5">Number of Members : {{ $womensfit->count() }}</h1>
    @include('partials.allWomenFit')
    <h1 class="flex justify-center text-4xl mt-5 mb-5 " id="noCondition">Less than 18 & more than 24</h1>
    <h1 class="text-4xl text-center mb-5">Number of Members : {{ $nofit->count() }}</h1>
    @include('partials.noCondition')
@endsection
