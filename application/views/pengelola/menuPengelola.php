<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<?php
$this->load->view('style');
$id = $_SESSION['id_pengelola'];
$nama = $_SESSION['nama'];
// var_dump($_SESSION);die;
?>

<head>
	<title>Chat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!--Coded With Love By Mutiullah Samim-->
<style>
	.user_img_msg {
		height: 20% !important;
		width: 20% !important;
		/* border: 1.5px solid #f5f6fa; */
	}

	#textnya {
		font-size: large;
		font: message-box;
		font-weight: bolder;
    margin : auto;
    margin-top : 10px;
	}
</style>

<body>
	<div class="container-fluid h-100">
		<div class="row justify-content-center h-100">
			<div class="col-md-4 col-xl-3 chat">
				<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						
					</div>

					<div class="card-body contacts_body">
						<ui class="contacts">
							<li class="profileku">
								<div class="d-flex bd-highlight">
                <div class="user_info_ku iconya">
										<span class="">
                    <a href="../Pengelola"><i class="fas fa-arrow-left" style="
											color: aliceblue;
											margin-top: 10px;
                      margin-right: 5px;
										"></i></a>
										</span>

									</div>
									<div class="img_cont">
										<img src="https://icons-for-free.com/iconfiles/png/512/business+costume+male+man+office+user+icon-1320196264882354682.png" class="rounded-circle user_img_ku">
									</div>
									<div class="user_info_ku">
										<span><?= $_SESSION['nama'] ?></span>
									</div>								
									
								</div>
							</li>
						</ui>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts" id="yangAktif">
							
						
						</ui>

					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			<div class="col-md-8 col-xl-6 chat">
				<div class="card">
					<div class="card-header msg_head">

					</div>
					<div class="card-body msg_card_body" id="letakpesan">
            <div class="row" >
            <img style="margin : auto;" src="https://sintesa.net/wp-content/uploads/2019/05/livechat.png" class="rounded-circle user_img_msg">
            </div>
            <div class="row">
						
            
					
								
              
								<p id="textnya"   >Hay, <?= $nama ?>!</p>
               
						
              
					
            </div>
            
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
<script>
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
	$(document).ready(function() {
		$('.keluar').click(function(e) {

			Swal.fire({
				title: 'Anda Akan Keluar?',
				text: "Apakah Anda Yakin Akan keluar ? ",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes!'
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						type: "post",
						url: "<?= base_url() ?>/Chat/logout",
						// data: "data",
						dataType: "json",
						success: function(r) {
							// console.log(r)
							// return false
							if (r) {
								Swal.fire(
									'success!',
									r.pesan,
									'success'
								)
								setTimeout(() => {
									location.href = '<?= base_url() ?>login/index';
								}, 1000);
							} else {
								'error!',
								r.pesan,
								'error'
							}

						}
					});

				}
			})

		});
		orang()

		function orang() {
			$.ajax({
				type: "post",
				url: "<?= base_url() ?>Chat/GetAllPengunjung",
				data: {
					id: '<?= $id ?>'
				},
				dataType: "json",
				success: function(r) {
					var html = "";
					var d = r.data;
					id = '<?= $id ?>';
					d.forEach(d => {
						html += `
						<li class="active coba" data-id="${d.id}">
								<div class="d-flex bd-highlight ">
									<div class="img_cont ">
										<img src="https://www.pinclipart.com/picdir/middle/165-1653686_female-user-icon-png-download-user-colorful-icon.png" class="rounded-circle user_img">
										<span class="online_icon " ></span>
									</div>
									<div class="user_info ">	
										<span class="">${d.nama}</span>
										
									</div>
								</div>
							</li>`;

					});
					$('#yangAktif').html(html);
				}
			});
		}
		$('body').on('click', '.coba', function() {
			var id = $(this).data('id');
			window.location.replace("<?= base_url() ?>Chat/chatPengelola/" + id);

		});

	});
</script>

</html>
