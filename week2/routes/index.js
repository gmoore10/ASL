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
  req.checkBody("name", "Please only enter alpha characters.").isAlpha();
  req.checkBody("email", "Please enter a valid email address").isEmail();

  var errors = req.validationErrors();
  
  var file;
  console.log(req.files);

  // if(!req.files) {
  //   errors.push({path: '/register/submit', param: 'file', msg: 'Please upload a valid PDF file.'})
  //   file = req.files.sampleFile;
  // } else {
    
  //   file.mv('/public/uploads/file.pdf', function(err) {
  //     if (err) {
  
  //     }
  //   })
  //  console.log(req.files);
  //  }
  var name = req.body.name;
  var email = req.body.email;

  if(errors) {
    errors.forEach(element => {
        console.log(Object.keys(element));
    });
    res.render('register', { 
      title: 'Register',
      navitems: navitems,
      errors: errors
    });
    return;
  } else {
    res.redirect("/register/success?name=" + name + "&email=" + email);
  }
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
