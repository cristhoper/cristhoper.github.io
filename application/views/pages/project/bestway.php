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
				<ul class="small-block-grid-2 large-block-grid-2">
					<li>
						<ul class="clearing">
						  <img src="<?=base_url('img/bestway/1.jpg')?>" data-caption="caption here...">
						</ul>
					</li>
					<li>
						<ul class="clearing">
							<img src="<?=base_url('img/bestway/2.jpg')?>" data-caption="caption here...">
						</ul>
					</li>
				</ul>
				<text>
					<h1>Grupo Bestway</h1>
					<h2>Web Backend, API and mobile app</h2>
					<date>Published: December 2013</date>
					<p>This project was developed in <a href="http://octano.cl" target="_blank">Octano</a> for <a href="http://grupobestway.cl" target="_blank">Grupo Bestway</a>.<br>
						This development was structured in two important parts, one of them is data producer and the mobile is the consumer, but the producer need to know who will be the consumers.
					</p>
					<ul>
						<li>
							<p>Web Backend.<br>
							Data producer. In this part, the system process all the work-order from is clients. Based on the pirority and date,
							this web system presents to the Logistics Chief (LC) , the work for the future, and is the LC the man who asigns this tasks to on ground technicians.</p>
						</li>
						<li>
							<p>Mobile Application.<br>
							All on ground technicians, was provided with one tablet, and everyone has a list and map of his tasks.
							When a task is executed, the app provides an QR Reader to obtain the info of the device assigned in the task. After complete the task,
							the app sends to the system the last location of th technician to aprove the correct taskflow.</p>
						</li>
					</ul>
					<p>
						HTML5, javascript, MySQL, Apache, PHP, CodeIgniter was used to create a Web Backend system and API webservice that provide all the necessary info for mobile app development in Java/Android.
					</p>
				</text>
				<?=$sharepane?>
				</div><!-- animation -->
			</div>
		</div>
	</box>
