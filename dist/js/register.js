"use strict";$(function(){var n=[];function s(){var s=new Array("1","2","3","4","5","6","7","8","9","0","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"),o="";for(i=0;i<4;i++){o+=s[parseInt(Math.random()*s.length)]}$(".obtain").html(o)}function e(){var s=cookie.get("name"),o=cookie.get("psw");console.log(s),s?($(".login").css("display","none"),$(".tuichu").css("display","block"),$(".yon1").html(o)):"null"==s&&($(".login").css("display","none"),$(".tuichu").css("display","block"))}$("#phoneNum2").on("focus",function(){$(".megTip6").css({display:"block"}),$(".success6").css({display:"none"})}),$("#phoneNum2").on("blur",function(){$(this).val().trim()?($(".megTip6").css({display:"none",color:"green"}),$(".success6").css({display:"block"}),n.push(1)):($(".megTip6").css({display:"none",color:"red"}),$(".success6").css({display:"none"}))}),$("#password2").on("focus",function(){$(".megTip7").css({display:"block"}),$(".success7").css({display:"none"})}),$("#password2").on("blur",function(){$(this).val().trim()?($(".megTip7").css({display:"none"}),$(".success7").css({display:"block"}),n.push(1)):($(".megTip7").css({display:"none",color:"red"}),$(".success7").css({display:"none"}))}),s(),$(".obtainBtn").on("click",function(){s()}),$("#authCode").on("focus",function(){$(".megTip8").css({display:"block"}),$(".success8").css({display:"none"})}),$("#authCode2").on("blur",function(){var s=$("#authCode2").val().trim().toUpperCase(),o=$(".obtain").text().toUpperCase();s?s==o?($(".megTip8").css({display:"none"}),$(".success8").css({display:"block"}),n.push(1)):($(".megTip8").css({display:"block",color:"red"}),$(".megTip8 span").html("验证码错误"),$(".success8").css({display:"none"})):($(".megTip8").css({display:"block",color:"red"}),$(".megTip8 span").html("验证码不能为空"),$(".success8").css({display:"none"}))}),$(".registBtn").on("click",function(){var o=$("#phoneNum2").val().trim(),c=$("#password2").val().trim();console.log(o,c),3==n.length&&$.ajax({type:"post",data:"name="+o+"&psw="+c,url:"../api/register.php",success:function(s){console.log(s),"yes"==s?(alert("登录成功"),cookie.set("name",o,{path:"/"}),cookie.set("psw",c,{path:"/"}),e(),window.location.href="../inde.html",$("#authCode2").val("")):"no"==s&&(alert("账号或密码错误"),window.location.href="register.html")}})}),e(),$(".tuichu").on("click","a",function(){alert("您确定要退出么？"),cookie.set("name","",-1),cookie.set("psw","",-1),e(),window.location.href="../html/register.html"})});