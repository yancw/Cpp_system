<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>  8.8.2  靜態成員函數      </p></h2><br>

於prog13_13中，所有的count() 均是透過物件來呼叫
<br>


<img src="./images/C8_8_2@p1.png" alt=""><br>
count() 也可以宣告成「靜態成員函數」 
<br>
<img src="./images/C8_8_2@p2.png" alt=""><br>
如此便可直接用類別來呼叫它  
<br>
<img src="./images/C8_8_2@p3.png" alt=""><br>

<br>
<br>
下面的範例是把count() 函數改寫成「靜態成員函數」 <br>
<img src="./images/C8_8_2@p4.png" alt=""><br>
<img src="./images/C8_8_2@p5.png" alt=""><br>

<img src="./images/C8_8_2@p6.png" alt=""><br>

值得注意的是，程式21~24行定義count()為「靜態成員函數」。讀者可以注意到，31、35與38行均是以CWin類別直接呼叫count()函數，而非透過物建。







      </div>
      </div>
    </div>
  </body>
</html>