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
									  <img src="<?=base_url('img/physical/1.jpg')?>" data-caption="The Game">
									</ul>
								</li>
								<li>
									<ul class="clearing">
									  <img src="<?=base_url('img/physical/2.jpg')?>" data-caption="The Game">
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<text>
							<h1>Physical Computing.</h1>
							<h2>Human Computer Interaction</h2>
							<date>Since: Feb 2010</date>
							<p>
								Part of the work, was developed for research. Only a few projects, saw the light,
								but the others help to understand the interaction between human and computer.<br>
								All this development are based on paper storyboards, electronics prototypes, a lot of sensors and wires.
							</p>
						</text>
					</div>
					<div class="row">
						<ul class="small-block-grid-1 large-block-grid-2">
							<li>
								<div class="panel radius" style="text-align:center;">
									<img src="<?=base_url('img/icons/arduino.png')?>" alt="" />
									<!-- arduino by uizin from the Noun Project, edited by me -->
									<h5>Arduino</h5>
									<p>With a funny imagination and a few sensors, creating fast prototypes</p>
								</div>
							</li>
							<li>
								<div class="panel radius" style="text-align:center;">
									<img src="<?=base_url('img/icons/raspberry.png')?>" alt="" />
									<!-- raspberry by Tom Medley from the Noun Project, edited by me -->
									<h5>Raspberry Pi</h5>
									<p>For a powerful and simple human computer interaction.</p>
								</div>
							</li>
						</ul>
					</div>
					<?=$sharepane?>
				</div>
		</div>
	</div>
	</box>
