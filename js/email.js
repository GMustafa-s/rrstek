
function sendEmail(){
    Email.send({
        SecureToken: "2e489077-907b-4fba-b87e-9905e749bb29",
        To : 'contact@rrsteksecurity.com',
        cc : "curingdisease@gmail.com",
        ReplyTo: 'contact@rrsteksecurity.com',
        From : 'info@rrsteksecurity.com',
        Subject : "New Contact Form Enquiry",
        Body : " <h3> First Name:  " + document.getElementById("first-name").value
        + "<br><br>  Last Name:  "  + document.getElementById("last-name").value
        + "<br><br> Email:  " + document.getElementById("email").value
        + "<br><br> Country / Region:  " + document.getElementById("region").value
        + "<br><br> Message:  " + document.getElementById("message").value
        
        }).then(
        message => alert(message + "Your message sent successfully")
    );
}
    


    function demoEmail(){
        Email.send({
            SecureToken: "2e489077-907b-4fba-b87e-9905e749bb29",
            To : 'rrstechshop@gmail.com',
            // cc : 'rrstechshop@gmail.com',
            cc : 'curingdisease@gmail.com',
            From : document.getElementById("email").value,
            Subject : "New Contact Form Enquiry",
            Body : " <h3> Your Name:  " + document.getElementById("name").value
            + "<br><br>  Your Email:  "  + document.getElementById("email").value 
            }).then(
            message => alert(message + "Your message sent successfully")
        );
    }