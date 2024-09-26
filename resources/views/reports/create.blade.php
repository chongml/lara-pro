@extends('layouts.app')
@section('content')
<h3>New Report Form</h3>
<form action="/reports" method="POST" class="form-group">
    @csrf

    <div class="input-group has-validation">
        <span class="input-group-text">Title</span>
        <div class="form-floating is-invalid">
          <input type="text" class="form-control is-invalid" name="title" placeholder="Please insert report title" required>
          <label for="floatingInputGroup2">Please insert report title</label>
        </div>
      </div>
      <br>
      <div class="input-group has-validation">
        <span class="input-group-text">Description</span>
        <div class="form-floating is-invalid">
        <textarea placeholder="Please insert report description" name="description" class="form-control"required></textarea>
        <label for="floatingInputGroup2">Please insert report description</label>
    </div>
  </div>
  <br>
  <div class="input-group has-validation">
    <span class="input-group-text">Priority</span>
    <div class="form-floating is-invalid">
    <select name="priority" class="form-select" aria-label="Default select example" required>
        <option selected>Select Priority Level</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </div>
  </div>
      <br><br>
    <input type="submit" value="Submit" class="btn btn-success">
    <input type="reset" value="Cancel" class="btn btn-secondary">
</form>
@endsection