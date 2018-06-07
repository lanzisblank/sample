var nodemailer = require('nodemailer');

var transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'karlpatrick52cg@gmail.com',
    pass: ''
  }
});

var mailOptions = {
  from: 'karlpatrick52cg@gmail.com',
  to: 'lanz.faint19@gmail.com',
  subject: 'Email',
  html: '<h1><span style="color:red;font-size:50px;"> 070</span></h1>'
};

transporter.sendMail(mailOptions, function(error, info){
  if (error) {
    console.log(error);
  } else {
    console.log('Email sent: ' + info.response);
  }
}); 