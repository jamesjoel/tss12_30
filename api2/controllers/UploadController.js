var routes = require("express").Router();
var path = require("path");
// the "path" is Core Module in node


routes.post("/", (req, res)=>{
    // console.log(req.files);
    var abc = req.files.myfile;
    var name = abc.name;

    var mypath = path.resolve()+"/assets/images/";
    
    abc.mv(mypath+name, (err)=>{
        console.log(err);
    });

})


module.exports = routes;