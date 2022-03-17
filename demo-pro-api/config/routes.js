const routes = require("express").Router();


routes.use("/api/student", require("../controller/StudentController"));



module.exports = routes;