var unArray = ["ben", "kathryn"];
var pwArray = ["brown", "tait"];


function getInfo() {
  var inputEmail = document.getElementById("inputEmail").value
  var inputPassword = document.getElementById("inputPassword").value
  for(i = 0; i < unArray.length; i++) {
    if ((inputEmail == unArray[i]) && (inputPassword == pwArray[i]))
    {
      window.location.replace("index.html")
      return
    }
  }
    window.alert("incorrect username/password")
}
function addUser(){
    var newEmail = document.getElementById("inputEmail").value
    var newPass = document.getElementById("inputPassword").value
    unArray.push("newEmail").value
    pwArray.push("newPass").value
    window.location.replace("login.html")
}
var mongoose = require('mongoose');
var UserSchema = new mongoose.Schema({
  email: {
    type: String,
    unique: true,
    required: true,
    trim: true
  },
  username: {
    type: String,
    unique: true,
    required: true,
    trim: true
  },
  password: {
    type: String,
    required: true,
  }
});
var User = mongoose.model('User', UserSchema);
module.exports = User;
if (req.body.email &&
  req.body.username &&
  req.body.password &&
  req.body.passwordConf) {
  var userData = {
    email: req.body.email,
    username: req.body.username,
    password: req.body.password,
  }
  //use schema.create to insert data into the db
  User.create(userData, function (err, user) {
    if (err) {
      return next(err)
    } else {
      return res.redirect('/profile');
    }
  });
}
