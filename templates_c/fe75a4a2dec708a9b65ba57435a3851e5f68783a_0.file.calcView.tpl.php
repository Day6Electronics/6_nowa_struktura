<?php
/* Smarty version 3.1.39, created on 2021-04-10 15:06:41
  from 'C:\Serwery i inne szmery\xamp\htdocs\projekt6_nowa_struktura\app\views\calcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6071a2e1bf18e6_28992197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe75a4a2dec708a9b65ba57435a3851e5f68783a' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\projekt6_nowa_struktura\\app\\views\\calcView.tpl',
      1 => 1618059996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6071a2e1bf18e6_28992197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3673102026071a2e1be5fe3_61553264', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_3673102026071a2e1be5fe3_61553264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3673102026071a2e1be5fe3_61553264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div class="box">
	<div class="content">
            <h2 class="align-center">Oblicz rezystor</h2>
            <hr />
            <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">
                    <fieldset>
		<div class="field half first">
                    <label for="v1">Napięcie zasilania (V):</label>
                    <input name="v1" id="v1" type="text" placeholder="Napięcie zasilania (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->v1;?>
">
		</div>
		<div class="field half">
                    <label for="v2">Napięcie przewodzenia (V):</label>
                    <input name="v2" id="v2" type="text" placeholder="Napięcie przewodzenia (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->v2;?>
">
		</div>
		<div class="field half first">
                    <label for="amp">Prąd przewodzenia (mA):</label>
                    <input name="amp" id="amp" type="text" placeholder="Prąd przewodzenia (mA)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amp;?>
">
		</div>
		<ul class="actions align-center">
                    <li><input value="Oblicz wartość rezystora" class="button special" type="submit"></li>
		</ul>
                    </fieldset>
		</form>
	</div>
    </div>
    </div>

<div style="width:90%; margin: 2em auto;">
                    
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['resistor']->value->resistor))) {?>
	<h4>Wynik:</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['resistor']->value->resistor;?>
 Ohm
	</p>
<?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
