@extends('layouts.app')
@section('content')
<div class="container myContainer my-5 py-5">
  <div class="row">
    <div class=" col-lg-12 col-md-12  col-sm-12  col-xs-12 text-center">
      <h1 style="color:white">Contact us</h1>
    </div>
    <div class=" col-lg-12 col-md-12  col-sm-12  col-xs-12 text-center">
      <h1>We would love to hear from you</h1>
    </div>
    <div class=" col-lg-12 col-md-12  col-sm-12  col-xs-12 text-center">

      <form class="text-center border border-light p-5 was-validated">
        <div class="form-group w-50 ">


          <!-- Name -->
          <input type="text" id="defaultContactFormName" class="form-control" placeholder="Name" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <!-- Email -->
        <div class="form-group  w-50">
          <input type="email" id="defaultContactFormEmail" class="form-control" placeholder="E-mail" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>


        <!-- Subject -->
        <div class="form-group  w-50">
        <select class="browser-default custom-select" required>
          <option value="" disabled>Choose option</option>
          <option value="1" selected>Feedback</option>
          <option value="2">Report a bug</option>
          <option value="3">Feature request</option>
          <option value="4">Feature request</option>
        </select>
        </div>

        <!-- Message -->
        <div class="form-group">
          <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message" required></textarea>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <!-- Copy -->
        <div class="custom-control custom-checkbox mb-4">
          <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
          <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this
            message</label>
        </div>

        <!-- Send button -->
        <button class="btn btn-btn-info btn-block btn-dark" type="submit">Send</button>

      </form>
    </div>
  </div>

</div>
@stop