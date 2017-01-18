@extends('layouts.admin')
    @section('content')
    <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">Home</a> &raquo; Reset Password
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>Reset Password</h3>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form method="post" onsubmit="return changePass()">
        <input type="hidden" name="_token" value="X25wGVjFqDXvq7vAUAJTjTAHfX0RhkGufucRdzGh">
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>Password</th>
                <td>
                    <input type="password" name="password_o"> </i>Please Type in Your Original Password </span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>New Password</th>
                <td>
                    <input type="password" name="password"> </i>Your Password Must between 6-20 Characters</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>Confirm</th>
                <td>
                    <input type="password" name="password_c"> </i>Please Confirm Your New Password</span>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="Submit">
                    <input type="button" class="back" onclick="history.go(-1)" value="Back">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection