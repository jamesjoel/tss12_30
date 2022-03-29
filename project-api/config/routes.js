

// const express = require("express");
const routes = require("express").Router();

routes.use("/api/demo", require("../controllers/demoController"));
routes.use("/api/category", require("../controllers/categoryController"));
routes.use("/api/product", require("../controllers/productController"));
routes.use("/api/signup", require("../controllers/signupController"));
routes.use("/api/auth", require("../controllers/authController"));
routes.use("/api/admin/auth", require("../controllers/adminAuthController"));



routes.use("/api/user", require("../controllers/userController"));


module.exports=routes;
