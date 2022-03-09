const express = require("express");
const routes = express.Router();

const HomeCtrl = require("../controllers/HomeController");
const AboutCtrl = require("../controllers/AboutController");
const ContactCtrl = require("../controllers/ContactController");
const HelpCtrl = require("../controllers/HelpController");

routes.use("/", HomeCtrl);
routes.use("/about", AboutCtrl);
routes.use("/contact", ContactCtrl);
routes.use("/help", HelpCtrl);


module.exports = routes;

