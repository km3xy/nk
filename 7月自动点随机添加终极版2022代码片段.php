8
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
      
      
var colors = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7' ,'8','9'];


var x = colors[(Math.floor(Math.random() * (colors.length)))]

      
      //+x   id名字变量  随机id添加数据
      
    $("#"+x).append(" <b>+s0</b>。");
  });

  $("#btn2").click(function(){
    $("ol").append("<li>追加列表项</li>");
  });
});
</script>

//片段2

  <div data-role="page">
      
<p>这是一个段落。</p>
<p>这是另外一个段落。</p>
<ol>
<li>List item 1</li>
<li>List item 2</li>
<li>List item 3</li>
</ol>
<button id="btn1">添加文本</button>
<button id="btn2">添加列表项</button>
  
<div data-role="header">


<button  style="font-size:88px;color:#FF0000" onclick="function()" id='btn1'>前区能自动点击按钮</button>  



//片段3
<script>


window.onload=function(){
    
    
    
    
var x="",i=0;

    //随机点击次数
    
    var y=Math.floor(Math.random()*35+0); 


    //随机点击次数

    while (i<y){

        x=x + "被点击了 " + i + "<br>";

        i++;

    

document.getElementById('btn1').click();

  
   }


   }
    
    
    




function  myFunction1(){
alert('按钮被点击啦'); 

    
}

</script>






//片段4
      
    <label>
     
  <input type="checkbox" name="a[1+]" id="abc" value="1">1=<h3 style="color:#" id="a"></h3>


 </label>






