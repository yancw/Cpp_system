<?php /* Smarty version Smarty-3.1.16, created on 2015-03-18 13:03:36
         compiled from "templates\C11_abs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23228550907282fa870-53273758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de13202d5106f11c8c80a08a190da676c49aa60a' => 
    array (
      0 => 'templates\\C11_abs.tpl',
      1 => 1426325263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23228550907282fa870-53273758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5509072830e102_00078215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5509072830e102_00078215')) {function content_5509072830e102_00078215($_smarty_tpl) {?><html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <h2><p>   *本章重點       </p></h2><br>

1.繼承是以既有的類別為基礎，進而衍生出新的類別。此時既有的類別稱為「父類別」(super class)或「基底類別」(basis class) ; 因繼承而產生的新類別稱為「子類別」(sub class)或「衍生類別」(derived class)。<br>
2.透過繼承，我們便能快速低開發新的類別，而不需撰寫相同的程式碼，這也是程式碼再利用的概念。<br>
3.透過繼承，子類別可擁有父類別裡的所有資料成員、成員函數以及多載的運算子，但不包括建構元、解構元與多載的設定運算子「=」。<br>
4.C++在執行子類別的建構元之前，會先自動呼叫父類別中沒有引數的建構元，其目的是為了要幫助繼承自父類別的成員做初始化的動作。<br>
5.子類別物件所佔的位元組，等於自己資料成員所佔的位元組，加上繼承過來之成員所佔之位元組。<br>
6.如果父類別有數個建構元，而要呼叫父類別特定的建構元時，可在子類別的建構元中，透過初始化成員的技巧來呼叫。<br>
7. 若繼承的方式設定為public，則原先在父類別裡為public的成員，繼承到子類別後，也是public成員;而在父類別裡為protected的成員，繼承到子類別後，也是protected成員。<br>
8若繼承的方式設定為protected，則原先在父類別裡為public和protected成員，繼承到子類別後，均會變成protected成員。<br>
9若繼承的方式設定為private，則原先在父類別裡為public和protected成員，繼承到子類別後，均會變成private成員。<br>
10.父類別裡的私有成員無法被子類別所存取。<br>
11.改寫(overriding)是指在子類別中，定義名稱、引數個數與型態均與父類別相同的函數，用以改寫父類別裡函數的功能。

<br><br>







      </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
