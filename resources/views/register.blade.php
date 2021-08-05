@extends('layouts.base')

@section('title', 'Login')

@section('content')
<div class="content-box">
  <h2 class="content-box__title">Resister</h2>
  <div class="content-box__inner-box">
    <form action="user" method="post">
      <table class="form-table">
        <tr>
          <th>Name</th>
          <td><input type="text" class="text-input" name="name" value="{{ old('name') }}" /></td>
        </tr>
        <tr>
          <th>E-Mail Address</th>
          <td><input type="text" class="text-input" name="email" value="{{ old('email') }}" /></td>
        </tr>
        <tr>
          <th>Password</th>
          <td>
            <input type="text" class="text-input" name="password" value="" />
          </td>
        </tr>

        <tr>
          <th>Confirm Password</th>
          <td>
            <input type="text" class="text-input" name="password_confirmation" value="" />
          </td>
        </tr>
        <tr>
          <th></th>
          <td>
            <button type="submit" value="Resister" class="link-button">Resister</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
@endsection
