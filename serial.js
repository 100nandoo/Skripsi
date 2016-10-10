var app = require('http').createServer(handler);
var io = require('socket.io').listen(app);
var serialport = require('serialport'), // include library serial port
SerialPort = serialport,
portname = 'COM3'; // serial port yang digunakan
var myPort = new SerialPort(portname, {
  baudrate : 9600,
  option : false,
  parser: serialport.parsers.readline ("\r\n") // Serial event
});
app.listen(8000);


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

myPort.on('open', function() {
  console.log('Serial port terbuka');
});

myPort.on('close', function() {
  console.log ('Serial port tertutup');
});

myPort.on('error', function(){
  console.log ('error open serial port.');
});

io.on('connection', function(socket) {
  console.log("socket io terhubung");
  myPort.on('data', function(data){
    socket.emit('EventKirim',{message:data});
    console.log(data);
  });

  socket.on('disconnect', function(){
    console.log('socket io terputus');
  });
});
