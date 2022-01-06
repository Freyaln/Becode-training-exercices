const express = require('express');
const router = express.Router();
const messageModel = require('../models/messageModel');
const messageObject = messageModel.Messages;
const DB = require('../database');
const dbCo = DB.dbCo;
/* GET home page. */
router.get('/write-message', function (req, res, next) {
    res.render('chatRoom', { name: 'USER' });
});

router.post('/send-message', function (req, res, next) {        // POST new user
    const messageDetails = new messageObject({
        username: req.body.username,
        message: req.body.message
    });
    messageDetails.save((err, doc) => {                        // And save them into the db
        if (!err) {
            console.log('success', 'Message send');
            res.redirect('/');
        }
        else
            console.log('Something went wrong' + err);          // If errors, display them
    });
});


module.exports = router;
