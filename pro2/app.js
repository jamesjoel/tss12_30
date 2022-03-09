const express = require("express");
const app = express();
const routes = require("./config/routes");


app.set("view engine", "ejs");



app.use(express.static(__dirname+"/assets"));

app.use(routes);

var port = 3000;
app.listen(port, ()=>{
    console.log("server running");
})