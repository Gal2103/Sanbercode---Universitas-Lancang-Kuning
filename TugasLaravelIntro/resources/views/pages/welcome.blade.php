@extends('layout.master')
@section('title')
    Home
@endsection

@section('content')
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
  </head>
  <body>
    <h1>Selamat Datang {{$fname}} {{$lname}}!</h1>
    <h2>
      Terima kasih telah bergabung di SanberBook. Social Media kita bersama!
    </h2>
@endsection
