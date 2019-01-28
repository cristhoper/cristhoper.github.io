	<box>
		<div class="row">
			<div class="large-3 columns">
				<div class="animated bounceInLeft">
				<sidebar>
					<?=$intropane?>
					<?=$navigationpane?>
					<?=$workpane?>
				</sidebar>
				</div><!-- animation -->
			</div>
			<div class="large-9 columns">
				<div class="animated fadeIn">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212998.2997250683!2d-70.62983129999999!3d-33.47278795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5410425af2f%3A0x8475d53c400f0931!2sSantiago%2C+Regi%C3%B3n+Metropolitana%2C+Chile!5e0!3m2!1ses-419!2s!4v1442200726143" width="100%" height="250" frameborder="0" style="border:0"></iframe>
				<about>
					<h1>Contact me</h1>
					<p>If you need to share something or contribute with ideas, please send me a message. If not, send any message anyway</p>
					<line></line>
					<form method="post" action="<?=base_url('contact/contactengine.php')?>">
						<input type="text" name="Name" placeholder="Full name" maxlength="40" required="required" />
						<input type="email" name="Email" placeholder="Email" maxlength="40" required="required" />
						<textarea name="Message" rows="8" cols="20" placeholder="Message.." required="required" ></textarea>
						<input type="submit" name="submit" value="Send" class="submit-button" />
					</form>
				</about>
				</div>
			</div>
		</div>
	</box>
