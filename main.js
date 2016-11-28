//Include npm module yang diperlukan
var app = require('http').createServer(handler);
var io = require('socket.io').listen(app);
var mysql = require('mysql');
var CronJob = require('cron').CronJob;
var led1,led2,led3,led4,led5,led6,sol;
var five = require("johnny-five");
var board = new five.Board({
  port:process.argv[2]
});
var JamSkrg;
//Update Waktu sekarang
new CronJob('*/10 * * * * *', function() {
  JamSkrg = new Date().getHours();
  console.log("                                                        Sekarang jam: " + JamSkrg);

}, null, true);

//johnny-five
board.on("ready", function() {
  console.log("Berhasil terhubung ke Arduino yang berisi Firmata!");

  led1 = new five.Led(2);
  led2 = new five.Led(3);
  led3 = new five.Led(4);
  led4 = new five.Led(5);
  led5 = new five.Led(6);
  led6 = new five.Led(7);
  sol = new five.Relay(9);
  ac1 = new five.Relay(10);
  ac2 = new five.Relay(11);
});

//hubung ke sql
var con_mysql = mysql.createConnection({
  host    : 'localhost',
  user    : 'root',
  password: '',
  database: 'weblogin'
});

con_mysql.connect(function(err){
  if(err){
    console.log('Koneksi ke Database gagal!.');
    return;
  }
  console.log('Koneksi ke Database berhasil!');
});

//inisiasi serialport
var serialport = require('serialport'),
SerialPort = serialport,
portname = process.argv[3]; // serial port yang digunakan
var myPort = new SerialPort(portname, {
  baudrate : 9600,
  option : false,
  parser: serialport.parsers.readline ("\r\n") // Serial event
});
app.listen(8000);

//http hander untuk server side
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

      //cek status
      con_mysql.query('SELECT * FROM pengunjung WHERE UID = ?', [data], function(err, stat){
        //jika pengunjung tidak berada di ruangan, status bernilai 0
        if(stat[0].status == 0){
          if(stat[0].privilege == 3 || stat[0].privilege == 2){
            con_mysql.query('INSERT INTO buku_tamu SET uid = ?, masuk = now()', [data]); //tulis uid dan waktu masuk
            con_mysql.query('UPDATE pengunjung SET status = 1 WHERE uid = ?',[data]); //update nilai status menjadi 1
            con_mysql.query('UPDATE jumlah_pengunjung SET jumlah = jumlah + 1'); // update nilai jumlah pengunjung +1
            console.log('Pengunjung berikut masuk: ' + data);

            if(board.isReady){    sol.on(); }      //Buka tutup pintu
            console.log("buka pintu");
            setTimeout(function() {
              console.log("tutup pintu");
              if(board.isReady){    sol.off(); }
            }, 5000);                              //==========
            if(board.isReady){
              led1.on();
              led2.on();
              led3.on();
              led4.on();
              led5.on();
              led6.on();
              ac1.on();
            }

          }
          if(JamSkrg >= 7 && JamSkrg < 16){ //Cek jam operasional
            console.log("jam operasional.");
            con_mysql.query('INSERT INTO buku_tamu SET uid = ?, masuk = now()', [data]); //tulis uid dan waktu masuk
            con_mysql.query('UPDATE pengunjung SET status = 1 WHERE uid = ?',[data]); //update nilai status menjadi 1
            console.log('Pengunjung berikut masuk: ' + data);
            if(board.isReady){    sol.on(); }      //Buka tutup pintu
            console.log("buka pintu");
            setTimeout(function() {
              console.log("tutup pintu");
              if(board.isReady){    sol.off(); }
            }, 5000);                              //==========
          }
          else{
            console.log("Bukan jam operasional. Mahasiswa dilarang masuk!");
            console.log("================================================");
          }
        }
        //jika pengunjung berada di ruangan, status bernilai 1
        if(stat[0].status == 1){
          con_mysql.query('SELECT ke FROM buku_tamu WHERE ke = (SELECT MAX(ke) FROM buku_tamu WHERE uid = ?)', [data], function(err,ke){ //pilih kunjungan terakhir
            if(err) throw err;
            // console.log(ke[0].ke); //tampilkan kunjungan ke ...
            con_mysql.query('UPDATE buku_tamu SET keluar = now() WHERE uid = ? AND ke = ?', [data, ke[0].ke]); //tulis uid dan waktu keluar
            con_mysql.query('UPDATE pengunjung SET status = 0 WHERE uid = ?',[data]); //update nilai status menjadi 0
            con_mysql.query('UPDATE jumlah_pengunjung SET jumlah = jumlah - 1'); // update nilai jumlah pengunjung -1
            console.log('Pengunjung berikut keluar: ' + data);
            if(board.isReady){    sol.on(); }      //Buka tutup pintu
            setTimeout(function() {
              console.log("tutup pintu");
              if(board.isReady){    sol.off(); }
            }, 5000);                              //==========
            con_mysql.query('SELECT jumlah FROM jumlah_pengunjung', function(err,jum){
              console.log(jum[0].jumlah);

              if(jum[0].jumlah == 0){
                if(board.isReady){
                  led1.off();
                  led2.off();
                  led3.off();
                  led4.off();
                  led5.off();
                  led6.off();
                  ac1.off();
                  ac2.off();
                }
              }
            });

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
  console.log('Terhubung ke serial port.');
});

myPort.on('close', function() {
  console.log ('Terputus dari Serial port.');
});

myPort.on('error', function(){
  console.log ('Error membuka serial port.');
});
//-------------------------------------------

// event ketika socket io terhubung
io.on('connection', function(socket) {
  console.log("Terhubung ke halaman web!");
  myPort.on('data', function(data){
    socket.emit('EventKirim',{message:data});
    console.log('data yg dikirim ke php: ' + data);
  });

  socket.on('disconnect', function(){
    console.log('Terputus dari halaman web!');
  });

  //ketika socket io menerima string, lalu menyalakan led
  socket.on('led1', function () {
    console.log("toggle LED1");
    if(board.isReady){    led1.toggle(); }
  });
  socket.on('led2', function () {
    console.log("toggle LED2");
    if(board.isReady){    led2.toggle(); }
  });
  socket.on('led3', function () {
    console.log("toggle LED3");
    if(board.isReady){    led3.toggle(); }
  });
  socket.on('led4', function () {
    console.log("toggle LED4");
    if(board.isReady){    led4.toggle(); }
  });
  socket.on('led5', function () {
    console.log("toggle LED5");
    if(board.isReady){    led5.toggle(); }
  });
  socket.on('led6', function () {
    console.log("toggle LED6");
    if(board.isReady){    led6.toggle(); }
  });
  socket.on('led12', function () {
    console.log("toggle Baris 1");
    if(board.isReady){    led1.toggle(); }
    if(board.isReady){    led2.toggle(); }
  });
  socket.on('led34', function () {
    console.log("toggle Baris 2");
    if(board.isReady){    led3.toggle(); }
    if(board.isReady){    led4.toggle(); }
  });
  socket.on('led56', function () {
    console.log("toggle Baris 3");
    if(board.isReady){    led5.toggle(); }
    if(board.isReady){    led6.toggle(); }
  });
  socket.on('ledAll', function () {
    console.log("toggle Semua LED");
    if(board.isReady){    led1.toggle(); }
    if(board.isReady){    led2.toggle(); }
    if(board.isReady){    led3.toggle(); }
    if(board.isReady){    led4.toggle(); }
    if(board.isReady){    led5.toggle(); }
    if(board.isReady){    led6.toggle(); }
  });
  socket.on('sol', function () {
    console.log("toggle Solenoid");
    if(board.isReady){    sol.toggle(); }
  });
  socket.on('AC1', function () {
    console.log("toggle AC1");
    if(board.isReady){    ac1.toggle(); }
  });
  socket.on('AC2', function () {
    console.log("toggle AC2");
    if(board.isReady){    ac2.toggle(); }
  });
});
