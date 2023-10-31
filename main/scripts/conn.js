var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "d1ngd0ng"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});