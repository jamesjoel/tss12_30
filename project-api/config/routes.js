

// const express = require("express");
const routes = require("express").Router();

routes.use("/api/demo", require("../controllers/demoController"));
routes.use("/api/category", require("../controllers/categoryController"));
routes.use("/api/product", require("../controllers/productController"));


module.exports=routes;
