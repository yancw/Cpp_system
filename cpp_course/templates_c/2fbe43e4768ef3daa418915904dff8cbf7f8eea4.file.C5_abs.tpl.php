<?php /* Smarty version Smarty-3.1.16, created on 2015-03-09 17:59:26
         compiled from ".\templates\C5_abs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1055854fd6efe11b800-64252424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fbe43e4768ef3daa418915904dff8cbf7f8eea4' => 
    array (
      0 => '.\\templates\\C5_abs.tpl',
      1 => 1425894920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1055854fd6efe11b800-64252424',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54fd6efe142905_48022874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fd6efe142905_48022874')) {function content_54fd6efe142905_48022874($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h4><p>  第五章 重點整理      </p></h4>



1.	函數可以化簡程式碼、精簡重複的程式流程，減少程式維護的成本。<br>
2.	若是直接在main()之前定義自訂函數，則該定義同時具備宣告與定義的功能，不必再宣告函數原型。<br>
3.	使用字定的函數前，必須先宣告「函數原型」，自訂函數的名稱不能使用到C++的關鍵字。<br>
4.	利用return 敘述可以將資料傳回給原先呼叫他的函數，這個被傳回去的資料，稱為「回傳值」，同時結束函數的執行。<br>
5.	inline函數必須在該函數被呼叫前先行定義;使用inline函數可以減少程式流程的主控權不同的轉換的次數。<br>
6.	當inline函數內容過大、使用遞迴的方式呼叫自己，或是編譯器本身不支援inline函數的使用時，inline函數可能不會被使用，而變成一般函數。<br>
7.	宣告於函數內的變數稱為「區域變數」。<br>
8.	傳遞資料到函數時，是以「傳值呼叫」的方式將資料當作引數來傳遞。<br>
9.	C++的變數依照宣告的地方，可分為「區域變數」及「外部變數」。<br>
10.	函數可以用遞迴的方式來撰寫。函數呼叫自己本身，就稱為「遞迴函數」，遞迴函數可以讓程式碼變得簡潔。<br>
11.	「傳值呼叫」的方式不會更動到原先變數的值。「傳址呼叫」或「以參照呼叫」則會因為呼叫函數對引數做存取的動作，而直接更改原先變數的值。<br>
12.	參照適變數的暱稱或別名，他可以代替某個變數。宣告時要在參照名稱前加上參照運算子&，並為他指向某個變數，於往後使用時，則與一般變數相同，不需加上任何的特殊符號。<br>
13.	參照一但設定指向的參考變數之後，他就無法在指向其他的變數。<br>
14.	傳回值為參照的函數，其傳回值可以再指定的敘述左邊，也就是說，傳回值為參照的函數可以設定其值。<br>
15.	相同的函數名稱用在不同的函數宣告及定義之情況下，稱為「多載」，傳回值為參照會根據引數的型態，自動執行適合的函數內容。<br>
16.	兩個名稱相同的多載化函數，若是只有傳回值型態不同，會讓編譯器難以分辨到底該使用哪個函數。<br>
17.	函數的引數可以預先指定其值，稱為預設引數。引數的預設值只能在函數原型宣告的時候設定。<br>
18.	函數的引數列中有預設值的引數時，就必須要放置在沒有使用預設值的後面，不可以混合放置。<br>
19.	省略傳遞引數到函數時，只能從引數列的最右邊開始減少，沒有使用預設值的引數ㄧ定要傳引數到函數。<br>
20.	#define可以將常數、字串替換成一個自訂的識別名稱，以及取代簡單的函數，利用#define可以增加程式的易讀性。<br>
21.	宣告變數時，在型態前加上const，及可將該變數宣告為無法修改的「常數」。<br>
22.	C++提供的功能或函數，可以利用#define將其所屬的標頭檔含括到程式裡。<br>






      </div>
      </div>
    </div>
  </body>
</html>
<?php }} ?>
