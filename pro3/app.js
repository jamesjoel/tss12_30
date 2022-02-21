const express = require("express");
const app = express();
const routes = require("./config/routes");

app.set("view engine", "ejs");
// set our view engine like ejs, pug, handlebar
app.use(express.json());
app.use(express.urlencoded());
// comming data from form in html 

app.use(express.static(__dirname+"/assets"));
// all static files path

app.use(routes);
// all routes come here and go to routes.js file

const port = process.env.PORT|| 3000;
// if in live server the "port" come from "process.env.PORT" and for local server port is 3000

app.listen(port, ()=>{
    console.log("server running");
})
// create server with port variable