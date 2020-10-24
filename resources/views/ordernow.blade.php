@extends('master')
@section('content')
    <div class="custom-product">


        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="enter your address" class=""form-control></textarea>
                </div>

                <div class="form-group">
                    <label for="pwd">Payment Method</label><br><br>
                    <input type="radio" value="cash" name="payment"><span>online payment</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>payment on Delivery</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>Payment on delivery</span><br><br>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>


        </div>

    </div>
@endsection
