const mysql = require('mysql2');
const connect = require('./db_connection');
const sql = "CREATE TABLE Users (id int primary key auto_increment, username varchar(20), password varchar(16), created_at timestamp default current_timestamp)"
connect.query(sql, function(err, result){
    if(err) throw err
 console.log("table created succesfullt");
})