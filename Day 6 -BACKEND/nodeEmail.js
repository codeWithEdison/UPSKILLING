// import the node nodemailer module

const nodemailer = require('nodemailer');
require('dotenv').config()

// creaet transporter object using the default STMP transport
let transporter = nodemailer.createTransport(
    {
        service: 'gmail',
        auth: {
            user: process.env.EMAIL_USER,
            pass:  process.env.EMAIL_PASS
        }
    }
);
// setup email data
let mailOptions ={
    from: `"code with edison"<${process.env.EMAIL_USER}>`,
    to: 'edisonuwihanganye@gmail.com',
    subject: 'Hello from Edison',
    text: 'hello my friend',
    html: '<b>I invite you in our bootcamp</b>'
}
// send mail with defined transprt object
transporter.sendMail(mailOptions, (error,info)=>{
    if (error) {
        return console.log(error);
    }
    console.log('Message sent : %s', info.messageId);
    console.log('Preview URL: %s',
     nodemailer.getTestMessageUrl(info));
})
