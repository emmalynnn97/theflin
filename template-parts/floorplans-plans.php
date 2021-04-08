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
    right:0;
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
.modal-inner {
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
		<img src="/wp-content/uploads/2021/03/kitchen_2-1.jpg" alt="floor image"/>
		<div class="col">
			<div data-img='' data-title='E1 Floor Plan' data-size='517' data-price='500' class="floorplan-selector">
				E1 Floor plan
			</div>
		</div>
	</div>
	<h4 style="text-align:center;">
		One Bedroom Floor plans
	</h4>
	<div class="floorplans-row row">
		<div class="col">
			<div class="floorplan-selector">
				A1 Floor plan
			</div>
			<div class="floorplan-selector">
				A1.1 Floor plan
			</div>
			<div class="floorplan-selector">
				A2 Floor plan
			</div>
			<div class="floorplan-selector">
				A2.1 Floor plan
			</div>
			<div class="floorplan-selector">
				A2.2 Floor plan
			</div>
			<div class="floorplan-selector">
				A2.3 Floor plan
			</div>
		</div>
		<img src="/wp-content/uploads/2021/03/kitchen_2-1.jpg" alt="floor image"/>
	</div>
	<h4 style="text-align:center;">
		Two Bedroom Floor plans
	</h4>
	<div class="floorplans-row row">
		<img src="/wp-content/uploads/2021/03/kitchen_2-1.jpg" alt="floor image"/>
		<div class="col">
			<div class="floorplan-selector">
				B1 Floor plan
			</div>
			<div class="floorplan-selector">
				B2 Floor plan
			</div>
			<div class="floorplan-selector">
				B2.1 Floor plan
			</div>
				<div class="floorplan-selector">
				B2.2 Floor plan
			</div>
				<div class="floorplan-selector">
				B2.3 Floor plan
			</div>
		</div>
	</div>
	<h4  style="text-align:center;">
		Three Bedroom & Mezzanine Floor plans
	</h4>
	<div class="floorplans-row row">
		<img src="/wp-content/uploads/2021/03/kitchen_2-1.jpg" alt="floor image"/>
		<div class="col">
			<div class="floorplan-selector">
				C1 Floor plan
			</div>
			<div class="floorplan-selector">
				C2 Floor plan
			</div>
			<div class="floorplan-selector">
				C3 Floor plan
			</div>
			<div class="floorplan-selector">
				C4 Floor plan
			</div>
		</div>
	</div>
	
		<div class="row">
		<div class="triangle triangle-2"></div>
	</div>
</div>
<div id="emma-utils-modal">
        <div class="modal-content">
		<span class="modal-close">&times;</span>
		<div class="floorplan">
			<div class="floorplan-title-wrapper">
				<h3>One Bedroom</h3>
			</div>
			<img src="/wp-content/uploads/2021/02/FPO_Floorplan.png" alt="floorplan image"/>
			<a class="floorplan-btn">View</a>
			<div class="floorplan-details">
				<p>
					Rent Starting at:
				</p>
				<strong>
					<span>$</span>0000/mo
				</strong>
				<p class="floorplan-price">
					000 Sq. Ft.
				</p>
			</div>
			<div class="floorplan-features">
				<p>
					Features:
				</p>
				<ul>
					<li>Washer/Dryer</li>
					<li>Laundry Room</li>
					<li>Walk-in Closet</li>
					<li>Storage</li>
				</ul>
			</div>
			<a class="floorplan-btn">Download</a>
			<a class="floorplan-btn-gold">Check Availability</a>
		</div>
        </div>
    </div>
	<script src="/wp-content/themes/theflin/js/floorplans.js" type="text/javascript"></script>
