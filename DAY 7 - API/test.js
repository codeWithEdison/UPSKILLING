var http = require('http');
console.log("waiting client......");
// create a server object
http.createServer(function (req, res){
    console.log("server is running on port : 3000 .......");
    res.write('hello welcome ') // write a response to the client
    res.end(); // end the server
}).listen(3000) // server object listens on port 3000

// Add an http headeer

http.createServer(function (req, res){
    console.log("server is running on port : 3001 .......");
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write("hello this is html content") // write a response to the client
    res.end(); // end the server
}).listen(3001) // server object listens on port 3000