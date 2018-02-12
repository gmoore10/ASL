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

module.exports = router;
