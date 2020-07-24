<div class="animated fadeInUp" style="padding-top: 20px; background-color: white;">
     <div class="footer no-margin">
         <div class="container">
             <div class="row">
                 <div class="col-md-3">
                     <div class="headline"><p>Beautie Service</p></div>
                     <ul class="list-unstyled link-list">
                         <li><a href="#">Custom Service</a></li>
                         <li><a href="#">Find your store</a></li>
                         <li><a href="#">Gift Card</a></li>
                         <li><a href="">Checking Order</a></li>
                     </ul>
                 </div>
<?php foreach ($footerArray as $key => $value):?>
                 <div class="col-md-3">
                    <div class="headline"><p>Contact</p></div>
                    <address>
                        <ul class="list-unstyled link-list">
                        <li><a href="">Hotline: <?php echo $value['hotline'];?></a></li>
                        <li>
                            <a href="#"><i class="fa fa-envelope"></i><?php echo $value['email'];?></a>
                        </li>
                        <li><a href="">Head office: <?php echo $value['address'];?></a></li>
                        </ul>
                    </address>
                </div>

                 
                 <div class="col-md-3">
                     <div class="headline"><p>Company</p></div>
                     <ul class="list-unstyled link-list">
                        <li><a href="#">About Us</a></li>
                        <li> <a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Cancellation/Rescheduling policy</a></li>
                    </ul>
                 </div>
                 <div class="col-md-3">
                     <div class="headline"><p>Connect</p></div>
                     <ul class="list-unstyled link-list">
                         <li class="inline-list"><a href="<?php echo $value['facebook'];?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                         <li class="inline-list"><a href="<?php echo $value['instagram'];?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                         <li class="inline-list"> <a href="<?php echo $value['twitter'];?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                         <li class="inline-list"><a href="<?php echo $value['tumblr'];?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>

<?php endforeach;?>
                     </ul>
                 </div>                
             </div>
         </div>
     </div>
    <div class="reserved">© MAKE-UP ART COSMETICS. ALL WORLDWIDE RIGHTS RESERVED.</div>

 </div>