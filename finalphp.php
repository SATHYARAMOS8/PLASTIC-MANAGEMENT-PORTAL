<?php
if(isset($_POST['btn'])){
$address=$_POST['address'];
$date=$_POST['date'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$nam=$_POST['nam'];




$host='localhost';
$user= 'root';
$pass= '';
$dbname='new';

$conn = mysqli_connect($host,$user,$pass,$dbname);

$sql="INSERT INTO `hi` (`sno`, `name`, `phonenumber`, `date`, `address`) VALUES ('', '$nam', '$phno', '$date', '$address')";

$result = mysqli_query($conn,$sql);



}

?>

<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtered Nation - Plastic Waste Management</title>
    <style>
        /* Reset and Base Styles */
        * {
            box-sizing: border-box;
        }
        .top-right {
    position: absolute;
    top: 5px;
    right: 5px;
    width: 190px;
    height: 150px;
    
}
.fn
{
    position: absolute;
    top: 5px;
    left: 5px;
    width: 190px;
    height: 150px;

}


        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Authentication Overlay */
        #auth-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .auth-container {
            background-color: #fff;
            padding: 2em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            width: 350px;
            max-width: 90%;
        }

        .auth-container h2 {
            text-align: center;
            margin-bottom: 1em;
            color: #333;
        }

        .auth-container input {
            width: 100%;
            padding: 0.8em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .auth-container button {
            width: 100%;
            padding: 0.8em;
            background-color: #4cb033;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 1em;
        }

        .auth-container button:hover {
            background-color: #45a049;
        }

        .toggle-link {
            text-align: center;
            margin-top: 1em;
        }

        .toggle-link a {
            color: #4CAF50;
            text-decoration: none;
            cursor: pointer;
        }

        .toggle-link a:hover {
            text-decoration: underline;
        }

        /* Main Content Styles */
        #main-content {
            display: none;
        }

        /* Header Styles */
        header {
            background-color: #4CAF50;
            color: white;
            padding: 1em 0;
            text-align: center;
        }

        /* Navigation Styles */
        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
            flex-wrap: wrap;
        }

        nav a {
            padding: 1em;
            color: white;
            text-decoration: none;
            text-align: center;
            flex: 1 1 auto;
        }

        nav a:hover {
            background-color: #575757;
        }

        /* Hero Section Styles */
        .hero {
            background: url('hero-image.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 4em 2em;
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(76, 175, 80, 0.6);
            z-index: 1;
        }

        .hero h1 {
            font-size: 2.5em;
            position: relative;
            z-index: 2;
        }

        .cta-button {
            display: inline-block;
            padding: 0.8em 2em;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            margin-top: 1em;
            border-radius: 5px;
            position: relative;
            z-index: 2;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #45a049;
        }

        /* Section Styles */
        .section {
            margin: 2em 0;
            padding: 0 2em;
            display: none; /* Hide all sections by default */
        }

        .section.active {
            display: block; /* Show active section */
        }

        .section h2 {
            color: #333;
            margin-bottom: 0.5em;
        }

        .section p {
            color: #666;
            line-height: 1.6;
        }

        .section ul {
            list-style-type: disc;
            margin-left: 2em;
            color: #666;
        }

        /* Footer Styles */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em 0;
        }

        /* Feedback Form Styles */
        .feedback-form {
            background-color: #fff;
            padding: 2em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-bottom: 2em;
        }

        .feedback-form h3 {
            margin-bottom: 1em;
        }

        .feedback-form input,
        .feedback-form textarea {
            width: 100%;
            padding: 1em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .feedback-form button {
            padding: 1em 2em;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 1em;
        }

        .feedback-form button:hover {
            background-color: #45a049;
        }

        /* Social Links Styles */
        .social-links {
            margin-top: 1em;
        }

        .social-links a {
            margin: 0 0.5em;
            color: white;
            text-decoration: none;
            font-size: 1.2em;
        }

        .social-links a:hover {
            text-decoration: underline;
        }

        /* Google Map Styles */
        #map {
            height: 400px;
            width: 100%;
            margin-top: 2em;
            border-radius: 5px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2em;
            }

            #map {
                height: 300px;
            }

            nav {
                flex-direction: column;
            }

            nav a {
                padding: 0.5em;
            }
        }
    </style>
    <!-- Google Maps JavaScript API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>

    <script>
        // User Management using localStorage
        function getUsers() {
            const users = localStorage.getItem('users');
            return users ? JSON.parse(users) : [];
        }

        function saveUser(user) {
            const users = getUsers();
            users.push(user);
            localStorage.setItem('users', JSON.stringify(users));
        }

        function findUser(username, password) {
            const users = getUsers();
            return users.find(user => user.username === username && user.password === password);
        }

        function findUserByUsername(username) {
            const users = getUsers();
            return users.find(user => user.username === username);
        }

        // Toggle between Login and Sign-Up Forms
        function showLogin() {
            document.getElementById('auth-container').innerHTML = `
                <h2>Login</h2>
                <input type="text" id="login-username" placeholder="Username" required>
                <input type="password" id="login-password" placeholder="Password" required>
                <button onclick="handleLogin()">Login</button>
                <div class="toggle-link">
                    Don't have an account? <a onclick="showSignUp()">Sign Up</a>
                </div>
            `;
        }

        function showSignUp() {
            document.getElementById('auth-container').innerHTML = `
                <h2>Sign Up</h2>
                <input type="text" id="signup-username" placeholder="Username" required>
                <input type="password" id="signup-password" placeholder="Password" required>
                <input type="password" id="signup-confirm-password" placeholder="Confirm Password" required>
                <button onclick="handleSignUp()">Register</button>
                <div class="toggle-link">
                    Already have an account? <a onclick="showLogin()">Login</a>
                </div>
            `;
        }

        // Handle Login
        function handleLogin() {
            const username = document.getElementById('login-username').value.trim();
            const password = document.getElementById('login-password').value.trim();

            if (username === '' || password === '') {
                alert('Please fill in all fields.');
                return;
            }

            const user = findUser(username, password);
            if (user) {
                document.getElementById('auth-overlay').style.display = 'none';
                document.getElementById('main-content').style.display = 'block';
                showSection('home'); // Show home sections after login
            } else {
                alert('Invalid credentials. Please try again.');
            }
        }

        // Handle Sign-Up
        function handleSignUp() {
            const username = document.getElementById('signup-username').value.trim();
            const password = document.getElementById('signup-password').value.trim();
            const confirmPassword = document.getElementById('signup-confirm-password').value.trim();

            if (username === '' || password === '' || confirmPassword === '') {
                alert('Please fill in all fields.');
                return;
            }

            if (password !== confirmPassword) {
                alert('Passwords do not match.');
                return;
            }

            if (findUserByUsername(username)) {
                alert('Username already exists. Please choose another.');
                return;
            }

            // Save the new user
            saveUser({ username, password });
            alert('Registration successful! You can now log in.');
            showLogin();
        }

        // Initialize and Add the Map
        let map;
        let userMarker;
        let geocoder;

        function initMap() {
            geocoder = new google.maps.Geocoder();

            // The location of your main office or a default location
            const defaultLocation = { lat: 12.9716, lng: 77.5946 }; // Example: Bangalore, India

            // The map, centered at defaultLocation
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12,
                center: defaultLocation,
            });

            // Marker for default location
            new google.maps.Marker({
                position: defaultLocation,
                map: map,
                title: "Filtered Nation Headquarters",
            });

            // Example collection points
            const collectionPoints = [
                { lat: 12.9616, lng: 77.5866, title: "Collection Point 1" },
                { lat: 12.9816, lng: 77.6046, title: "Collection Point 2" },
                { lat: 12.9416, lng: 77.5746, title: "Collection Point 3" },
            ];

            // Add markers for collection points
            collectionPoints.forEach(point => {
                new google.maps.Marker({
                    position: { lat: point.lat, lng: point.lng },
                    map: map,
                    title: point.title,
                    icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                });
            });

            // Handle map click to set user location
            map.addListener('click', function (e) {
                placeUserMarker(e.latLng);
                geocodeLatLng(e.latLng);
            });

            // Handle Garbage Collection Request Form Submission
            const form = document.getElementById('collection-form');
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Get user input
                const address = document.getElementById('address').value.trim();
                const date = document.getElementById('date').value.trim();

                if (address === '') {
                    alert('Please enter your address or select a location on the map.');
                    return;
                }

                // Geocode the address to get latitude and longitude
                geocoder.geocode({ 'address': address }, function (results, status) {
                    if (status === 'OK') {
                        const userLocation = results[0].geometry.location;

                        // Center the map to user location
                        map.setCenter(userLocation);

                        // Place or move the user marker
                        if (userMarker) {
                            userMarker.setPosition(userLocation);
                        } else {
                            userMarker = new google.maps.Marker({
                                position: userLocation,
                                map: map,
                                title: "Your Location",
                                icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
                            });
                        }

                        // Optionally, send the data to your server here
                        alert('Your garbage collection request has been submitted!\nAddress: ' + results[0].formatted_address + '\nDate: ' + date);
                        form.reset();
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                });
            });
        }

        // Function to place or move the user marker on the map
        function placeUserMarker(location) {
            if (userMarker) {
                userMarker.setPosition(location);
            } else {
                userMarker = new google.maps.Marker({
                    position: location,
                    map: map,
                    title: "Your Location",
                    icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
                });
            }
        }

        // Function to perform reverse geocoding and update the address field
        function geocodeLatLng(latlng) {
            geocoder.geocode({ 'location': latlng }, function (results, status) {
                if (status === 'OK') {
                    if (results[0]) {
                        document.getElementById('address').value = results[0].formatted_address;
                    } else {
                        alert('No results found');
                    }
                } else {
                    alert('Geocoder failed due to: ' + status);
                }
            });
        }

        // Initialize Login Page
        window.onload = function () {
            showLogin();
        };

        // Section Navigation
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                if (section.id === sectionId || (sectionId === 'home' && section.id === 'collect-garbage')) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });

            // Scroll to the top when navigating
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Handle Navigation Clicks
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('nav a');

            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = this.getAttribute('href');

                    if (target === '#logout') {
                        handleLogout();
                        return;
                    }

                    if (target === '#home') {
                        showSection('home');
                    } else {
                        const sectionId = target.substring(1); // Remove '#' from href
                        showSection(sectionId);
                    }
                });
            });
        });

        // Handle Logout
        function handleLogout() {
            if (confirm('Are you sure you want to logout?')) {
                document.getElementById('auth-overlay').style.display = 'flex';
                document.getElementById('main-content').style.display = 'none';
                showLogin();
            }
        }
    </script>
</head>

<body >
    
    <h1 style="text-align: center;">WELCOME TO FILTERED NATION</h1>
    <img src="C:\Users\anand\Downloads\karnatak logo.jpeg" alt="Karnataka Logo" class="top-right">
    <img src="C:\Users\anand\Downloads\Preview.png" alt="FILTERED NATION" class="fn">
    <!-- Authentication Overlay -->
    <div id="auth-overlay">
        <div class="auth-container" id="auth-container">
            <!-- Login or Sign-Up form will be injected here by JavaScript -->
        </div>
    </div>

    <!-- Main Content -->
    <div id="main-content">
        <!-- Header -->
        <header>
            <h1>Filtered Nation - Plastic Waste Management</h1>
        </header>

        <!-- Navigation -->
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#campaigns">Campaigns</a>
            <a href="#alternatives">Alternatives</a>
            <a href="#stakeholders">Stakeholders</a>
            <a href="#contact">Contact</a>
            <a href="#logout">Logout</a>
        </nav>

        <!-- Hero Section -->
        <div class="hero">
            <h1>Join the Fight Against Single-Use Plastics</h1>
            <a href="#collect-garbage" class="cta-button">Get Involved</a>
        </div>

        <!-- Container for Sections -->
        <div class="container">
            <!-- Collect Garbage Section -->
            <div id="collect-garbage" class="section active">
                <h2>Schedule Garbage Collection</h2>
                <p>Request a plastic waste collection from your location by filling out the form below or selecting your location on the map.</p>
                <form action="#" method="post" class="feedback-form">
                    <input type="text" id="phno" name="phno"placeholder="YOUR PHONE NUMBER" required>
                    <input type="text" id="nam" name="nam" placeholder="YOUR PHONE NAME" required
                    <input type="text" id="email" name="email"placeholder="YOUR EMAIL-ID" required>
                    <input type="text" id="address" name="address" placeholder="YOUR ADDRESS" required>
                    <input type="date" id="date" name="date" placeholder="PREFERED COLLECTION DATE" required>
                    <button type="submit" name="btn">Submit Request</input>
                </form>
                <div id="map"></div>
            </div>

            <!-- About Us Section -->
            <div id="about" class="section">
                <h2>About Us</h2>
                <p>
                    FILTERED NATION is a plastic recycling management portal that connects customers with recycling units. We are dedicated to transforming plastic waste into valuable resources, contributing to a cleaner and greener planet. Our mission is to lead the way in plastic recycling, ensuring that no plastic is left to pollute our environment.
                </p>
                <h3><b><u>Our Vision</u></b></h3>
                <p>
                    At FILTERED NATION, we envision a world where plastic waste is a thing of the past. Our goal is to create a sustainable future by implementing efficient recycling processes and promoting the circular economy. We believe that every piece of plastic has the potential to be repurposed, reducing the strain on our natural resources.
                </p>
                <h3><b><u>Our Mission</u></b></h3>
                <p>
                    Our mission is to provide comprehensive plastic recycling solutions that benefit both the environment and the economy. We strive to:<br>
                    <b>Reduce Plastic Waste:</b> By collecting and recycling plastic materials, we aim to significantly reduce the amount of plastic that ends up in landfills and oceans.<br>
                    <b>Promote Sustainability:</b> We are committed to promoting sustainable practices in all aspects of our operations, from collection to processing and beyond.<br>
                    <b>Innovate Recycling Processes:</b> Continuously improving our recycling technologies and methods to maximize efficiency and output.<br>
                    <b>Educate and Advocate:</b> Raising awareness about the importance of plastic recycling and advocating for policies that support a circular economy.
                </p>
                <h3><b><u>Our Services</u></b></h3>
                <p>
                    Plastic Recycling Management offers a range of services designed to handle plastic waste responsibly and effectively:<br>
                    <b>Collection and Sorting:</b> We provide collection services for plastic waste from various sources, ensuring it is sorted and prepared for recycling.<br>
                    <b>Processing and Recycling:</b> Utilizing state-of-the-art technology, we process plastic waste into high-quality recycled materials that can be used to create new products.<br>
                    <b>Consulting and Education:</b> We offer consulting services to businesses and organizations looking to improve their recycling practices, as well as educational programs to raise awareness about the benefits of plastic recycling.
                </p>
                <h3><b><u>Why Choose Us?</u></b></h3>
                <p>
                    <b>Commitment to Quality:</b> We adhere to the highest standards of quality and environmental responsibility in all our operations.<br>
                    <b>Community Engagement:</b> We actively engage with our community to promote recycling and sustainability, partnering with local organizations and participating in environmental initiatives.<br>
                    <b>Innovative Solutions:</b> We are constantly exploring new technologies and methods to improve our recycling processes and expand our impact.<br>
                    Join us in our mission to make a difference. Together, we can create a cleaner, more sustainable future for generations to come.
                </p>
            </div>

            <!-- Campaigns Section -->
            <div id="campaigns" class="section">
                <h2>Our Campaigns</h2>
                <p>During the Budget session 2021-2022, the Government of Karnataka announced the "People's Campaign against throwaway plastics" through the Karnataka Pollution Control Board.</p>
                <ul>
                    <li>Support people's movement against plastic through impactful communication.</li>
                    <li>Design a framework for effective monitoring and reporting on the plastic ban.</li>
                    <li>Coordinate with stakeholders to popularize sustainable eco-friendly alternatives.</li>
                    <li>Work with industry to create a roadmap for large-scale production of eco-friendly alternatives.</li>
                </ul>
            </div>

            <!-- Eco-Friendly Alternatives Section -->
            <div id="alternatives" class="section">
                <h2>Eco-Friendly Alternatives</h2>
                <p>Explore sustainable alternatives to single-use plastics, including the traditional "Manjappai" cloth bag.</p>
            </div>

            <!-- Stakeholder Engagement Section -->
            <div id="stakeholders" class="section">
                <h2>Stakeholder Engagement</h2>
                <p>Engage with traders, social clubs, merchants, and citizen bodies to collectively combat plastic pollution.</p>
            </div>

            <!-- Contact Us Section -->
            <div id="contact" class="section contact">
                <h2>Contact Us</h2>
                <div class="feedback-form">
                    <h3>Feedback</h3>
                    <form  action="#" method="post">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name"><br>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email"><br>
                        <label for="message">Message</label>
                        <input type="text" id="message" name="message"><br>
                        <input type="submit"  name ="btn" value="send data">
                    </form>
                </div>
                <h3>Get in Touch</h3>
                <!-- Added Contact Person Information -->
                <p><strong>Contact Person:</strong> Sathya Narayan</p>
                <p><strong>Role:</strong> CEO, Founder</p>
                <p><strong>Phone:</strong> 123445767</p>
                <p><strong>Email:</strong> sathya@filterednation</p>
                <!-- Existing Contact Information -->
                <p><strong>Email:</strong> contact@filterednation.org</p>
                <p><strong>Phone:</strong> +91-123-456-7890</p>
                <div class="social-links">
                    <a href="#" target="_blank">Facebook</a>
                    <a href="#" target="_blank">Twitter</a>
                    <a href="#" target="_blank">Instagram</a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024 Filtered Nation Government of Karnataka. All Rights Reserved.</p>
        </footer>

        <script>
            // Optional: Enhance feedback form submission
            document.querySelector('.feedback-form form').addEventListener('submit', function (e) {
                e.preventDefault();
                alert('Thank you for your feedback!');
                this.reset();
            });
        </script>
       
    </body>

    </html>
