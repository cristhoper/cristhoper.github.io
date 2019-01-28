	<box>
		<div class="row">
			<div class="large-3 columns">
				<div class="animated bounceInLeft">
					<sidebar>
						<?=$intropane?>
						<?=$navigationpane?>
						<?=$workpane?>
					</sidebar>
				</div>
			</div>
			<div class="large-9 columns">
				<div class="animated fadeIn">
					<div class="row">
						<div class="large-12 columns">
							<ul class="small-block-grid-2 large-block-grid-2">
								<li>
									<ul class="clearing">
									  <img src="<?=base_url('img/luxia/salcobrand_s.jpg')?>" data-caption="Espacio Salcobrand, Costanera Center">
										<!-- imagen extraida de www.luxia.cl. Su contenido pertenece a Luxia Lighting -->
									</ul>
								</li>
								<!--li>
									<ul class="clearing">
										<img src="<?=base_url('img/luxia/spacework_s.jpg')?>" data-caption="The Workspace">
									</ul>
								</li>
								<li>
									<ul class="clearing">
										<img src="<?=base_url('img/luxia/uianemix_s.jpg')?>" data-caption="UI Anemix Color Control">
									</ul>
								</li-->
								<li>
									<ul class="clearing">
										<img src="<?=base_url('img/luxia/anemix1_s.jpg')?>" data-caption="First version">
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<text>
							<h1>Luxia Lighting. The Anemix</h1>
							<h2>Desktop Application and Hardware device</h2>
							<date>Published: Octubre 2013</date>
							<p>
									The project was developed for <a href="http://luxia.cl" target="_blank">Luxia Lighting</a>.
									They want to control from another device, the color of the Anemix. But they alredy had a few PCB that controls only 5[W]
									and they needed to control at least 15W, so a new hardware and software was developed.<br>
									First, a desktop application based on Qt5/C++ was created to send commands throw serial port to an arduino.
									For the old PCB, a new Arduino code was burned and a few extra wires was soldered to communicate with the desktop app.
									And finally, for the power needed, a new PCB was created to allow to provide a maximum of 70[W].<br>
									All the hardware process was developed over Arduino UNO, and Eagle... a couple of wires and a lots of leds.
							</p>
						</text>
					</div>
					<?=$sharepane?>
				</div>
		</div>
	</div>
	</box>
