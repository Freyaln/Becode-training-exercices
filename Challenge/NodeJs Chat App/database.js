const mongoose = require('mongoose');
require('dotenv').config();


const USER_F = process.env.F_USER;                       // Retrieving credentials from .env
const PSW_F = process.env.F_PSW;
const USER_S = process.env.S_USER;
const PSW_S = process.env.S_PSW;
const USER_K = process.env.K_USER;
const PSW_K = process.env.K_PSW;
const CLUSTER = process.env.CLU;
const DBNAME = process.env.DB_NAME;

mongoose.connect(`mongodb+srv://${USER_F}:${PSW_F}@${CLUSTER}.mongodb.net/${DBNAME}?retryWrites=true&w=majority`, {
    useNewUrlParser: true,
    useUnifiedTopology: true
})
const dbCo = mongoose.connection;
dbCo.on("error", console.error.bind(console, "connection error: "));
dbCo.once("open", function () {
    console.log("Connected successfully");
});

module.exports = dbCo;