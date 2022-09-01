@extends('clients.layouts.client')
@section('title')
  {{ $title }}
@endsection

@section('sidebar')
  <h3>sidebar </h3>
@endsection

@section('content')
  <div class="container">
    @datetime('2022-9-20 13:30:20')
    <h1>trang chu</h1>
  </div>
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
