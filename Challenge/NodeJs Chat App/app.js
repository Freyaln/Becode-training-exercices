const createError = require('http-errors');
const express = require('express');
const cookie = require('cookie-parser');
const path = require('path');
const logger = require('morgan');
const bodyParser = require('body-parser');
const session = require('express-session');
const indexRouter = require('./routes/index');
const usersRouter = require('./routes/users');
const chatRouter = require('./routes/chat');
const bcrypt = require('bcrypt');
const user = require('./routes/users');


const app = express();
const debug = require('debug')('chatapp:server');
const http = require('http');

const port = normalizePort(process.env.PORT || '5000');
app.set('port', port);

const server = http.createServer(app);
const { Server, Socket } = require("socket.io");                        // Create HTTP server.
const io = new Server(server);
io.on('connection', (socket) => {
  socket.on('chat message', (user, msg) => {
    io.emit('chat message', user + " " + msg);
  });

  socket.on('disconnect', () => {
    console.log('disconnected');
  })
});

app.set('view engine', 'ejs');                          // Set the ejs module

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(express.static(path.join(__dirname, 'public')));
app.use(cookie());
app.use('/', indexRouter);                                  // Set the route to the index
app.use('/', usersRouter);                                  // Set the route to the users
app.use('/', chatRouter);                                   // Set the route to the chat


app.use(function (req, res, next) {                         // Catch 404 and forward to error handler
  next(createError(404));
});


app.use(function (err, req, res, next) {                      // Error handler
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};


  res.status(err.status || 500);                              // Render the error page
  res.render('error');
});

server.listen(port);
server.on('error', onError);
server.on('listening', onListening);


function normalizePort(val) {                                 // Normalize a port into a number, string, or false.
  const port = parseInt(val, 10);

  if (isNaN(port)) {
    // named pipe
    return val;
  }

  if (port >= 0) {
    // port number
    return port;
  }

  return false;
}


/**
 * Event listener for HTTP server "error" event.
 */

function onError(error) {
  if (error.syscall !== 'listen') {
    throw error;
  }

  const bind = typeof port === 'string'
    ? 'Pipe ' + port
    : 'Port ' + port;

  // handle specific listen errors with friendly messages
  switch (error.code) {
    case 'EACCES':
      console.error(bind + ' requires elevated privileges');
      process.exit(1);
      break;
    case 'EADDRINUSE':
      console.error(bind + ' is already in use');
      process.exit(1);
      break;
    default:
      throw error;
  }
}

/**
 * Event listener for HTTP server "listening" event.
 */

function onListening() {
  const addr = server.address();
  const bind = typeof addr === 'string'
    ? 'pipe ' + addr
    : 'port ' + addr.port;
  debug('Listening on ' + bind);
}

module.exports = app;
