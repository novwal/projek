<!DOCTYPE html>
<html>
<head>
  <title>Navbar</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>

.card4 {
  width: 90%;
  margin: 100px auto;
  padding: 50px;
  background-color: white;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1);
  border-radius: 20px;
  display: flex;
  flex-direction: column; /* Change to column layout */
  align-items: flex-start; /* Align items to the left side */
}

.progress-bar {
  width: 100%;
  height: 40px;
  background-color: #f1f1f1;
  border-radius: 5px;
  margin-top: 20px;
  display: flex;
  align-items: center;
}

.progress-bar-inner {
  height: 100%;
  background-color: #1F3984;
  text-align: center;
  line-height: 40px; /* Adjust line height to match progress bar height */
  color: white;
  border-radius: 1px;
}

.card-bar {
  width: 100%;
  display: flex;
  justify-content: center; /* Center align the card horizontally */
}

.card-text1 {
  margin-top: 10px;
  display: inline-block; /* Display totals in the same line */
  margin-right: 20px; /* Add some spacing between totals */
}

  
.banner{
  padding: 2rem;
}

.slider-wrapper {
	position: relative;
	width: 1500px;
	margin: 0 auto;
}

.slider {
	display: flex;
  aspect-ratio: 15 / 4;
	overflow-x: auto;
	scroll-snap-type: x mandatory;
	scroll-behavior: smooth;
	box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
	border-radius: 0.5rem;
	-ms-overflow-style: none; 
	scrollbar-width: none; 
}

.slider::-webkit-scrollbar {
	display: none;
}

.slider img {
	flex: 1 0 100%;
	scroll-snap-align: start;
	object-fit: cover;
}

.slider-nav {
	display: flex;
	column-gap: 1rem;
	position: absolute;
	bottom: 1.25rem;
	left: 50%;
	transform: translateX(-50%);
	z-index: 1;
}

.slider-nav a {
	width: 0.5rem;
	height: 0.5rem;
	border-radius: 50%;
	background-color: #fff;
	opacity: 0.75;
	transition: opacity ease 250ms;
}

.slider-nav a:hover {
	opacity: 1;
}
  .manfaatteks{
  width: 850px;
  height: 30%;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  font-style: normal;
  font-weight: 500;
  font-size: 25px;
  line-height: 135%;
  letter-spacing: 0.015em;
  color: #919191;
  flex: none;
  order: 0;
  flex-grow: 0;
  display: flex;
  padding-top: 70px;
  padding-left: 50px;
}

  .manfaath1{
  width: 723px;
  height: 130px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  font-style: normal;
  font-weight: 600;
  font-size: 62px;
  line-height: 130%;
  text-transform: capitalize;
  color: #181F1C;
  flex: none;
  order: 1;
  flex-grow: 0;
  padding-left: 50px;
}

span{
  color: #1F3984;
}

 .card8 {
  width: 310.25px;
  height: 295.9px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  left: 3%;
  top: 300px;
  padding: 1.8rem;
  border-radius: 20px;
  background: white;
  position: relative;
  transition: 0.5s ease-out;
  overflow: visible;
  box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
 }
 .card5 {
  width: 310.25px;
  height: 295.9px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  left: 30%;
  top: -50px;
  padding: 1.8rem;
  border-radius: 20px;
  background: white;
  position: relative;
  transition: 0.5s ease-out;
  overflow: visible;
  box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
 }
 
 .card6 {
  width: 310.25px;
  height: 295.9px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  left: 3%;
  top: 50px;
  padding: 1.8rem;
  border-radius: 20px;
  background: white;
  position: relative;
  transition: 0.5s ease-out;
  overflow: visible;
  box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
 }

 .card7 {
  width: 310.25px;
  height: 295.9px;
  font-family: '';
  left: 30%;
  top: -300px;
  padding: 1.8rem;
  border-radius: 20px;
  background: white;
  position: relative;
  transition: 0.5s ease-out;
  overflow: visible;
  box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
 }
 
 .card-details {
  color: black;
  height: 10%;
  gap: .5em;
  display: grid;
 }
 
.text-body {
color: #919191;
flex: none;
order: 1;
font-size: 20px;
align-self: stretch;
flex-grow: 0;
z-index: 1;
}

 .text-title {
  font-size: 1.5em;
  font-weight: bold;
 }

 .bordercard{
  height: 55px;
  width: 55px;
  left: 10%;
 }

 .picbaccard{
  position: absolute;
  width: 150px;
  height: 120px;
  left: 59.5%;
  top: 65.5%;
  color: white;
  opacity: 0,1
 }

.handpicmas{
  position: relative;
  width: 450px;
  height: 800.45px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  left: 140%;
  top: -505px;
  bottom: 0;
  box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
}

.carawakaf{
  margin-top: -250px;
}

.carateks{
  width: 850px;
  height: 30%;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  font-style: normal;
  font-weight: 500;
  font-size: 25px;
  line-height: 135%;
  letter-spacing: 0.015em;
  color: #919191;
  flex: none;
  order: 0;
  flex-grow: 0;
  margin-top: 50px;
  display: flex;
  padding-top: 70px;
  padding-left: 50px;
}

  .carah1{
  width: 923px;
  height: 130px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  font-style: normal;
  font-weight: 600;
  font-size: 62px;
  top: 100px;
  line-height: 130%;
  text-transform: capitalize;
  color: #181F1C;
  flex: none;
  order: 1;
  flex-grow: 0;
  padding-left: 50px;
}

.carah1 span{
  color: #1F3984;
}

.titleecard{
  font-size: 30px;
}

.caracard1{
  width: 510.25px;
  height: 230px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  left: 3%;
  top: 300px;
  padding: 1.8rem;
  border-radius: 20px;
  background: white;
  position: relative;
  transition: 0.5s ease-out;
  overflow: visible;
  box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
}
.caracard2{
  width: 510.25px;
  height: 230px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  left: 40%;
  top: 10px;
  padding: 1.8rem;
  border-radius: 20px;
  background: white;
  position: relative;
  transition: 0.5s ease-out;
  overflow: visible;
  box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
}
.caracard3{
  width: 510.25px;
  height: 230px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  left: 3%;
  top: 100px;
  padding: 1.8rem;
  border-radius: 20px;
  background: white;
  position: relative;
  transition: 0.5s ease-out;
  overflow: visible;
  box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
}
.caracard4{
  width: 510.25px;
  height: 230px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  left: 40%;
  top: -187px;
  padding: 1.8rem;
  border-radius: 20px;
  background: white;
  position: relative;
  transition: 0.5s ease-out;
  overflow: visible;
  box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
}

.cara-details {
  color: black;
  display: flex;
  flex-direction: column;
}

.cara-body {
  color: #919191;
  font-size: 20px;
  flex-grow: 1;
  z-index: 1;
}

.cara-title {
  font-size: 1.5em;
  font-weight: bold;
  font-weight: 600;
}

.datawakaf{
  margin-top: -150px;
}

.datah1{
  width: 923px;
  height: 130px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  font-style: normal;
  font-weight: 600;
  font-size: 62px;
  top: 100px;
  line-height: 130%;
  text-transform: capitalize;
  color: #181F1C;
  flex: none;
  order: 1;
  flex-grow: 0;
  padding-left: 50px;
}

.datateks{
  width: 850px;
  height: 30%;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  font-style: normal;
  font-weight: 500;
  font-size: 25px;
  line-height: 135%;
  letter-spacing: 0.015em;
  color: #919191;
  flex: none;
  order: 0;
  flex-grow: 0;
  display: flex;
  padding-top: 70px;
  padding-left: 50px;
}

.table-table-bordered {
  width: 1010.25px;
  height: 230px;
  font-family: Verdana, Geneva, Tahoma, sans-serif ;
  max-height: 450px;
  overflow-y: auto;
  text-align: left;
  top: 300px;
  left: 18.5%;
  padding: 1.8rem;
  border-radius: 20px;
  background: white;
  position: relative;
  transition: 0.5s ease-out;
  box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
  margin-top: -150px;
}

.table-table-bordered td {
  padding: 1rem;
  border-top: 1px solid #000;
}

.table-table-bordered th {
  font-weight: bold;
  background-color: #f0f0f0;
}


.table-table-bordered thead {
  font-weight: bold;
}

.table-table-bordered tfoot {
  font-style: italic;
}



.gallwakaf {
  margin-top: 360px;

}

.galteks{
  width: 850px;
  height: 30%;
  font-family: 'Be Vietnam Pro';
  font-style: normal;
  font-weight: 500;
  font-size: 25px;
  line-height: 135%;
  letter-spacing: 0.015em;
  color: #919191;
  flex: none;
  order: 0;
  flex-grow: 0;
  
}

  .galh1{
  width: 923px;
  height: 130px;
  font-family: 'Be Vietnam Pro';
  font-style: normal;
  font-weight: 600;
  font-size: 62px;
  line-height: 130%;
  text-transform: capitalize;
  color: #181F1C;
  flex: none;
  order: 1;
  flex-grow: 0;
}

.container-galery {
    margin: 70px;
}

.container-galery h1 {
    font-size: 37px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.container-card-galery {
    padding: 25px 5%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 2fr));
    gap: 30px;
    text-decoration: none;
}

.container-card-galery .box-card {
    background-color: #1F3984;
    width: 100%;
    height: 100%;
    border-radius: 20px;
}

.container-card-galery .box-card li {
    list-style: none;
}

.container-card-galery .box-card li a i {
    text-align: center;
    width: 100%;
    color: white;
    font-size: 90px;
    margin-top: 150px;
}

.container-card-galery .box-card h2 {
    text-align: center;
    color: white;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.box-galery img {
    height: 450px;
    width: 370px;
}

footer {
    background-color: #001E42;
    width: 100%;
    padding: 20px;
    display: flex;
    justify-content: space-between;
}

.footer-left {
    display: flex;
    flex-direction: column;
    margin-bottom: 40px;
    margin-top: 15px;
}

.footer-title-body {
    margin-left: 30px;
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.title {
    margin-left: 13px;
    color: white;
}

.footer-left img {
    width: 50px;
    height: 50px;
}


.address,
.call {
    position: relative;
    border-bottom: 1.5px solid #aca8a8;
    padding-bottom: 10px;
}

.footer-social-icons {
    margin-top: 10px;
    margin-left: 25px;
}

.footer-social-icons a i {
    margin-left: 10px;
    font-size: 20px;
    color: white;
}

.address {
    margin-top: 10px;
    margin-left: 35px;
    color: white;
}

.call {
    margin-top: 10px;
    margin-left: 35px;
    color: white;
}

.footer-right {
    display: flex;
    padding: 20px;
    margin-left: 15%;
    flex-direction: column;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.footer-right h4 {
    color: white;
    font-size: 17px;
    margin-bottom: 10px;
}

.footer-right ul {
    padding: 0;
}

.footer-right li {
    color: #fff;
    font: 10px;
    margin-top: 10px;
    margin-bottom: 5px;
}

.footer-right a {
    margin-top: 15px;
    font-size: 16px;
    text-decoration: none;
    color: #fffafa;
}

.footer {
    background-color: #001E42;
    width: 100%;
    padding: 20px;
    display: flex;
    justify-content: space-between;
}

.footer-left {
    display: flex;
    flex-direction: column;
    margin-bottom: 40px;
    margin-top: 15px;
}

.footer-title-body {
    margin-left: 30px;
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.title {
    margin-left: 13px;
    color: white;
}

.footer-left img {
    width: 50px;
    height: 50px;
}

.address,
.call {
    position: relative;
    border-bottom: 1.5px solid #aca8a8;
    padding-bottom: 10px;
}

.footer-social-icons {
    margin-top: 10px;
    margin-left: 25px;
}

.footer-social-icons a i {
    margin-left: 10px;
    font-size: 20px;
    color: white;
}

.address {
    margin-top: 10px;
    margin-left: 35px;
    color: white;
}

.call {
    margin-top: 10px;
    margin-left: 35px;
    color: white;
}

.footer-right {
    display: flex;
    padding: 20px;
    margin-right: 20%;
    flex-direction: column;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.footer-right h4 {

    color: white;
    font-size: 17px;
    margin-bottom: 10px;
}

.footer-right ul {
    padding: 0;
}

.footer-right li {
    color: #fff;
    font: 10px;
    margin-top: 10px;
    margin-bottom: 5px;
}

.footer-right a {
    margin-top: 15px;
    font-size: 16px;
    text-decoration: none;
    color: #fffafa;
}

.footer-right-box {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-left: 20px;
    color: white;
}

.footer-right-box h4 {
    margin-top: 22px;
    font-size: 17px;
    margin-bottom: 10px;
}

.content-footer {
    width: 100%;
}

.content-footer form {
    width: 100%;
}

.name,
.email,
.msg,
.btn {
    margin-bottom: 15px;
}

.name input,
.email input,
.msg textarea,
.btn input[type="submit"] {
    border-radius: 7px;
    width: 100%;
    padding: 8px;
    font-size: 16px;
}

.msg textarea {
    resize: vertical;
    height: 100px;
}

.btn {
    text-align: right;
    margin-bottom: 15px;
}

.btn button[type="submit"] {
    background-color: #FFF500;
    color: #1F3984ff;
    padding: 10px 10px;
    font-size: 14px;
    width: 100px;
    border-radius: 7px;
    border: none;
    cursor: pointer;
}

.footer-copy {
    text-align: center;
    background-color: #FFFFFF;
    fill: solid;
    color: #001E42;
    width: 100%;
    padding: 15px;
}

.container-sodaqoh {
    margin: 0;
    padding: 0;
    background-color: #001E42;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.box-sodaqoh {
    background-color: #f5f5f5;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
    width: 400px;
}

.box-header-sodaqoh {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
}

.box-body-sadaqoh {
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
}

.form-group input[type="text"],
.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    color: #001E42;
}

.btn-footer {
    background-color: #FFF500;
    color: #001E42;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn:hover {
    background-color: #e0da3e;
}
  </style>
</head>
<body>
  <nav>
    <div class="navbar-brand">
        <img src="wikrama-logo.png" alt="Logo" class="logo">
        <a href="#" class="brand-name">SMK WIKRAMA <br>BOGOR</br></a>
        
      </div>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Cara Wakaf</a></li>
      <li><a href="#">Data Wakaf</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="#">Web Wikrama</a></li>
    </ul>
  </nav>

  <header>
    <div class="container">
      <h2 class="text-utama">Masjid Besar SMK Wikrama Bogor</h2>
      <h1 class="black-text"><br>Mari <span class="highlight-text">Tingkatkan<br>Keimanan</span> Masyarakat<br>SMK Wikrama Bogor.</h1>
        <img src="masjidil haram index.jpg" alt="Gambar" class="image">
      </div>
    </div>
    <div class="card-container">
      <div class="card">
        <img src="leaf-shape.png" alt="Logo" class="card-logo">
        <div class="card-description">
            <h3 class="card-title">Lingkungan Terjaga</h3>
       </div>
    </div>
  </div>
    <div class="card-container">
      <div class="card2">
        <img src="zoom-out.png" alt="Logo" class="card-logo">
        <div class="card-description">
            <h3 class="card-title">Kapasitas Besar</h3>
       </div>
    </div>
  </div>
    <div class="card-container">
      <div class="card3">
        <img src="book-open.png" alt="Logo" class="card-logo">
        <div class="card-description">
            <h3 class="card-title">Al-Quran Gratis</h3>
       </div>
    </div>
  </div>
  <div class="card-ball">
    <img src="wikrama-logo.png" alt="Logo" class="card-logos">
</div>
    <button class="button">
      <a href="shodakoh.php" target="_blank" class="button-label">Beri Bantuan Shodaqoh</a>
    </button>

    <div class="card-bar">
  <div class="card4">
    <h2 class="card-text1">Total Target Dana: 40.000.000</h2>
    <h2 class="card-text1">Total Dana Terkumpul: <span id="totalMoney"></span></h2>
    <h2 class="card-text1">Total Donatur: <span id="totalUsers"></span></h2>
    <div class="progress-bar">
      <div class="progress-bar-inner" id="progressBar"></div>
    </div>
  </div>
</div>


    <div class="running-text">
  <span id="runningText"></span>
</div>

  </header>

  <section class="banner">
	<div class="slider-wrapper">
		<div class="slider">
			<img id="slide-1" src="masjid1.jpg" />
			<img id="slide-2" src="masjid2.jpg" />
			<img id="slide-3" src="masjidn3.jpg" />
			
		</div>
		<div class="slider-nav">
			<a href="#slide-1"></a>
			<a href="#slide-2"></a>
			<a href="#slide-3"></a>
		</div>
	</div>
</section>



  <div class="balapi">
  <h1 class="manfaath1"><span>Manfaat </span>Wakaf, Infaq <br>Shodaqoh. </h1>
  <p class="manfaatteks">Berikut Adalah Beberapa Keutamaan Wakaf, Infaq <br>Shodaqoh Yang Akan Anda Dapatkan.</p>
  </div>
</section>

<section class="manfaatcard">
<div class="card8">
  <div class="card-details">
    <img src="love-blue.png" class="bordercard"> 
    <img src="gray-love.png" class="picbaccard">
  <b class="text-title">Menjadikan hati <br> lebih tenang</b>
    <p class="text-body">Kami memberikan harga <br> yang terbaik dibandingkan <br> dengan Kompetitor kami. </p>
  </div>
</div>
<div class="card5">
  <div class="card-details">
    <img src="task-done-blue.png" class="bordercard"> 
    <img src="gray-ceklis.png" class="picbaccard">
  <b class="text-title">Terbukanya <br> Pintu Rezeki</b>
    <p class="text-body">Allah SWT akan membuka <br> pintu rezeki dari arah yang <br> tidak dikira sebelumnya. </p>
  </div>
</div>
<div class="card6">
  <div class="card-details">
    <img src="protected-blue.png" class="bordercard"> 
    <img src="gray-shield.jpg" class="picbaccard">
  <b class="text-title">Menjauhkan Dari  <br> Bahaya</b>
    <p class="text-body">Rasulullah SAW pernah <br> bersabda: "Bersegeralah <br> untuk bersedekah, karena <br> musibah dan bencana tidak <br> bisa mendahului sedekah." </p>
  </div>
</div>
<div class="card7">
  <div class="card-details">
    <img src="blue-stars.png" class="bordercard"> 
    <img src="gray-stars.png" class="picbaccard">
  <b class="text-title">Pahala Yang Tak <br> Terputus</b>
    <p class="text-body">Ini akan menolong kita di  <br> akhirat nantinya, juga <br> dapat menyelamatkannya <br> dari api neraka.</p>
  </div>
  <img src="masjidil haram index.jpg" class="handpicmas" alt="">
</div>
</section>

<section class="carawakaf">
 <div class="balapi">
  <h1 class="carah1"><span>Cara Melakukan  </span>Wakaf, Infaq <br>Shodaqoh. </h1>
  <p class="carateks">Berikut Adalah Cara Melakukan Wakaf, Infaq Shodaqoh Untuk <br> Membantu Pembangunan Masjid Besar SMK Wikrama Bogor.</p>
  </div>
 </section>

 <section class="caracard">
<div class="caracard1">
  <div class="cara-details">
    <p class="titleecard"><b> <span>01</span> </b> </p> 
  <b class="cara-title">Isi Form Data Diri</b>
    <p class="cara-body">Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan <br> teliti. </p>
  </div>
</div>
<div class="caracard2">
  <div class="cara-details">
    <p class="titleecard"><b> <span>02</span> </b> </p> 
  <b class="cara-title">Isikan Nominal Shodaqoh</b>
    <p class="cara-body">Isikan nominal yang akan anda Shodaqohkan, <br> pastikan isi nominalnya dengan seiklasnya tanpa ada <br> paksaan apapun. </p>
  </div>
</div>
<div class="caracard3">
  <div class="cara-details">
    <p class="titleecard"><b> <span>03</span> </b> </p> 
  <b class="cara-title">Upload Bukti Pembayaran</b>
    <p class="cara-body">Pilih metode pembayaran dan upload bukti <br> pembayarannya. </p>
  </div>
</div>
<div class="caracard4">
  <div class="cara-details">
    <p class="titleecard"><b> <span>04</span> </b> </p> 
  <b class="cara-title">Verifikasi Pembayaran</b>
    <p class="cara-body">Pembayaran anda akan di verifikasi oleh admin  <br> dan jika terverifikasi nama anda akan tampil. </p>
  </div>
</div>
 </section>

<section class="datawakaf">
<div class="balapi">
  <h1 class="datah1"><span>Data Donatur </span>Wakaf, Infaq <br>Shodaqoh. </h1>
  <p class="datateks">Berikut Adalah Data Donatur Wakaf, Infaq Sodaqoh Untuk <br> Masjid Besar SMK Wikrama Bogor.</p>
  </div>
</section>

<section class="datatabel">

<div class="datatabel">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table-table-bordered">
       <thead>
         <th>Nama Donatur</th>
         <th>ID Donatur</th>
         <th>Paket</th>
         <th>Kategori</th>
         <th>Nominal</th>
    </thead>
    <tbody>
          <tr>
            <td>Meidira</td>
            <td>12209130</td>
            <td>Paket 1</td>
            <td>Barang</td>
            <td>Emas</td>
          </tr>
          <tr>
            <td>Novwal</td>
            <td>12209326</td>
            <td>Paket 2</td>
            <td>Uang</td>
            <td>100.000</td>
          </tr>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>

</section>

<section class="gallwakaf">
<div class="balapi">
  <h1 class="galh1"><span>Gallery </span>Masjid Besar SMK <br>Wikrama Bogor. </h1>
  <p class="galteks">Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor.</p>
  </div>
</section>
            </div>

            <div class="container-card-galery">
                <div class="box-galery">
                    <img src="masjid1.jpg" alt="">
                </div>
                <div class="box-galery">
                    <img src="masjid2.jpg" alt="">
                </div>
                <div class="box-galery">
                    <img src="masjid3.jpg" alt="">
                </div>
                <div class="box-galery">
                    <img src="masjid4.jpg" alt="">
                </div>
                <div class="box-galery">
                    <img src="masjid5.jpg" alt="">
                </div>
                <div class="box-card">
                    <ul>
                        <li><a href="#"><i class='bx 
                    bx-right-arrow-alt'></i></a></li>
                        <h2>Buka Gallery</h2>
                    </ul>
                </div>

            </div>
        </section>

        <section class="footer">
            <footer>
                <div class="footer-left">
                    <div class="footer-title-body">
                        <img src="upload/index/unnamed 1.png">
                        <h3 class="title">Smk Wikrama <br>Bogor</h3>
                    </div>
                    <div class="address">
                        <h4>Alamat</h4>
                        <p>Jl. Raya Wangun <br>
                            Kelurahan Sindangsari<br>
                            Bogor Timur 16720</p>
                    </div><br>
                    <div class="call">
                        <h4>Telepon</h4>
                        <p> 0251-8242411 / <br>
                            082221718035 (Whatsapp)</p>
                    </div><br>
                    <div class="footer-social-icons">
                        <a href="#"><i class='bx bxl-facebook-square'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>
                <div class="footer-right">
                    <h4>Tentang Wikrama</h4>
                    <ul>
                        <li><a href="#">Sejarah</a></li>
                        <li><a href="#">Peraturan Sekolah</a></li>
                        <li><a href="#">Rencana Strategi &amp; Prestasi</a></li>
                        <li><a href="#">Yayasan</a></li>
                        <li><a href="#">Struktur Organisasi</a></li>
                        <li><a href="#">Cabang</a></li>
                        <li><a href="#">Penghargaan</a></li>
                        <li><a href="#">Kerjasama</a></li>
                    </ul>
                </div>
                <?php


                if (isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $pesan = $_POST['pesan'];


                    $sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
                    if (mysqli_query($conn, $sql)) {
                    }
                }
                ?>
                <div class="footer-right-box">
                    <h4>Kirim Pesan</h4>
                    <div class="content-footer">
                        <form action="" method="post">
                            <div class="name">
                                <input type="text" name="nama" required placeholder="Nama">
                            </div>
                            <div class="email">
                                <input type="email" name="email" required placeholder="Email">
                            </div>
                            <div class="msg">
                                <textarea name="pesan" cols="30" rows="5" placeholder="Pesan Anda"></textarea>
                            </div>
                            <div class="btn-shodaqoh">
                                <button type="submit" name="submit">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>

            </footer>

        </section>
        <p class="footer-copy">© 2023 - SMK Wikrama Bogor. All Rights Reserved.</p>
  
</section>

    
  

  <footer>
    
  </footer>

  <script src="script.js"></script>
</body>
</html>
</body>
</html>
