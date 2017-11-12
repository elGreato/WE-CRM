<?php
/**
 * Created by PhpStorm.
 * User: Ali Habbabeh
 * Date: 12.09.2017
 * Time: 21:30
 */
require_once("router/router.php");
require_once("view/layout.php");

session_start();

$auth = function() {
    if(isset($_SESSION['agentLogin'])){
        return true;
    }
    redirect("/login");
    return false;
};

$error = function() {
    errorHeader();
    require_once("view/404.php");
};

route("GET", "/login", function() {
    require_once("view/agentLogin.php");
});

route("GET", "/register", function() {
    require_once("view/agentEdit.php");
});

route("POST", "/register", function() {
    redirect("/logout");
});

route("POST", "/login", function() {
    $_SESSION['agentLogin']=$_POST['email'];
    redirect("/");
});

route("GET", "/logout", function() {
    session_destroy();
    redirect("/login");
});

route_auth("GET", "/", $auth, function() {
    layoutSetContent("customers.php");
});

route_auth("GET", "/agent/edit", $auth, function() {
    require_once("view/agentEdit.php");
});

route_auth("GET", "/customer/create", $auth, function() {
    layoutSetContent("customerEdit.php");
});

route_auth("GET", "/customer/edit", $auth, function() {
    layoutSetContent("customerEdit.php");
});

route_auth("GET", "/customer/delete", $auth, function() {
    $data = $_GET["id"];
    redirect("/");
});

route_auth("POST", "/customer/update", $auth, function() {
    $data = $_POST["name"];
    redirect("/");
});

call_route($_SERVER['REQUEST_METHOD'], $_SERVER['PATH_INFO']);