
//代码片段


.after随机加入

随机替换.val

$("#"+xaabb).val(Math.floor(Math.random()*35+1)+y2);
 

改成

$("#"+xaabb).after(Math.floor(Math.random()*35+1)+y2);



改成

随机加入.after


$("#a1").after("+"+Math.floor(Math.random()*35+1));



//代码片段
 
var colorsaabb = ['a1','b1'];


var xaabb = colorsaabb[(Math.floor(Math.random() * (colorsaabb.length)))]


$("#"+xaabb).after("+"+Math.floor(Math.random()*12+1));
 

$("#a").attr('id','b1');

$("#b").attr('id','a1');



