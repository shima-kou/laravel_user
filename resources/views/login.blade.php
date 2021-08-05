@extends('layouts.base')

@section('title', 'Login')

@section('content')
<div class="content-box">
  <h2 class="content-box__title">Login</h2>
  <div class="content-box__inner-box">
    <form action="user" method="post">
      <table class="form-table">
        <tr>
          <th>E-Mail Address</th>
          <td><input type="text" class="text-input" name="email" value="{{ old('email') }}" /></td>
        </tr>
        <tr>
          <th>Password</th>
          <td>
            <input type="text" class="text-input" name="pasword" value="{{ old('password') }}" />
          </td>
        </tr>
        <tr>
          <th></th>
          <td>
            <label for="remember">
              <input type="checkbox" name="remember" id="remember" /> Remember Me
            </label>
          </td>
        </tr>
        <tr>
          <th></th>
          <td>
            <button type="submit" value="login" class="link-button">Login</button>
            <a class="underline text-blue-700" href="{{ url('/register') }}" >Forgot Your Password ?</a>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
@endsection
