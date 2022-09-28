@extends('layouts.app')
@section('content')

        <h3> Some of Our Products </h3>
        
        <ul>
        @foreach($products as $pp)
        <li> {{$pp}} </li>
        @endforeach
        <ul>
 @endsection