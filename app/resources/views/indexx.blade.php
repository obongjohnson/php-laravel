<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Firebase</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="container">
            <h2>Contact Form</h2>
            <div class="alert alert-success success-message" style="display:none;">Form submitted successfully.</div>
            <form id="contactForm">
                <div class="form-group">
                    <label for="exampleFullName">Full Name</label>
                    <input type="text" class="form-control fullname" id="exampleFullName" placeholder="Enter Full Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleEmail">Email</label>
                    <input type="email" class="form-control email" id="exampleEmail" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="exampleSubject">Subject</label>
                    <input type="text" class="form-control subject" id="exampleSubject" placeholder="Enter Subject" required>
                </div>
                <div class="form-group">
                    <label for="exampleMessage">Message</label>
                    <textarea class="form-control message" id="exampleMessage" placeholder="Enter Message" cols="30" rows="10" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
