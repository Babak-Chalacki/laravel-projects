<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>profile</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Cairo:400,700=arabic');
body {
  margin: 0 auto;
  padding: 0;
  background: #222;
}

.left {
  left: 25px;
}

.right {
  right: 25px;
}

.center {
  text-align: center;
}

.bottom {
  position: absolute;
  bottom: 25px;
}

#gradient {
  background: #999955;
  background-image: linear-gradient(#ffd700 20%, #111 20%, #111 40%, #111 40%, #111 60%, #111 60%, #111 80%, #ffd700 80%);
  margin: 0 auto;
  margin-top: 100px;
  width: 100%;
  height: 150px;
}

#gradient:after {
  content: "";
  position: absolute;
  background: #E9E2D0;
  left: 50%;
  margin-top: -67.5px;
  margin-left: -270px;
  padding-left: 20px;
  border-radius: 5px;
  width: 520px;
  height: 275px;
  z-index: -1;
}

#card {
  position: absolute;
  width: 450px;
  height: 225px;
  padding: 25px;
  padding-top:5px;
  padding-bottom: 0;
  left: 50%;
  top: 67.5px;
  margin-left: -250px;
  background: #E9E2D0;
  box-shadow: -20px 0 35px -25px black, 20px 0 35px -25px black;
  z-index: 5;
}

#card img {
  width: 150px;
  float: right;
  border-radius: 5px;
  margin-right: -5px;
  -webkit-filter: sepia(1);
  -moz-filter: sepia(1);
  filter: sepia(1);
}

#card h2 {
  font-family: courier;
  color: #111;
  margin: 0 auto;
  padding: 0 0;
  font-size: 15pt;
  font-family:'cairo',serif;
  text-align: center;
}

#card p {
  font-family: courier;
  color: #111;
  font-size: 13px;
  font-family:'cairo',serif;
  text-align: center;
}

#card span {
  font-family: courier;
 font-family:'cairo',serif;
}
  </style>
</head>
<body>
  <div id="gradient"></div>
<div id="card">
  {{-- <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxivAs4UknzmDfLBXGMxQkayiZDhR2ftB4jcIV7LEnIEStiUyMygioZnbLXCAND-I_xWQpVp0jv-dv9NVNbuKn4sNpXYtLIJk2-IOdWQNpC2Ldapnljifu0pnQqAWU848Ja4lT9ugQex-nwECEh3a96GXwiRXlnGEE6FFF_tKm66IGe3fzmLaVIoNL/s1600/img_avatar.png"/> --}}
  <h2><b>name</b> : {{ Auth::user()->name }}</h2>
  <p><b>email</b> : {{ Auth::user()->email }}</p>
  <p><b>username</b> : {{ Auth::user()->username }}</p>
  <p><b>adress</b> : {{ Auth::user()->address }}</p>
  <span class="left bottom"><b>mobile_number</b> : {{ Auth::user()->mobile_number }}</span>
  <span class="right bottom"><b>City</b> : {{ Auth::user()->city->name }}</span>
</div>
</body>
</html>
