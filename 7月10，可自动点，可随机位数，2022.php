

<button  style="font-size:88px;color:#FF0000" onclick="myFunction1()" id='mybtn'>前区能自动点击按钮</button>  

<script>


window.onload=function(){
    
    


    var x="",i=0;
    
    var y=Math.floor(Math.random()*20+0); 



    while (i<y){

        x=x + "被点击了 " + i + "<br>";

        i++;

    

document.getElementById('mybtn').click();

}
}


function myFunction1(){
alert('按钮被点击啦'); 
}
</script>




