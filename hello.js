var http = require("http");

var server = http.createServer(function(request, response) {
    response.writeHead(200, {"Content-Type": "text/plain"});

    response.end("HELLO");
})

server.listen(80);

console.log("Everything is fine and server is running.");