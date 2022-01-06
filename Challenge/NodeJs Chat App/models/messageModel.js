const mongoose = require('mongoose');

const messageSchema = new mongoose.Schema({
    username: {
        type: String,
    },
    message: {
        type: String,
    }
});

const Messages = mongoose.model('Messages History', messageSchema);

const userMessageSchema = new mongoose.Schema({
    user: mongoose.ObjectId
});
userMessageSchema.path("user").ref("Messages History");

module.exports = { Messages };