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
    <h1>การเขียนโปรแกรมด้วย PHP</h1>
    6699665002 เดช ธรรมศิริ <br>
    หมู่เรียน 66/96 <br>

    <div class="alert alert-danger">
        <strong>สำเร็จแล้ววว!</strong> ใช้ bootstrap ได้แล้ววว
    </div>
    <button type="button" class="btn btn-success">กรุณากดปุ่มดูครับ</button>
    <button type="button" class="btn btn-danger">ยกเลิกการบันทึกข้อมูล</button>
    <br><br>
    <div class="card bg-primary text-white">
        <div class="card-body">ยินดีต้อนรับ</div>
    </div>
    <br>

    <div class="card" style="width:400px">
        <img class="card-img-top" src="dech4.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">นายเดช ธรรมศิริ</h4>
            <p class="card-text">คติประจำใจ : ทำวันนี้ให้ดีที่สุด </p>
            <a href="https://www.npru.ac.th/index.php" class="btn btn-primary">See Profile</a>
        </div>
    </div>

    <br>
    <button type="button" class="btn btn-outline-success" id="alert">ทดสอบเรียกใช้งาน Sweet Aleart </button>
    <br><br>
    <button type="button" class="btn btn-outline-danger" id="alert2">ทดสอบเรียกใช้งาน Sweet Aleart 2 </button>
    <br><br>
    <button type="button" class="btn btn-outline-danger onclick="window.location='http://www.example.com'" id="alert3">ทดสอบเรียกใช้งาน Sweet Aleart 2 link ไปเว็บอื่น </button>
    <br><br>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Sweet Aleart 2 -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
<script>
    $(function() {
        $('#alert').click(function() {
            Swal.fire(
                'Good job!',
                'You clicked the button!',
                'success'
            );
        });
        $('#alert2').click(function() {
            Swal.fire(
                'งานดีมาก!',
                'คุณกดปุ่มแล้ว เยี่ยมเลย!',
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