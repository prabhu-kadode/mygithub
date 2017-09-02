var bodyParser = require("body-parser");// npm install bodyparser --save
var app=require('express')(); //npm install express --save
var http=require('http').Server(app); //npm install http-server --save 
var io=require('socket.io')(http);//npm install socket.io --save
var mysql=require('mysql'); //npm install mysql --save
http.listen(8081,function(){
console.log("Server running at 8081 port");
});