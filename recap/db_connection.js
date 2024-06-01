const mysql = require('mysql2')

  const con = mysql.createConnection({
        host: '127.0.0.1',
        user: 'root',
        password: '971040',
        database: 'node_crud'
        // port: 3307,
        // database: 'abunzi'
    })
    con.connect(function(err){
        if(err) throw err;
        console.log('connected');
    
        
    })
    // con.query("CREATE DATABASE node_crud", function(err, result){
    //     if(err) throw err
    //     console.log("database created ");

    module.exports =con;
