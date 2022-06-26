<?php





$nav_i = 1;
$page_title = 'Dashboard';
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

		.bg-img {
			background-image: url('https://cdn.discordapp.com/attachments/962990670962900992/969981439015805008/pattern-1.png');
			/* background-repeat: no-repeat; */
			background-color: #222429;
			/* height: 100vh; */
		}

		.text-font {
			font-size: 55px;
		}

		.box-Shadow {
			background-color: black;
			/* box-shadow: 0px 0px 5px 1px black; */
			border-radius: 12px;
		}

		.icon-img {
			/* height: 90px; */
			height: auto;
			/* width: 70px */
			width: 50%;
		}

		@media (min-width:1441px) and (max-width:5555px) {
			.bg-img {
				height: 100vh;
			}

			.fontHeight {
				margin-top: 0;
			}

			.IconsDiv {
				justify-content: space-evenly;
				margin-top: 5px;
			}

			.box-Shadow {
				text-align: center;
				margin-bottom: 17px;
			}

			.icon-img {
				width: 60%;
			}

			.IconsDiv .box-Shadow h6 {
				font-size: 40px;
			}


			.fontHeight h1 {
				font-size: 70px;
			}

			.fontHeight p {
				font-size: 25px;
			}

			.box-elmnt-font h6 {
				font-size: x-large;
			}

			.box-elmnt-font h2 {
				font-size: 40px;
			}
		}

		@media (min-width:992px) and (max-width:1440px) {


			/* .fontHeight h1{
                font-size: 85px;
            }
            .fontHeight p{
                font-size: 32px;
            }

            .box-elmnt-font h6{
                font-size: xx-large;
            }

            .box-elmnt-font h2{
                font-size: 55px;
            } */

			.IconsDiv {
				justify-content: space-evenly;
				margin-top: 26px;
			}

			.box-Shadow {
				text-align: center;
				margin-bottom: 17px;
			}

			.icon-img {
				height: auto;
				width: 30%;
			}

			/* .IconsDiv .box-Shadow h6{
                font-size: 50px;
            } */

		}

		@media (min-width:577px) and (max-width:991px) {

			.box-Shadow {
				text-align: center;
				margin-bottom: 17px;
			}

			.icon-img {
				height: auto;
				width: 20%;
			}

			.bg-img {
				height: auto;
			}
		}

		@media (max-width:576px) {

			.bg-img {
				height: auto;
			}

			.box-Shadow {
				text-align: center;
				margin-bottom: 17px;
			}

			.text-font br {
				display: none;
			}

			.text-font {
				font-size: small;
			}

			.textPara {
				font-size: xx-small;
			}
		}
	</style>

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

				<div class="bg-img">

					<div class="row p-5 mr-0 ">
						<div class="col-lg-6 fontHeight">
							<h1 class="text-light text-uppercase text-font">
								we shape the <br>perfect <br>Solutions.
							</h1>
							<p class="text-light text-capitalize  textPara">
								you need tested strategies powerful. and experienced traders to arm you with knowledge.that's where we come in
							</p>
						</div>
						<div class="col-lg-6 d-flex justify-content-around flex-column flex-lg-row box-elmnt-font fontHeight">
							<div class=" col-lg-5 box-Shadow">
								<h6 class="text-light text-capitalize pt-3">
									yamasha live stock price
								</h6>
								<div class="mt-4">
									<h2 class="text-light text-uppercase mt-5 font-weight-bold">
										yamasha
									</h2>
									<h6 class="text-light text-capitalize">
										yamasha venture limited
									</h6>
								</div>
								<div class="mt-5">
									<h2 class="text-light font-weight-bold"> <span id="yamasha_stock_price">...</span></h2>
									<h6 style="color: rgb(9, 240, 9);">+<span id="yamasha_stock_gain">...</span></h6>
								</div>
							</div>
							<div class="col-lg-5 box-Shadow" onclick="location.href='./wallet.php'">
								<div class="mt-4 pt-5 ">
									<h2 class="text-light text-uppercase font-weight-bold">
										wallet <br> balance
									</h2>
								</div>
								<div class="py-5 ">
									<h2 class="text-light">₹<span id="main_wallet_span">Fetching...</span></h2>
								</div>
							</div>
						</div>
					</div>

					<!-- ICONS  -->

					<div class="row mr-0 IconsDiv">
						<div class="col-lg-2 box-Shadow text-center pt-lg-3 pt-5 mx-lg-0 mx-5 mb-3" onclick="location.replace('./auto_investment.php')">
							<i class="text-center"><img src="https://cdn.discordapp.com/attachments/962990670962900992/965293995578261574/Group_67.png" alt="#error" class="icon-img"></i>
							<h6 class="text-light text-uppercase mt-5">auto <br> investment</h6>
						</div>
						<div class="col-lg-2 box-Shadow text-center pt-lg-3 pt-5 mx-lg-0 mx-5 mb-3">
							<i class="text-warning"><img src="https://cdn.discordapp.com/attachments/962990670962900992/965293995301412924/stock2.png" alt="#error" class="icon-img"></i>
							<h6 class="text-light text-uppercase mt-5">trading</h6>
						</div>
						<div class="col-lg-2 box-Shadow text-center pt-lg-3 pt-5 mx-lg-0 mx-5 mb-3" onclick="location.replace('./invest_whatsapp.php')">
							<i class="text-warning"><img src="https://cdn.discordapp.com/attachments/962990670962900992/965293996006076556/archives_1.png" alt="#error" class="icon-img"></i>
							<h6 class="text-light text-uppercase mt-5">copy <br> trading</h6>
						</div>
						<div class="col-lg-2 box-Shadow text-center pt-lg-3 pt-5 mx-lg-0 mx-5 mb-3" onclick="location.replace('./invest_whatsapp.php')">
							<i class="text-warning"><img src="https://cdn.discordapp.com/attachments/962990670962900992/965293995041361950/time_1.png" alt="#error" class="icon-img"></i>
							<h6 class="text-light text-uppercase mt-5">bnpl</h6>
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
	<script>
		loginCheck()
		setUsernameInHeader()

		//updating wallets
		main_wallet_span = byId('main_wallet_span')
		yamasha_stock_price = byId('yamasha_stock_price')
		yamasha_stock_gain = byId('yamasha_stock_gain')
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
						main_wallet_span.innerHTML=response.data.MAIN
                    }


                })
                .catch(function(error) {
                    console.log(error);
                });
        }
		fetchWallet()

		function fetch_yamasha_stock_data_fun() {
      var bodyFormData = new URLSearchParams();
      
      bodyFormData.append('ID', store.get('yamasha_user_data').ID);
      bodyFormData.append('TOKEN', store.get('yamasha_user_data').TOKEN);
      axios.post(api_base+'yamasha_stock.php', bodyFormData)
        .then(function (response) {
          res = response.data
          console.log(res);
          
          
          if (res.status == 0) {
       
            Swal.fire({
              icon: 'error',
              title: res.msg, toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 5000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })
          }
          if (res.status == 1) {
            
            yamasha_stock_price.innerHTML=res.yamasha_stock_price ;
            yamasha_stock_gain.innerHTML=res.yamasha_stock_gain ;
          
     
         


          }
          if (res.status == -1) {
            logOut()
          }
        })
        .catch(function (error) {
          console.log(error);
        });
    }
    fetch_yamasha_stock_data_fun()
	</script>
</body>

</html>