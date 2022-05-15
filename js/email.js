function sendEmail(){
    Email.send({
    SecureToken: "2e489077-907b-4fba-b87e-9905e749bb29",
    To : 'curingdisease@gmail.com',
    From : "info@rrsteksecurity.com",
    Subject : "New Contact Form Enquiry",
    Body : "First Name:  " + document.getElementById("first-name").value
    + "<br><br> Last Name:  " + document.getElementById("last-name").value
    + "<br><br> Email:  " + document.getElementById("email").value
    + "<br><br> Country / Region:  " + document.getElementById("region").value
    + "<br><br> Message:  " + document.getElementById("message").value
    
    }).then(
    message => alert(message)
    );
    }
    