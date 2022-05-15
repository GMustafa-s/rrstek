function sendEmail(){
    Email.send({
        Host : "smtp.gmail.com",
        Username : "saivra.official@gmail.com",
        Password : "03420810055MSkhan",
        To : 'saivra.official@gmail.com',
        From : "info@rrsteksecurity.com",
        Subject : "This is the subject",
        Body : "And this is the body"
    }).then(
      message => alert(message)
    );
}