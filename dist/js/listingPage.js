"use strict";$(function(){function e(a,s,i,n){$.ajax({type:"post",data:"numm="+a+"&pages="+s+"&shu="+i+"&paixu="+n,url:"../api/num.php",success:function(a){var s=JSON.parse(a),n="";$.each(s,function(a,s){var i='<li class="listother" style="height: 380px" data-id=\''+s.number+'\'>\n                            <div class="listotherImg"><a href="javascript:void(0)"><img src="'+s.img+'" alt=""></a></div>\n                            <div class="booksInfo">\n                                <h3><a href="javascript:void(0)">'+s.name+'</a></h3>\n                                <div class="listotherAut">\n                                    <span>'+s.writer+"</span>\n                                    <span>"+s.press+'</span>\n                                </div>\n                                <div class="buyPir">\n                                    <div class="onwPir">\n                                        ￥\n                                        <span style="font-size: 22px;font-weight: 700">'+s.pir+'</span>\n                                        <i>包邮</i>\n                                    </div>\n                                    <div class="agoPir">\n                                        定价￥\n                                        <span>'+s.agoPir+'</span>\n                                    </div>\n                                </div>\n                                <div class="buyBtn">\n                                    <a href="javascript:void(0)">加入购物车</a>\n                                </div>\n                            </div>\n                        </li>';n+=i,$(".listMain ul").html(n)})}})}$.ajax({type:"post",data:"page=1&num=12",url:"../api/colours.php",success:function(a){var s=JSON.parse(a),n="";$.each(s.data,function(a,s){var i='<li class="listother" style="height: 380px" data-id=\''+s.number+'\'>\n                            <div class="listotherImg"><a href="javascript:void(0)"><img src="'+s.img+'" alt=""></a></div>\n                            <div class="booksInfo">\n                                <h3><a href="javascript:void(0)">'+s.name+'</a></h3>\n                                <div class="listotherAut">\n                                    <span>'+s.writer+"</span>\n                                    <span>"+s.press+'</span>\n                                </div>\n                                <div class="buyPir">\n                                    <div class="onwPir">\n                                        ￥\n                                        <span style="font-size: 22px;font-weight: 700">'+s.pir+'</span>\n                                        <i>包邮</i>\n                                    </div>\n                                    <div class="agoPir">\n                                        定价￥\n                                        <span>'+s.agoPir+'</span>\n                                    </div>\n                                </div>\n                                <div class="buyBtn">\n                                    <a href="javascript:void(0)">加入购物车</a>\n                                </div>\n                            </div>\n                        </li>';n+=i,$(".listMain ul").html(n)});for(var i=Math.ceil(s.total/s.num),t="",r=0;r<i;r++)t+="<span>"+(r+1)+"</span>";$(".page").html(t),$(".page span").first().attr("class","atv"),$(".page").on("click","span",function(){$(this).attr("class","atv").siblings().attr("class","");e("number",$(this).text(),12,"")})}}),$(".listMain ul ").on("click",".listotherImg",function(){var a=$(this).parent().attr("data-id");localStorage.setItem("state",a),window.location.href="detailsPage.html"});var a=!0;$(".sortBtn ul").on("click",".xiaolian",function(){var s,i="num";a?(e(i,1,12,s="desc"),$(".page").on("click","span",function(){$(this).attr("class","atv").siblings().attr("class","");var a=$(this).text();e(i,a,12,s)}),a=!1):(e(i,1,12,s=""),$(".page").on("click","span",function(){$(this).attr("class","atv").siblings().attr("class","");var a=$(this).text();e(i,a,12,s)}),a=!0)});var n=!0;$(".sortBtn ul").on("click",".jiage",function(){var s="pir";if(n){e(s,1,12,i="desc"),n=!0;var i="desc";$(".page").on("click","span",function(){$(this).attr("class","atv").siblings().attr("class","");var a=$(this).text();console.log(n),console.log(a),e(s,a,12,i)})}else if(0==n){e(s,1,12,i=""),n=!1;i="";$(".page").on("click","span",function(){$(this).attr("class","atv").siblings().attr("class","");var a=$(this).text();console.log(n),console.log(a),e(s,a,12,i)})}n=!n}),$(".listMain ul ").on("click",".buyBtn",function(){var n=$(this).parent().parent().attr("data-id");$.ajax({type:"post",data:"dataId="+n,url:"../api/panduan.php",success:function(a){var s=JSON.parse(a);if(s[0]){var i=1*s[0].shu+1;$.ajax({type:"post",data:"dis="+s[0].number+"&shu="+i,url:"../api/addcut.php",success:function(a){window.location.href="shopping.html"}})}else $.ajax({type:"post",data:"dataId="+n,url:"../api/inquire.php",success:function(a){var s=JSON.parse(a);$.ajax({type:"post",data:"id="+s[0].id+"&img="+s[0].img+"&num="+s[0].num+"&pir="+s[0].pir+"&agoPir="+s[0].agoPir+"&writer="+s[0].writer+"&press="+s[0].press+"&date="+s[0].date+"&name="+s[0].name+"&number="+s[0].number+"&shu=1",url:"../api/shopping2.php",success:function(a){window.location.href="shopping.html"}})}})}})})});