<?php 
	include('header.php'); 
?>

<!-- Page 2 -->
<section class="second_page">
<h2>What We Do</h2>
<div class="little_line"></div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</section>
<!-- Page 3 -->
<div class="overlay_Modal" id="MenuOverlayModal"></div>
<section class="gallery">
	<div class="gl_head">
		<h2>OUR WORK</h2>
		<div class="little_line"></div>
	</div>
	<div class="gl_container">
		<div class="gl_items"><img src="images/demo/gl/green-building-600x300.jpg" alt="a" /><span class="gl_subtitle">1 Mugga St, Red Hill, ACT</span></div>
		<div class="gl_items"><img src="images/demo/gl/House1-600x300.jpg" alt="b" /><span class="gl_subtitle">2 Champton St, Deakin, ACT</span></div>
		<div class="gl_items"><img src="images/demo/gl/house4-600x300.jpg" alt="c" /><span class="gl_subtitle">3 George St, Lawson, ACT</span></div>
		<div class="gl_items"><img src="images/demo/gl/interior5-600x300.jpg" alt="d" /><span class="gl_subtitle">43 Johnston Ave, Crace, ACT</span></div>
		<div class="gl_items"><img src="images/demo/gl/slider01-600x300.jpg" alt="e" /><span class="gl_subtitle">29 Melbourn Ave, Deakin, ACT</span></div>
		<div class="gl_items"><img src="images/demo/gl/slider02-600x300.jpg" alt="f" /><span class="gl_subtitle">22 Lincon Cr, Franklin, ACT</span></div>
	</div>
</section>
<!-- Page 4 -->
<section class="testimonial">
		<div class="test_head">
			<h2>Testimonials</h2>
			<div class="little_line"></div>
		</div>
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
</section>
<!-- Page 5 -->
<section class="contact_us">
<div class="ContactForm">
<h2>Enquiry Form</h2>

<P>If you would like a quote or more information about YC Building, please use the contact form on this page to submit an enquiry </P>
<form action="MAILTO:lozaza323@gmail.com" method="post">
<label>Full Name</label>
<input type="text"><br>

<label>Your Email Address</label>
<input type="text"><br>

<label>Phone Number</label>
<input type="text"><br>

<label>Enquiry Description</label>
<input type="text"><br>

<input type="submit" value="Send">
<input type="reset" value="Reset">

</form>
</div>
<div> Your message has been successfully sent. </div>
</section>

<!-- Page 6 -->
<section class="find_us">
<div class="address">

Phone Number: 0448 888 045 <br>
Fax Number: (02) 6111 1111 <br>
Address: 1 Awesome Street Mitchell <br>
Email: ycbuilding@gmail.com <br>

</div>

<div id="map"></div>
</section>

<?php 
	include('footer.php'); 
?>