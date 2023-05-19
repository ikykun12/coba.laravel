@extends('layouts.main')
@section('container')
   <!--================ confirmation part start =================-->
  <section class="confirmation_part padding_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="confirmation_tittle">
            <span>Thank you. Your order has been received.</span>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Informasi Pemesanan</h4>
            <ul>
              <li>
                <p>order number</p><span>: 60235</span>
              </li>
              <li>
                <p>data</p><span>: Oct 03, 2017</span>
              </li>
              <li>
                <p>total</p><span>: Rp.15.000.000</span>
              </li>
              <li>
                <p>Metode</p><span>: Payments</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Alamat Tagihan</h4>
            <ul>
              <li>
                <p>Jalan</p><span>: Kertapati</span>
              </li>
              <li>
                <p>Kota</p><span>: Palembang</span>
              </li>
              <li>
                <p>Postcode</p><span>: 36952</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Alamat pengiriman</h4>
            <ul>
               <li>
                <p>Jalan</p><span>: Kertapati</span>
              </li>
              <li>
                <p>Kota</p><span>: Palembang</span>
              </li>
              <li>
                <p>Country</p><span>: United States</span>
              </li>
              <li>
                <p>Postcode</p><span>: 36952</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
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
  <!--================ confirmation part end =================-->

@endsection