@extends('layouts.app')
@section('content')
<div class="container-fluid my-3">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form method="post" action="/newblog" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="title">Blog Title</label>
              <input type="text" class="form-control" id="title" placeholder="Blog Title Here" name="title">
            </div>
          </div>
          <div class="col-md-5 offset-md-1">
            <div class="form-group">
              <label for="topic">Blog Topic</label>
              <select class="form-control" id="topic" name="topic">
                <option value="Technology">Technology</option>
                <option value="Fashion">Fashion</option>
                <option value="Politics">Politics</option>
                <option value="Entertainment">Entertainment</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="description">Blog Description</label>
          <textarea class="form-control" id="description" rows="12" name="description"></textarea>
        </div>
        <div class="form-group">
          <label for="image">Blog Image</label>
          <input type="file" class="form-control-file" id="image" name="image" placeholder="Some Description Here">
        </div>
        <button class="btn btn-primary w-25" type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
@stop