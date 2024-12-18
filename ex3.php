<!DOCTYPE html>
<html lang="en">

<head>


  <!-- เพิ่ม bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- เพิ่ม sweetaleart  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">

  <!-- font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: "Kanit", serif;
      font-weight: 400;
      font-style: normal;
      margin-left: 100px;
    }
  </style>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ตัวอย่าง ภาษา PHP และ Bootstrap </title>
</head>

<body>


  <h1>โปรแกรมบันทึกข้อมูลรองเท้า</h1>
  <form class="row g-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="ตัวอย่าง ยี่ห้อรองเท้า nike">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">State</label>
      <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <div class="col-12">
   
    <button type="submit" class="btn btn-primary" id="alert">บันทึกข้อมูล</button> 
    
    <button type="reset" class="btn btn-danger id="alert2"">ยกเลิกข้อมูล</button>
  
  </div>
  </form>
 
  <br>
  พัฒนาโดย 6699665002 เดช ธรรมศิริ หมู่เรียน 66/96 <br>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Sweet Aleart 2 -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
<script>
  $(function() {
    $('#alert').on('click', function(e) {
      e.preventDefault();
      var form = $('.pt_upld_page_frm');
      swal.fire({
        title: "คุณต้องการบันทึกข้อมูลหรือไม่?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "ใช่ทำการบันทึกข้อมูล!",
        closeOnConfirm: false
      }, function(isConfirm) {
        console.log("sdfsf");
        if (isConfirm) form.submit();
      });
    });
    $('#alert2').click(function() {
      Swal.fire(
        'งานดีมาก!',
        'ยกเลิกการบันทึกข้อมูล!',
        'success'
      );
    });
    $('#alert3').click(function() {
      Swal.fire({
        title: "Are you sure?",
        text: "ต้องการไปที่เว็บอื่นหรือไม่",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "ใช่แล้ว ต้องการไป!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "ไปกัน!",
            text: "ไปเว็บอื่น.",
            icon: "success"
          });
        }
      });
    });
  });
</script>

</html>