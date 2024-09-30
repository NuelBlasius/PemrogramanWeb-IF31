import React, { Component } from "react";
import Registrasi from "./Registrasi";

const Home = React.lazy(() => import("./Hello"));
const Product = React.lazy(() => import("./Product"));
const Register = React.lazy(() => import("./Registrasi"));

const routes = [
    {path : "/", Component : Home},
    {path : "/product", Component : Product},
    {path : "/registrasi", Component : Registrasi},
];

export default routes;