<?php





$nav_i = 1;
$page_title = 'Refer and earn';
// include './includes/config.php';

?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <?php include "./includes/com_head.php";
    include "./includes/com_css.php"; ?>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        /* .border{
            border: none;
            border-bottom: 1px solid black;
        } */

        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 140px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            left: 50%;
            margin-left: -75px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        .dnone {
            display: none;
        }

        .border-left {
            border: none;
            border-left: .5px solid rgba(159, 157, 157, 0.38);
        }

        .img {
            width: 100px;
        }

        @media (max-width: 576px) {
            .img {
                height: 150px;
                width: 150px;
            }

            .border-bottom h1 {
                font-size: 20px;
            }

        }
    </style>
    <script src="https://kit.fontawesome.com/914412e122.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>

</head>

<body class="app sidebar-mini rtl bg-img ">

    <!--Global-Loader-->
    <div id="global-loader"></div>

    <div class="page">
        <div class="page-main">

            <?php include "./includes/header.php";
            include "./includes/nav.php";
            ?>



            <!--content-area-->
            <div class="content-area">

                <div class="p-5">
                    <!--  Start Reward Heading -->
                    <div class="border-bottom">
                        <h1 class="pb-3">
                            <i class="bi bi-gift"></i>
                            Rewards and referrals
                        </h1>
                    </div>
                    <!-- <hr> -->

                    <!-- End reward heading -->

                    <!-- Start content -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-6 mt-lg-5"><img src="https://cdn.discordapp.com/attachments/962990670962900992/981548156699426816/logo.png" class="img" alt="logo" /></div>
                                <div class="col-6">
                                    <div class=" p-5">
                                        <p>Your points</p>
                                        <div class="mt-5">
                                            <div class="d-flex">
                                                <h6 class="mt-2"><span id="referral_points">Loading..</span></h6>
                                                <a href="" class="nav-link">view statement</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <!-- Text start  -->

                            <div class="text-dark ">
                                <h5 class="border-left mt-5 p-5">
                                    Refer a friend and earn 250 points each when they open an account.
                                    <button class="border-0 bg-light text-info" style="text-decoration: none" onclick="show()" id="hide">
                                        Read more
                                    </button>
                                </h5>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class=" p-lg-5 mt-4">
                                <div class="d-flex">
                                    <p class="nav-link ">Your referrels link</p>
                                    <a href="https://www.facebook.com/" class="nav-link"><i class="fab fa-facebook-square fa-2x"></i></a>
                                    <a href="" class="nav-link"><i class="fab fa-twitter-square fa-2x" style="color: #00ACEE;"></i></a>
                                    <a href="https://wa.me/ " class="nav-link"><i class="fab fa-whatsapp-square fa-2x text-success"></i></a>
                                    <a href="#" class="nav-link"><i class="fab fa-linkedin fa-2x" style="color: #0072B1;"></i></a>
                                </div>
                                <div class="mb-3 d-flex">
                                    <input class="border-0 border-bottom form-control" id="refer_link" style="background-color: white;" readonly />
                                    <button type="button" id="copy_btn" data-clipboard-target="#refer_link" class=" btn border-0 text-light p-2 px-3" style="background-color: blue;border-top-right-radius: 3px;border-bottom-right-radius: 3px;">Copy</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="show" class="dnone mt-5 p-5">
                        <h5>
                            Unlock Rupee 250 Cashback Your Friend will receive a SMS / Whatsapp to
                            Download / Open Account Link. <br> You can earn upto Rupee 5000 per month
                            when 20 of your Friends can open Account with us.<br> Important : - You
                            must have an exciting Yamasha Account to earn cashback.<br> - Your friend
                            has to open a Yamasha Account.<br> ( Average Balance required of only
                            Rupee 5000. within 30 days of opening the account.<br> - Terms and
                            Condition of this programme are subject to change without prior
                            notice.
                        </h5>
                    </div>



                    <div class="p-4">
                        <div class="d-flex">
                            <h4>Refer a friend</h4>
                            <button class="nav-link border-0 bg-light" id="referrals" onclick="showReferrals()">View referrals</button>
                        </div>
                        <div class="d-flex justify-content-between align-item-center flex-lg-row flex-column mt-lg-0 mt-4">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control border-0 border-bottom">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control border-0 border-bottom">
                            </div>
                            <div class="form-group">
                                <label for="">Mobile</label>
                                <input type="number" name="number" class="form-control border-0 border-bottom">
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn text-light " style="background-color: blue;">Submit</button>
                            </div>
                        </div>
                    </div>

                    <!-- Refferal History -->

                    <div class="m-md-5 text-center dnone" style="border-radius: 10px;" id="refList">
                        <table class="table table-borderless">
                            <thead style="background-color: rgb(147, 146, 146);">
                                <tr class="line">
                                    <th scope="col-2" class="text-light text-uppercase">Referral Date</th>
                                    <th scope="col-3" class="text-light text-uppercase">Name</th>
                                    <th scope="col-2" class="text-light text-uppercase">Status</th>
                                    <th scope="col-2" class="text-light text-uppercase">Reward Date</th>
                                    <th scope="col-2" class="text-light"></th>
                                </tr>
                            </thead>
                            <tbody id="t_body">
                                <!-- <tr class="table-line ">
                                    <td>
                                        <p class="font-weight-bold">12/12/2022</p>
                                    </td>
                                    <td>
                                        <p class="text-capitalize">Shubhankar</p>

                                    </td>
                                    <td class="">
                                        <p>successful</p>
                                    </td>
                                    <td>
                                        <p class="font-weight-bold">20/12/2022</p>
                                    </td>
                                </tr> -->

                            </tbody>
                        </table>

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
    <script>
        loginCheck()
        setUsernameInHeader()



        //updating wallets
        referral_points = byId('referral_points')
        t_body = byId('t_body')
        refer_link = byId('refer_link')

       

        if (location.host == '192.168.100.5') {
            url = 'http://192.168.100.5/yamasha_v1/user_panel/register.php';
        } else {
            url = 'https://yamasha.in/user_panel/register.php';
        }
        refer_link.value = url + '?refer=' + store.get('yamasha_user_data').ID

        new ClipboardJS('#copy_btn');

        const showReferrals = () => {

            const showReferralsList = document.getElementById('refList');
            const viewRef = document.getElementById('referrals');

            showReferralsList.style.display = "block";
            viewRef.style.display = "none";

        }
        const show = () => {
            const hide = document.getElementById('hide');
            const d_show = document.getElementById("show");
            d_show.style.display = "block";
            hide.style.display = "none";
        };

        function fetchWallet() {
            var bodyFormData = new URLSearchParams();

            bodyFormData.append('ID', store.get('yamasha_user_data').ID);
            bodyFormData.append('TOKEN', store.get('yamasha_user_data').TOKEN);

            axios.post(api_base+'wallets.php', bodyFormData)
                .then(function(response) {
                    console.log(response.data);

                    if (response.data.status == 0) {

                    }
                    if (response.data.status == 1) {
                        referral_points.innerHTML = response.data.REFERRAL
                    }


                })
                .catch(function(error) {
                    console.log(error);
                });
        }
        fetchWallet()


        function referral_history_fun() {
            var bodyFormData = new URLSearchParams();

            bodyFormData.append('ID', store.get('yamasha_user_data').ID);
            bodyFormData.append('TOKEN', store.get('yamasha_user_data').TOKEN);

            axios.post(api_base+'referral_history.php', bodyFormData)
                .then(function(response) {
                    res = response.data
                    console.log(res);

                    if (res.status == 0) {

                    }
                    if (res.status == 1) {


                        if (res.res_data.length > 0) {
                            i = 0
                            t_body.innerHTML = '';
                            while (res.res_data.length > i) {

                                if (res.res_data[i].REF_BY_PRIZE_STATUS == 0) {
                                    REF_BY_PRIZE_STATUS = 'Pending'
                                }
                                if (res.res_data[i].REF_BY_PRIZE_STATUS == 1) {
                                    REF_BY_PRIZE_STATUS = 'Success'
                                }
                                if (res.res_data[i].REF_BY_PRIZE_STATUS == 2) {
                                    REF_BY_PRIZE_STATUS = 'Expired'
                                }

                                t_body.innerHTML += `<tr class="table-line ">
                                    <td>
                                        <p class="font-weight-bold">${res.res_data[i].REF_DAT}</p>
                                    </td>
                                    <td>
                                        <p class="text-capitalize">${res.res_data[i].NAME}</p>

                                    </td>
                                    <td class="">
                                        <p>${REF_BY_PRIZE_STATUS}</p>
                                    </td>
                                    <td>
                                        <p class="font-weight-bold">${res.res_data[i].REF_BY_PRIZE_DAT}</p>
                                    </td>
                                </tr>`

                                i++
                            }
                        }
                    }


                })
                .catch(function(error) {
                    console.log(error);
                });
        }
        referral_history_fun()
    </script>
</body>

</html>