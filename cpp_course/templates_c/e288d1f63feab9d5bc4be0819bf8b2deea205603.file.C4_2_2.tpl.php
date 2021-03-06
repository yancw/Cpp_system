<?php /* Smarty version Smarty-3.1.16, created on 2015-03-17 17:46:01
         compiled from "templates\C4_2_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183835507f7d9c85a42-99107037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e288d1f63feab9d5bc4be0819bf8b2deea205603' => 
    array (
      0 => 'templates\\C4_2_2.tpl',
      1 => 1410850556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183835507f7d9c85a42-99107037',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5507f7d9c8d740_10926891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5507f7d9c8d740_10926891')) {function content_5507f7d9c8d740_10926891($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>4.2.2 巢狀的if-else敘述</p>
<div class="alert alert-success">
 if (判斷條件1) {
<br> 
&nbsp;&nbsp;&nbsp; 敘述1; 
<br>
&nbsp;&nbsp;&nbsp;if(判斷條件2) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;敘述2; 
<br>
&nbsp;&nbsp;&nbsp;其他敘述;
<br> 
}
</div>
以上的敘述就是說你要執行敘述2時就必須判斷條件1和判斷條件2都要成立。再舉例如下:
<br>
<div class="alert alert-success">
if (判斷條件1) { 
<br>
&nbsp;&nbsp;&nbsp;敘述1; 
<br>
&nbsp;&nbsp;&nbsp;// 其它敘述 
<br>
} 
<br>
else 
<br>
&nbsp;&nbsp;&nbsp;if(判斷條件2) 
<br>
&nbsp;&nbsp;&nbsp;敘述2;
</div>
上述敘述的意思就是當判斷條件1不成立時，則會執行else的敘述，然而判斷條件2成立時就是執行敘述2了，所以我們可以把敘述改寫成:
<div class="alert alert-success">
if (判斷條件1) { 
<br>
&nbsp;&nbsp;&nbsp;    敘述1; 
    <br>
&nbsp;&nbsp;&nbsp;    // 其它敘述 
    <br>
} 
<br>
else if(判斷條件2) 
<br>
&nbsp;&nbsp;&nbsp;     敘述2;
     <br>
</div>
基於上述的方式，可以再加入多個條件:

<div class="alert alert-success">

if (判斷條件1) { 
<br>
&nbsp;&nbsp;&nbsp;    敘述1; 
    <br>
} 
<br>
else if(判斷條件2) {
<br>
&nbsp;&nbsp;&nbsp;    敘述2;
    <br>
}
<br>
else if(判斷條件3) {
<br>
&nbsp;&nbsp;&nbsp;    敘述3;
    <br>
}
<br>
else     
<br>
&nbsp;&nbsp;&nbsp;    敘述4;

</div>
敘述4會在判斷條件1、2、3皆不成立時執行。
<div class="alert alert-success">
#include < iostream>
<br>
using namespace std;
<br>
int main() { 
<br>
    int score = 0; 
    <br><br>

    cout << "輸入分數："; 
    <br>
    cin >> score; 
    <br><br>

    if(score >= 90) 
    <br>
        cout << "得A" << endl; 
        <br>
    else if(score >= 80 && score < 90) 
    <br>
        cout << "得B" << endl; 
        <br>
    else if(score >= 70 && score < 80) 
    <br>
        cout << "得C" << endl; 
        <br>
    else if(score >= 60 && score < 70) 
    <br>
        cout << "得D" << endl; 
        <br>
    else 
    <br>
        cout << "得E(不及格)" << endl; 
        <br><br>
 
    return 0;
    <br>
}

</div>
OUTPUT:
<div class="alert alert-info">
輸入分數：60
<br>
得D
</div>
      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
