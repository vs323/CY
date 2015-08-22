<?php 
	include('header.php'); 
?>

<!-- Page 2 -->
<section class="second_page">
	<div class="container_box">
		<h2>What We Do</h2>
		<div class="little_line"></div>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	</div>
</section>
<!-- Page 3 -->
<div class="overlay_Modal" id="MenuOverlayModal"></div>
<section class="gallery">
		<div class="container_box_dk">
			<h2>OUR WORK</h2>
			<div class="little_line"></div>
		</div>
		<div class="gl_container">
			<div class="gl_items pointer" href="images/demo/gl/green-building-600x300.jpg"><img src="images/demo/gl/green-building-600x300.jpg" alt="a" /><span class="gl_subtitle">1 Mugga St, Red Hill, ACT</span></div>
			<div class="gl_items pointer" href="images/demo/gl/House1-600x300.jpg"><img src="images/demo/gl/House1-600x300.jpg" alt="b" /><span class="gl_subtitle">2 Champton St, Deakin, ACT</span></div>
			<div class="gl_items pointer" href="images/demo/gl/house4-600x300.jpg"><img src="images/demo/gl/house4-600x300.jpg" alt="c" /><span class="gl_subtitle">3 George St, Lawson, ACT</span></div>
			<div class="gl_items pointer" href="images/demo/gl/interior5-600x300.jpg"><img src="images/demo/gl/interior5-600x300.jpg" alt="d" /><span class="gl_subtitle">43 Johnston Ave, Crace, ACT</span></div>
			<div class="gl_items pointer" href="images/demo/gl/slider01-600x300.jpg"><img src="images/demo/gl/slider01-600x300.jpg" alt="e" /><span class="gl_subtitle">29 Melbourn Ave, Deakin, ACT</span></div>
			<div class="gl_items pointer" href="images/demo/gl/slider02-600x300.jpg"><img src="images/demo/gl/slider02-600x300.jpg" alt="f" /><span class="gl_subtitle">22 Lincon Cr, Franklin, ACT</span></div>
		</div>
</section>
<!-- Page 4 -->
<section class="testimonial">
		<div class="test_head">
			<h2>Testimonials</h2>
			<div class="little_line"></div>
		</div>
		<div class="desktop_testi_con">
				<div class="testimonial_container">
					<div>
						<p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with ‘real’ content. This is required when, for example, the final text is not yet available.</p>
					</div>
					<div class="potrait">
						<img src="images/demo/1.jpg" alt="potrait" /><div class="t_name">Jason Statham</div>
					</div>
				</div>

				<div class="testimonial_container">
					<div>
						<p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with ‘real’ content. This is required when, for example, the final text is not yet available.</p>
					</div>
					<div class="potrait">
						<img src="images/demo/2.jpeg" alt="potrait" /><div class="t_name">Scarlett Johan</div>
					</div>
				</div>

				<div class="testimonial_container">
					<div>
						<p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with ‘real’ content. This is required when, for example, the final text is not yet available.</p>
					</div>
					<div class="potrait">
						<img src="images/demo/3.jpg" alt="potrait" /><div class="t_name">Robter Downey Jr.</div>
					</div>
				</div>

				<div class="testimonial_container">
					<div>
						<p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with ‘real’ content. This is required when, for example, the final text is not yet available.</p>
					</div>
					<div class="potrait">
						<img src="images/demo/4.jpg" alt="potrait" /><div class="t_name">Anne Hathaway</div>
					</div>
				</div>
		</div>
</section>
<!-- Page 5 -->
<section class="contact_us">
	<div class="container_box_dk">
		<h2>Contact Us</h2>
		<div class="little_line"></div>
		<P>Thanks for your interest in YC Building. Please use the following form to get a free quote for your plan or send any enquries, and we'll get back to you soon.</P>
	</div>
	<div class="contact_form_div">
		<form action="MAILTO:lozaza323@gmail.com" method="post">
			<div class="form_name">
				<div class="label_p"><label for="name">Full Name: </label><span>(Required)</span></div>
				<input type="text" id="name" placeholder="Full Name (Required)" required>
			</div>
			<div class="form_name">
				<div class="label_p"><label for="email">Email: </label><span>(Required)</span></div>
				<input type="email" id="email" placeholder="Your Email (Required)" required><br>
			</div>
			<div class="form_name">
				<div class="label_p"><label for="number">Phone Number: </label><span>(Required)</span></div>
				<input type="number" min="0" inputmode="numeric" pattern="[0-9]*" title="Non-negative integral number" id="number" placeholder="Phone Number (Required)" required><br>
			</div>
			<div class="form_name">
				<div class="label_p"><label for="text">Message: </label><span>(Required)</span></div>
				<textarea type="text" id="text" placeholder="Message Details (Required)" required></textarea><br>
			</div>
			<div class="form_send">
				<input type="submit" value="Send">
				<input type="reset" value="Reset">
			</div>
		</form>
	</div>

	<!-- <div> Your message has been successfully sent. </div> -->
</section>


<!-- <section class="find_us">
<div class="address">

Phone Number: 0448 888 045 <br>
Fax Number: (02) 6111 1111 <br>
Address: 1 Awesome Street Mitchell <br>
Email: ycbuilding@gmail.com <br>

</div>

<div id="map"></div>
</section> -->

<?php 
	include('footer.php'); 
?>