		  //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
        $(function () {
            $(window).scroll(function(){
				
                if ($(window).scrollTop()>200){
                    $("#back-to-top").fadeIn(800);
                }
                else
                {
                    $("#back-to-top").fadeOut(800);
                }
				
            });
 
            //当点击跳转链接后，回到页面顶部位置
 
            $("#back-to-top").click(function(){
                $('body,html').animate({scrollTop:0},200);
				$("back-to-top").animate({"opacity":"-=0.2"},50);
				$("back-to-top").animate({"background-color":"blue"},100);
                return false;
            });
        });