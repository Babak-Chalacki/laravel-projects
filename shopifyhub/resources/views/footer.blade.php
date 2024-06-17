

 <!-- Footer -->
 <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Company Information</h5>
                <p>Address: 123 Main St, Anytown, USA</p>
                <p>Phone: 555-555-5555</p>
                <p>Email: [info@company.com](mailto:info@company.com)</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Shipping & Returns</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <ul class="list-unstyled social-links">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <p class="text-muted text-center mb-0">Copyright &copy; 2024 E-commerce Website</p>
    </div>
</footer>
<div class="loading-overlay">
    <div class="loading-spinner">
        <i class="fas fa-spinner fa-spin"></i>
    </div>
    <h2>Loading...</h2>
</div>
<script>
    setTimeout(function(){
   //    document.addEventListener("DOMContentLoaded", function() {
         document.querySelector(".loading-overlay").style.display = "none";
     // });
  }, 1500);
 </script>
