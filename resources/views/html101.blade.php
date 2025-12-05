<!-- file : resources/views/html101.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>HTML</title>
            <link rel ="stylesheet" href="css/bootstrap.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
            
            <style>
                body {
                    font-family: "Kanit", sans-serif;
                }

                input[type="radio"] {
                    margin-right : 5px;
                    border : 1px solid #aaa;
                }

                input[type="text"] {
                    border :1px solid #aaa;
                }

                input[type="date"]{
                    border :1px solid #aaa;
                }

                input[type="file"]{
                    border :1px solid #aaa;
                }

            </style>

        </head>
    <body>

        <div class="container mt-4">
          <h1>Workshop #HTML - FORM</h1> 
          <form>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col-5">
                        <input id="fname" class="form-control" type="text">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <label for="lname">สกุล</label>
                    </div>
                    <div class="col-5">
                        <input id="lname" class="form-control" type="text">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <label for="birthday">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col-4">
                        <input id="birthday" class="form-control" type="date">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <label for="age">อายุ</label>
                    </div>
                    <div class="col-5">
                        <input id="age" class="form-control" type="text">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <label for="sex">เพศ</label>
                    </div>

                    <div class="col-5">
                        <input name="sex" id="male" class="form-check-input" type="radio" >
                        <label for="male" class="form-check-label" >ชาย&emsp;&emsp;</label>
                
                        <input name="sex" id="female" class="form-check-input" type="radio" >
                        <label for="female" class="form-check-label">หญิง</label>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <label for="file">รูป</label>
                    </div>
                    <div class="col-3">
                        <input id="file" class="form-control" type="file">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <label for="address">ที่อยู่</label>
                    </div>
                    <div class="col-5">
                        <textarea class="form-control" id="address" style="border: 1px solid #aaa;"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <label for="color">สีที่ชอบ</label>
                    </div>
                    <div class="col-2">
                        <select class="form-select" id="color" aria-label="Default select example" style="border:1px solid #aaa;">
                            <option selected disabled value="">เลือก...</option>
                            <option value="1">สีแดง</option>
                            <option value="2">สีเหลือง</option>
                            <option value="3">สีน้ำเงิน</option>
                            <option value="4">สีเขียว</option>
                            <option value="5">สีดำ</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <label for="song">แนวเพลงที่ชอบ</label>
                    </div>

                    <div class="col-5">
                        <input name="song" id="pop" class="form-check-input" type="radio" >
                        <label for="pop" class="form-check-label" >ป็อป&emsp;&emsp;</label>
                
                        <input name="song" id="rock" class="form-check-input" type="radio" >
                        <label for="rock" class="form-check-label">ร็อค&emsp;&emsp;</label>

                        <input name="song" id="country" class="form-check-input" type="radio" >
                        <label for="country" class="form-check-label">ลูกทุ่ง&emsp;&emsp;</label>
                        
                        <input name="song" id="other" class="form-check-input" type="radio" >
                        <label for="other" class="form-check-label">อื่น ๆ &emsp;&emsp;</label>
                    </div>
                </div>
                <br>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <input class="form-check-input" type="checkbox" value="" id="agree" style="border :1px solid #aaa;">
                        <label class="form-check-label" for="agree">ยินยอมให้เก็บข้อมูล</label>
                    </div>
                </div>
                <br>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            
                    <div class="col-5">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                    <br><br>

          </form> 
        </div>

    </body>
</html>