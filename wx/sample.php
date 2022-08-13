<?php
require_once("jssdk.php");
$jssdk = new JSSDK("wxb21351851521c170", "0d7caf3b82be749c4728394d3f29f524");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<head>
  <meta charset="UTF-8">
  <title></title>
  	<style>html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-webkit-user-select:none;user-select:none;}body{line-height:1.6;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;background-color:#f1f0f6;}*{margin:0;padding:0;}button{font-family:inherit;font-size:100%;margin:0;*font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;}ul,ol{padding-left:0;list-style-type:none;}a{text-decoration:none;}.label_box{background-color:#ffffff;}.label_item{padding-left:15px;}.label_inner{padding-top:10px;padding-bottom:10px;min-height:24px;position:relative;}.label_inner:before{content:" ";position:absolute;left:0;top:0;width:200%;height:1px;border-top:1px solid #ededed;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.5);transform:scale(0.5);top:auto;bottom:-2px;}.lbox_close{position:relative;}.lbox_close:before{content:" ";position:absolute;left:0;top:0;width:200%;height:1px;border-top:1px solid #ededed;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.5);transform:scale(0.5);}.lbox_close:after{content:" ";position:absolute;left:0;top:0;width:200%;height:1px;border-top:1px solid #ededed;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.5);transform:scale(0.5);top:auto;bottom:-2px;}.lbox_close .label_item:last-child .label_inner:before{display:none;}.btn{display:block;margin-left:auto;margin-right:auto;padding-left:14px;padding-right:14px;font-size:18px;text-align:center;text-decoration:none;overflow:visible;height:42px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;color:#ffffff;line-height:42px;-webkit-tap-highlight-color:rgba(255,255,255,0);}.btn.btn_inline{display:inline-block;}.btn_primary{background-color:#04be02;}.btn_primary:not(.btn_disabled):visited{color:#ffffff;}.btn_primary:not(.btn_disabled):active{color:rgba(255,255,255,0.9);background-color:#039702;}button.btn{width:100%;border:0;outline:0;-webkit-appearance:none;}button.btn:focus{outline:0;}.wxapi_container{font-size:16px;}h1{font-size:14px;font-weight:400;line-height:2em;padding-left:15px;color:#8d8c92;}.desc{font-size:14px;font-weight:400;line-height:2em;color:#8d8c92;}.wxapi_index_item a{display:block;color:#3e3e3e;-webkit-tap-highlight-color:rgba(0,0,0,0);}.wxapi_form{background-color:#ffffff;padding:0 15px;margin-top:30px;padding-bottom:15px;}h3{padding-top:16px;margin-top:25px;font-size:16px;font-weight:400;color:#3e3e3e;position:relative;}h3:first-child{padding-top:15px;}h3:before{content:" ";position:absolute;left:0;top:0;width:200%;height:1px;border-top:1px solid #ededed;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scale(0.5);transform:scale(0.5);}.btn{margin-bottom:15px;}</style>
</head>
<body>
  
  <div class="wxapi_container">
 
    <div class="lbox_close wxapi_form">
     


    
      <h3 id="menu-voice">音频接口</h3>
      <span class="desc">开始录音接口</span>
      <button class="btn btn_primary" id="startRecord">startRecord</button>
      <span class="desc">停止录音接口</span>
      <button class="btn btn_primary" id="stopRecord">stopRecord</button>
      <span class="desc">播放语音接口</span>
      <button class="btn btn_primary" id="playVoice">playVoice</button>
      <span class="desc">暂停播放接口</span>
      <button class="btn btn_primary" id="pauseVoice">pauseVoice</button>
      <span class="desc">停止播放接口</span>
      <button class="btn btn_primary" id="stopVoice">stopVoice</button>
      <span class="desc">上传语音接口</span>
      <button class="btn btn_primary" id="uploadVoice">uploadVoice</button>
      <span class="desc">下载语音接口</span>
      <button class="btn btn_primary" id="downloadVoice">downloadVoice</button>

      <h3 id="menu-location">地理位置接口</h3>
      <span class="desc">使用微信内置地图查看位置接口</span>
      <button class="btn btn_primary" id="openLocation">openLocation</button>
      <span class="desc">获取地理位置接口</span>
      <button class="btn btn_primary" id="getLocation">getLocation</button>


    </div>
  </div>
  
</body>
<script src="https://res.wx.qq.com/open/js/jweixin-1.6.0.js"></script>
	<script>


    wx.config({
        debug: false,
        // debug: true,
       appId: '<?php echo $signPackage["appId"];?>',
        timestamp: <?php echo $signPackage["timestamp"];?>,
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature: '<?php echo $signPackage["signature"];?>',
        jsApiList: [
        'checkJsApi',
         'startRecord',
         'playVoice',
         'stopRecord',
         'uploadVoice',
        'downloadVoice',
         'translateVoice',
        'getNetworkType',
      ]
    });
</script>
<script>
/*
* 注意：
* 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
* 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
* 3. 完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
*
* 如有问题请通过以下渠道反馈：
* 邮箱地址：weixin-open@qq.com
* 邮件主题：【微信JS-SDK反馈】具体问题
* 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
*/
wx.ready(function() {
    // 1 判断当前版本是否支持指定 JS 接口，支持批量判断
   
    // 2. 分享接口

    

    // 3 智能接口
    var voice = {
        localId: '',
        serverId: ''
    };
    var voices = {
        localId: [],
        serverId: [],
        guid: []
    };

    // 4 音频接口
    // 4.2 开始录音
    document.querySelector('#startRecord').onclick = function() {
        wx.startRecord({
            success: function(res) {
               alert('开始录音');
            },
            cancel: function() {
                alert('用户拒绝授权录音');
            }
        });
    };

    // 4.3 停止录音
    document.querySelector('#stopRecord').onclick = function() {
        wx.stopRecord({
            success: function(res) {
                voices.localId.push(res.localId);
            },
            fail: function(res) {
            }
        });
    };

    // 4.4 监听录音自动停止（超时一分钟），自动执行下次录音
    wx.onVoiceRecordEnd({
        complete: function(res) {
            voices.localId.push(res.localId);
            //重新调用录音
            wx.startRecord({
                cancel: function() {
                    alert('用户拒绝授权录音');
                }

            });

        }

    });

    // 4.5 播放音频
    document.querySelector('#playVoice').onclick = function() {
        alert(voices.localId.length)
        if (voice.localId == '') {
            alert('请先使用 startRecord 接口录制一段声音');
            return;
        }
        wx.playVoice({
            localId: voice.localId
        });
    };

    // 4.6 暂停播放音频
    document.querySelector('#pauseVoice').onclick = function() {
        wx.pauseVoice({
            localId: voice.localId
        });
    };

    // 4.7 停止播放音频
    document.querySelector('#stopVoice').onclick = function() {
        wx.stopVoice({
            localId: voice.localId
        });
    };

    // 4.8 监听录音播放停止
    wx.onVoicePlayEnd({
        complete: function(res) {
            alert('录音（' + res.localId + '）播放结束');
        }
    });

    // 4.8 上传语音
    var guids = '';
    document.querySelector('#uploadVoice').onclick = function() {
        if (voices.localId.length == 0) {
            alert('请先使用 startRecord 接口录制一段声音');
            return;
        }
        var i = 0, length = voices.localId.length;
        voices.serverId = [];
        function uploadVoice() {
            wx.uploadImage({
                localId: voices.localId[i],
                isShowProgressTips: 0,
                success: function(res) {
                    i++;
                    voices.serverId.push(res.serverId);
                    //获取自己站点下的url
                    
					alert(res.serverId);
					
					  $.ajax({
                        url: '/weixin/ajax/ajax_weixin.aspx',
                        type: 'GET',
                        dataType: 'text',
                        data: { os: '46', id: 1, token: access_token, mid: res.serverId, type: 2 },
                        cache: false,
                        timeout: 50000,
                        error: function() {
                            alert('上传失败')
                        },
                        success: function(data) {
                            if (data != "") {
                                voices.guid.push(data);
                                guids += data + ',';
                            }
                            if (i < voices.localId.length) {
                                uploadVoice();
                            }
                            else {
                                //合并录音
                                $.ajax({
                                    url: '/weixin/ajax/ajax_weixin.aspx',
                                    type: 'GET',
                                    dataType: 'text',
                                    data: { os: '52', id: 1,guids:guids },
                                    cache: false,
                                    timeout: 50000,
                                    error: function() {
                                        alert('合并失败')
                                    },
                                    success: function(data) {
                                        document.write(data)
                                    }
                                });
                            }
                        }
                    });

					
					
					
					
					
					
                },
                fail: function(res) {
                    alert(JSON.stringify(res));
                }
            });
        }
        uploadVoice();


    };

    // 4.9 下载语音
    document.querySelector('#downloadVoice').onclick = function() {
        if (voice.serverId == '') {
            alert('请先使用 uploadVoice 上传声音');
            return;
        }
        wx.downloadVoice({
            serverId: voice.serverId,
            success: function(res) {
                alert('下载语音成功，localId 为' + res.localId);
                voice.localId = res.localId;
            }
        });
    };

  

    
});

wx.error(function(res) {
    alert(res.errMsg);
});



</script>	
</html>
