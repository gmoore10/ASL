var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { 
    title: 'Home',
    navitems: [
      {link: '/', content: 'Home'},
      {link: '/users', content: 'Users'}
    ]
  });
});

/* GET users page. */
router.get('/users', function(req, res, next) {
  res.render('users', { 
    title: 'Users',
    navitems: [
      {link: '/', content: 'Home'},
      {link: '/users', content: 'users'}
    ]
  });
});

module.exports = router;
