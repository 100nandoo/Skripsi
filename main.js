//Include npm module yang diperlukan
var app = require('http').createServer(handler);
var io = require('socket.io').listen(app);
var mysql = require('mysql');

var con_mysql = mysql.createConnection({
  host    : 'localhost',
  user    : 'root',
  password: '',
  database: 'weblogin'
});

con_mysql.connect(function(err){
  if(err){
    console.log('Error koneksi ke sql.');
    return;
  }
  console.log('Terhubung ke sql.');
});

var serialport = require('serialport'),
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

// event serialport
//-------------------------------------------
myPort.on('data', function(data) {
  console.log('Serial port menerima data: ' + data);

  con_mysql.query('SELECT uid FROM pengunjung WHERE uid = ?', [data], function(err,resl){
    if(err) throw err;

    //pengecekan apakah uid ada dalam tabel pengunjung
    if(resl != 0){ //jika ada tulis data
      console.log('Pengunjung berikut terdaftar: ' + data);

      //pilih
      con_mysql.query('SELECT * FROM pengunjung WHERE UID = ?', [data], function(err, stat){

        if(stat[0].status == 0){
          con_mysql.query('INSERT INTO buku_tamu SET uid = ?, masuk = now()', [data]);
          con_mysql.query('UPDATE pengunjung SET status = 1 WHERE uid = ?',[data]);
        }
        if(stat[0].status == 1){
          con_mysql.query('SELECT ke FROM buku_tamu WHERE ke = (SELECT MAX(ke) FROM buku_tamu)',function(err,ke){
            if(err) throw err;
            console.log(ke[0].ke);
            con_mysql.query('UPDATE buku_tamu SET keluar = now() WHERE uid = ? AND ke = ?', [data, ke[0].ke]);
            con_mysql.query('UPDATE pengunjung SET status = 0 WHERE uid = ?',[data]);
          });
        }
      });


    }
    else { //jika pengunjung tidak ada dalam tabel pengunjung
      console.log('Pengunjung tidak terdaftar');
    }
  });
});

myPort.on('open', function() {
  console.log('Serial port terbuka.');
});

myPort.on('close', function() {
  console.log ('Serial port tertutup.');
});

myPort.on('error', function(){
  console.log ('Error membuka serial port.');
});
//-------------------------------------------

// event ketika socket io terhubung
io.on('connection', function(socket) {
  console.log("socket io terhubung");
  myPort.on('data', function(data){
    socket.emit('EventKirim',{message:data});
    console.log('data yg dikirim ke php: ' + data);
  });

  socket.on('disconnect', function(){
    console.log('socket io terputus');
  });
});
