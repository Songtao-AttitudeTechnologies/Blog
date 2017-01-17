<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('resources/views/admin/style/css/ch-ui.admin.css')}}">
	<link rel="stylesheet" href="{{asset('resources/views/admin/style/font/css/font-awesome.min.css')}}">
	<script type="text/javascript" src="{{asset('resources/views/admin/style/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/admin/style/js/ch-ui.admin.js')}}"></script>
	<title>Home - CMS</title>
</head>
<body>
	<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">CMS</div>
			<ul>
				<li><a href="{{url('admin/index')}}" class="active">HOME</a></li>
				<li><a href="#">ADMIN</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>Welcome：admin</li>
				<li><a href="{{url('admin/pass')}}" target="main">Reset Password</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>Quick Link</h3>
                <ul class="sub_menu">
                    <li><a href="{{url('admin/add')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>Add Page</a></li>
                    <li><a href="{{url('admin/listPage')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>List Page</a></li>
                    <li><a href="{{url('admin/tab')}}" target="main"><i class="fa fa-fw fa-list-alt"></i>Tab Page</a></li>
                    <li><a href="{{url('admin/img')}}" target="main"><i class="fa fa-fw fa-image"></i>Images List</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-cog"></i>Settings</h3>
                <ul class="sub_menu">
                    <li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>System Setting</a></li>
                    <li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>System Backup</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-thumb-tack"></i>Tool Bar</h3>
                <ul class="sub_menu">
                    <li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>Icon Lib</a></li>
                    <li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery Doc</a></li>
                    <li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>Color Board</a></li>
                    <li><a href="{{url('admin/element')}}" target="main"><i class="fa fa-fw fa-tags"></i>Other Tools</a></li>
                </ul>
            </li>
        </ul>
	</div>
	<!--左侧导航 结束-->

	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->

	<!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2016. Powered By <a href="http://www.attitudetech.ie">Attitude Technologies</a>.
	</div>
	<!--底部 结束-->
</body>
</html>