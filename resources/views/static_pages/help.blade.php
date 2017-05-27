@extends('layouts.default')
@section('title', '帮助页')
@section('content')
   <h1>帮助页</h1>
   <ol>
     <li><a href="" onclick="btn1()">注册时昵称显示“已被注册”怎么办?</a></li>
     <li><a href="" onclick="btn2()">如何注册微博?</a></li>
     <li><a href="" onclick="btn3()">为什么微博账号出现了两个登录名?</a></li>
     <li><a href="" onclick="btn4()">手机注册时提示手机号已被注册?</a></li>
     <li><a href="" onclick="btn5()">蓝V认证用户希望使用的微博昵称不能注册怎么办？</a></li>
     <li><a href="" onclick="btn6()">注册时提示"你所使用的IP地址异常",该怎么办？</a></li>
   </ol>
@stop
<script>
  function btn1(){
    alert('注册微博的时候经常会提示此昵称已经被注册，但是在微博内搜索的时候却没有相关信息。造成此种现象的原因是此昵称已经有用户占用，但是该用户可能由于帐号异常暂时被系统冻结，所以在搜索时不显示，此时您需要只要重新选一个独一无二的昵称即可。对于长时间未登录微博的帐号，官方将定期清理并释放昵称，具体依情况而定')
  }
  function btn2(){
    alert('新浪网用户:如果你已有新浪帐号，如新浪博客、新浪邮箱（xxx@sina.com、xxx@sina.cn),您直接登录微博就可以使用，无需单独开通。新用户注册如果您还没有新浪帐号，则请您按照以下步骤进行微博帐号的注册：电脑上：微博登录页面点击“立即注册”进入注册页面1、邮箱注册输入常用邮箱地址，设置密码、昵称，填写相应个人资料即可。注册微博后需要激活操作：用户可以点击顶部黄签的“立即激活”进入注册邮箱，点击邮箱中的激活链接即可，如果未收到激活链接或链接已过期，可点击“重新发送确认邮件”获取链接进行激活，超过30天未激活邮箱的用户无法正常使用微博。2、手机注册输手机号码、设置密码、昵称及个人资料后，填写的手机号码会接收到验证码，输入验证码后即可注册成功。')
  }
  function btn3(){
    alert('由于你在新浪网通过微博账号登录后关联了一个新浪邮箱导致的。关联后原登录邮箱和新浪邮箱都可以登录微博账号，用户可在新浪网修改邮箱的密码。请放心微博账号不会因此出现安全隐患。')
  }
  function btn4(){
    alert('1. 如果提示手机号已被注册，建议您仔细回想是否之前注册过微博，如忘记密码可进行找回密码2. 若此手机号是您近期才使用的手机，您可以联系客服解决。')
  }
  function btn5(){
    alert('使用昵称无法注册有两种情况：1、昵称已被其他用户注册。由于系统不允许重复昵称，请您使用公司名称或者无歧义简称，或改为“xxx官博”的形式。2、昵称为防止恶意注册已被保护。建议您在被保护昵称中间添加下划线或者使用拼音代替并提交认证资料申请官方认证，认证通过后您可发送私信至官方账号@企业微博助理 申请修改微博昵称。')
  }
  function btn6(){
    alert('出现注册失败现象的原因可能是由于您的浏览器禁止了cookie，您可以通过设置浏览器可记录cookie的办法解决此问题。设置方法：点击IE浏览器的工具-internet选项-隐私 将级别设置为中,设置成功后再重新注册。其他主流浏览器设置cookie办法请点击查看')
  }
</script>
