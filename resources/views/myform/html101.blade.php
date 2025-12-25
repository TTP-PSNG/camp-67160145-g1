 @extends('template.default')

 @section('title', 'Workshop FORM')
 @section('header' , 'Workshop #HTML - FORM')
 @section('content')

 <h1 class="text-center">Workshop #HTML - FORM</h1>
        <div class="container square-box justify-content-center align-items-center overflow-hidden">
          <form id="myForm" action="/submit" method="post">
                @csrf
                <div class="row mt-5">
                    <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                        <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col-5">
                        <input id="fname" name="fname" class="form-control" type="text">

                        <div class="valid-feedback">
                            ถูกต้อง!
                        </div>

                        <div class="invalid-feedback">
                            โปรดระบุชื่อ
                        </div>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                        <label for="lname">สกุล</label>
                    </div>
                    <div class="col-5">
                        <input id="lname" name="lname" class="form-control" type="text">

                        <div class="valid-feedback">
                            ถูกต้อง!
                        </div>

                        <div class="invalid-feedback">
                            โปรดระบุนามสกุล
                        </div>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                        <label for="birthday" class="form-label">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col-4">
                        <input id="birthday" name="birthday" class="form-control" type="date" required>

                        <div class="valid-feedback">
                            ถูกต้อง!
                        </div>

                        <div class="invalid-feedback">
                            โปรดระบุ วัน/เดือน/ปีเกิด
                        </div>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                        <label for="age" class="form-label">อายุ</label>
                    </div>
                    <div class="col-5">
                        <input id="age" name="age" class="form-control" type="text">

                        <div class="valid-feedback">
                            ถูกต้อง!
                        </div>

                        <div class="invalid-feedback">
                            โปรดระบุอายุ
                        </div>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                        <label for="gender">เพศ</label>
                    </div>

                    <div class="col-3">
                        <input name="gender" id="male" class="form-check-input" type="radio" value="ชาย">
                        <label for="male" class="form-check-label" >ชาย&emsp;&emsp;</label>

                        <input name="gender" id="female" class="form-check-input" type="radio" value="หญิง">
                        <label for="female" class="form-check-label">หญิง</label>

                        <div class="valid-feedback">
                            ถูกต้อง!
                        </div>

                        <div class="invalid-feedback">
                            โปรดระบุเพศ
                        </div>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                        <label for="file">รูป</label>
                    </div>
                    <div class="col-3">
                        <input id="file" name="file" class="form-control" type="file">

                        <div class="valid-feedback">
                            ถูกต้อง!
                        </div>

                        <div class="invalid-feedback">
                            โปรดเลือกไฟล์
                        </div>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                        <label for="address" class="form-label">ที่อยู่</label>
                    </div>
                    <div class="col-5">
                        <textarea class="form-control" id="address" name="address"></textarea>

                            <div class="valid-feedback">
                                ถูกต้อง!
                            </div>

                            <div class="invalid-feedback">
                                โปรดระบุที่อยู่
                            </div>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                        <label for="color">สีที่ชอบ</label>
                    </div>
                    <div class="col-2">
                        <select class="form-select" id="color" name="color" aria-label="Default select example">
                            <option selected disabled value="">เลือก...</option>
                            <option value="สีแดง">สีแดง</option>
                            <option value="สีเหลือง">สีเหลือง</option>
                            <option value="สีน้ำเงิน">สีน้ำเงิน</option>
                            <option value="สีเขียว">สีเขียว</option>
                            <option value="สีดำ">สีดำ</option>
                        </select>

                        <div class="valid-feedback">
                            ถูกต้อง!
                        </div>

                        <div class="invalid-feedback">
                            โปรดระบุ
                        </div>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                        <label for="song">แนวเพลงที่ชอบ</label>
                    </div>

                    <div class="col-5">
                        <input name="song" id="pop" class="form-check-input" type="radio" value="pop" required>
                        <label for="pop" class="form-check-label" >ป็อป&emsp;&emsp;</label>

                        <input name="song" id="rock" class="form-check-input" type="radio" value="rock" required>
                        <label for="rock" class="form-check-label">ร็อค&emsp;&emsp;</label>

                        <input name="song" id="country" class="form-check-input" type="radio" value="country" required>
                        <label for="country" class="form-check-label">ลูกทุ่ง&emsp;&emsp;</label>

                        <input name="song" id="other" class="form-check-input" type="radio" value="other" required>
                        <label for="other" class="form-check-label">อื่น ๆ &emsp;&emsp;</label>

                        <div class="valid-feedback">
                            ถูกต้อง!
                        </div>

                        <div id="song-error-msg" class="invalid-feedback">โปรดระบุ</div>

                    </div>
                </div>
                <br>

                <div class="row mt-3 text-center">
                    <div class="col-sm-12 col-md-5 mx-5">
                        <div class="form-check d-flex justify-content-center align-items-center flex-wrap">
                            <input class="form-check-input" type="checkbox" value="" id="agree" name="agree">
                            <label class="form-check-label ms-3" for="agree">
                                ยินยอมให้เก็บข้อมูล
                            </label>

                            <div id="agree-feedback" class="invalid-feedback d-block" style="display: none !important;">
                                โปรดเลือกยินยอมก่อนดำเนินการต่อ
                            </div>
                            <div class="valid-feedback">ถูกต้อง!</div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row mb-5 mx-auto">
                    <div class="col-sm-12 col-md-2 mx-auto">
                        <button type="button" class="btn btn-success" onclick="clickMe()">Submit</button>
                    </div>

                    <div class="col-md-2 mx-auto">
                        <button type="reset" class="btn btn-light">Reset</button>
                    </div>


          </form>
        </div>
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

           let lname = document.getElementById('lname')
           if (lname.value == ""){
            lname.classList.remove('is-valid')
            lname.classList.add('is-invalid')
           } else{
            lname.classList.remove('is-invalid')
            lname.classList.add('is-valid')
           }

           let age = document.getElementById('age')
           if (age.value == ""){
            age.classList.remove('is-valid')
            age.classList.add('is-invalid')
           } else{
            age.classList.remove('is-invalid')
            age.classList.add('is-valid')
           }

           let address = document.getElementById('address')
           if (address.value == ""){
            address.classList.remove('is-valid')
            address.classList.add('is-invalid')
           } else{
            address.classList.remove('is-invalid')
            address.classList.add('is-valid')
           }

           let color = document.getElementById('color')
           if (color.value == ""){
            color.classList.remove('is-valid')
            color.classList.add('is-invalid')
           } else{
            color.classList.remove('is-invalid')
            color.classList.add('is-valid')
           }

           let file = document.getElementById('file')
           if (file.value == ""){
            file.classList.remove('is-valid')
            file.classList.add('is-invalid')
           } else{
            file.classList.remove('is-invalid')
            file.classList.add('is-valid')
           }

           let birthdayInput = document.getElementById('birthday')
           if (birthdayInput.value ==""){
            birthdayInput.classList.remove('is-valid')
            birthdayInput.classList.add('is-invalid')
           } else{
            birthdayInput.classList.remove('is-invalid')
            birthdayInput.classList.add('is-valid')
           }

           let agreeCheckbox = document.getElementById('agree');
            let feedback = document.getElementById('agree-feedback');

            if (!agreeCheckbox.checked) {
                agreeCheckbox.classList.add('is-invalid');
                feedback.style.setProperty('display', 'block', 'important');
            } else {
                agreeCheckbox.classList.remove('is-invalid');
                agreeCheckbox.classList.add('is-valid');
                feedback.style.setProperty('display', 'none', 'important');
            }

           let selectedSong = document.querySelector('input[name="song"]:checked');
            let allSongInputs = document.querySelectorAll('input[name="song"]');
            let errorMsg = document.getElementById('song-error-msg');

            if (!selectedSong) {
                allSongInputs.forEach(input => {
                input.classList.add('is-invalid');
            });
                errorMsg.style.display = 'block';
            } else {
                allSongInputs.forEach(input => {
                input.classList.remove('is-invalid');
                input.classList.add('is-valid');
            });
                errorMsg.style.display = 'none';
            }


           let genderSelected = document.querySelector('input[name="gender"]:checked');
           let radioInputs = document.querySelectorAll('input[name="gender"]');
           if (!genderSelected) {
            radioInputs.forEach(input => {
            input.classList.add('is-invalid');
           });
           } else {
            radioInputs.forEach(input => {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            });

            }


            if (
                fname.value !== "" &&
                lname.value !== "" &&
                age.value !== "" &&
                address.value !== "" &&
                color.value !== "" &&
                birthdayInput.value !== "" &&
                agreeCheckbox.checked &&
                selectedSong &&
                genderSelected
            ) {
                document.getElementById('myForm').submit();
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
