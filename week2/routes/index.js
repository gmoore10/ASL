var express = require('express');
var router = express.Router();

var navitems = [
  {link: '/', content: 'Home'},
  {link: '/users', content: 'Users'},
  {link: '/register', content: 'Register'}
]

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { 
    title: 'Home',
    navitems: navitems
  });
});

/* GET users page. */
router.get('/users', function(req, res, next) {
  res.render('users', { 
    title: 'Users',
    navitems: navitems
  });
});

/* GET register page. */
router.get('/register', function(req, res, next) {
  res.render('register', { 
    title: 'Register',
    navitems: navitems
  });
});

/* POST register page. */
router.post('/register/submit', function(req, res, next) {
  var name = req.body.name;
  var email = req.body.email;
  console.log(name, email);
  res.redirect("/register/success?name=" + name + "&email=" + email);
});

/* GET register/success page. */
router.get('/register/success', function(req, res, next) {
  console.log(req);
  res.render('register/success', { 
    title: 'Registration Successful!',
    navitems: navitems,
    params: req.query
  });
});

module.exports = router;
