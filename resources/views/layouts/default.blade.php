<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AdminLTE Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form action="/submit" method="post">
        <div class="form-group">
          <label for="name">ชื่อ</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="surname">นามสกุล</label>
          <input type="text" class="form-control" id="surname" name="surname">
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
          <input type="file" class="form-control-file" id="avatar" name="avatar">
        </div>
        <div class="form-group">
          <label for="address">ที่อยู่</label>
          <textarea class="form-control" id="address" name="address"></textarea>
        </div>
        <div class="form-group">
          <label for="favorite-color">สีที่ชอบ</label>
          <select class="form-control" id="favorite-color" name="favorite-color">
            <option value="red">สีแดง</option>
            <option value="blue">สีน้ำเงิน</option>
            <option value="green">สีเขียว</option>
          </select>
        </div>
        <div class="form-group">
          <label for="favorite-music">แนวเพลงที่ชอบ</label>
          <select class="form-control" id="favorite-music" name="favorite-music">
            <option value="rock">ร็อค</option>
            <option value="pop">ป็อป</option>
            <option value="jazz">แจ๊ส</option>
          </select>
        </div>
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="agree" name="agree">
            <label class="custom-control-label" for="agree">ยินยอมให้เก็บข้อมูล</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
</body>
</html>
