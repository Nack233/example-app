@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="/submit" method="post" class="card bg-image" style="background-image: url('');">
          <div class="card-header">
            <h3>ข้อมูลส่วนตัว</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name">ชื่อ</label>
              <input type="text" class="form-control bg-light" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="surname">นามสกุล</label>
              <input type="text" class="form-control bg-light" id="surname" name="surname">
            </div>
            <div class="form-group">
              <label for="dob">วัน/เดือน/ปีเกิด</label>
              <input type="date" class="form-control" id="dob" name="dob">
            </div>
            <div class="form-group">
              <label for="age">อายุ</label>
              <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="form-group">
              <label for="gender">เพศ</label>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="gender-male" name="gender" value="male">
                <label class="custom-control-label" for="gender-male">ชาย</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" id="gender-female" name="gender" value="female">
                <label class="custom-control-label" for="gender-female">หญิง</label>
              </div>
            </div>
            <div class="form-group">
              <label for="avatar">รูป</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="avatar">
                  <label class="custom-file-label" for="avatar">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="address">ที่อยู่</label>
              <textarea class="form-control bg-light" id="address" name="address"></textarea>
            </div>
            <div class="form-group">
              <label for="favorite-color">สีที่ชอบ</label>
              <select class="form-control bg-light" id="favorite-color" name="favorite-color">
                <option value="red">สีแดง</option>
                <option value="blue">สีน้ำเงิน</option>
                <option value="green">สีเขียว</option>
              </select>
            </div>
            <div class="form-group">
                <label for="agree">ยินยอมให้เก็บข้อมูล</label>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="agree" name="agree">
                  <label class="custom-control-label" for="agree">
                    <span class="text-danger">*</span> ยินยอมให้เก็บข้อมูล
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block border-0 text-white">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js
  </body>
  </html>
@endsection
