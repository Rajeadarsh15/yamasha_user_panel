<?php
$page_title = 'Main Wallet'
?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <?php include "./includes/com_head.php";
    include "./includes/com_css.php"; ?>
    <!-- File Uploads css -->




    <style>
        .boxShadow {
            height: 78vh;
            overflow-y: auto;
            overflow-x: hidden;
            box-shadow: 0px 0px 5px 1px rgb(253, 247, 247);
            border-radius: 12px;
            background-color: rgb(19, 18, 18);
        }

        .form-control {
            background-color: #000;
            /* border: 2px solid #407Bff; */
            box-shadow: 0px 0px 10px 3px #407Bff;
        }

        .line {
            background-color: rgb(39, 38, 38);
            border-bottom: 2px solid black;
        }

        .textAlign {
            position: relative;
            top: 10px;
        }

        /* Stock performance CSS */

        .box {
            box-shadow: 0px 0px 5px 2px rgb(253, 247, 247);
            background-color: rgb(19, 18, 18);
            border-radius: 12px;
            padding: 23px;
            margin: 23px;
            /* height: 160px; */
            width: 130px;
        }

        .boxs {
            box-shadow: 0px 0px 5px 2px rgb(253, 247, 247);
            background-color: rgb(19, 18, 18);
            border-radius: 12px;
            padding: 23px;
            margin: 23px;
            /* height: 160px; */
            /* width: 140px; */

        }

        .dcolumns {
            flex-direction: column;
            gap: 15px;
        }

        .textFont {
            font-size: 40px;
            width: 100%;
        }

        .fontText1 {

            font-size: 20px;

        }

        .fontText2 {
            font-size: 15px;
        }

        .fontText3 {
            font-size: 10px;
        }

        .NiftyBox {
            position: relative;
            left: 07px;
            gap: 45px;
        }

        @media (min-width:1024px) and (max-width:1265px) {

            .textFont {
                font-size: 30px;
            }
        }

        @media (min-width:992px) and (max-width:1023px) {

            .textFont {
                font-size: 25px;
            }
        }

        @media (min-width:768px) and (max-width:992px) {
            .box {
                height: auto;
                width: 100%;
                text-align: center;
                position: relative;
                left: -10%;
                margin: 0 42px;
            }

            .boxs {
                height: auto;
                width: 100%;
                text-align: center;
            }

            .textFont {
                font-size: 20px;
            }

            .fontText1 {
                font-size: 50px;
            }

            .fontText2 {
                font-size: 40px;
            }

            .fontText1 {
                font-size: 30px;
            }

        }

        @media (max-width:767px) {
            .box {
                height: auto;
                width: 100%;
                text-align: center;
                position: relative;
                left: -10%;
                margin: 0 42px;
            }

            .boxs {
                height: auto;
                width: 100%;
                text-align: center;
            }

            .textFont {
                font-size: 10px;
                width: 100%;
            }

            .NiftyBox {
                left: 0px;
                gap: 0px;
            }

            .fontText1 {
                font-size: 50px;
            }

            .fontText1 {
                font-size: 50px;
            }

            .fontText2 {
                font-size: 40px;
            }

            .fontText1 {
                font-size: 30px;
            }
        }

        @media (min-width:315px) and (max-width:365px) {

            .box {
                height: auto;
                width: 100%;
                text-align: center;
                position: relative;
                left: -10%;
                margin: 0 42px;
            }

            .boxs {
                height: auto;
                width: 100%;
                text-align: center;
                margin: 10px 20px;

            }

            .NiftyBox {
                position: relative;
                left: -7px;
                gap: 0;
                flex-direction: column;
            }

            .textFont {
                font-size: 7px;
            }

            .fontText1 {
                font-size: 50px;
            }

            .fontText2 {
                font-size: 40px;
            }

            .fontText1 {
                font-size: 30px;
            }

            .boxShadow {
                width: 100%;
            }
        }
    </style>
    <style>
        .negative {
            color: #f65150;
        }

        .positive {
            color: #4ec04e;
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

                <div style="background-color: #000;">


                    <!-- Stocks Table -->

                    <div class="container-fluid" style="padding-top: 25px;
">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="boxShadow">
                                    <div class="m-3 p-2 py-4">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="search_input" placeholder="Company Name ">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" id="search_btn" onclick="search_fun()" type="button">Search</button>
                                            </div>
                                        </div>
                                        <div class="list-group d-none" id="search_res_div" style="overflow-y: auto;
    max-height: 50vh;">

                                            <button type="button" class="list-group-item list-group-item-action">ZIMLAB (<span class="badge">NSE</span>) <br>ZIM Laboratories Limited </button>
                                            <button type="button" class="list-group-item list-group-item-action" onclick="watch_list_action_fun('add', {name: 'HDFCBANK',token:'500180',exch: 'BSE'})">Morbi leo risus</button>
                                            <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                                            <button type="button" class="list-group-item list-group-item-action">Vestibulum at eros</button>
                                        </div>
                                    </div>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr class="line" style="background-color: #000;">
                                                <th scope="col-5" class="text-light ">Scrip name</th>
                                                <th scope="col-3" class="text-light">LTP</th>
                                                <th scope="col-2" class="text-light">Cng</th>
                                                <th scope="col-2" class="text-light">Cng(%)</th>
                                                <th scope="col-2" class="text-light">del</th>

                                            </tr>
                                        </thead>
                                        <tbody id='t_body'>
                                            <!-- <tr class="line">
                                <td class="">
                                    <p class="text-light textAlign">HDFCBANK</p>
                                    <P class="text-light" style="font-size: small; position: relative;top: -10px;">BSE
                                    </P>
                                </td>
                                <td>
                                    <p class="text-light textAlign"><span id="ltp_500180">1,354.20</span></p>

                                </td>
                                <td class="">
                                    <p class="text-light textAlign"><span id="netchng_500180"
                                            class="negative">-23.75</span></p>
                                </td>
                                <td>
                                    <p class="text-light textAlign"><span id="percentagechange_500180">-1.72</span></p>
                                </td>
                            </tr> -->


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- stock performance -->
                            <div class="col-lg-6">
                                <div class="d-flex flex-column ">
                                    <div class="d-flex justify-content-center  NiftyBox">
                                        <div class="col-md-5  m-md-0 text-left boxs">
                                            <p class="text-light pt-3 font-weight-bold textFont">Sensex</p>
                                            <h4 class=" text-light font-weight-bold"><span id="iv_sensex">00.00</span></h4>
                                            <h6 class="text-light"><span id="cng_sensex">00.00</span> (<span id="nc_sensex">00.00</span>%)<span id="old_cng_sensex" class="d-none">00.00</span></h6>

                                        </div>
                                        <div class="col-md-5  m-md-0 text-left boxs">
                                            <p class="text-light pt-3 font-weight-bold textFont">Nifty 50</p>
                                            <h4 class=" text-light font-weight-bold"><span id="iv_nifty">00.00</span></h4>
                                            <h6 class="text-light"><span id="cng_nifty">00.00</span> (<span id="nc_nifty">00.00</span>%)<span id="old_cng_nifty" class="d-none">00.00</span></h6>

                                        </div>
                                    </div>


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

    <script src="./assets/js/socket.js"></script>
    <script src="./assets/js/sweetalert2.all.min.js"></script>

    <script>

        setTimeout(() => {
            location.reload()
        }, 1000*60*5);
        loginCheck()
        setUsernameInHeader()




        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function feed_token_fun(action) {
            var bodyFormData = new URLSearchParams();

            bodyFormData.append('action', action);


            axios.post(api_base+'feed_token.php', bodyFormData)
                .then(function(response) {
                    res = response.data

                    console.log(res);


                    if (res.status == 0) {

                    }
                    if (res.status == 1) {
                        store.set('yamasha_feed_token', res.feed_token)

                        if (action == 'update') {
                            // location.reload()
                            index_websocket_fun()
                        }
                    }


                })
                .catch(function(error) {
                    console.log(error);
                });
        }
        if (!store.get('yamasha_feed_token')) {
            feed_token_fun('get')
        }

        if (!store.get('yamasha_watch_list_data')) {
            store.set('yamasha_watch_list_data', [])
        }
        // {
        //         name: 'HDFCBANK',
        //         token: '500180',
        //         exch: 'BSE',
        //         full_name: 'BSE',


        //     }, {
        //         name: 'RELIANCE',
        //         token: '2885',
        //         exch: 'NSE',
        //         full_name: 'NSE',

        //     }, {
        //         name: 'ACC',
        //         token: '22',
        //         exch: 'NSE',
        //         full_name: 'NSE',

        //     }
        function websocket_fun() {


            var ws = new websocket('M101612', store.get('yamasha_feed_token'));

            //connect to server
            ws.connection();

            //add callback after socket connection
            ws.on('connect', connectionOpen);

            function connectionOpen() {

                ws.runScript(mw_command, "mw");
                // SCRIPT: exchange|token for multi stocks use & seperator, mcx_fo|222900  ### TASK: mw|sfi|dp



            }



            //add callback method where you can manipulate socket data
            ws.on('tick', receiveTick);

            //user defined function
            function receiveTick(data) {

                // console.log(data);
                if (data == 'Socket Closed') {
                    console.log('Socket Closed');
                    // location.reload()
                    // ws.connection();
                    websocket_fun() 
                }
                result = JSON.parse(data);
                // console.log(result);



                // checking length
                i = 0
                while (result.length > i) {

                    if (result[i].name == 'sf') {
                        if (result[i].ltt == 'NA') {
                            return false;
                        }
                        token = result[i].tk

                        // checking old net change 

                        old_netchng_data = Number(document.getElementById('old_netchng_' + token).innerHTML)

                        diff = Number(result[i].cng) - old_netchng_data;
                        switch (true) {
                            case diff > 0:
                                class_name = 'positive'
                                break;
                            case diff < 0:
                                class_name = 'negative'
                                break;

                            default:
                                class_name = ''
                        }

                        // updating data to table 

                        document.getElementById('ltp_' + token).innerHTML = numberWithCommas(result[i].ltp)
                        document.getElementById('netchng_' + token).innerHTML = Number(result[i].cng).toFixed(2)
                        if (diff != 0) {
                            document.getElementById('netchng_' + token).className = class_name
                        }
                        document.getElementById('percentagechange_' + token).innerHTML = Number(result[i].nc).toFixed(2)

                        document.getElementById('old_netchng_' + token).innerHTML = Number(result[i].cng);

                    }
                    if (result[i].name == 'if') {
                        console.log('if')
                    }

                    // checking connection $ getting new feed token
                    if (result[i].task == 'cn') {
                        if (result[i].ak == 'nk') {
                            // trigger feed token refresher
                            console.log('feed token expired');
                            feed_token_fun('update');
                        }
                    }
                    i++
                }


                // if (data.length == 0) {
                //     ws.close();
                // }




            }
        }

        function watch_list_fun() {


            watchListArr = store.get('yamasha_watch_list_data')

            mw_command = ''

            // creating tables elements
            t_i = 0
            document.getElementById('t_body').innerHTML = ''
            if (watchListArr.length > 0) {
                while (watchListArr.length > t_i) {

                    document.getElementById('t_body').innerHTML += `<tr class="line">
                    <td class="">
                        <p class="text-light textAlign">${watchListArr[t_i].name} (<span class="badge">${watchListArr[t_i].exch}</span>)</p>
                        <P class="text-light" style="font-size: small; position: relative;">${watchListArr[t_i].full_name}
                        </P>
                    </td>
                    <td>
                        <p class="text-light textAlign"><span id="ltp_${watchListArr[t_i].token}">00.00</span></p>

                    </td>
                    <td class="">
                        <p class="text-light textAlign"><span id="netchng_${watchListArr[t_i].token}"
                                class="">00.00</span><span id="old_netchng_${watchListArr[t_i].token}"
                                class="d-none">00.00</span></p>
                    </td>
                    <td>
                        <p class="text-light textAlign"><span id="percentagechange_${watchListArr[t_i].token}">00.00</span></p>
                    </td>
                    <td>
                    <button class="btn btn-primary" type="button" onclick="watch_list_action_fun('delete', ${t_i})">delete</button>
                    </td>
                </tr>`

                    switch (watchListArr[t_i].exch) {
                        case 'BSE':
                            mw_e = 'bse_cm'
                            break;
                        case 'NSE':
                            mw_e = 'nse_cm'
                            break;
                        case 'NFO':
                            mw_e = 'nse_fo'
                            break;
                        case 'MCX':
                            mw_e = 'mcx_fo'
                            break;
                        case 'NCDEX':
                            mw_e = 'ncx_fo'
                            break;
                        case 'CDS':
                            mw_e = 'cde_fo'
                            break;
                        default:
                            mw_e = ''
                    }
                    and = ''
                    if (t_i > 0) {
                        and = '&'
                    }

                    mw_command += and + mw_e + '|' + watchListArr[t_i].token

                    t_i++
                }
                websocket_fun()
            }

        }
        watch_list_fun()


        function watch_list_action_fun(action, data) {
            old_arr = store.get('yamasha_watch_list_data')
            if (action == 'delete') {

                if (data > -1) {
                    old_arr.splice(data, 1); // 2nd parameter means remove one item only
                }
                new_arr = old_arr

            }
            if (action == 'add') {
                old_arr.push(data)
                new_arr = old_arr
                d_none(byId('search_res_div'), true)
            }

            store.set('yamasha_watch_list_data', new_arr)
            // console.log('actin');
            // console.log(store.get('yamasha_watch_list_data'));
            watch_list_fun()
        }

        function index_websocket_fun() {


            var ws = new websocket('M101612', store.get('yamasha_feed_token'));

            //connect to server
            ws.connection();

            //add callback after socket connection
            ws.on('connect', connectionOpen);

            function connectionOpen() {

                ws.runScript('bse_cm|SENSEX&nse_cm|Nifty 50', "sfi");
                // SCRIPT: exchange|token for multi stocks use & separator, mcx_fo|222900  ### TASK: mw|sfi|dp



            }



            //add callback method where you can manipulate socket data
            ws.on('tick', receiveTick);

            //user defined function
            function receiveTick(data) {

                // console.log(data);
                if (data == 'Socket Closed') {
                    console.log('Socket Closed');
                    index_websocket_fun()
                    // location.reload()
                    // ws.connection();
                }
                result = JSON.parse(data);
                // console.log("index websocket");
                // console.log(result);



                // checking length
                i = 0

                while (result.length > i) {

                    if (result[i].name == 'if') {
                        if (result[i].tvalue == 'NA') {
                            return false;
                        }
                        token = result[i].tk
                        // console.log(token);
                        if (token == 'Nifty 50') {
                            token = 'nifty'
                        }
                        if (token == 'SENSEX') {
                            token = 'sensex'
                        }
                        // console.log(token);

                        // checking old net change 

                        old_netchng_data = Number(document.getElementById('old_cng_' + token).innerHTML)

                        // console.log(old_netchng_data)

                        diff = Number(result[i].cng) - old_netchng_data;
                        switch (true) {
                            case diff > 0:
                                class_name = 'positive'
                                break;
                            case diff < 0:
                                class_name = 'negative'
                                break;

                            default:
                                class_name = ''
                        }

                        // updating data to table 

                        document.getElementById('iv_' + token).innerHTML = numberWithCommas(result[i].iv)
                        document.getElementById('cng_' + token).innerHTML = Number(result[i].cng).toFixed(2)
                        if (diff != 0) {
                            document.getElementById('cng_' + token).className = class_name
                        }
                        document.getElementById('nc_' + token).innerHTML = Number(result[i].nc).toFixed(2)

                        document.getElementById('old_cng_' + token).innerHTML = Number(result[i].cng);

                    }


                    // checking connection $ getting new feed token
                    if (result[i].task == 'cn') {
                        if (result[i].ak == 'nk') {
                            // trigger feed token refresher
                            console.log('feed token expired');
                            feed_token_fun('update')
                        }
                    }
                    i++
                }


                // if (data.length == 0) {
                //     ws.close();
                // }




            }
        }
        index_websocket_fun()

        function search_fun() {
            query = byId('search_input').value

            search_btn=byId('search_btn') 
            btn_loading(search_btn,'Searching',true)

            if (query == '') {
                btn_loading(search_btn,'',false)
                return false;
            }
            var bodyFormData = new URLSearchParams();

            bodyFormData.append('action', 'search');
            bodyFormData.append('query', query);


            axios.post(api_base+'script_master.php', bodyFormData)
                .then(function(response) {
                    btn_loading(search_btn,'',false)
                    res = response.data

                    console.log(res);
                    search_res_div = byId('search_res_div')

                    if (res.status == 0) {

                    }
                    if (res.status == 1) {
                        //    console.log(res.res_data.length);
                        if (res.res_data.length > 0) {
                            d_none(search_res_div, false)
                            i = 0
                            search_res_div.innerHTML = ''
                            while (res.res_data.length > i) {
                                search_res_div.innerHTML += ` <button type="button" class="list-group-item list-group-item-action"onclick="watch_list_action_fun('add', {name: '${res.res_data[i].name}',token:'${res.res_data[i].token}',exch: '${res.res_data[i].exch}',full_name: '${res.res_data[i].full_name}'})">
                            ${res.res_data[i].name} (<span class="badge">${res.res_data[i].exch}</span>) <br>${res.res_data[i].full_name}</button>`
                                i++
                            }
                            setTimeout(() => {
                                d_none(search_res_div, true)
                            }, 10000)
                        }
                    }


                })
                .catch(function(error) {
                    console.log(error);
                });


        }
    </script>


</body>

</html>