<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>    6.4 字元陣列—C型態字串      </p></h2><br>


字元變數只能存放一個字元，若是想存放兩個以上的字元，也就是ㄧ般所提到的字串，則必須以字元陣列來處理。


<br><br><br>

           <h2><p>    6.4.1 字串常數      </p></h2><br>


雖然在C語言裡並沒有字串的資料型態，但可以由字元陣列組成字串。字元常數是以單引號(‘)所包圍，而字串常數則是以兩個雙引號(“)包圍起來的資料，如下:<br>



           <img src="./images/C6.4.1@p1.png" alt=""><br>

字串儲存在記憶體時，會加上字串結束字元\0做結尾  <br>
           <img src="./images/C6.4.1@p2.png" alt=""><br>

在字串裡，每個字元佔1個位元組，再加上字串結束字元’\0’，其字串總長度即為所有的字元數加1，因此上圖中的字串My friend的長度為9+1=10個位元組。








      </div>
      </div>
    </div>
  </body>
</html>