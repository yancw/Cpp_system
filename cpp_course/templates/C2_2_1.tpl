<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>2.2.1 整數型態</p>
           當資料內沒有小數或是分數，即可以宣告為整數變數，如-49、116等即為整數。C++的整數資料型態佔有32個位元(bits)，也就是4個位元組(bytes)，然而整數可表示的範圍為-2147483648到2147483647。
           <br>
在整數資料型態中，可以表示正數與負數的整數，為「有號」整數(signed);當資料絕對不會出現負數的時候，就可以宣告為「無號」(unsigned)的整數變數，這個無號整數的正數表示範圍即可加大。例如，想宣告一個無號整數變數num時，可以於程式中做出如下的宣告:
<br>
<strong>Unsigned int num; </strong>  //宣告num為無號整數
<br>
此時，在可用的記憶體空間中，就會有4個位元組的區塊供這個變數num使用，而這個變數的範圍只能再0到2^32-1(4294967295)之間，不會出現負數的情形。
<br>
下列的程式是將各種基本資料型態，所佔用的位元組長度列印出來。
程式裡有一個函數sizeof()，這個函數的回傳值就是資料型態的長度。函數sizeof()的引數可以是變數名稱，也可以是資料型態，在程式中可以看到這兩種不同的使用方式。

<div class="alert alert-success">
//印出各種資料型態的長度
<br>
#include < iostream>
<br>
#include < cstdlib>
<br>
using namespace std;
<br>
int main(void)
<br>
{
  <br>
   //定義各種資料型態的變數
   <br>
   unsigned int i=0;
   <br>
   unsigned short int j=0;
   <br>
   char ch=' ';
   <br>
   float f=0.0f;
   <br>
   double d=0.0;
   <br>
   <br>

   //印出各種資料型態的長度
   <br>
   cout << "sizeof(int)=" << sizeof(int) << endl;
   <br>
   cout << "sizeof(long int)=" << sizeof(long int) << endl;
   <br>
   cout << "sizeof(unsigned int)=" << sizeof(i) << endl;
   <br>
   cout << "sizeof(short int)=" << sizeof(short int) << endl;
   <br>
   cout << "sizeof(unsigned short int)=" << sizeof(j) << endl;
   <br>
   cout << "sizeof(char)=" << sizeof(ch) << endl;
   <br>
   cout << "sizeof(float)=" << sizeof(f) << endl;
   <br>
   cout << "sizeof(double)=" << sizeof(d) << endl;
   <br>
   cout << "sizeof(bool)=" << sizeof(bool) << endl;
   <br>
   system("pause");
   <br>
   return 0;
   <br>
}
<br>
</div>
然而上述程式碼輸出結果為:
<div class="alert alert-info">
sizeof(int)=4
<br>
sizeof(long int)=4
<br>
sizeof(unsigned int)=4
<br>
sizeof(short int)=2
<br>
sizeof(unsigned short int)=2
<br>
sizeof(char)=1
<br>
sizeof(float)=4
<br>
sizeof(double)=8
<br>
sizeof(bool)=1
<br>
</div>

           


      </div>
      </div>
    </div>
  </body>
</html>