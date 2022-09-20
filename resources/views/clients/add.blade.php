@extends('clients.layouts.client')
@section('title')
  {{ $title }}
@endsection

@section('content')
  <div class="container">
    <h2>them san pham</h2>
    <form action="" method="POST">
      @error('msg_error')
        <span style="color: red"> {{ $message }}</span>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Ten san pham</label>
        <input type="text" name="ten_sp" class="form-control" id="exampleFormControlInput1">
        @error('ten_sp')
          <span style="color: red"> {{ $message }}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gia</label>
        <input type="number" name="gia" class="form-control" id="exampleFormControlInput1">
        @error('gia')
          <span style="color: red"> {{ $message }}</span>
        @enderror
      </div>
      <button type="submit">add product</button>
      @csrf
    </form>
  </div>
@endsection
