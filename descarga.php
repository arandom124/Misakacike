<?php
//este codigo pertenece al contador de visitas inicia aqui
function contar_usuarios(){
  $archivo = 'contador_apk.txt';
  if (file_exists($archivo)){
    $cuenta = file_get_contents($archivo) + 1;
    file_put_contents($archivo, $cuenta);
    return $cuenta;
  }
  else
  {
    file_put_contents($archivo, 1);
    return 1;
  }
}//este codigo pertenece al contador de visitas termina aqui
?>
<?php  require 'header.php'; ?>

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(https://1.bp.blogspot.com/-gK4A3flizZk/YTz6HX1GiqI/AAAAAAAAMPw/VPxAlebREOEEE2PA_k-LJF0sgVPGlV3ugCLcBGAsYHQ/s1920/mskk.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Descarga la aplicacion Movil..
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									arandom app... 
								</h2>
								<h3 class="mtext-111 cl2 p-b-16" style="color: white;">
									app1147293.apk
								</h3>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="https://apk.e-droid.net/apk/app1147293.apk" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Bajar 
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(https://1.bp.blogspot.com/-gK4A3flizZk/YTz6HX1GiqI/AAAAAAAAMPw/VPxAlebREOEEE2PA_k-LJF0sgVPGlV3ugCLcBGAsYHQ/s1920/mskk.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Descarga la aplicacion Movil..
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									arandom app... 
								</h2>
								<h3 class="mtext-111 cl2 p-b-16" style="color: white;">
									app1147293.apk
								</h3>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="https://apk.e-droid.net/apk/app1147293.apk" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Bajar
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="item-slick1" style="background-image: url(imgR/baner.jpg);"> -->
				<div class="item-slick1" style="background-image: url(https://1.bp.blogspot.com/-gK4A3flizZk/YTz6HX1GiqI/AAAAAAAAMPw/VPxAlebREOEEE2PA_k-LJF0sgVPGlV3ugCLcBGAsYHQ/s1920/mskk.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Descarga la aplicacion Movil..
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									arandom app... 
								</h2>
								<h3 class="mtext-111 cl2 p-b-16" style="color: white;">
									app1147293.apk
								</h3>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="https://apk.e-droid.net/apk/app1147293.apk" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Bajar
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16" style="color: black;">
							Stream en vivo radios
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Esta aplicación le permite escuchar diferentes emisoras tanto regionales, nacionales como internacionales 😲😟😱😱 además de los diferentes géneros y variedad en música.

							También encontrarás imágenes con la etiqueta "Sin consumir Datos" .😎😎
							Donde Podrás sintonizar las emisoras preferidas con solo activar los datos móviles del teléfono 🤳📱📲.
						</p>

						<p class="stext-113 cl6 p-b-26">
							Esta aplicación cuenta con más de 28 emisoras streaming en Vivo buscando en el menú. 
						</p>

					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="https://1.bp.blogspot.com/-2XCyQf4eu1w/YTz6R7tc-pI/AAAAAAAAMP4/7Fw0hw73qiA1SjdqubQhL4o6cfP12X-WgCLcBGAsYHQ/s2048/mskk2.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16" style="color: black;">
							Cine, Musicas tv
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Podrás ver canales de televisión, música🎶🎶 y cine🎬🎬 .
						💻🖥️💻
						Cuenta con 4 canales de musica, 3 canales de cine.
						Más adelante se agregaran contenidos series de animes y más música en vivo de las mejores plataformas de streaming.
						</p>

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
								La creatividad es solo conectar cosas. Cuando le preguntas a las personas creativas cómo hicieron algo, se sienten un poco culpables porque en realidad no lo hicieron, solo vieron algo. Parecía obvio para ellos después de un tiempo.
							</p>

							<span class="stext-111 cl8">
								- Steve Job’s 
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="https://1.bp.blogspot.com/-l29bgulPcYA/YTz6QSh6usI/AAAAAAAAMP0/vpCu-NNV1w83dg0TqoGQAWnWiCUT2JO9gCLcBGAsYHQ/s2048/mskk3.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					app1147293.apk -- Movil Stream en vivo
				</h3>
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="https://apk.e-droid.net/apk/app1147293.apk" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
					Bajar apk Radio
				</a>
			</div>
		</div>
	</section>
	<center><p class="numero"><?php echo contar_usuarios(); ?>👁️</p>
      </center>
<?php  require 'footer.php'; ?>
