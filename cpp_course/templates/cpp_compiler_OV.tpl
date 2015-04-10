<!DOCTYPE html>
<html>


{include file="config_css.tpl"}

{include file='header.tpl'}


<script language="javascript" type="text/javascript">
$(document).ready(function(){


var initial_code_str ='#include <iostream>  //Basic library\r' +
'#include <cstdlib>  //system("pause")\r' +
'using namespace std;\r\r'+
'int main(){ \r\r\r' +
'\tcout << "Hello World";\r\r\r' + 
'\tsystem("pause");\r'+
'\treturn 0;\r'+
'}';

 $("#t1").text(initial_code_str);


  $("textarea").keydown(function(e) {
      if(e.keyCode === 9) { // tab was pressed
          // get caret position/selection
          var start = this.selectionStart;
              end = this.selectionEnd;

          var $this = $(this);

          // set textarea value to: text before caret + tab + text after caret
          $this.val($this.val().substring(0, start)
                      + "\t"
                      + $this.val().substring(end));

          // put caret at right position again
          this.selectionStart = this.selectionEnd = start + 1;

          // prevent the focus lose
          return false;
      }
  });


});

  // line 17-56 設定編寫程式的動態行數的程式碼
  var num="";
  
  function G(objid){
    return document.getElementById(objid);
  }

  function keyUp(){
    
    var obj=G("t1");
    var str=obj.value; 
    str=str.replace(/\r/gi,"");
    str=str.split("\n");
    n=str.length;
    line(n);
  }
  function line(n){
    var lineobj=G("li");
    for(var i=1;i<=n;i++){
       if(document.all){
        num+=i+".\r\n";
       }else{
        num+=i+".\n";
       }
    }
    lineobj.value=num;
    num="";
  }

/*
  function autoScroll(){
    var nV = 0;
    if(!document.all){
       nV=G("t1").scrollTop;
       G("li").scrollTop=nV;
       setTimeout("autoScroll()",20);
    }
  }
  if(!document.all){
    window.addEventListener("load",autoScroll,false);
  }
*/








  function change_ques_id(id){
      
       document.getElementById("span_ques_id").innerHTML=id;

      $.post("ques_id.php",{
        Ques_id: id 
        
      },function(txt){
        $("#question_show").html(txt);
        

      }); 
  }


function Compile(){
    // $("#compile_btn").prop('onclick', null );
//     $("#compile_btn").hide();
     $("#compile_btn").button('loading');

    var str = document.getElementById("t1").value;  
    
    var std_in = document.getElementById("stdin").value;
   

    document.getElementById("stdin").value = "";

    $.post("test_compile_OV.php",{
      
      code_str: str ,
      std_in: std_in ,
    },function(txt){

      document.getElementById("error_sample").innerHTML=txt;      
       if( txt.indexOf("submitCheck()") > 0 )
        ;
      else
         $("#compile_btn").button('reset');   //$("#compile_btn").show();
    
    }); 


 }





function submitCheck(){

  var hint = document.getElementById("hint").innerHTML;
  
  //var fb1 = document.getElementById("user_feedback_1").value;
  var fb1 = document.getElementById("user_feedback_1").value;
  var fb2 = document.getElementById("user_feedback_2").value;
  var fb3 = "";
 

  if( fb1 == ""  || fb2 ==""  ){
    alert("請勿留空白");
    return 0;
  }



  $.post("save_feedback.php",{
    submit_code_id : $("#submit_code_id").text() ,

    hint : hint,
    user_feedback_1 : fb1,
    user_feedback_2 : fb2,
    user_feedback_3 : fb3,
    
    },function(txt){
      alert(txt);
      $("#error_sample").text("");
      $("#compile_btn").button('reset');
      
      //$("#compile_btn").show();
    }
  );

 
}


function sumbit_answer(){

  //var str = document.getElementById("t1").value;  
    
  var str = document.getElementById("t1").value; 
  $.post("check_answer.php",{
    code_str: str 
   
    
  },function(txt){
    alert(txt);
  
  }); 



}



</script>

<body >
<br>
<br>
<br>


<div class="container">
<div class="jumbotron">

      <div class="row row-offcanvas row-offcanvas-right">



        <div class="col-xs-12 col-sm-7">
       

      
            <button id="1" type="button" class="btn btn-danger"  onclick="change_ques_id(this.id)">
              練習題一
            </button>
          
            <button id="2"type="button" class="btn btn-danger"  onclick="change_ques_id(id)">
              練習題二
            </button>
          
            <button id="3" type="button" class="btn btn-danger"  onclick="change_ques_id(id)">
              練習題三
            </button> 
           
         
            <button id="4" type="button" class="btn btn-danger" onclick="change_ques_id(id)">
              挑戰題
            </button> 

            <div id="question_show">
             
            </div>

            <div >
              <a id="compile_btn" class="btn btn-primary" href="#Compile" onclick="Compile()"><span class="glyphicon glyphicon-play-circle"></span> Compile</a>

              <br>
                
            <div>
                <span id="ol"><textarea  id="li" rows="20" disabled>1.   2.   3.    4.    5.    6.    7.    8.    9.   10. 11. 12. 13.</textarea></span>
    <textarea id="t1" style="width:580px;" rows="20" wrap="off"  onkeyup="keyUp()" onscroll="G('li').scrollTop = this.scrollTop;" oncontextmenu="return false" spellcheck="false"></textarea>  


    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">輸入使用教學</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-dialog modal-lg">
        <img src="./images/cin_explain.png" />
      </div>
  </div>
</div>

            <textarea id="stdin" style="width:580px;height:50px;" placeholder="當您的程式碼需要input資料時，請在此輸入"></textarea>
            

            <div class='alert alert-info'>提交練習題 <span id="span_ques_id"></span> 的答案(程式碼答案以最後一次提交的為主)<br> <button type='button' class='btn btn-danger'  onclick='sumbit_answer()'>提交答案</button><br></div>

            <!--<div id="div_show"  style=' border:1px solid  ;width:580px '>
              result
             </div> -->
            </div>
           </div>



        </div><!--/span-->

        <div class="col-sm-5 sidebar-offcanvas" id="error_sample" role="navigation">


        </div><!--/span-->
      </div><!--/row-->

</div>
</div><!--/.container-->



</body>
{include file="footer.tpl"}

</html>