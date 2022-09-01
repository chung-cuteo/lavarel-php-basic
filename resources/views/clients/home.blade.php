@extends('clients.layouts.client')
@section('title')
  {{ $title }}
@endsection

@section('sidebar')
  <h3>sidebar </h3>
@endsection

@section('content')
  <div class="container">
    <h1>trang chu</h1>
  </div>

  <p><img
      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC6G6tdtSAAsK7PogHLchPuFOb_3beNZ01Gw&usqp=CAU"
      alt="">
  </p>

  <p><a href="{{route('download-img').'?image=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC6G6tdtSAAsK7PogHLchPuFOb_3beNZ01Gw&usqp=CAU'}}">Down load</a></p>

  <x-alert type="danger" :content="$title" />
@endsection
@push('script')
  <script>
    console.log('put lan 1')
  </script>
@endpush
@push('script')
  <script>
    console.log('put lan 2')
  </script>
@endpush
