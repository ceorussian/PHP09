<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
    <link rel="stylesheet" href="../public/css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Login</title>
</head>
<style type="text/css">
body {
    width: 800px;
    margin: 30px auto;
    background: #eee url('../public/img/bg_1.png');
}
#top {
    background-image: url("../public/img/content_bg.png");
    height: 60px;
    line-height: 60px;
    padding: 0px 20px;
    font-size: 16px;
    color: #eee;
    font-weight: bold;
    /** Thêm CSS 3.0 **/
    border-radius: 5px 5px 0px 0px;
    -moz-border-radius: 5px 5px 0px 0px;
    -webkit-border-radius: 5px 5px 0px 0px;
}
#bottom{
    line-height: 40px;
    height: 40px;
    color: #aaa;
    background-image: url("../public/img/content_bg.png");
    text-align: center;
    /** Thêm CSS 3.0 **/
    border-radius: 0px 0px 5px 5px;
    -moz-border-radius: 0px 0px 5px 5px;
    -webkit-border-radius: 0px 0px 5px 5px;
}
</style>
<body>
<div id="layout">
    <div id="top">
        Computer  Shop :: Login
    </div>
    <div id="main">        
		<form action="{{ url('login') }}" method="post" style="width: 650px; margin: 30px auto;">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
                <legend>Thông Tin Đăng Nhập</legend>                
				<table>
                    <tr>
                        <td class="login_img"></td>
                        <td>
                            <span class="form_label">Username:</span>
                            <span class="form_item">
                                <input type="email" name="email" class="textbox" />
                            </span><br /><br>
                            <span class="form_label">Password:</span>
                            <span class="form_item">
                                <input type="password" name="password" class="textbox" />
                            </span><br /><br>
                            <span class="form_label"></span>
                            <span class="form_item">
                                <input type="submit" name="btnLogin" value="Đăng nhập" class="button" />
                            </span>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <div id="bottom">
        Copyright © 2017 by Nguyễn Văn Phong and Hoàng Thế Quang 
    </div>
</div>
@include('block.error')
</body>
</html>