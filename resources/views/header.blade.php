<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{$title}}</title>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">

    </head>
    <body>
    
    
        <div class="container">
    @include('navbar')