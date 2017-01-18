@extends('layouts.admin')
@section('content')
	<!--面包屑导航 开始-->
	<div class="crumb_warp">
		<!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
		<i class="fa fa-home"></i> <a href="#">Home</a> &raquo; System Info
	</div>
	<!--面包屑导航 结束-->
	
	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>Quick Link</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>New Article</a>
                <a href="#"><i class="fa fa-recycle"></i>Multiple Delete</a>
                <a href="#"><i class="fa fa-refresh"></i>Update Sort</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

	
    <div class="result_wrap">
        <div class="result_title">
            <h3>System Information</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>Operating System</label><span>WINNT</span>
                </li>
                <li>
                    <label>Environment</label><span>Apache/2.2.21 (Win64) PHP/5.3.10</span>
                </li>
                <li>
                    <label>PHP Version</label><span>apache2handler</span>
                </li>
                <li>
                    <label>System Version</label><span>v-0.1</span>
                </li>
                <li>
                    <label>Upload Limit</label><span>2M</span>
                </li>
                <li>
                    <label>Local Time</label><span>2014年3月18日 21:08:24</span>
                </li>
                <li>
                    <label>Web Server</label><span>localhost [ 127.0.0.1 ]</span>
                </li>
                <li>
                    <label>Host</label><span>127.0.0.1</span>
                </li>
            </ul>
        </div>
    </div>


    <div class="result_wrap">
        <div class="result_title">
            <h3>User Manual</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>Website：</label><span><a href="http://www.attitudetech.ie">http://www.attitudetech.ie</a></span>
                </li>
                <li>
                    <label>Technical Support：</label><span>songtao@attitudetech.ie</span>
                </li>
            </ul>
        </div>
    </div>
	<!--结果集列表组件 结束-->
@endsection