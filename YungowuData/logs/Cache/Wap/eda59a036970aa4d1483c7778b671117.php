<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0065)http://www.apiwx.com/wxapi.php?ac=cate13&tid=25048&c=fromUsername -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title><?php echo ($tpl["wxname"]); ?></title>
<!--<base href="http://www.apiwx.com/">--><base href=".">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="<?php echo RES;?>/css/allcss/cate<?php echo ($tpl["tpltypeid"]); ?>_<?php echo ($tpl["color_id"]); ?>.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/116/iscroll.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo RES;?>/css/flash/css/plugmenu.css">
<style>
  

</style>
<script src="<?php echo RES;?>/css/106/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/106/idangerous.swiper.js" type="text/javascript"></script>
        <script src="<?php echo RES;?>/css/106/iscroll.js" type="text/javascript"></script>
<script type="text/javascript">
var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
 
 
}

document.addEventListener('DOMContentLoaded', loaded, false);
</script>
 
<script type="text/javascript" src="chrome-extension://bfbmjmiodbnnpllbbbfblcplfjjepjdn/js/injected.js"></script></head>

<body id="cate13">
<div class="banner">
<div id="wrapper" style="overflow: hidden;">
<div id="scroller" style="width: 2152px; -webkit-transition: 0ms; transition: 0ms;">

				<ul id="thelist"> 
				<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><p><?php echo ($so["info"]); ?></p><a href="<?php echo ($so["url"]); ?>"><img src="<?php echo ($so["img"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>

</div>
</div>
<div id="nav">
<div id="prev" onclick="myScroll.scrollToPage(&#39;prev&#39;, 0,400,2);return false">← prev</div>
			<ul id="indicator">
			<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li   <?php if($i == 1): ?>class="active"<?php endif; ?>  ><?php echo ($i); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
			 
			</ul>
<div id="next" onclick="myScroll.scrollToPage(&#39;next&#39;, 0);return false">next →</div>
</div>
<div class="clr"></div>
</div>
 
 <div id="insert1"></div>

 <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(!isset($_GET['classid']) && $vo['pid'] == 0): ?><div class="Category">

<div class="cname"><a href="<?php echo U('Wap/Index/index',array('classid'=>$vo['id'],'token'=>$vo['token']));?>" class="more">查看更多</a><?php echo ($vo["name"]); ?></div>
    <div class="clist clist1 swiper-container">
<div class="swiper-wrapper" style="width: 100%; transition: 0s; -webkit-transition: 0s; -webkit-transform: translate3d(0px, 0px, 0px);">
    <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 100%;">
<ul>
      
     <?php if(is_array($info2)): $i = 0; $__LIST__ = $info2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zo): $mod = ($i % 2 );++$i; if($zo['pid'] != 0 && $zo['pid'] == $vo['id']): ?><li><a href="<?php if($zo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$zo['id'],'token'=>$zo['token'])); else: echo (htmlspecialchars_decode($zo["url"])); endif; ?>"><div><img src="<?php echo ($zo["img"]); ?>"></div><span><?php echo ($zo["name"]); ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>
</div>
 <script>
$(function(){
new Swiper('.clist1',{
 followFinger:false
  });
});
</script>
    </div>
</div>


<?php else: ?>


<?php if($vo['id'] == $_GET['classid']): ?><div class="Category">

<div class="cname"><a href="javascript:history.go(-1);" class="more">返回</a><?php echo ($vo["name"]); ?></div>
 <div class="clist clist1 swiper-container">
<div class="swiper-wrapper" style="width: 100%; transition: 0s; -webkit-transition: 0s; -webkit-transform: translate3d(0px, 0px, 0px);">
    <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 100%;">
<ul>
 
	 <?php if(is_array($info2)): $i = 0; $__LIST__ = $info2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xo): $mod = ($i % 2 );++$i; if($xo['pid'] == $_GET['classid']): ?><li><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$xo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>"><div><img src="<?php echo ($xo["img"]); ?>"></div><span><?php echo ($vo["name"]); ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>
</div>
 <script>
$(function(){
new Swiper('.clist1',{
 followFinger:false
  });
});
</script>
    </div>
</div><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>


 	


<script>


var count = document.getElementById("thelist").getElementsByTagName("img").length;	


for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}

document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";


 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );

window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}

 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
} 

</script>
 <div id="insert2"></div>
<div style="display:none"> </div>

<script type="text/javascript">
 	        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {  
           "imgUrl": "", 
            "timeLineLink": "http://www.apiwx.com/wxapi.php?ac=cate13&tid=25048&from=app",
            "sendFriendLink": "http://www.apiwx.com/wxapi.php?ac=cate13&tid=25048&from=app",
            "weiboLink": "http://www.apiwx.com/wxapi.php?ac=cate13&tid=25048&from=app",
            "tTitle": "",
            "tContent": "",
            "fTitle": "",
            "fContent": "",
            "wContent": "" 
        };
        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
            WeixinJSBridge.invoke('sendAppMessage', { 
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.sendFriendLink,
                "desc": window.shareData.fContent,
                "title": window.shareData.fTitle
            }, function (res) {
                _report('send_msg', res.err_msg);
            })
        });

        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function (argv) {
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.timeLineLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function (res) {
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink,
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
        }, false)
    </script>
 

</body></html>