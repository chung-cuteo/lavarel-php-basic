@extends('clients.layouts.client')
@section('title')
  {{ $title }}
@endsection

@section('content')
  <div class="container">
    <h2>them san pham</h2>
    <form action="" method="POST">
      <input type="text" name="username" value="">
      @csrf
      <button type="submit">add product</button>
    </form>
  </div>
@endsection
