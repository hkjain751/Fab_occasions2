<!---- Complete gallery Work Done By Hardik Jain ---->
<!--Start Gallery-->
<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Overlock">
<style type="text/css">
.gallerycontainer{
position: relative;
font-family: 'Overlock',cursive;
/*Add a height attribute and set to largest image's height to prevent overlaying*/
}
.thumbnailgly img{
border: 2px solid white;
margin: 5px 5px 5px 5px;
width: 30% !important;
height: 26% !important;
}
.thumbnailgly:hover{
background-color: transparent;
}
.thumbnailgly:hover img{
border: 2px solid rgb(244,72,58);
}
.thumbnailgly span{ /*CSS for enlarged image*/
position: absolute;
background-color: #eee;
padding: 5px;
left: -1000px;
border: 1px solid gray;
visibility: hidden;
color: black;
text-decoration: none;
}
.thumbnailgly span img{ /*CSS for enlarged image*/
border-width: 0;
padding: 5px;
width: 560px !important;
height: 500px !important;
}
.thumbnailgly:hover span{ /*CSS for enlarged image*/

visibility: visible;
top: 10px !important;
left:-78% !important; /*position where enlarged image should offset horizontally */
z-index: 50;
}
.colum111 {
	float: left;
    padding: 10px;
}
.left111 {
	width: 42%;
}
.right111 {
  width: 54%;
  align-items: center;
}
.nofloat{
	float: none;
	margin-bottom: 800px;
}

</style>

</head>
<body>
	<center>
		<p style="font-family: 'Overlock', cursive; font-size: 35px; padding-top: 5px; margin-top: 10px; margin-bottom: 0px;">
			<span style="color: rgb(244, 72, 58);">&mdash;</span> Our 
			<span style="color: rgb(244, 72, 58);">Gallery </span>
			<span style="color: rgb(244, 72, 58);">&mdash;</span>
		</p>
		<img src="resources/img/t11.png" alt="" height="80px" width="300px" style="margin-top: 2px;">
	</center>
	<br>
	<div class="nofloat">
		<div class="colum111 left111">
			<img src="resources/img/d1.jpg" width="100%" style="margin-top: 30px;">
			<p style="margin: 20px 0px 20px 50px !important; width: 80%; font-family: 'Overlock',cursive; font-size: 24px;">As far as my opinion on galleries, I think they are a great thing .I see them as another outlet. I'm sure by now you've figured out that I do my work for everybody to see. That's the whole point
			</p>
			<img src="resources/img/d2.jpg" width="100%" >
		</div>
		<div class="colum111 right111">	
			<div class="gallerycontainer">
				<center>
				<a class="thumbnailgly" href="#thumb"><img src="getGalleryimg.php?id=1" border="0"  /><span><img src="getGalleryimg.php?id=1" /><br />Simply beautiful.</span></a>

				<a class="thumbnailgly" href="#thumb"><img src="getGalleryimg.php?id=2" border="0" /><span><img src="getGalleryimg.php?id=2" /><br />So real, it's unreal. Or is it?</span></a>

				<a class="thumbnailgly" href="#thumb"><img src="getGalleryimg.php?id=3" border="0" /><span><img src="getGalleryimg.php?id=3" /><br />Sushi for dinner anyone?</span></a> 

				<br />

				<a class="thumbnailgly" href="#thumb"><img src="getGalleryimg.php?id=4" border="0" /><span><img src="getGalleryimg.php?id=4" /><br />Sushi for dinner anyone?</span></a> 

				<a class="thumbnailgly" href="#thumb"><img src="getGalleryimg.php?id=5" border="0" /><span><img src="getGalleryimg.php?id=5" /><br />Run wild with horses.</span></a>

				<a class="thumbnailgly" href="#thumb"><img src="getGalleryimg.php?id=6" border="0" /><span><img src="getGalleryimg.php?id=6" /><br />Simply beautiful.</span></a>

				<br />
				<a class="thumbnailgly" href="#thumb"><img src="getGalleryimg.php?id=7" border="0" /><span><img src="getGalleryimg.php?id=7" /><br />Sushi for dinner anyone?</span></a> 

				<a class="thumbnailgly" href="#thumb"><img src="getGalleryimg.php?id=8" border="0" /><span><img src="getGalleryimg.php?id=8" /><br />Run wild with horses.</span></a>

				<a class="thumbnailgly" href="#thumb"><img src="getGalleryimg.php?id=9" border="0" /><span><img src="getGalleryimg.php?id=9" /><br />Simply beautiful.</span></a>
				<br />
				<!-- <a class="thumbnailgly" href="#thumb">Dynamic Drive<span><img src="resources/img/15.png" /><br />Learn More</span></a> -->
				<br />
			</center>
		</div>
	</div>
</div>
</body>
</html>
<!-- End Gallery -->
<!-- Complete Gallery Work Done By Hardik Jain -->