var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "yt_login_db"  
});  
con.connect(function(err) {  
if (err) throw err;  
con.query("SELECT * FROM admin", function (err, result) {  
if (err) throw err;  
console.log(result);  
});  
});  