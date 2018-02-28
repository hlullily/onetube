// JavaScript Document
		function picChange(dx)
		{
			document.getElementById('pic1').style.backgroundColor="rgba(30,144,255,0.5)";
			document.getElementById('pic2').style.backgroundColor="rgba(30,144,255,0.5)";
			document.getElementById('pic3').style.backgroundColor="rgba(30,144,255,0.5)";
			document.getElementById('pic4').style.backgroundColor="rgba(30,144,255,0.5)";
			document.getElementById('pic5').style.backgroundColor="rgba(30,144,255,0.5)";
			document.getElementById('pic6').style.backgroundColor="rgba(30,144,255,0.5)";
			document.getElementById('pic7').style.backgroundColor="rgba(30,144,255,0.5)";
			
			dx.style.backgroundColor="rgba(30,44,255,0.5)";
			
//			document.getElementById('tittle').innerHTML=dx.getAttribute('introduce');//这是替换文字内容的语句
//			document.getElementById('tittle').style.color=dx.getAttribute('name');//这是替换文字颜色的语句
	
			document.getElementById('pic').setAttribute("src",dx.getAttribute('picture'));
		}