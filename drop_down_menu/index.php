<html>
<head>
<script src="/common/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script type='text/javascript'>
$(function(){
    $("ul.sub").hide();
    $("ul.menu li").hover(function(){
            $("ul.sub:not(:animated)", this).slideDown("fast")
        },
        function(){
            $("ul.sub:not(:animated)", this).slideUp("fast");
    })
})

</script>
<style type="text/css">
*{
	margin:0;
	padding:0;
	list-style-type:none;
}

#container{
	margin:100px auto;
	width:537px; 
}

ul.menu li{
	float:left;
	width:179px;
	height:48px;
	background:url("images/btn.png");
	position:relative;
}
ul.menu li a{
	display:block;
	width:100%;
	height:100%;
	line-height:48px;
	text-indent:30px;
	font-weight:bold;
	color:#CFDFB5;
	text-decoration:none;
}
ul.menu li a:hover{
	background:url("images/btn_over.png");
}
ul.menu li ul.sub{
	position:absolute;
}
ul.menu{
	zoom:1;
}
ul.menu:after {
	height:0;
	visibility:hidden;
	content:".";
	display:block;
	clear:both;
}
</style>
</head>

<body>
<div id="container">
	<ul class="menu">
		<li><a href="javascript:void(0);">メニューA</a>
			<ul class="sub">
				<li><a href="#">サブメニューA</a></li>
				<li><a href="#">サブメニューA</a></li>
				<li><a href="#">サブメニューA</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0);">メニューB</a>
			<ul class="sub">
				<li><a href="#">サブメニューB</a></li>
				<li><a href="#">サブメニューB</a></li>
				<li><a href="#">サブメニューB</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0);">メニューC</a>
			<ul class="sub">
				<li><a href="#">サブメニューC</a></li>
				<li><a href="#">サブメニューC</a></li>
				<li><a href="#">サブメニューC</a></li>
			</ul>
		</li>
	</ul>
</div>
</body>
</html>