@extends('layouts.admin')
@section('title')
    Them can bo
@endsection


@section('styles')
      <link rel="stylesheet" href="{{URL::to('css/form.css')}}">
@endsection

@section('links')
    <ul>
      <li><a href="{{route('getAdminCanBoPage')}}">Danh sach can bo</a></li>
      <li><a href="{{route('getAdminAddCanBo')}}">Them can bo</a></li>
    </ul>
@endsection
@section('content')
        <!-- neead a loop to show all vaccines-->
        <div class="container">
          <form class="add" action="" method="post">
            <div class="input-group">
              <label for="tencanbo">Ten can bo</label>
              <input type="text" name="tencanbo" >
            </div>
            <div class="input-group">
              <label for="username">Ten dang nhap</label>
              <input type="text" name="username" >
            </div>
            <div class="input-group">
              <label for="password">Mat khau</label>
              <input type="text" name="password" >
            </div>
            <div class="input-group">
              <label for="password-confirm">Xac nhan lai mat khau</label>
              <input type="password" name="password-confirm" >
            </div>
            <button type="submit" class="btn">Them</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
          </form>
        </div>
@endsection


@section('scipt')
  <script type="text/javascript">

  </script>

@endsection
