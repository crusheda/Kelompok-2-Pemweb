<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Beranda - Dapodik</title>
  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">
  <link rel="stylesheet" type="text/css" href="dist/components/table.css">
  <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="dist/components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="dist/components/transition.css">

  <style type="text/css">

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

}

  </style>

  <script src="assets/library/jquery.min.js"></script>
  <script src="dist/components/visibility.js"></script>
  <script src="dist/components/sidebar.js"></script>
  <script src="dist/components/transition.js"></script>
  
</head>
<body>

<!-- Following Menu -->
<div class="ui small fixed pointing menu" style="background-color: #BA7E3C">
  <div class="ui container">
    <a class="active item" style="font-family: Roboto;color: white"><b>Beranda</b></a>
    <a class="brown item" style="font-family: Roboto;color: white"><b>Profile</b></a>
    <div class="ui inline simple dropdown">
      <a class="brown item" style="margin-top: 3px;font-family: Roboto;color: white"><b>Aset</b></a>
      <div class="menu">
        <div class="item" data-text="this week">Aset Bangunan</div>
        <div class="item" data-text="this week">Aset Tanah</div>
      </div>
    </div>
    <div class="ui inline simple dropdown">
      <a class="brown item" style="margin-top: 3px;font-family: Roboto;color: white"><b>Data</b></a>
      <div class="menu">
      	<div class="item" data-text="this week">Kepsek</div>
      	<div class="item" data-text="this week">Wakasek</div>
        <div class="item" data-text="this week">Guru</div>
        <div class="item" data-text="this week">Siswa</div>
        <div class="item" data-text="this week">Sarpras</div>
      </div>
    </div>
    <div class="ui inline simple dropdown">
      <a class="brown item" style="margin-top: 3px;font-family: Roboto;color: white"><b>Sekolah</b></a>
      <div class="menu">
      	<div class="item" data-text="this week">Kabupaten</div>
        <div class="item" data-text="this week">Prestasi</div>
        <div class="item" data-text="this week">Jurusan</div>
        <div class="item" data-text="this week">Tenkependik</div>
      </div>
    </div>
    <div class="right menu">
      <div class="item">
        <a class="ui button" onclick="window.location.href='login.html'">Masuk</a>
      </div>
      <div class="item">
        <a class="ui orange button" onclick="window.location.href='signup.html'">Daftar</a>
      </div>
    </div>
  </div>
</div>

<!-- Page Contents -->
<div class="pusher">
	<div class="ui vertical masthead center aligned segment" style="background-image: url(img/book1.jpg);">
		<br><br><br>
		<div class="ui text container">
		  <h1 class="ui inverted header" style="font-family: Roboto">
		    <b>DAPODIK KITA</b>
		  </h1>
		  <hr>
		  <h3 style="font-family: Roboto;color: white">Kelola Data Dapodik Sekarang Juga!</h3>
		  <button class="ui huge brown button" onclick="window.location.href='login.php'" style="color: white">
		  	Kelola
		  	<i class="right arrow icon"></i>
		  </button>
		</div>
	</div>
	<div class="ui container">
    <br>
	    <h4 class="ui horizontal header divider">
        	<a href="" style="color: brown">Siswa</a>
      	</h4>
	    <table class="ui brown table">
		  <thead>
		    <tr>
		      <th>Name</th>
		      <th>Status</th>
		      <th>Notes</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>John</td>
		      <td>No Action</td>
		      <td>None</td>
		    </tr>
		    <tr>
		      <td>Jamie</td>
		      <td>Approved</td>
		      <td>Requires call</td>
		    </tr>
		    <tr>
		      <td>Jill</td>
		      <td>Denied</td>
		      <td>None</td>
		    </tr>
		    <tr class="warning">
		      <td>John</td>
		      <td>No Action</td>
		      <td>None</td>
		    </tr>
		    <tr>
		      <td>Jamie</td>
		      <td class="positive">Approved</td>
		      <td class="warning">Requires call</td>
		    </tr>
		    <tr>
		      <td>Jill</td>
		      <td class="negative">Denied</td>
		      <td>None</td>
		    </tr>
		  </tbody>
		</table>
	<br>
	</div>
  <div class="ui inverted vertical footer segment" style="background-color: #BA7E3C">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>