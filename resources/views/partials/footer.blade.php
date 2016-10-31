<footer>
    <div class="container">    
        <div class="row">
            <div class="col-md-2 col-sm-12" style="width: 15%;">
                <ul class="list-unstyled">
                    <li>Clients</li>
                    <li><a href="{ action('ClientController@index') }">Client List</a></li>
                    <li><a href="{ action('ClientController@testimonials') }">Testimonials</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-12" style="width: 15%;">
                <ul class="list-unstyled">
                    <li>Portfolio</li>
                    <li><a href="#">Kurbside</a></li>
                    <li><a href="#">MyTrafficTickets</a></li>                    
                </ul>
            </div>
            <div class="col-md-2 col-sm-12"width: 15%;">
                <ul class="list-unstyled">
                    <li>Projects</li>
                    <li><a href="#">mySilver</a></li>                         
                </ul>
            </div>
            <div class="col-md-2 col-sm-12"width: 15%;">
                <ul class="list-unstyled">
                    <li>Packages</li>
                    <li><a href="#">Automated Solutions</a></li>                         
                </ul>
            </div>
            <div class="col-md-2 col-sm-12" style="width: 15%;">
                <ul class="list-unstyled">
                    <li>Partners</li>
                    <li><a href="#">effectivERP</a></li>                      
                </ul>
            </div>  
            <div class="col-md-2 col-sm-12" style="width: 15%;">
                <ul class="list-unstyled">
                    <li>Contact</li>
                    <li><a href="#">Email Us</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </div>                  
        </div>
        <div class="row">
            <hr>
            <div class="row">
                <div class="col-md-4 terms">
                    <a href="#">Terms of Service</a>    
                    <a href="#">Privacy</a>    
                    <a href="#">Security</a>
                </div>
                <div class="col-md-3-offset-5">
                    <p class="muted pull-right">© {{ date('Y') }} cbCodeStudio, LLC. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>