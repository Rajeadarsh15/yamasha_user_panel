<?php





$nav_i = 3;
$page_title = 'Profile';

?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <?php include "./includes/com_head.php";
    include "./includes/com_css.php"; ?>


    <style>
        body {
            background-color: #000;
        }

        .line1 {
            border-bottom: 2px solid #407Bff;
        }

        .box-shaddow {
            background-color: #407Bff;
            box-shadow: 0px 0px 5px 1px rgb(178, 178, 180);
            border-radius: 10px;
        }

        .line-draw {
            border-bottom: 2px solid #97aad3;
        }

        .box-content-items-border {

            border-bottom: 2px solid #737478;

        }

        .line {
            border-bottom: 2px solid #97aad3;
            margin: 25px;
        }

        .line2 {
            border-bottom: 2px solid rgb(217, 212, 212);
        }

        .bg-darks {
            background-color: #000;
            border: none;
            cursor: pointer;
        }

        .bg-dark1 {
            background-color: #407Bff;
            border: none;
            cursor: pointer;
        }

        .placeholder input::placeholder {
            color: white;
        }

        .placeholder input {
            border: 1px solid white;
            border-radius: 6px;
            padding: 5px;
        }

        /* .right-line-draw{
            border-right: 2px solid rgb(217, 212, 212);
            font-size: medium;
        } */


        @media (min-width:992px) and (max-width:1329px) {

            .box-shaddow {
                width: 100%;
            }

            .box-shaddow p {
                font-size: smaller;
            }
        }

        @media (min-width:577px) and (max-width:991px) {

            /* .box{
                width: 85%;
            } */
            .box h4 {
                font-size: small;
            }

            /* .line1{
            width: 85%;
        }
        .box-shaddow{
            width: 85%;
        } */
            .line2 {
                margin-left: 5px;
                margin-right: 5px;
            }

            .line2 p {
                font-size: smaller;
            }
        }

        @media (max-width:576px) {

            .box-shaddow {
                width: 100%;
                position: relative;
                left: -23.5px;
            }

            .box-shaddow p {
                font-size: smaller;
            }

            .box {
                width: 80%;
            }

            .heading {
                font-size: 10px;
            }

            .img-box {
                display: none;
            }

            .line2 p {
                font-size: xx-small;
            }

            .line2 h4 {
                font-size: small;
            }

        }
    </style>
</head>

<body class="app sidebar-mini rtl">

    <!--Global-Loader-->
    <div id="global-loader"></div>

    <div class="page">
        <div class="page-main">

            <?php include "./includes/header.php";
            include "./includes/nav.php";
            ?>



            <!--content-area-->
            <div class="content-area">
                <!-- Client id and client logo with Name -->

                <div class="d-flex justify-content-between align-items-center m-4 box">
                    <div>
                        <h4 class="text-light heading">Client Id :<span id="cid_span1"></span> </h4>
                    </div>
                    <div class="d-flex justify-content-end align-items-center ">
                        <img src="https://cdn.discordapp.com/attachments/962990670962900992/962991194718232596/yamasha_brand_hr.png" alt="#error" class="mx-3 img-box" style="height: 60%; width: 30%; border-radius:0%;">
                        <h4 class="text-light text-uppercase heading"><span id="cname_span1"></span></h4>
                    </div>
                </div>

                <!-- Line -->

                <div class=" m-4 line1"></div>


                <!-- ////////////////////////////////////////////////////////////////////////////////// -->
                <!-- Content -->

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="d-flex flex-column ">
                                <div class="box-shaddow m-4">
                                    <h4 class="text-light text-capitalize mx-4 py-2">personal details</h4>
                                    <div class="mx-4 my-2  line-draw"></div>
                                    <div class="d-flex   flex-column justify-content-center">
                                        <div class="row  mx-4 box-content-items-border">
                                            <p class=" col-3 text-light">Name</p>
                                            <p class="col-7 text-light text-capitalize font-weight-600"><span id="cname_span2"></span></p>
                                            <p class="col-1"></p>
                                        </div>
                                        <!-- <form action=""> -->
                                        <div class="row mx-4 box-content-items-border">
                                            <p class="col-3 text-light">Phone Number</p>
                                            <input id="UP_MOB_NUMBER_input" type="text" class="col-6 text-light text-capitalize bg-dark1" readonly>
                                            <button id="UP_MOB_NUMBER_edit_btn" onclick="prof_edit('UP_MOB_NUMBER')" type="button" class="col-2 text-light bg-dark1">edit</button>
                                            <button id="UP_MOB_NUMBER_submit_btn" onclick="prof_submit('UP_MOB_NUMBER')" type="button" class="btn text-light bg-success d-none">Submit</button>
                                        </div>
                                        <!-- </form> -->
                                        <!-- <form action=""> -->
                                        <div class="row mx-4 box-content-items-border">
                                            <p class="col-3 text-light">Email</p>
                                            <input id="UP_EMAIL_input" type="email" class="col-6 text-light text-capitalize bg-dark1" readonly>
                                            <button id="UP_EMAIL_edit_btn" onclick="prof_edit('UP_EMAIL')" type="button" class="col-2 text-light bg-dark1">edit</button>
                                            <button id="UP_EMAIL_submit_btn" onclick="prof_submit('UP_EMAIL')" type="button" class="btn text-light bg-success d-none">Submit</button>
                                        </div>
                                        <!-- </form> -->
                                        <!-- <form action=""> -->
                                        <div class="row mx-4 box-content-items-border">
                                            <p class="col-3 text-light">Alt Number</p>
                                            <input id="UP_ALT_NUM_input" class="col-6 text-light text-capitalize bg-dark1" readonly type="text"></p>
                                            <button id="UP_ALT_NUM_edit_btn" onclick="prof_edit('UP_ALT_NUM')" type="button" class="col-2 text-light bg-dark1">edit</button>
                                            <button id="UP_ALT_NUM_submit_btn" onclick="prof_submit('UP_ALT_NUM')" type="button" class="btn text-light bg-success d-none">Submit</button>
                                        </div>
                                        <!-- </form> -->
                                        <div class="row mx-4 box-content-items-border">
                                            <p class="col-3 text-light"><span id="UP_DOC_TYPE"></span>
                                            </p>
                                            <p class="col-6 text-light text-capitalize"><span id="UP_DOC_ID"></span> </p>
                                            <p class="col-3"></p>
                                        </div>
                                        <div class="row mx-4 box-content-items-border">
                                            <p class="col-3 text-light">Aadhar</p>
                                            <p class="col-6 text-light text-capitalize"><span id="UP_AADHAR_NUM"></span></p>
                                            <p class="col-3"></p>
                                        </div>
                                        <div class="row mx-4 box-content-items-border">
                                            <p class="col-3 text-light">DOB</p>
                                            <p class="col-6 text-light text-capitalize"><span id="UP_DOB"></span></p>
                                            <p class="col-3"></p>
                                        </div>
                                        <!-- <div class="row mx-4 ">
                                            <p class="col-3 text-light">Gender</p>
                                            <p class="col-6 text-light text-capitalize"></p>
                                            <p class="col-3"></p>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="box-shaddow m-4">
                                    <h4 class="text-light text-capitalize mx-4 py-2">Electronic Contract Note</h4>
                                    <div class="mx-4 my-2  line-draw"></div>
                                    <div class="d-flex   flex-column justify-content-center">
                                        <form action="">
                                            <div class="row mx-4 box-content-items-border">
                                                <p class="col-4 text-light">Cash</p>
                                                <p class="col-5 text-light text-uppercase">Electronic</p>
                                                <p class="col-3"><button type="button" class="text-light bg-dark1 d-none">edit</button></p>
                                                <button type="submit" class="btn text-light bg-success d-none">Submit</button>
                                            </div>
                                        </form>
                                        <form action="">
                                            <div class="row mx-4">
                                                <p class="col-4 text-light">Commodities</p>
                                                <p class="col-5 text-light text-uppercase">Electronic</p>
                                                <p class="col-3"><button type="button" class="text-light bg-dark1 d-none">edit</button></p>
                                                <button type="submit" class="btn text-light bg-success d-none">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="box-shaddow m-4">
                                    <h4 class="text-light text-capitalize mx-4 py-2">my AMC Due</h4>
                                    <div class="mx-4 my-2  line-draw"></div>
                                    <div class="d-flex   flex-column justify-content-center">
                                        <div class="row mx-4 box-content-items-border">
                                            <p class="col-6 text-light text-uppercase">amc Due</p>
                                            <p class="col-6 text-light text-capitalize">₹</p>
                                        </div>
                                        <div class="row mx-4 box-content-items-border">
                                            <p class="col-6 text-light">AMC Date</p>
                                            <p class="col-6 text-light text-capitalize">-</p>
                                        </div>
                                        <div class="row mx-4 box-content-items-border">
                                            <p class="col-6 text-light">DP Ledger</p>
                                            <p class="col-6 text-light text-capitalize">₹</p>
                                        </div>
                                        <div class="row mx-4 ">
                                            <p class="col-6 text-light">Accrual</p>
                                            <p class="col-6 text-light text-capitalize">₹</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="d-flex flex-column">
                                <div class="row line2">
                                    <div class="col-3 text-light">Client type </div>
                                    <div class="col-9 text-light">Online</div>
                                </div>
                                <div class="row line2 text-light text-uppercase my-3">
                                    <p class="col-lg-3 col-md-3 col-2">Address Segment</p>
                                    <p class="col-1 right-line-draw">Equity</p>
                                    <p class="col-1 right-line-draw">F&Q</p>
                                    <p class="col-2 right-line-draw">CURRENCY</p>
                                    <p class="col-2 right-line-draw">Commodity</p>
                                    <P class="col-1">MF</P>
                                    <p class="col-1 d-none"><a href="#">form</a></p>
                                    <p class="col-1"><a class="text-light d-none" href="">edit</a></p>
                                </div>
                                <div class="row text-light line2">
                                    <p class="col-3 text-capitalize">Equity adviser</p>
                                    <p class="col-3">NA</p>
                                    <p class="col-3 text-capitalize">Commodity adviser</p>
                                    <p class="col-1">NA</p>
                                    <p class="col-1">y</p>
                                </div>
                                <form action="">
                                    <div class="row text-light line2 my-3">
                                        <p class="col-3">Address</p>
                                        <p class="col-7 text-capitalize"><span id="address_span"></span></p>
                                        <p class="col-1"><button type="button" class="text-light bg-darks d-none">edit</button></p>
                                        <button type="submit" class="text-light bg-success border-0 btn d-none">Submit</button>
                                    </div>
                                </form>
                                <div class="row text-light line2 my-3">
                                    <h4 class="col-7 text-capitalize">my dp details</h4>
                                    <p class="col-3"><a class="text-capitalize d-none" href="#">Upload Form</a></p>
                                    <p class="col-1 d-none"><a class="text-light d-none" href="#">edit</a></p>
                                </div>
                                <div class="row text-light line2 my-3">
                                    <p class="col-4 text-capitalize">ID</p>
                                    <p class="col-4"><span id="cid_span2"></span></p>
                                    <p class="col-4 d-none"><a class="" href="#">View</a></p>
                                </div>
                                <form>
                                    <div class="row text-light line2 my-3">
                                        <h4 class="col-7 text-capitalize">my account details</h4>
                                        <p class="col-3 d-none"><a class="text-capitalize" href="#">Upload Form</a></p>
                                        <p class="col-1 ">
                                            <button id="BANK_edit_btn" onclick="prof_bank_edit(true)" type="button" class="text-light bg-darks">edit</button>
                                            <button id="BANK_submit_btn" onclick="prof_bank_submit()" type="button" class="btn bg-success text-light d-none">Submit</button>
                                        </p>

                                    </div>
                                    <div class="row text-light line2 my-3 align-items-center">
                                        <p class="col-3 text-capitalize">bank Name</p>
                                        <input id="BANK_NAME" class="col-3 text-capitalize bg-darks text-light" readonly >
                                        <p class="col-3 text-capitalize">bank account number</p>
                                        <input id="BANK_AC_NUM" class="col-3 text-light bg-darks" readonly >
                                    </div>
                                    <div class="row line2 my-3">
                                        <label for="" class="col-3 text-uppercase text-light">ifsc code</label>
                                        <input id="BANK_IFSC" type="text" class="col-3 text-light bg-darks" readonly >
                                        <label for="" class="col-3 text-uppercase text-light">upi id</label>
                                        <input id="UPI_ID" type="text" class="col-3 text-light bg-darks" readonly >

                                    </div>
                                </form>
                                <div class="row text-light line2 my-3">
                                    <h4 class="col-7 text-capitalize">my KYC copy</h4>
                                    <p class="col-4 d-none"><a class="" href="#">View</a></p>
                                </div>
                                <div class="row text-light line2 my-3">
                                    <h4 class="col-8 text-capitalize">my brokerage</h4>
                                </div>
                                <div class="row text-light line2 my-3">
                                    <h4 class="col-8 text-capitalize">nominee details</h4>
                                </div>
                                <div>
                                    <div id="nominee_submit_div" class=" line2 my-3  row placeholder d-none" style="gap: 20px;">
                                        <div class="d-flex flex-column">
                                            <label for="" class="text-light">Name</label>
                                            <input id="NOMINEE_NAME" type="text" class="bg-darks  text-light mb-2"  placeholder="enter nominee name">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <label for="" class="text-light">Number</label>
                                            <input id="NOMINEE_NUMBER" type="text" class="bg-darks text-light mb-2"  placeholder="enter nominee number">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <label for="" class="text-light">Relation</label>
                                            <input id="NOMINEE_RELATION" type="text" class="bg-darks text-light mb-2"  placeholder="enter nominee Relation">
                                        </div>
                                        <button id="nominee_submit_btn" onclick="submit_nominee()" type="button" class="btn btn-outline-info text-light mb-2 ml-4 m-4">Submit</button>
                                    </div>
                                    <div id="nominee_display_div" class="line2 my-3  d-none  ">
                                        <ul class="d-flex justify-content-between" style="list-style: none;">
                                            <li class="text-light text-uppercase">Name : </li>
                                            <li class="text-light text-capitalize"><span id="NOMINEE_NAME_span"></span></li>
                                            <li class="text-light text-uppercase">Number : </li>
                                            <li class="text-light"><span id="NOMINEE_NUMBER_span"></span></li>
                                            <li class="text-light text-uppercase">Relation : </li>
                                            <li class="text-light text-capitalize"><span id="NOMINEE_RELATION_span"></span></li>
                                        </ul>
                                    </div>

                                    <div id="nominee_add_div">
                                        <div class="text-light text-center text-capitalize ">
                                            <p> NO nominee added to your demat account </p>
                                        </div>
                                        <div class="text-center text-light text-uppercase line2 pb-2">
                                            <button onclick="add_nominee()" class="btn  px-5 text-light font-weight-bold" style="background-color: #2e63d8;">add nominee</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="row text-light line2 my-3">
                                    <p class="col-8 text-capitalize">request for DIS book</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                include "./includes/footer.php"; ?>
            </div>
            <!-- End content-area-->
        </div>
    </div>
    <!-- End Page-->
    <?php
    include "./includes/com_js.php";
    ?>
    <!-- extra scripts  -->
    <script>
        loginCheck()
        setUsernameInHeader()
        fetch_clients_data()
        fetch_clients_data1()

        // elements byId
        cid_span1 = byId('cid_span1')
        cid_span2 = byId('cid_span2')
        cname_span1 = byId('cname_span1')
        cname_span2 = byId('cname_span2')
        UP_MOB_NUMBER_input = byId('UP_MOB_NUMBER_input')
        UP_MOB_NUMBER_edit_btn = byId('UP_MOB_NUMBER_edit_btn')
        UP_MOB_NUMBER_submit_btn = byId('UP_MOB_NUMBER_submit_btn')
        UP_EMAIL_input = byId('UP_EMAIL_input')
        UP_EMAIL_edit_btn = byId('UP_EMAIL_edit_btn')
        UP_EMAIL_submit_btn = byId('UP_EMAIL_submit_btn')
        UP_ALT_NUM_input = byId('UP_ALT_NUM_input')
        UP_ALT_NUM_edit_btn = byId('UP_ALT_NUM_edit_btn')
        UP_ALT_NUM_submit_btn = byId('UP_ALT_NUM_submit_btn')
        UP_DOC_TYPE = byId('UP_DOC_TYPE')
        UP_DOC_ID = byId('UP_DOC_ID')
        BANK_edit_btn = byId('BANK_edit_btn')
        BANK_submit_btn = byId('BANK_submit_btn')
        BANK_NAME = byId('BANK_NAME')
        BANK_AC_NUM = byId('BANK_AC_NUM')
        BANK_IFSC = byId('BANK_IFSC')
        UPI_ID = byId('UPI_ID')
        NOMINEE_NAME = byId('NOMINEE_NAME')
        NOMINEE_NUMBER = byId('NOMINEE_NUMBER')
        NOMINEE_RELATION = byId('NOMINEE_RELATION')
        NOMINEE_NAME_span = byId('NOMINEE_NAME_span')
        NOMINEE_NUMBER_span = byId('NOMINEE_NUMBER_span')
        NOMINEE_RELATION_span = byId('NOMINEE_RELATION_span')
        nominee_submit_btn = byId('nominee_submit_btn')
        nominee_display_div = byId('nominee_display_div')
        nominee_add_div = byId('nominee_add_div')


        // setting id from local
        cid_span1.innerHTML=store.get('yamasha_user_data').ID
        cid_span2.innerHTML=store.get('yamasha_user_data').ID



        function fetch_clients_data() {
            var bodyFormData = new URLSearchParams();

            bodyFormData.append('ID', store.get('yamasha_user_data').ID);
            bodyFormData.append('TOKEN', store.get('yamasha_user_data').TOKEN);

            axios.post(api_base+'clients.php', bodyFormData)
                .then(function(response) {
                    console.log(response.data);

                    if (response.data.status == 0) {

                    }
                    if (response.data.status == 1) {

                        cname_span1.innerHTML=response.data.NAME
                        cname_span2.innerHTML=response.data.NAME
                        UP_MOB_NUMBER_input.value=response.data.MOB_NUMBER
                        UP_EMAIL_input.value=response.data.EMAIL
                        UP_ALT_NUM_input.value=response.data.ALT_NUM
                        UP_DOC_TYPE.innerHTML=response.data.DOC_TYPE
                        UP_DOC_ID.innerHTML=response.data.DOC_ID
                        UP_AADHAR_NUM.innerHTML=response.data.AADHAR_NUM
                        UP_DOB.innerHTML=response.data.DOB
                        address_span.innerHTML=response.data.ADDRESS+','+response.data.CITY

                    }


                })
                .catch(function(error) {
                    console.log(error);
                });
        }
        function fetch_clients_data1() {
            var bodyFormData = new URLSearchParams();

            bodyFormData.append('ID', store.get('yamasha_user_data').ID);
            bodyFormData.append('TOKEN', store.get('yamasha_user_data').TOKEN);

            axios.post(api_base+'clients_data1.php', bodyFormData)
                .then(function(response) {
                    console.log(response.data);

                    if (response.data.status == 0) {

                    }
                    if (response.data.status == 1) {

                        
                        BANK_NAME.value=response.data.BANK_NAME
                        BANK_AC_NUM.value=response.data.BANK_AC_NUM
                        BANK_IFSC.value=response.data.BANK_IFSC
                        UPI_ID.value=response.data.UPI_ID
                        
                        if(response.data.NOMINEE_NAME!=""){
                            d_none(nominee_add_div,true)
                            d_none(nominee_display_div,false)

                            NOMINEE_NAME_span.innerHTML=response.data.NOMINEE_NAME
                            NOMINEE_NUMBER_span.innerHTML=response.data.NOMINEE_NUMBER
                            NOMINEE_RELATION_span.innerHTML=response.data.NOMINEE_RELATION
                        }

                    }


                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    </script>
    <script>
        function prof_edit(id_base) {

            input_id = `${id_base}_input`;
            edit_btn_id = `${id_base}_edit_btn`;
            submit_btn_id = `${id_base}_submit_btn`;

            document.getElementById(input_id).removeAttribute('readonly');

            //   console.log(document.getElementById(input_id).classList)
            document.getElementById(edit_btn_id).classList.add("d-none");
            document.getElementById(submit_btn_id).classList.remove("d-none");

        }

        function prof_bank_edit(status) {
            edit_btn = document.getElementById('BANK_edit_btn');
            submit_btn = document.getElementById('BANK_submit_btn');
            name_input = document.getElementById('BANK_NAME');
            ac_num_input = document.getElementById('BANK_AC_NUM');
            ifsc_input = document.getElementById('BANK_IFSC');
            upi_input = document.getElementById('UPI_ID');

            // actions
            if (status == true) {
                name_input.removeAttribute('readonly');
                ac_num_input.removeAttribute('readonly');
                ifsc_input.removeAttribute('readonly');
                upi_input.removeAttribute('readonly');
                edit_btn.classList.add("d-none");
                submit_btn.classList.remove("d-none");
            }
            if (status == false) {
                name_input.setAttribute('readonly', '');
                ac_num_input.setAttribute('readonly', '');
                ifsc_input.setAttribute('readonly', '');
                upi_input.setAttribute('readonly', '');
                edit_btn.classList.remove("d-none");
                submit_btn.classList.add("d-none");
            }


        }

        function add_nominee() {

            nominee_submit_div = document.getElementById('nominee_submit_div');
            nominee_add_div = document.getElementById('nominee_add_div');
            nominee_submit_div.classList.remove("d-none");
            nominee_add_div.classList.add("d-none");
        }

        function prof_processing(id_base, status) {
            submit_btn_id = `${id_base}_submit_btn`;
            input_id = `${id_base}_input`;

            if (status == true) {
                document.getElementById(submit_btn_id).textContent = '...'
                document.getElementById(submit_btn_id).disabled = true;
                document.getElementById(input_id).setAttribute('readonly', '');
            }
            if (status == false) {
                document.getElementById(submit_btn_id).textContent = 'Submit'
                document.getElementById(submit_btn_id).disabled = false;
                document.getElementById(input_id).removeAttribute('readonly');
            }
        }

        function prof_submit(id_base) {
            input_id = `${id_base}_input`;
            edit_btn_id = `${id_base}_edit_btn`;
            submit_btn_id = `${id_base}_submit_btn`;

            // make button processing 
            prof_processing(id_base, true)

            input_value = document.getElementById(input_id).value

            var bodyFormData = new URLSearchParams();
            bodyFormData.append('ID', store.get('yamasha_user_data').ID);
            bodyFormData.append('TOKEN', store.get('yamasha_user_data').TOKEN);
            bodyFormData.append('info_name', id_base);
            bodyFormData.append(id_base, input_value);

            /// api call
            axios.post(api_base+'edit_profile.php', bodyFormData)
                .then(function(response) {
                    prof_processing(id_base, false)
                    // console.log(response);

                    if (response.data.status == 1) {
                        document.getElementById(input_id).setAttribute('readonly', '');
                        document.getElementById(submit_btn_id).classList.add("d-none");
                        document.getElementById(edit_btn_id).classList.remove("d-none");

                    } else {
                        console.log(response.data);
                        document.getElementById(submit_btn_id).textContent = 'Retry'

                    }







                })
                .catch(function(error) {
                    console.log(error);
                });

        }

        function prof_bank_submit() {
            edit_btn = document.getElementById('BANK_edit_btn');
            submit_btn = document.getElementById('BANK_submit_btn');
            name_input = document.getElementById('BANK_NAME');
            ac_num_input = document.getElementById('BANK_AC_NUM');
            ifsc_input = document.getElementById('BANK_IFSC');
            upi_input = document.getElementById('UPI_ID');

            // actions
            prof_bank_edit(false)
            edit_btn.textContent = 'Processing'
            edit_btn.disabled = true;
            var bodyFormData = new URLSearchParams();
            bodyFormData.append('ID', store.get('yamasha_user_data').ID);
            bodyFormData.append('TOKEN', store.get('yamasha_user_data').TOKEN);
            bodyFormData.append('info_name', 'BANK');
            bodyFormData.append('BANK_NAME', name_input.value);
            bodyFormData.append('BANK_AC_NUM', ac_num_input.value);
            bodyFormData.append('BANK_IFSC', ifsc_input.value);
            bodyFormData.append('UPI_ID', upi_input.value);

            /// api call
            axios.post(api_base+'edit_profile.php', bodyFormData)
                .then(function(response) {
                    edit_btn.disabled = false;

                    console.log(response.data);

                    if (response.data.status == 1) {

                        edit_btn.textContent = 'edit'



                    } else {
                        console.log(response.data);
                        edit_btn.textContent = 'Retry'

                    }







                })
                .catch(function(error) {
                    console.log(error);
                });


        }

        function submit_nominee() {
            nominee_submit_btn = document.getElementById('nominee_submit_btn');
            NOMINEE_NAME = document.getElementById('NOMINEE_NAME');
            NOMINEE_NUMBER = document.getElementById('NOMINEE_NUMBER');
            NOMINEE_RELATION = document.getElementById('NOMINEE_RELATION');

            ///actions
            nominee_submit_btn.textContent = 'Processing'
            nominee_submit_btn.disabled = true;

            var bodyFormData = new URLSearchParams();
            bodyFormData.append('ID', store.get('yamasha_user_data').ID);
            bodyFormData.append('TOKEN', store.get('yamasha_user_data').TOKEN);
            bodyFormData.append('info_name', 'NOMINEE');
            bodyFormData.append('NOMINEE_NAME', NOMINEE_NAME.value);
            bodyFormData.append('NOMINEE_NUMBER', NOMINEE_NUMBER.value);
            bodyFormData.append('NOMINEE_RELATION', NOMINEE_RELATION.value);
            /// api call
            axios.post(api_base+'edit_profile.php', bodyFormData)
                .then(function(response) {
                    nominee_submit_btn.disabled = false;

                    console.log(response.data);

                    if (response.data.status == 1) {

                        fetch_clients_data1()
                        nominee_submit_btn.textContent = 'EDIT'


                    } else {
                        console.log(response.data);
                        nominee_submit_btn.textContent = 'Retry'

                    }







                })
                .catch(function(error) {
                    console.log(error);
                });


        }
    </script>
</body>

</html>