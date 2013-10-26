@extends('layouts.master')
@section('title')
@parent
:: Show Error 
@stop

@section('content')
       <?php foreach($results as $result):?>
            <blockquote>
                  <p><a href="#">{{$result->title}} </a></p>
                  <small> {{$result->details}} </small>
            </blockquote> 
       <?php endforeach;?>
@stop