<?php include 'include/nav.php' ?>

<section id="booking">
        <div class="overlay"></div>
            <div class="content">
                <h1>Bookings.</h1>
           </div>
</section>

<section id="geta">

    <div class="box">
        <h1>Hotel Booking Form</h1>

    <form action="" method="post">
        <label for="">Name</label><br>
        <input type="text" name="fname" placeholder="Enter Your Name"><br><br>
        <label for="">Email</label><br>
        <input type="text" name="mail" placeholder="Enter Your Email"><br><br>
        <label for="">Phone Number</label> <br>
        <input type="tel" name="number" placeholder="Enter Your Phone Number"><br><br>
        <label for="">Check-in Date</label> <br>
        <input type="date" name="date" placeholder=""><br><br>
        <label for="">Check-out Date</label> <br>
        <input type="date" name="date" placeholder=""><br><br>
        <label for="">Room Type</label> <br>
        <select name="select" id="">
            <option value="No value selected">select a room type</option>
            <option value="Deluxe Room">Deluxe Room</option>
            <option value="Executive Double Rooms">Executive Double Rooms</option>
            <option value="Royal Double Rooms">Royal Double Rooms</option>
        </select><br><br>
        <button type="submit" name="submit">Submit</button>

    </form>

    
    </div>

    <div class="hale">
        <img src="images/stair.jpg" alt="">
    </div>

</section>


<div class="new">
        <h1>Join our newsletter</h1>
        <p>Sign up to our newsletter to receive our latest news about offers & promotions.</p>

        <form action="">
            <label for="">Email Address</label><br><br>
            <input type="text" placeholder="Enter your email"> <br><br>
            <button type="submit" name="submit">Subscribe</button>
        </form>
    </div>

<?php include 'include/footer.php' ?>


