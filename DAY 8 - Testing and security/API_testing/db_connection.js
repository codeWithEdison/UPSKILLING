import  mysql from 'mysql2';

  const dbconn = mysql.createConnection({
        host: '127.0.0.1',
        user: 'root',
        password: '971040',
        database: 'node_crud'
        // port: 3307,
        // database: 'abunzi'
    })
    // dbconn.connect(function(err){
    //     if(err) throw err;
    //     console.log('connected');
    
        
    // })
    // con.query("CREATE DATABASE node_crud", function(err, result){
    //     if(err) throw err
    //     console.log("database created ");
export default  dbconn;
