const routes = require("express").Router();

routes.use("/api/auth", require("../controllers/AuthController"));
routes.use("/api/profile", require("../controllers/ProfileController"));
routes.use("/api/upload", require("../controllers/UploadController"));


module.exports = routes;