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


  @env('local')
  <p>local</p>
@else
  <p>ko phai local</p>
  @endenv

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
