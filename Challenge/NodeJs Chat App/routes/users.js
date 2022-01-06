const express = require('express');
const router = express.Router();
const mongoose = require('mongoose');
const userModel = require('../models/userModel');
const userObject = userModel.Users;
const DB = require('../database');
const dbCo = DB.dbCo;
const jwt = require('jsonwebtoken');
const alert = require('alert');


router.get('/register', function (req, res, next) {                   // GET Homepage
  res.render('register', { title: 'Add user' });
});

router.post('/register', async function (req, res, next) {        // POST new user

  console.log(req.body.password);
  const user = await req.body.username;
  const userDetails = new userObject({
    firstname: req.body.firstname,
    lastname: req.body.lastname,
    email: req.body.email,
    username: req.body.username,
    password: req.body.password
  });

  userDetails.save((err, doc) => {                        // And save them into the db
    if (!err) {
      const token = jwt.sign({
        _id: user._id
      }, process.env.SECRET, { expiresIn: '60 days' });
      res.cookie('nToken', token, { maxAge: 900000, httpOnly: true });
      console.log('success', 'User correctly added');
      return res.redirect('/login');
    }
    else
      console.log('Something went wrong' + err);
    res.redirect('/register')         // If errors, display them
  });
});

router.get('/login', function (req, res, next) {     // GET a list of all users
  res.render('login', { title: 'login form' });
});


router.post('/login', async function (req, res, next) {
  const bcrypt = require('bcrypt');
  const user = req.body.username;
  const password = req.body.password;
  // POST the updated data onto the db
  userObject.findOne({ username: user }, function (err, user) {

    // test a matching password
    bcrypt.compare(password, user.password, function (err, isMatch) {
      if (isMatch === true) {
        res.redirect('/write-message');
        console.log('Connected');
      }
      else { alert('Wrong password') };

    });
  });
});

router.get('/logout', (req, res) => {
  res.clearCookie('nToken');
  return res.redirect('/login');
});


router.get('/users-list', function (req, res) {
  userObject.find({}, 'username', (err, users) => {
    const userMap = {};

    users.forEach(function (user) {
      userMap[user.username] = user.username;

    });

    res.send(userMap);
  });
});

module.exports = router;

