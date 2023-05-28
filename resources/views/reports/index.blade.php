@extends('layouts.main')
@section('container')
     
<section class="confirmation_part padding_top">
    <div class="container">
        <div class="row">
                 
        <div class="col-lg-12">
          <div class="order_details_iner">
            <h3>Order Details</h3>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col" colspan="2">Product</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th colspan="2"><span>Motor Honda Beat</span></th>
                  <th>1</th>
                  <th> <span>Rp. 16.000.000</span></th>
                </tr>
                <tr>
                  <th colspan="2"><span>Motor Yamaha  </span></th>
                  <th>1</th>
                  <th> <span>Rp. 16.000.000</span></th>
                </tr>
                <tr>
                  <th colspan="2"><span>Motor Suzuki</span></th>
                  <th>1</th>
                  <th> <span>Rp. 16.000.000</span></th>
                </tr>
                <tr>
                  <th colspan="3">Subtotal</th>
                  <th> <span>Rp. 48.000.000</span></th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> 
    </div>
</section>
@endsection