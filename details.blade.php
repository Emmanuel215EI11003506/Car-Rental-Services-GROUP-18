@extends('layouts.theme')
@section('content')
    <div class="jumbotron">
        <h1>Welcome to the GROUP I8 Car rental servicies</h1>
        <a href="contact.blade.php">We serve you better</a>
        </div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/images/1.jpg">
                <div class="caption">
                    <h3>Slightly Used Car </h3>
                    <p>six month guarantee</p>
                    
                    
                    <p><a href="details.blade.php" class="btn btn-warning" role="button">DETAILS</a>
                        <a href="#" class="btn btn-danger" role="button">CALL</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/images/2.jpg" alt="...">
                <div class="caption">
                    <h3>NEW  CAR</h3>
                    <p>negotiable</p>
                
                    <p><a href="#" class="btn btn-warning" role="button">DETAILS</a>
                        <a href="#" class="btn btn-danger" role="button">CALL</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/images/3.jpg" alt="...">
                <div class="caption">
                    <h3>Brand New</h3>
                    <p>Toyota </p>
                
                    <p><a href="#" class="btn btn-warning" role="button">DETAILS</a>
                        <a href="#" class="btn btn-danger" role="button">CALL</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/images/4.jpg" alt="...">
                <div class="caption">
                    <h3>Home Used</h3>
                    <p>nissan</p>
        
                    <p><a href="#" class="btn btn-warning" role="button">DETAILS</a>
                        <a href="#" class="btn btn-danger" role="button">CALL</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/images/5.jpg" alt="...">
                <div class="caption">
                    <h3>slightly used </h3>
                    <p>Nissan</p>
        
                    <p><a href="#" class="btn btn-warning" role="button">DETAILS</a>
                        <a href="#" class="btn btn-danger" role="button">CALL</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/images/6.jpg" alt="...">
                <div class="caption">
                    <h3>Brand new</h3>
                    <p>passat</p>
        
                    <p><a href="#" class="btn btn-warning" role="button">DETAILS</a>
                        <a href="#" class="btn btn-danger" role="button">CALL</a></p>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/images/7.jpg" alt="...">
                <div class="caption">
                    <h3>home used</h3>
                    <p>kia</p>
                    <p>Price=GHC7,0000.00</p>
                    <p><a href="#" class="btn btn-warning" role="button">DETAILS</a>
                        <a href="#" class="btn btn-danger" role="button">CALL</a></p>
                </div>
            </div>
        </div>
    </div>-->

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/images/8.jpg" alt="...">
                <div class="caption">
                    <h3>Brand New</h3>
                    <p>Hundia</p>
                
                    <p><a href="#" class="btn btn-warning" role="button">DETAILS</a>
                        <a href="#" class="btn btn-danger" role="button">CALL</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/images/9.jpg" alt="...">
                <div class="caption">
                    <h3>Hundia</h3>
                    <p>Hundia Ascent</p>
                
                    <p><a href="#" class="btn btn-warning" role="button">DETAILS</a>
                        <a href="#" class="btn btn-danger" role="button">CALL</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="/images/10.jpg" alt="...">
                <div class="caption">
                    <h3>masaraty</h3>
                    <p>4x4</p>
                
                    <p><a href="#" class="btn btn-warning" role="button">DETAILS</a>
                        <a href="#" class="btn btn-danger" role="button">CALL</a></p>
                </div>
            </div>
        </div>
    </div>


<!---this is the footer nav-->
<div id="footer"><!---company information-->
<a href="index.html">Home</a>||<a href="about.html">About Us</a>||<a href="services.html">Product</a>||<a href="contacts.html">Contacts</a>||<a href="gallary.html">Gallary</a>

<!---thsi is the footer copyright-->
<div id="pfoot">
    <h6>&copyCopyright 2017. All right Reserved. | Website by <a href="#">STUDENT ID: 215EI11003434 STUDENT NAME:OSUYAH EBENZER   ||   STUDENT ID: 215EI11003347  STUDENT NAME:BOATENG SAMUEL </h6></a>
    <p><h3>GROUP 18: TOPIC: MINI ONLINE CAR RENTAL</h3></p>
</div> 
     
    @endsection