@extends('master')
@section('content')
<div class="container">
    @include('blocks/error')
    <div id="content">
        <form action="{{route('signup')}}" method="post" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>Đăng kí</h4>
                    <div class="space20">&nbsp;</div>
                    <div class="form-block">
                        <label for="email">Email address*</label>
                        <input type="email" name="email"id="email" required>
                    </div>

                    <div class="form-block">
                        <label for="your_last_name">Fullname*</label>
                        <input type="text" name="name"id="your_last_name" required>
                    </div>

                    <div class="form-block">
                        <label for="adress">Address*</label>
                        <input type="text" name="address"id="adress" value="Street Address" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Phone*</label>
                        <input type="text" name="phone"id="phone" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Password*</label>
                        <input type="text" name="password"id="phone" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Re password*</label>
                        <input type="text" name="password_confirmation"id="phone" required>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection