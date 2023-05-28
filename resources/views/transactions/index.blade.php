@extends('layouts.main')
@section('container')
  <section class="checkout_area padding_top">
    <div class="container">
        <div class="row">
         
            <h2>Transaksi</h2>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="Kendaraan" name="kendaraan" />
                <span class="placeholder" data-placeholder="Nama Kendaraan"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="id" name="id" />
                <span class="placeholder" data-placeholder="Id Kendaraan"></span>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="Merek" name="merek" placeholder="Merek Kendaraan" />
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="harga" name="harga" />
                <span class="placeholder" data-placeholder="Harga Kendaraan"></span>
              </div>
             
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="total" name="total" />
                <span class="placeholder" data-placeholder="Total Kendaraan"></span>
              </div>
              <div class="col-md-12">
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

