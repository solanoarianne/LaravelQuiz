@extends('layouts.app')

@foreach ($products as $product)
    <p> {{ $product->product_name}} </p>
    
@endforeach