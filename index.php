<?php  require 'header.php'; ?>
<?php
//este codigo pertenece al contador de visitas inicia aqui
function contar_usuarios(){
  $archivo = 'contador.txt';
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

	<!-- Slider las img carrosel -->
<section class="section-slide">
	<div class="wrap-slick1 rs2-slick1">
		<div class="slick1">
			<div class="item-slick1 bg-overlay1" style="background-image: url(img/slide-05.jpg);" data-thumb="img/thumb-01.jpg" alt="Generic placeholder image" width="100%" height="100%" data-caption="Misak Misak Waramik">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear=--"fadeInDown" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								Misak Misak Waramik
							</span>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								misak visibiliza la identidad cultural de los pueblos
							</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1 bg-overlay1" style="background-image: url(img/slide-06.jpg);" data-thumb="img/thumb-02.jpg" data-caption="Territorio Ancentral Wampia">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								Territorio Ancentral Wampia
							</span>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								que habita en el sur de Colombia en el departamento del Cauca. Su Resguardo Mayor original Guambìa está en el municipio de Silvia y habitan también en otros lugares cercanos, de la Cordillera Central de los Andes colombianos.
							</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1 bg-overlay1" style="background-image: url(img/slide-07.jpg);" data-thumb="img/thumb-03.jpg" data-caption="Pueblo Misak">
				<div class="container h-full">
					<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
							<span class="ltext-202 txt-center cl0 respon2">
								Pueblo Misak
							</span>
						</div>
							
						<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
							<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
								Para los antropólogos, los Misak son originarios del territorio del prehispánico cacicazgo de Calambás, que hacía parte de la Confederación Pubense
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="wrap-slick1-dots p-lr-10"></div>
	</div>
</section>
<br>
<br>
<h1><center>Nam Misak</h1></center> 
<br>

<!-- Mensajes de marketing y artículos destacados

    ================================================== -->

    <!-- Envuelva el resto de la página en otro contenedor para centrar todo el contenido. -->



    <div class="container marketing">



      <!-- Tres columnas de texto debajo del carrusel. -->

      <div class="row">

        <div class="col-lg-4">

          <img class="img-circle" src="img/ishuk.jpg" title="No sea malo, comparta" width="140" height="140" style="border-radius:65px 65px 65px 65px;">

          <h2>Ishuk Misak</h2>

          <p align="justify">namui shurmera pe trentan... “namui misak mera manasrөnkutri өsik warailan wam mөrөsrөp eshkap warapelөpe pulelelai lata yana waraptө өskөraik kilkayutө warөmөn cha; trek kөmөtө namui wamyu, kitrөp pichip yu metrapsrө kutri wentөsrө katik asha wam yu kutri srap pөlpasrik”   kөntan. “namui pirau nөtrө shuk merayu namui metrap misamera chinetө pөrөp piship mara pөnsrailө pe: aship, nөtrө isuilө, nөtrө kusrennөpelө kuikөn; inchakutri manasrөnkutri nam misak maitө warapelө kuikwan mөinkatik wam mөrөsrөp waran tru namui nөtrө wammera taik. </p>

          

        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">

          <img class="img-circle" src="img/mok.jpg" alt="Generic placeholder image" width="140" height="140" style="border-radius:65px 65px 65px 65px;">

          <h2>MӨk Misak</h2>

          <p align="justify">Namui shurmerai kampa nөtrө wam meran tap aship wam mөrөp ipene namui shurmerape trentan: kampa wam meran ashene mөisrөmpe pek kөn  cha, kakentө mөi misak merape ik wam meran shurmerai wamyu kutri aship wam mөrөp marөp kөmөtө wampik kutri kusreilө tөka nepua wetsallip intamik nepuimpa; incha trek kutri wampikik wan pa kemesra ashene namuipape chinchaken kanlatraptө misrmik kuikөn, wam merape pekpek misran lliskөp cha ashen. </p>

          

        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">

          <img class="img-circle" src="img/niños.jpg" alt="Generic placeholder image" width="140" height="140" style="border-radius:65px 65px 65px 65px;">

          <h2>Urek Mera</h2>

          <p align="justify">uremera wam mөrsrap pupelan eshkapik kui kөn, katөkane punө patrө ampөrap ipurap wam mөrik wan pekuchipik kui kөn, namui tasiku tratrө katө namui nu isua kusreilan eshkan: na ñi namui nu pirө tata mama iklө kutike nepua asilө pe namui nu kusreilө kөn. Namui tratrө tasik urek kuinuk. </p>

          

        </div><!-- /.col-lg-4 -->

      </div><!-- /.row -->





      <!-- INICIAR reseña historica___________________________________________________________________________________________-->

      <div class="content">

       

      <h1><center>Reseña Historica</h1></center>      

    

    <br><hr>El pueblo Misak esta ubiacado al nororiente del departamento del Cauca, municipio de Silvia-Territorio Ancestral Guambia.</br></hr>



      <br>Ha iniciado procesos desde antes del año 1980, ya que nuestro mayores tenian una vision de recuperar el territorio de igual manera

    nuestra identidad para pervivir en el tiempo y en el espacio.</br>



    <br>Por ello, Nuestro pueblo Misak ha adelantado diferentes procesos para la comunidad bajo el Principio

    de <b>"Recuperar La Tierra Para Recuperarlo Todo"</b> promulgado en nuestro <b>Manifiesto Guambiano "Ipe Namui kon-Ñimmerai Kucha."</b></br>



    



    <br>Uno de esos procesos es el planeamiento educativo desde nuestra cosmovicion de tal manera que nuestro saberes y conocimientos sean 

    transmitidos de generacion en generacion mediante el fortalecimiento de la oralidad desde el Naachak y la escritura desde las Instituciones 

    Educativas </br>

     

    <br><center><IMG SRC ="img/tapal.jpg" alt="Generic placeholder image" width="100%" height="100%"></center></br>



    <center><h1>MEMORIAS ANCESTRALES</h1></center>

    <hr>Desde muchos siglos atras la cultura Guambana ha existido con sus propios Usos y Costumbres basada en la enseñanzas de la primeras Autoridades 

    Naturales. A mediados de la decada de los 70 pensamos entre Guambianos y Nazas y otra comunidades del pais con el apoyo de otras organizaciones sociales

    sindicales, religiosos, politicos, universidades, comunidades Afrodecendientes, medios de comunicacion, en recuperar los que nos quitaron desde el 

    año 1492 y en los años 80 en adelante se unifica el pensamiento de las comunidades: en donde el gran objeto fue "recuperar la tierra para recuperlo todo"

    como el derecho mayor era el mas importante.</br></hr>



    <br>Junto a estas luchas tambien nace la investigacionantropologica, arqueologica a la cabeza del <b><i>Taita Avelino Dagua Hurtado</b></i>, Exgobernantes, algunos lideres de la

    comunidad con el apoyo de solidarios externos al terrritorio.</br>

    <br>

    <br>

      

    <center><IMG SRC ="img/origen.jpg" alt="Generic placeholder image" width="100%" height="100%"></center> 

    <br>

    <center><IMG SRC ="img/territorio.jpg" alt="Generic placeholder image" width="100%" height="100%"></center>

    <br>

    <br>



    <h1><center>IMPACTO DE PENSAMIENTO</center></h1>

    <hr><br>Con este fundamento entra a avanzar el concepto del territorio y su espiral alcanzando a difundir el pensamiento

    en los departamentos del Cauca, Huila, Valle, con sus respectivos municipios. Podemos considerar que es un paso inportante

    de seguir recuperando y fortaleciendo el pensamiento Wampia.Consecuente a este proceso de lucha surge el pensamiento cosmogonico

    de la Originalidad Wampia, como fundamento de identidad propio en su sentido integral (material y espiritual).</hr></br>



    <br>El sentido espiritual que hace el Wam forma demedio de comunicacion propia y natural con un criterio de <b>"MANANASRO KUTRI MANANASRON KATIK"</b>

    es decir que nuestra comunicacion es un instrumento de resistencia y fortalecimiento a los usos y costumbres desde tiempos inmemoriables y que 

    hoy es reconstruido de manera escrita y plasmado en un materia original.</br>



    <br><center><IMG SRC ="img/espiral.png" alt="Generic placeholder image" width="100%" height="100%"></center></br>



    <br><center><IMG SRC ="img/yastau.jpg" alt="Generic placeholder image" width="100%" height="100%"><I>FOTO...SILVIA BARRIO LAS DELICIAS</I></center></br>

    <br>

    <br>



    <h1><center> SE RECONSTRUYE LA EDUCACION PROPIA Y NATURAL</h1></center>



    <hr>En la reconstruccion vital del habla y la escritura Wampia habarca la educacion propia que biene desde el fogon con un sentido integral y armonico con la

    naturaleza contribuyendo a fortalecer procesos de organizacion para el ejercicio de la soberania Wampia revitalizando los procesos locales hacia un orizonte

    equilibrado del pensamiento misak.</hr>



    <h2> La escritura se convierte en un espacio politico y universal</h2>



    porque en este explora y cultiva integralmente los valores practicos en todo tiempo y lugar donde la escritura Wampia contiene todos los aspectos sociales: en lo politico

    economico, cultural y asi llevar el equilibrio, conservación y seguridad en el futuro de los espacios geopoliticos.

    <br>

    <br>



    <br><center><IMG SRC ="img/maestros.jpg" alt="Generic placeholder image" width="100%" height="100%"></center></br>

    <center><IMG SRC="img/yauelo.jpg" alt="Generic placeholder image" width="100%" height="100%"></center>

    <br>

    <br>



    <H1><CENTER>LA GOBERNABILIDAD ANCESTRAL</CENTER></H1>



    <hr>Con base a las cuatro autoridades de la gobernabilidad de <B>YASGUEN, PUBEN, PETECUY Y PAYAN</B> en la territorialidad Wampia, con los fundamentos a este modelo de gobierno seran reconocidos

    los <B>TATAS Y MAMAS</B> actuales para fortalecer, alimentar y conservar nuestra propia politica hacia el sendero de la Confederación integral y armonica basado en la comunicación oral de las

    <B>SHURAS Y SHURES</B> relacionando tambien con el material de la lecto-escritura como la base pedagogica.</hr>

    <br>

    <br> 



    <br><center><IMG SRC="img/taita.jpg" width="320" height="494"><I>FOTO...Taita Vicente Paja EXGOBERNADOR</I></center></br>

    <br><center><IMG SRC="img/cabildo.jpg" alt="Generic placeholder image" width="100%" height="100%"><I>FOTO...Santiago resguardo de Wampia</I></center></br>



    <!-- demo para radio______________________________________________ -->

    <h3 align="center">Nuestro Himno</h3>

    <center><audio src="https://drive.google.com/uc?export=download&id=1qSYKdNBq6iTtfSxwZ_nUsCVGWpZsCpCK" preload="none" controls></audio></center>

    <h5 align="center">Wampia Misak Mera</h5>  



<h2> AUTORIDAD MAYOR DEL PUEBLO MISAK ¿DE DONDE VENIMOS?</h2>



<hr>Muchos datos históricos y las memorias del PUEBLO WAMPIAS nos muestran su existencia 

millas de años antes de l.492 en este sitio del continente, que luego los invasores denominaron AMERICA,

 en homenaje a uno de los navegantes que llegaron a estas tierras.

Mucho antes de la llegada de los invasores europeos, el pueblo Wampias, junto con otros pueblos vecinos,

 los Totoroes, Kokonucos, Piendamus, Piaguas y otros, habíamos conformado la CONFEDERACION PUBENENZE con

  sus territorios bien definidos, con sede de Gobierno el YAUTO, ( hoy POPAYAN) ya cuya cabeza se encontró el cacique PAYAN.

Este territorio ocupado por el pueblo Wampias y los vecinos que conformaban la Confederación PUBENENZE se

 denominaba originalmente KAUKA. Al llegar los invasores europeos a estas tierras de la CONFEDERACION PUBENENZE

  con Juan de Ampudia a la cabeza y bajo las órdenes de Sebastián de Belalcázar, quienes pusieron nuestros pueblos 

  bajo su dominio, creando lo que se llamó la Gobernación de POPAYAN en un área geográfica muchísimo mas amplia.</br></hr>



Durante el proceso de destrucción, despojo, someimiento y dominio nuestros que los invasores establecieron sobre 

pueblos y organización del Estado colonial en nuestros territorios, crearon los Virreinatos, Gobernaciones y otras

 entidades territoriales y administrativas, con frecuentes cambios de sedes. Por eso, durante algún tiempo, la Gobernación

  de Popayán dependió del virreinato de Quito (hoy capital de la República del Ecuador), donde se tomaban las decisiones

   y reparticiones de indios, según el sistema de las encomiendas.



Como todos los pueblos nativos que existían en este continente, luego llamado América, también fuimos sometidos 

a condiciones de esclavitud en el trabajo en las minas y como cargueros de los invasores.



Al reducirse dramáticamente la población por las matanzas masivas de nativos debido a la tenaz resistencia 

que ofrecimos al sometimiento y dominio de los invasores, el Gobierno Real español se vio obligado a crear 

el sistema de las Encomiendas, reduciéndonos socialmente a la servidumbre, lo cual aliviaba un poco el brutal

 tratamiento de bestias a que éramos sometidos pero no solucionaba la explotación y opresión sobre nuestros pueblos.



En el siglo XVIII el Gobierno Real español creó los resguardos sobre áreas muy pequeñas de lo que han sido los

 territorios ancestrales de nuestros pueblos, otorgándoles títulos colectivos, las cuales no podrían ser vendidas a particulares, enajenadas ni podrían ser objeto de prescripción de dominio, supuestamente para darle mayor protección a los nativos porque lo real era que seguíamos siendo víctimas de incontables abusos de parte de los invasores y colonizadores.

Después de las guerras de independencia y la creación de las Repúblicas con sus Estados y Gobiernos criollos de las minorías dominantes y que para nuestros pueblos no trajo soluciones sino más bien el empeoramiento de nuestra situación, también se sucedieron frecuentes cambios en la conformación de las entidades territoriales y administrativas. Desde los ensayos de organización del Estado federalista a mediados del siglo XIX, hasta el centralista con la Constitución de l.886 y que hasta hoy existe.

Por eso, existió el Estado Soberano del Cauca durante el período federalista. Luego surgió la división territorial y administrativa por Departamentos, Municipios, Corregimientos, y veredas, tal como lo conocemos actualmente. De allí que hoy nos encontremos ubicados en el Sur Occidente de la República de Colombia, Nororiente del Departamento del Cauca, Oriente del Municipio de Silvia.

Aunque durante las guerras de independencia y durante los primeros años de conformación de la República, el Estado y Gobiernos de las minorías dominantes criollas, algunos de los dirigentes de esos procesos como Antonio Nariño y Simón Bolívar, reconocieron nuestra existencia y algo de nuestros derechos y promovieron algunas leyes a favor nuestro, la verdad es que posteriormente nuestra situación social, política y jurídica empeoró, en vez de mejorar, pues en general, esas minorías dominantes criollas siempre han actuado y actúan en contra nuestra. Esta acción sistemática en contra de nuestros derechos la podemos comprobar, entre otros tantos testimonios históricos, en la disolución forzosa de la gran mayoría de resguardos en lo que hoy son los Departamentos de Cundinamarca, Boyacá y Tolima a mediados del siglo XIX,

Las encomiendas, la mita y los conciertos de los tiempos de la Colonia se acabaron, pero nos impusieron el sistema del terraje en las haciendas de los terratenientes y gamonales políticos, sujeción aun peor que las anteriores, la cual se mantuvo hasta los años 70 del siglo XX en el Departamento del Cauca y otras regiones de Colombia.

La Ley 89 de l.890 es cierto que reconoció los títulos de los resguardos pero es igualmente cierto que fijó el límite de 50 años para reducir las comunidades indígenas a “la vida civilizada”, para integrarnos a la sociedad mayoritaria nacional, es decir, para acabarnos.  

A pesar de todos los cambios que se hayan operado en los procesos de invasión, de destrucción de pueblos y culturas, de despojo de nuestros territorios y de someimiento ideológico, político y cultural que hasta hoy continúa, lo importante para nosotros es saber que somos de aquí. Nacimos aquí. Vivimos, trabajamos, sufrimos y gozamos aquí en lo que nos han dejado y lo que hemos podido recuperar de territorio. Esta es nuestra cuna y desde ella queremos proyectar nuestro futuro colectivo como pueblo.

Antes que llegaran los invasores europeos y antes que las minorías dominantes criollas crearan sus Repúblicas, Estados y Gobiernos, existíamos nosotros como pueblos organizados, con nuestros Gobiernos e identidad cultural. Este es el fundamento de nuestro Derecho Mayor o conjunto de normas y costumbres que regulan nuestra vida interna y las relaciones con la sociedad mayoritaria nacional.

La historia, la memoria y lo que hemos podido recuperar de nuestra cultura son testimonios que fundamentan lo nuestro: Territorio; saberes para el manejo de los recursos naturales; gobiernos para ordenar el uso de los recursos, la convivencia de nuestras comunidades y las relaciones con otros pueblos; pensamiento propio para orientarnos en las relaciones con la naturaleza y con los pueblos vecinos; y cultura como acumulación y resumen de saberes para transmitirlos en la sucesión de generaciones.

Y fundamenta lo nuestro la resistencia que hemos sostenido durante cientos de años, y de manera especial la lucha desde los años 70 del siglo XX hasta ahora, en defensa de nuestros derechos que, a pesar de haber sido reconocidos como derechos de todo el Movimiento de los pueblos indígenas internamente en Colombia y en la legislación internacional, hoy están siendo amenazados y en riego de perderlos. </p>



 <br>

 <br>



<p><h2> ¿CUAL ES LA SITUACION QUE VIVIMOS HOY?</h2>



<<hr>Recientemente el Estado y Gobierno colombianos han promovido y aprobado un conjunto de leyes en contravía de la Constitución de 1.991 que anulan la legislación especial para pueblos indígenas, como la Ley 715, el Código de Minas, la Reforma Política, la Ley de Justicia y Paz, las Leyes de Bosques, Aguas, Páramos, de Desarrollo Rural, Decretos y Resoluciones sobre comercialización de productos de origen agropecuario (o normas de la OMC) que amenazan gravemente la estabilidad jurídica de los títulos de los  resguardos, ponen en riesgo nuestros territorios, la  vida comunitaria colectiva,  y todos nuestros derechos.

Toda esta legislación ha sido promovida y aprobada para favorecer a las tras y multinacionales, a los grupos monopolistas criollos, a los nuevos terratenientes narco- paramilitares, a los restos de los viejos terratenientes y a los políticos tradicionales reaccionarios que invaden nuestros territorios, saquean los recursos de nuestros pueblos y del pueblo colombiano, imponiendo el terror mediante masacres y asesinatos en masa, la persecución y la represión, el chantaje, la confusión y la división con programas demagógicos para engañar a las comunidades.

Ahora, quien concentra el poder y gobierna en Colombia es la alianza de las tras y multinacionales con  los grupos monopolistas criollos, los nuevos terratenientes narco- paramilitares, los restos de los viejos terratenientes y los políticos tradicionales reaccionarios, que en forma coordinada y combinada, hacen esfuerzos por destruir el último bastión de resistencia contra el autoritarismo que han impuesto en cabeza de su Presidente Álvaro Uribe Veles.

En las luchas de nuestro pueblo desde los años 60, 70 y 80 del siglo XX, recuperamos las tierras del resguardo que nos habían arrebatado los terratenientes, recuperamos el cabildo y autoridades de la influencia y dominio de grupos religiosos y de los gamonales políticos que los usaban para cobrar diezmos y para mantener la cauda electoral; hemos logrado algunos avances en la defensa de la autonomía y en la producción, en la recuperación de nuestra cultura, en la educación, en la medicina tradicional y en la jurisdicción especial.

A pesar de haber recuperado las tierras del resguardo colonial, era imposible permanecer todos allí, pues la disponibilidad de tierras laborables no lo permitía. Por eso, tuvimos que ir a otros Municipios vecinos en el Cauca  y otros lugares de los Departamentos del Huila y Valle del Cauca para continuar sobreviviendo. La mayoría de los que hemos salido, hemos logrado constituir nuevos resguardos y reconstruir poco a poco las  autoridades y nuestra vida comunitaria colectiva. Otros, solo tenemos cabildos pero hacemos esfuerzos por mantener las relaciones comunitarias internas.

Desde hace varios años la población misak vive un proceso de crecimiento sostenido y de  dispersión  desde el punto de vista demográfico y geográfico. Esta situación crea dificultades pero también tiene sus potencialidades para la unificación y desarrollo del pueblo Misak.

Desde el punto de vista conceptual, en el pueblo Misak se mueven diferentes grupos y corrientes  ideológicas y religiosas. Estas realizan sus actividades proselitistas manteniendo las formas de la cultura misak, por lo menos la más esencial que es nuestro idioma. Con ellas queremos que se mantengan y fortalezcan relaciones de respeto, de compresión y de solidaridad y que en la medida de sus posibilidades puedan contribuir en el propósito de unificación del pueblo Misak.

Desde el punto de vista político también se mueven dentro del pueblo Misak diferentes fuerzas y posturas que van desde algunos pocos sectores que aún conservan influencia de grupos y partidos tradicionales reaccionarios, otros que se han adherido a sectores políticos alternativos, y la tendencia que puede ser mayoritaria y que todavía conserva y se orienta por los principios del Movimiento de Autoridades Indígenas de Colombia (AICO), sin que esto quiera decir que comparte el manejo que está haciendo el grupo electorero y politiquero que se tomó este Movimiento.

Con estas fuerzas y posturas también debemos construir consensos en caso de que siempre los más nobles intereses del pueblo Misak: la prolongación de su existencia como pueblo con sus autoridades y su cultura.</br></hr>

<br>

<br>

 



<p><h2> ¿HACIA DONDE QUEREMOS IR?</h2>



<hr>La situación de crecimiento demográfico y dispersión geográfica; la grave escasez de tierras que aún tenemos; las continuas y preocupantes declaraciones de altos funcionarios del Estado y Gobierno colombianos, incluido el Presidente Uribe, expresando tajantemente que “no habrá más tierras para los indígenas”; los ilegales impedimentos que han colocado algunas autoridades municipales a la adquisición de tierras a nuestros comuneros; la deliberada acción política de movilizar sectores del pueblo colombiano en contra nuestra; y la dispersión de objetivos provocada por la influencia de las diferentes fuerzas y posturas políticas dentro de nuestras comunidades, nos han hecho reflexionar; nos han motivado a discutir y emprender la elaboración de una propuesta con vistas a perfilar soluciones de fondo para el futuro de nuestro pueblo.</br></hr>

Desde el año 2.003 comenzamos a discutir sobre la posibilidad de unificar las autoridades y cabildos del pueblo Misak. Con una interrupción en los años 2.005 y 2.006, la agudización de contradicciones en la comunidad, el cabildo y autoridades de Guambía (Silvia), nos obligó a retomar la discusión, profundizarla y avanzar en la propuesta de constitución del NU NAK SHAK como AUTORIDAD MAYOR DEL PUEBLO MISAK para unificarlo y dar un paso más en el camino de nuestra autonomía y autodeterminación.

Vamos hacia la unificación de los bastones de mando. Vamos hacia la unificación de cabildos de nuestro pueblo. Vamos hacia la unificación de nuestras autoridades. Vamos por el más grande objetivo que es la unificación de nuestro pueblo Misak.

Aunque estemos dispersos, seguimos trabajando, luchando, pensando y sintiendo como misak. Nuestra decisión es continuar luchando por la prolongación de nuestra existencia como pueblo y como cultura.

Nuestra máxima aspiración es reconstruir económica, social y culturalmente el pueblo Misak. La espiral de crecimiento, según la cosmovisión de los misak, nos ayuda a entender que, la dispersión demográfica y geográfica por la que estamos atravesando actualmente, genera la dispersión de los fogones de cada familia. Cada familia enciende su nuevo fogón en cada nuevo sitio donde se instala. Por esto es necesario que los muchos fogones nuevos que hemos encendido dispersos, se integren en el NU NAK SHAK. Es decir, el NU NAK SHAK representa la unión de todas las familias. La unión de las familias, exige la unión de las autoridades y cabildos. La unión de los cabildos hace la unión de los bastones de mando. Y todo esto nos dará como resultado la unificación del pueblo Misak.

Consideramos que es la forma natural y propia de reencontrarnos e integrarnos, reconstruir nuestras autoridades, la educación y la cultura desde el fogón, reconstruir la autoridad desde la familia, desde las comunidades para todo el pueblo misak. Debe ser por tanto, un especio libre en el que se reúnan nuestras autoridades a resolver los problemas que nos referimos. No precisamos para esto de personerías jurídicas, pues la jurisdicción especial indígena ha definido que “los cabildos son entidades de derecho público especial” y la unión de los mismos es parte de esa jurisdicción.

Es la forma más adecuada de reconstrucción de las relaciones internas de solidaridad colectiva desde las familias, las comunidades y el pueblo misak. Proceso que debe contribuir también a la construcción de relaciones solidarias con los demás pueblos indígenas y con el pueblo colombiano pues las amenazas a las que estamos enfrentados con las políticas del Estado y Gobierno colombianos no son únicamente para el pueblo Misak. Esas amenazas son para todos los pueblos indígenas y para el pueblo colombiano. Este es el motivo por el cual debemos solidarizarnos, apoyarnos y unirnos para luchar juntos.

Con esta unión de cabildos, de taitas y mamas de nuestro pueblo Misak, estamos dando un paso trascendental en la reconstrucción de nuestra autoridad mayor y en la preparación para la defensa de nuestros derechos, sobre todo hoy cuando se encuentran amenazados por las políticas que han puesto en marcha el Estado y Gobierno colombianos.

Esta autoridad mayor asume desde ya una responsabilidad muy grande ante nuestro pueblo: Orientarlo en la lucha por la defensa de nuestros derechos. Apoyar y acompañar a los demás pueblos indígenas y al pueblo colombiano en la lucha por la defensa de sus derechos. </p>

<br>

<br>

 



<p><h2>¿PARA QUÉ EL NU NAK CHAK, AUTORIDAD MAYOR DEL PUEBLO MISAK?</h2>



<hr>Para luchar por la unificación de nuestro pueblo Misak. La dispersión demográfica y geográfica en que nos encontramos por la escasez de tierras laborables en lo que nos dejaron de territorio ancestral y la imposibilidad de adquirirlas en sitios aledaños, nos ha obligado a salir a otros lugares, tendencia que continuará porque allí sigue siendo muy grave la escasez de tierras para trabajar y sostener nuestras familias. Esa dispersión puede conducir a la disolución irreversible de nuestro pueblo y nuestra cultura. Por eso, estamos obligados también a hacer grandes esfuerzos para unificar nuestras autoridades y cabildos, nuestras comunidades y nuestro pueblo.

Para luchar por la defensa de nuestros territorios que ya hemos logrado recuperar y hacer lo que sea posible hacer para su ampliación.</br></hr>

Para hacer realidad el gran sueño que tenemos todos los pueblos indígenas, de la RECONSTRUCCION ECONOMICA, SOCIAL Y CULTURAL, en este caso, de nuestro pueblo Misak.

Para hacer cada día mas firmes y fuertes nuestras autoridades en cada una de las comunidades y en todo el pueblo Misak.

Para consolidar nuestra autonomía frente al Estado y Gobierno colombianos, los actores armados y demás fuerzas económicas y políticas del país.

Para organizar y desarrollar políticas de seguridad y soberanía alimentarias y fortalecer la producción agroalimentaria propia.

Para avanzar en la reconstrucción de nuestros valores culturales, para lo cual debemos continuar y profundizar los trabajos de investigación histórica y de memoria.

Para fortalecer y mantener nuestra identidad cultural como pueblo Misak y poder garantizar así la permanencia cultural en el tiempo y en el espacio. 

Para luchar por la defensa de los derechos que hemos logrado recuperar con el esfuerzo de todo el Movimiento Indígena, del apoyo solidario del pueblo colombiano y de nuestra propia lucha. </p>

<br>

<br>

 



<p><h2>¿SOBRE QUÉ ORIENTACIONES Y PRINCIPIOS DEBEMOS CONSTRUIR NUESTRA AUTORIDAD MAYOR (NU NAK SHAK) MISAK?</h2>



<hr>1.- En la cultura Misak existió y aun subsiste el principio de latá-latá o principio de igualdad (=), de reciprocidad o beneficio compartido. Este principio de nuestra cultura, se ha debilitado mucho y tiende a desaparecer por la fuerza de la civilización dominante de la sociedad mayoritaria nacional, que a su vez, es la civilización universal dominante, de la explotación y dominación de los más fuertes sobre los más débiles, de la discriminación por razones económicas, sociales, políticas, culturales, etc.</br></hr>

Para la construcción de nuestra AUTORIDAD MAYOR debemos reconstruir ese principio de latá-latá o principio de igualdad, de reciprocidad o beneficio compartido. No hay ni podrá haber unos cabildos más importantes que otros. No hay ni podrá haber un o unos cabildos que mandan y otros que obedecen. Ningún cabildo puede considerarse dueño del poder y de la capacidad de decisión sobre los demás. Todos somos iguales y tenemos derechos iguales. En nuestra AUTORIDAD MAYOR (NU NAK SHAK) no podrá haber autoridades que decidan por encima de las demás, ni unas comunidades superiores a otras porque tienen más población o porque reciben transferencias o reciben más que otras.

</p>

 



<p>2.- La participación en la conformación de nuestra AUTORIDAD MAYOR es completamente libre y voluntaria de las autoridades y cabildos. A ninguna autoridad y cabildo se le puede obligar a hacer parte del NU NAK SHAK y que permanezca allí. Pero si hace parte de la AUTORIDAD MAYOR deberá siempre seguir las orientaciones y decisiones colectivas que ella adopte. Los cabildos y demás autoridades conservan su autonomía en las decisiones que deben tomar para resolver los problemas de cada una de sus comunidades. Pero cuando se trata de decisiones para todo el pueblo Misak, no podrá adoptarlas unas autoridades o cabildos por encima y sin consultar con los demás.</p>



<p>3.- La AUTORIDAD MAYOR del pueblo Misak está obligada a acompañar la lucha por la defensa y el reconocimiento de los derechos de los demás pueblos indígenas y del pueblo colombiano. Si nosotros luchamos y exigimos el reconocimiento de nuestros derechos, debemos reconocer los derechos de los demás. Lucharemos dentro de nuestras autoridades y comunidades por mantener y construir unas relaciones solidarias y de apoyo mutuo con los demás pueblos indígenas, con los campesinos, afro colombianos y en general con el pueblo colombiano.</p>



 



<p>4.- Como pueblo y como cultura, tenemos el derecho a continuar existiendo en condiciones dignas. Por eso, seguiremos luchando por ampliar nuestros territorios. Esta lucha no la hacemos por capricho sino porque es imposible sobrevivir en el reducido espacio que nos dejaron. Solo que esta ampliación queremos hacerla donde haya posibilidades, sin crear conflictos con otros pueblos indígenas, con campesinos o con afro colombianos.</p>



<p>5.- Nuestra AUTORIDAD MAYOR debe continuar y avanzar en la lucha por la defensa de nuestros derechos frente al Estado y Gobiernos colombianos, mantener esa relación de autoridad a autoridad y procurando que nuestras autoridades sean reconocidas, respetadas y aceptadas como lo que realmente son: autoridades de nuestros pueblos. Las relaciones que las autoridades de los pueblos indígenas deben mantener con el Estado y Gobierno colombianos, por ahora y por mucho tiempo no podrán ser relaciones de amistad y menos de solidaridad. Son relaciones de conflicto porque a todo momento y por diferentes medios desconocen nuestros derechos. Sus políticas, sus leyes, programas y acciones están hechos y promovidos para acabarnos, para exterminarnos física y culturalmente.</p>



 



<p>6.- La AUTORIDAD MAYOR de nuestro pueblo Misak no es ni puede ser el fruto de un acto de posesión por muy importante que este sea. Su consolidación será el resultado de un trabajo constante e intenso con las autoridades y comunidades para aclarar su significado, su importancia y el papel que debe cumplir; de socialización entre las autoridades, dirigentes y comunidades misak para que sean consientes de lo que representen nuestra AUTORIDAD MAYOR en la unificación de nuestro pueblo; de la realización de asambleas en cada uno de los cabildos, resguardos y comunidades y que sean ellos quienes le dan la fuerza y ​​legitimidad necesaria para ejercer sus funciones como tal AUTORIDAD MAYOR.</p>



<p>7.- La AUTORIDAD MAYOR de nuestro pueblo Misak no es ni puede ser la simple unión de los cabildos existentes ni puede ser otro cabildo más grande que actúa y decide por encima de las comunidades y sus cabildos. Esta instancia mayor de autoridad tenemos que construirla desde las bases, desde las comunidades, desde los comuneros y sus familias, desde y al calor de cada uno de los fogones encendidos y de las luchas de resistencia social, política y cultural de nuestro pueblo. Serán por lo tanto, los logros alcanzados en la recuperación de la economía propia, el fortalecimiento de la lucha de resistencia por la defensa de nuestros derechos y la reconstrucción del pensamiento y cultura propia, los indicativos más claros que demuestren si estamos cumpliendo con lo que nos ha encomendado el pueblo Misak o no.</p>



 



<p>8.- La evaluación es, con mayor razón en este caso, una herramienta que nos permite, momento a momento, seguir la huella de lo que vamos haciendo o dejando de hacer y comprobar si estamos avanzando o no. Pero la evaluación no la podemos reducir simplemente a hacer listados de lo que hicimos o dejamos de hacer. Más que esos listados, la evaluación hay que acompañarla de un gran deseo de superación individual y colectiva y de un sólido espíritu crítico, tanto para señalar los errores como para presentar propuestas de solución y superación de los mismos.</p>



<p>9.- Más que voluminosos planes y programas; más que repetidos diagnósticos y sucesiones de cuadros estadísticos, lo que necesitamos es REALIZAR muchas tareas sencillas, ejecutar acciones prácticas para resolver multitud de pequeños problemas acumulados que vienen generando graves situaciones en nuestras comunidades. De menudos problemas estamos llenos. De pequeños conflictos estamos saturados, sobre todo en algunos de los cabildos, entre las autoridades y dirigentes, en los comuneros y en las familias. Esta situación nos ha hecho perder de vista los verdaderos y grandes problemas que padece todo nuestro pueblo Misak, los demás pueblos indígenas y el pueblo colombiano. Nos ha hecho perder de vista el horizonte y las perspectivas hacia donde debemos caminar. E incluso, nos ha hecho perder de vista quienes son los verdaderos enemigos principales de nuestro pueblo, de los demás pueblos indígenas y del pueblo colombiano. Por andar buscando responsables de los hombres que padecemos donde no están; por buscar a quien echarle la culpa de nuestra lamentable situación en el lugar equivocado, y por no querer reconocer que muchos de esos hombres los causamos nosotros mismos por no reconocer los errores, nos encontramos ante una situación muy crítica de pérdida de confianza de los comuneros en las autoridades, en los dirigentes y en sus propias fuerzas. Por todo esto, lo que necesita hacer nuestra AUTORIDAD MAYOR, es asumir con mucha prudencia sí pero con mucha firmeza también,</p>

      

    </article>

  </div>



      <!-- termina reseña historica___________________________________________________________________________________________-->



      <!-- INICIAR LAS CARACTERÍSTICAS-->



      <hr class="featurette-divider">



      <div class="row featurette">

        <div class="col-md-7">

          <h2 class="featurette-heading">Nuestra ALA KUSREIK YA <span class="text-muted">Misak Universidad</span></h2>

          <p class="lead">ALA KUSREIK YA- Misak Universidad, busca la construcción de un sistema educativo propio que sirva de plataforma en la recuperación de los saberes, identidad y cultura del pueblo Misak, y cómo, para conseguir este propósito, los Misak han vinculado tanto a la arquitectura de la universidad, como a los contenidos de la educación que ofrece, su cosmovisión,  identidad, y pensamientos sobre el ser Misak, basados en los principios de  escuchar, ver, pensar y hacer.</p>

        </div>

        <div class="col-md-5">

          <br><img src="img/misaku.jpg"  alt="Generic placeholder image" width="100%" height="100%">

        </div>

      </div>

      

      <hr class="featurette-divider">





      <!--Inicia segundo sector-->



      <div class="row featurette">

        <div class="col-md-7 col-md-push-5">

          <h2 class="featurette-heading">Ubicacion  <span class="text-muted">Wampia Cauca</span></h2>

          <p class="lead">El territorio guambiano se encuentra ubicado al oriente del departamento del Cauca municipio de Silvia suroccidente Colombiano, en las estribaciones de la cordillera central, en el páramo de las Delicias y Moras, en el Municipio de Silvia, departamento del Cauca, a 60 Km de la capital Popayán. Guambía se encuentra entre los paralelos 2º 45’ de latitud norte, y los meridianos76º 15’ y 76º 00’ de longitud oeste del meridiano de Greenwich, con altitudes que van desde los 2500 a 3800 metros sobre el nivel del mar, con una temperatura media que oscila entre 10ºc y 14ºc. 

Los límites actuales son:  

Al norte: con los Resguardos Indígenas Páez de Pitayo y Mosoco; al oriente: con el Resguardo Indígena Páez de Yaquivá y el corregimiento de Gabriel López, municipio de Totoró; al sur: con la cabecera municipal de Silvia; al occidente: con el Resguardo Indígena Páez de Quichaya y el Resguardo Indígena Guambiano de Quizgo 

</p>

        </div>

        <div class="col-md-5 col-md-pull-7">

          <br><img src="img/ubicacion.jpg"  alt="Generic placeholder image" width="100%" height="100%">

        </div>

      </div>



    <!--Termina segundo sector-->



      <hr class="featurette-divider">



      <div class="row featurette">

        <div class="col-md-7">

          <h2 class="featurette-heading">Enseñanzas a las <span class="text-muted">Nuevas Generaciones.</span></h2>

          <p class="lead">Nam yu pirau manakutri warapelө kui katipe isuilө tөkar, wam tөkar, kemakuilө tөkar tretөwai chikөpen marilө tөkar kuinapentө mөiyasrөmpe nampe tre tap nepua ashmelө amtruinatan kanmaipe wampikelantө tap kөtanmap mөrөp; trek kuintөkucha nam Misak kui katipe namui shurmerai nөtrө aship kusreilan katөle isua mur marөp pөntramik palan; isuinuk kutri namui wamyu katik</p>

        </div>

        <div class="col-md-5">

         <br><img src="img/nuevasgener.jpg"  alt="Generic placeholder image" width="100%" height="100%">

        </div>

      </div>



      <hr class="featurette-divider">





      <!-- /FINALIZAR LAS CARACTERÍSTICAS -->
      <center><p class="numero"><?php echo contar_usuarios(); ?>👁️</p>
      </center>


<?php  require 'footer.php'; ?>
