
function sendEmail(){
    Email.send({
        SecureToken: "2e489077-907b-4fba-b87e-9905e749bb29",
        To : 'info@rrsteksecurity.com',
        ReplyTo: document.getElementById("email").value,
        From : 'contact@rrsteksecurity.com',
        Subject : "New Contact Form Enquiry",
        Body :"<h3>Contact Form Query</h3>"+"<br>You got a query from your costumers, Please Contact them back as soon as possible"+"<br><br> First Name:  " + document.getElementById("first-name").value
        + "<br><br>  Last Name:  "  + document.getElementById("last-name").value
        + "<br><br> Email:  " + document.getElementById("email").value
        + "<br><br> Country / Region:  " + document.getElementById("region").value
        + "<br><br> Message:  " + document.getElementById("message").value
        
        }).then(
        message => alert(message + "! Your message sent successfully")
    );
}
    function demoEmail(){
        Email.send({
            SecureToken: "2e489077-907b-4fba-b87e-9905e749bb29",
            To : 'info@rrsteksecurity.com',
            ReplyTo: document.getElementById("email").value,
            From : 'contact@rrsteksecurity.com',
            Subject : "New Contact Form Enquiry",
            Body : "<h3>Demo Request</h3><br>Your Customer Booked a Demo Request for demotrastion of camera operation"+"<br><br>Your Name:  " + document.getElementById("name").value
            + "<br><br>  Your Email:  "  + document.getElementById("email").value 
            }).then(
            message => alert(message + "! Your message sent successfully")
        );
    }

    function demoInstall(){
        Email.send({
            SecureToken: "2e489077-907b-4fba-b87e-9905e749bb29",
            To : 'info@rrsteksecurity.com',
            From : 'contact@rrsteksecurity.com',
            Subject : "New Contact Form Enquiry",
            Body : "<h3>Install Request</h3><br>You got a Installation Requets / query from your costumer, Please Contact them back as soon as possible"
            +"<br><br>Your Name:  " + document.getElementById("name").value
            + "<br><br>  Phone:  "  + document.getElementById("phone").value 
            }).then(
            message => alert(message + "! Your message sent successfully")
        );
    }