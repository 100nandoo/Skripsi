
var app = require('http').createServer(handler);
var five = require("johnny-five");
var board = new five.Board();

var io = require('socket.io').listen(app);

// The board's pins will not be accessible until
// the board has reported that it is ready
board.on("ready", function() {
  console.log("Ready!");

  var led = new five.Led(9);
  led.off();
});

io.on('connection', function(socket){
  console.log('a user connected');
  socket.on('led', function (data) {
    console.log(data);
    if(board.isReady){    led.toggle(); }
  });
});

function handler(req,res) {
  path = req.url == "/" ? "./index.html" : "." + req.url;
  fs.readFile(path,
    function(err, data) {
      if(err) {
        res.writeHead(500);
        return res.end('Error loading page.');
      }
      res.writeHead(200);
      res.end(data);
    }
  );
};
