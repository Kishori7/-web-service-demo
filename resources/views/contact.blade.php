<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Contact Us</title> 
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head> 
<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <a class="navbar-brand" href="#">My Laravel Site</a> 
        <div class="collapse navbar-collapse"> 
            <ul class="navbar-nav ml-auto"> 
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li> 
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li> 
                <li class="nav-item"><a class="nav-link" href="/portfolio">Portfolio</a></li> 
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li> 
            </ul> 
        </div> 
    </nav> 
 
    <!-- Contact Form --> 
    <div class="container"> 
        <h1 class="text-center mt-5">Contact Us</h1> 
        <form class="mt-4"> 
            <div class="form-group"> 
                <label for="name">Name</label> 
                <input type="text" class="form-control" id="name" placeholder="Enter your name"> 
            </div> 
            <div class="form-group"> 
                <label for="email">Email address</label> 
                <input type="email" class="form-control" id="email" placeholder="Enter your email"> 
            </div> 
            <div class="form-group"> 
                <label for="message">Message</label> 
                <textarea class="form-control" id="message" rows="5" placeholder="Enter your 
message"></textarea> 
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button> 
        </form> 
    </div> 
 
    <!-- Footer --> 
    <footer class="bg-dark text-white text-center mt-5 p-3"> 
        <p>&copy; 2024 My Laravel Site. All rights reserved.</p> 
    </footer> 
 
    <!-- Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
    <script 
src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script> 
</body> 
</html>