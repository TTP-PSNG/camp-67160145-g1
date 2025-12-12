 @extends('template.default')

 @section('title', 'Workshop FORM')
 @section('content')
 <h1>Workshop #HTML - FORM</h1>
          <form>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-2">
                        <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col-5">
                        <input id="fname" class="form-control" type="text">

                        <div class="valid-feedback">
                            Correct!
                        </div>

                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
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
                        <button type="button" class="btn btn-success" onclick="clickMe()" style="background-color:green; border:1px solid green;">Submit</button>
                    </div>

                    <div class="col-5">
                        <button type="reset" class="btn btn-light">Reset</button>
                    </div>
                    <br><br>

          </form>
@endsection

@push('scripts')
    <script>
        // function clickMe(){
        //     console.log("Clicked");

        // }
        let clickMe = function(){
            let fname = document.getElementById('fname')
        //    fname.value = "from ClickMe"
        //    console.log(fname.value);

           if (fname.value == ""){
            fname.classList.remove('is-valid')
            fname.classList.add('is-invalid')
           } else{
            fname.classList.remove('is-invalid')
            fname.classList.add('is-valid')
           }


        }

        let myfunc = (callback)=>{
            callback("in CallBack")
        }

        callMe = (param) => {
            console.log(param);

        }

        myfunc(callMe)

        let myvar1 = 1
        let myvar2 = "1"
        myvar2 = parseInt(myvar2)

        console.log(myvar2 + myvar1 + "\n\n\nทดสอบ");
        console.log(1 == '1');

    </script>
@endpush
