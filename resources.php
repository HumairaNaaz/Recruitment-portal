<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resources</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <style>
	body{
	    width:100%;
	}
    .card {
      margin: 20px;
    }
    .video-container {
      position: relative;
      width: 100%;
      padding-bottom: 56.25%; /* 16:9 */
      height: 0;
    }
    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
	.container{
		margin-top: 200px;
		width: 100%;
		max-width:100% !important;
		
	}
  </style>
</head>
<body>
<?php 
    require('navbar.php');
?>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="video-container">
            <iframe width="580" height="340" src="https://www.youtube.com/embed/LnkHdqlN6dA?si=MKKEsyZW7blTLIKO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="video-container">
            <iframe width="580" height="340" src="https://www.youtube.com/embed/--MJb-nMGuc?si=7IsLhR_OnPyfvNKP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="video-container">
            <iframe width="580" height="340" src="https://www.youtube.com/embed/y3R9e2L8I9E?si=SpFickh21ADHJvma" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>    </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="video-container">
            <iframe width="580" height="340" src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="video-container">
            <iframe width="580" height="340" src="https://www.youtube.com/embed/OTP6AsVsNLA?si=vpgQtUttZE3B5Os8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="video-container">
            <iframe width="580" height="340" src="https://www.youtube.com/embed/m11d3wL7qao?si=uZ3KxgjR0El51f19" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>