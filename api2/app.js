const express = require("express");
const app = express();
const cors = require("cors");
const routes = require("./config/routes");
const upload = require("express-fileupload");

app.use(express.json());
app.use(express.urlencoded({ extended : true }));
app.use(cors());
app.use(upload());


app.use(routes);

app.listen(3000);

