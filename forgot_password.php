<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        header {
            flex: 0 1 auto;
        }

        main {
            flex: 1 1 auto;
        }

        footer {
            flex: 0 1 40px;
        }

        .logo-img {
            height: 70px;
            width: 260px;
            padding: 10px 40px;
        }

        .bg-img {
            height: auto;
            padding-bottom: 118.5px;
            background-image: url('https://cdn.discordapp.com/attachments/962990670962900992/963014170914222110/Background_wallpaper.png');
        }

        .bg-img .box-shaddow {
            height: auto;
            width: 80%;
            background-color: #000;
            box-shadow: 0px 0px 5px 1px rgb(34, 27, 242);
            border-radius: 12px;
            margin: auto;
            position: relative;
            top: 50px;
        }

        .img {
            height: 300px;
            padding: 0 40px;
            padding-top: 100px;
            margin-left: -15px;
        }

        #text {
            position: relative;
            top: -13px;
            font-size: small;
        }

        .form-control {
            margin: 5px;
            border: 1px solid #0e56f0;
            background-color: #000;
        }

        @media (min-width:992px) and (max-width:1175px) {

            .img {
                height: 280px;
                padding: 0 30px;
                padding-top: 100px;
                margin-left: -15px;
            }

        }

        @media (min-width:768px) and (max-width:991px) {
            #dShowHide {
                display: none;
            }

            form {
                position: relative;
                left: -30px;
            }

            .logo-image {
                text-align: center;
            }
        }

        @media (min-width:408px) and (max-width:767px) {
            #dShowHide {
                display: none;
            }

            form {
                position: relative;
                left: -20px;
            }

            .logo-image {
                text-align: center;
            }
        }

        @media (max-width:407px) {

            #dShowHide {
                display: none;
            }

            form {
                position: relative;
                left: -30px;
            }

            .logo-image {
                text-align: center;
            }

            .bg-img .box-shaddow {
                width: 90%;
            }
        }
    </style>

</head>

<body>

    <!-- Header -->
    <header>
        <div style="background-color: #0e56f0;" class="logo-image">
            <img src="https://cdn.discordapp.com/attachments/962990670962900992/962991194718232596/yamasha_brand_hr.png" alt="#error" class="logo-img">
        </div>
    </header>

    <!-- Content -->


    <main id="stepOneDiv" class="bg-img">
        <div>
            <div class="box-shaddow">
                <div class="row">
                    <div class="col-lg-5 p-2" id="dShowHide">
                        <img src="https://cdn.discordapp.com/attachments/962990670962900992/962991216490864660/yamasha_brand_sq.png" alt="#error" class="img" />
                    </div>
                    <div class="col-lg-5 p-2">
                        <div class="py-2 ml-5">
                            <h3 class="text-light">Get's Started.</h3>
                            <p class="text-light" id="text">
                                All already have an account? <a href="./login.php">login</a>
                            </p>

                            <form action="#" class="form-group" method="POST">
                                <label class="text-light" for="MOB_NUMBER">Mobile Number</label>
                                <input type="text" class="bg-dark form-control" style="border: 1px solid #0e56f0" id="MOB_NUMBER" placeholder="MOBILE NUMBER" />
                                <br />

                                <div class="text-center">
                                    <div id="stepOneErrDiv">

                                    </div>
                                    <button type="button" onclick="stepOneFun()" id="stepOneBtn" class="btn border-0 border-radius-2 text-light px-5 py-1 font-weight-bold" style="background-color: #0e56f0">
                                        Send OTP
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <main id="stepTwoDiv" class="bg-img d-none">
        <div>
            <div class="box-shaddow">
                <div class="row">
                    <div class="col-lg-5 p-2" id="dShowHide">
                        <img src="https://cdn.discordapp.com/attachments/962990670962900992/962991216490864660/yamasha_brand_sq.png" alt="#error" class="img" />
                    </div>
                    <div class="col-lg-5 p-2">
                        <div class="py-2 ml-5">
                            <h3 class="text-light">Get's Started.</h3>
                            <p class="text-light" id="text">
                                Already have an account? <a href="./login.php">login</a>
                            </p>

                            <form action="#" class="form-group" method="POST">
                                <label class="text-light" for="">Enter otp</label>
                                <div class="d-flex flex-row">
                                    <input type="text" class="form-control" oninput="MOB_OTP2.focus();" id="MOB_OTP1" maxlength="1" />
                                    <input type="text" class="form-control" id="MOB_OTP2" oninput="MOB_OTP3.focus();" maxlength="1" />
                                    <input type="text" class="form-control" id="MOB_OTP3" oninput="MOB_OTP4.focus();" maxlength="1" />
                                    <input type="text" class="form-control" id="MOB_OTP4" maxlength="1" />
                                </div>
                                <input type="hidden" id="ID2">
                                <br /><br />
                                <div class="text-center">
                                    <div id="stepTwoErrDiv">

                                    </div>
                                    <button type="button" onclick="stepTwoFun()" id="stepTwoBtn" class="btn border-0 border-radius-2 text-light px-5 py-1 font-weight-bold" style="background-color: #0e56f0">
                                        Continue
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <main id="stepThreeDiv" class="bg-img d-none">

        <div>
            <div class="box-shaddow">
                <div class="row">
                    <div class="col-lg-3 p-2" id="dShowHide">
                        <img src="https://cdn.discordapp.com/attachments/962990670962900992/962991216490864660/yamasha_brand_sq.png" alt="#error" class="img">
                    </div>
                    <div class="col-lg-8 p-2">
                        <div class="py-2  ml-5">
                            <h3 class="text-light">Sey New Password .</h3>
                            <p class="text-light" id="text">Already have an account? <a href="./login.php">login</a> </p>

                            <form action="#" class="form-group " method="POST">


                                <label class="text-light" for="PASS">New Password</label>
                                <input type="text" name="PASS" id="PASS" required placeholder="Password" class="form-control">
                                <label class="text-light" for="PASS2">New Password again</label>
                                <input type="text" name="PASS2" id="PASS2" required placeholder="Password again" class="form-control">
                                <br><br>
                                <div class="text-center">
                                <div id="stepThreeErrDiv" >
                                       
                                       </div>
                                    <button type="button" onclick="stepThreeFun()" id="stepThreeBtn" class="btn border-0 border-radius-2 text-light px-5 py-1 font-weight-bold " style="background-color: #0e56f0;">Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer>
        <div style="background-color: #0e56f0;" class="logo-image">
            <img src="https://cdn.discordapp.com/attachments/962990670962900992/962991194718232596/yamasha_brand_hr.png" alt="#error" class="logo-img">
        </div>
    </footer>
    <script src="./assets/js/config.js"></script>
    <script src="./assets/js/primeOne.js"></script>
    <script src="./assets/js/axios.min.js"></script>
    <script src="./assets/js/store.everything.min.js"></script>
    <script>
        // getting elements by id 
        // step1
        stepOneDiv = byId('stepOneDiv')
        stepOneBtn = byId('stepOneBtn')
        MOB_NUMBER = byId('MOB_NUMBER')
        stepOneErrDiv = byId('stepOneErrDiv')

        //step2
        stepTwoDiv = byId('stepTwoDiv')
        MOB_OTP1 = byId('MOB_OTP1')
        MOB_OTP2 = byId('MOB_OTP2')
        MOB_OTP3 = byId('MOB_OTP3')
        MOB_OTP4 = byId('MOB_OTP4')
        stepTwoBtn = byId('stepTwoBtn')
        stepTwoErrDiv = byId('stepTwoErrDiv')
        ID2 = byId('ID2')

        //step3
        stepThreeDiv = byId('stepThreeDiv')

        PASS = byId('PASS')
        PASS2 = byId('PASS2')

        stepThreeBtn = byId('stepThreeBtn')
        stepThreeErrDiv = byId('stepThreeErrDiv')

    




        // api functions
        function stepOneFun() {
            btn_loading(stepOneBtn, "Loading...", true)
            // validating
            if (MOB_NUMBER.value.length != 10) {

                bootstrapAlert(stepOneErrDiv, "Enter valid 10 Digit Number", 'danger', 3)
                return false;
            }

            // calling api
            var bodyFormData = new URLSearchParams();

            bodyFormData.append('MOB_NUMBER', MOB_NUMBER.value);
            bodyFormData.append('step', 'one');
            axios.post(api_base+'forgot_password.php', bodyFormData)
                .then(function(response) {
                    console.log(response.data);
                    btn_loading(stepOneBtn, "Loading...", false)

                    if (response.data.status == 0) {



                        bootstrapAlert(stepOneErrDiv, response.data.msg, 'danger', 3)
                    }
                    if (response.data.status == 1) {

                        stepOneDiv.classList.add('d-none')
                        stepTwoDiv.classList.remove('d-none')
                        ID2.value = response.data.ID2

                        MOB_OTP1.focus();

                    }


                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        function stepTwoFun() {


            // calling api
            var bodyFormData = new URLSearchParams();

            bodyFormData.append('MOB_NUMBER', MOB_NUMBER.value);
            bodyFormData.append('MOB_OTP1', MOB_OTP1.value);
            bodyFormData.append('MOB_OTP2', MOB_OTP2.value);
            bodyFormData.append('MOB_OTP3', MOB_OTP3.value);
            bodyFormData.append('MOB_OTP4', MOB_OTP4.value);
            bodyFormData.append('ID2', ID2.value);
            bodyFormData.append('step', 'two');
            axios.post(api_base+'forgot_password.php', bodyFormData)
                .then(function(response) {
                    console.log(response.data);

                    if (response.data.status == 0) {



                        bootstrapAlert(stepTwoErrDiv, response.data.msg, 'danger', 3)
                    }
                    if (response.data.status == 1) {

                        stepTwoDiv.classList.add('d-none')
                        stepThreeDiv.classList.remove('d-none')
                    

                    }


                })
                .catch(function(error) {
                    console.log(error);
                });
        }

        function stepThreeFun() {

            // validations
            if (PASS.value != PASS2.value) {

                bootstrapAlert(stepThreeErrDiv, "Confirmation Password not matching", 'danger', 3)
                return false;
            }



            // calling api
            var bodyFormData = new URLSearchParams();
            bodyFormData.append('MOB_OTP1', MOB_OTP1.value);
            bodyFormData.append('MOB_OTP2', MOB_OTP2.value);
            bodyFormData.append('MOB_OTP3', MOB_OTP3.value);
            bodyFormData.append('MOB_OTP4', MOB_OTP4.value);
            bodyFormData.append('ID2', ID2.value);
            bodyFormData.append('MOB_NUMBER', MOB_NUMBER.value);

            bodyFormData.append('PASS', PASS.value);


            bodyFormData.append('step', 'three');
            axios.post(api_base+'forgot_password.php', bodyFormData)
                .then(function(response) {
                    console.log(response.data);

                    if (response.data.status == 0) {



                        bootstrapAlert(stepThreeErrDiv, response.data.msg, 'danger', 3)
                    }
                    if (response.data.status == 1) {

                        bootstrapAlert(stepThreeErrDiv, response.data.msg, 'success', 3)
                         
                        setTimeout(() => {
                            location.replace('./login.php');
                        }, 3000);
                        

                    }


                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    </script>


</body>

</html>