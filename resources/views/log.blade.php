<div id="loginContainer" class="container">

    <div  id="cardlogin" class="card"  style="width:300px;">
        <div class="card-header">
        realestate
                </div>

        <div class="card-body">
            <h4 class="card-title">ورود / ثبت نام</h4>
            <p class="card-text">کد ملی خود را وارد کنید</p>
            <form id="form-data" >

                <div class="form-group row">
                    <div class="col-6">
                <input id="textID" type="text" name="idNumber" placeholder="کد ملی خود را وارد کنی">
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
</div>
    </div>
<div id="loginContainer2" class="container" style="visibility: hidden">
        <div  id="cardpassword" class="card"  style="width:300px;">
            <div class="card-header">
                realestate
            </div>

            <div class="card-body">
                <h4 class="card-title">رمز عبور را وارد کنید</h4>
                <p class="card-text">رمز عبور حساب کاربری خود را وارد کنید</p>
                <form  >
                    <div class="form-group row">
                        <div class="col-6">
                            <input id="textid2" type="text" name="idNumber" placeholder="کد ملی خود را وارد کنی">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <input id="textpassword" type="password" name="password" placeholder="زمز عبور خود را وارد کنی">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <input type="submit" name="submit" id="submitpassword" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            </div>
</div>
        <script type="text/javascript">
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#submit').click(function(e){
                    e.preventDefault();
                   var idNumber=$("input[name=idNumber]").val();
                    $.ajax({
                        type: "POST",
                        url:"{{route('InputLogin.post')}}",
                       data:{idNumber:idNumber },

                        success:function(data)
                        {

                                $('#cardlogin').css('visibility', 'hidden');
                                $('#loginContainer2').css('visibility', 'visible');

                        }
                    });
                });
            });
        </script>

@endsection
