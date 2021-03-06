<style>

/* The Modal (background) */
#emma-utils-modal {
    display: none;
    position: fixed;
    z-index: 2000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
}
/* Styling for close button */
.modal-close {
    color: #aaa;
    font-size: 30px;
    font-weight: 500;
    position:absolute;
    top:0;
	right:25px;
	margin:0 auto;
    }
    .modal-close:hover,
    .modal-close:focus {
    color: #111F2E;
    text-decoration: none;
    cursor: pointer;
}
.erase-button{
    border:2px solid black;
    padding:.75em;
    position:absolute;
    left:50%;
    top:25%;    
}
.erase-button:hover{
    cursor:pointer;
}
/* Outer Modal Content Styling */
.modal-content {
    position: relative;
    margin: 7% auto;
    height:600px;
    width: 75%;
    animation-name: animatetop;
    animation-duration: .75s;
}
/* Inner Modal Content Styling */
.emma-modal-inner {
    background-color:rgb(255, 245, 255);
    height:80%;
    width:100%;
    padding:1em;
}
/* Add Animation */
@keyframes animatetop {
    from {top: -600px; opacity: 0}
    to {top: 0; opacity: 1}
}
@media (max-width: 1024px) {
/* Selectors and styles affecting screens UP TO 1024px (Large Tablet/Desktop) */
.modal-content{
    width:80%;
    height:500px;
}
}
@media (max-width: 768px) {
/* Selectors and styles affecting screens UP TO 768px (Small Tablet) */
   .modal-content{
       height:400px;
   }
}
@media (max-width: 500px) {
/* Selectors and styles affecting screens UP TO 480px (Phone) */
   .modal-content{
       height:300px;
   }
}
</style>
<div class="vision-floorplans">
	<div class="row">
		<div class="triangle triangle-1"></div>
	</div>
	<h4  style="text-align:center;">Studio Floor plans</h4>
	<div class="floorplans-row row">
	<img src=<?php echo the_field('studio_image'); ?> alt="floor image"/>
		<div class="col">
			<div data-img='/wp-content/uploads/2021/05/E1-scaled.jpg' data-title='E1' data-size='517' data-price='1,175' class="floorplan-selector">
				E1
			</div>
		</div>
	</div>
	<h4 style="text-align:center;">
		One Bedroom Floor plans
	</h4>
	<div class="floorplans-row row">
		<div class="col">
			<div data-img='/wp-content/uploads/2021/05/A1-scaled.jpg' data-price='1,400' data-title='A1' data-size='558' class="floorplan-selector">
				A1
			</div>
			<div data-img='/wp-content/uploads/2021/05/A1.1-scaled.jpg' data-price='1,400' data-title='A1.1' data-size='612' class="floorplan-selector">
				A1.1
			</div>
			<div data-img='/wp-content/uploads/2021/05/A2-scaled.jpg' data-price='1,500' data-title='A2' data-size='618' class="floorplan-selector">
				A2
			</div>
			<div data-img='/wp-content/uploads/2021/05/A2.1-scaled.jpg' data-price='1,500' data-title='A2.1' data-size='643' class="floorplan-selector">
				A2.1
			</div>
			<div data-img='/wp-content/uploads/2021/05/A2.2-scaled.jpg' data-price='1,500' data-title='A2.2' data-size='697' class="floorplan-selector">
				A2.2
			</div>
			<div data-img='/wp-content/uploads/2021/05/A2.3-scaled.jpg' data-price='1,500' data-title='A2.3' data-size='656' class="floorplan-selector">
				A2.3
			</div>
		</div>
		<img src=<?php echo the_field('one_bedroom_image'); ?> alt="floor image"/>
	</div>
	<h4 style="text-align:center;">
		Two Bedroom Floor plans
	</h4>
	<div class="floorplans-row row">
	<img src=<?php echo the_field('two_bedroom_image'); ?> alt="floor image"/>
		<div class="col">
			<div data-img='/wp-content/uploads/2021/05/B1-scaled.jpg' data-price='2,100' data-title='B1' data-size='1024' class="floorplan-selector">
				B1
			</div>
			<div data-img='/wp-content/uploads/2021/05/B2-scaled.jpg' data-price='2,200' data-title='B2' data-size='1023' class="floorplan-selector">
				B2
			</div>
			<div data-img='/wp-content/uploads/2021/05/B2.1-scaled.jpg' data-price='2,200' data-title='B2.1' data-size='1129'  class="floorplan-selector">
				B2.1
			</div>
				<div data-img='/wp-content/uploads/2021/05/B2.2-scaled.jpg' data-price='2,255' data-title='B2.2' data-size='1266' class="floorplan-selector">
				B2.2
			</div>
				<div data-img='/wp-content/uploads/2021/05/B2.3-scaled.jpg' data-price='2,255' data-title='B2.3' data-size='1109' class="floorplan-selector">
				B2.3
			</div>
		</div>
	</div>
	<h4  style="text-align:center;">
		Three Bedroom & Loft Floor plans
	</h4>
	<div class="floorplans-row row">
	<img src=<?php echo the_field('three_bedroom_image'); ?> alt="floor image"/>
		<div class="col">
			<div data-img='/wp-content/uploads/2021/05/C1-scaled.jpg' data-price='2,375' data-title='C1' data-size='1260' class="floorplan-selector">
				C1
			</div>
			<div data-img='/wp-content/uploads/2021/05/C2-scaled.jpg' data-price='2,500' data-title='C2' data-size='1270' class="floorplan-selector">
				C2
			</div>
			<div data-img='/wp-content/uploads/2021/05/C3-scaled.jpg' data-price='3,025' data-title='C3 Loft' data-size='1374' class="floorplan-selector">
				C3 Loft
			</div>
			<div data-img='/wp-content/uploads/2021/05/C4-scaled.jpg' data-price='3,025' data-title='C4 Loft' data-size='1356' class="floorplan-selector">
				C4 Loft
			</div>
		</div>
	</div>
	
		<div class="row">
		<div class="triangle triangle-2"></div>
	</div>
</div>
<div id="emma-utils-modal">
        <div class="modal-content">
		<div class="floorplan">
		<span class="modal-close">&times;</span>	
		<div class="floorplan-title-wrapper">
				<h3 class="floorplan-title">Default</h3>
			</div>
			<img src="/wp-content/uploads/2021/02/FPO_Floorplan.png" alt="floorplan image"/>
			<a class="floorplan-btn">View</a>
			<div class="floorplan-details">
				<p>
					Rent Starting at:
				</p>
				<strong class="floorplan-price">
					<span>$</span>0000/mo
				</strong>
				<p class="floorplan-size"></p>
			</div>
			<a class="floorplan-btn">Download</a>
			<a class="floorplan-btn-gold">Check Availability</a>
		</div>
        </div>
    </div>
	<script src="/wp-content/themes/theflin/js/floorplans.js" type="text/javascript"></script>
