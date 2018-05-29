<?php /* Smarty version 2.6.27, created on 2017-11-01 10:49:02
         compiled from /var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/user_data/mylist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/user_data/mylist.tpl', 21, false),array('modifier', 'h', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/user_data/mylist.tpl', 21, false),array('modifier', 'u', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/user_data/mylist.tpl', 46, false),array('modifier', 'sfNoImageMainList', '/var/www/testvn.hyperion-job.jp/html/../data/Smarty/templates/default/user_data/mylist.tpl', 66, false),)), $this); ?>
<script type="text/javascript">//<![CDATA[
    function fnInCart(th, mode) {
        var cartForm = $(th).closest('form');
        cartForm.find('input[name=mode]').val(mode);
        cartForm.submit();
    }

    $(window).load(function(){
        if($('.list_area_form').length > 0){
            for (var i = 0; i < $('.list_area_form').length; i += 2) {
                if( $('.list_area_form').eq(i).height() > $('.list_area_form').eq(i+1).height() ){
                    $('.list_area_form .list_area').eq(i+1).height( $('.list_area_form .list_area').eq(i).height() );
                } else {
                    $('.list_area_form .list_area').eq(i).height( $('.list_area_form .list_area').eq(i+1).height() );
                }
            }
        }
    });
//]]></script>

<h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_subtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>

<?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['arrProducts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['arrProducts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arrProduct']):
        $this->_foreach['arrProducts']['iteration']++;
?>

    <?php if (((is_array($_tmp=($this->_foreach['arrProducts']['iteration'] <= 1))) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
        <!--▼件数-->
        <div class="product_count">
            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
件</span>の案件がございます。
        </div>
        <!--▲件数-->
    <?php endif; ?>

    <?php $this->assign('id', ((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
    <?php $this->assign('arrErr', ((is_array($_tmp=$this->_tpl_vars['arrProduct']['arrErr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
    <!--▼仕事-->
    <form name="product_form<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" action="?" class="list_area_form" method="post">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="" />
        <input type="hidden" name="l" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['l'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="product_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <input type="hidden" name="product_class_id" id="product_class_id<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_product_class_id'][$this->_tpl_vars['id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <div class="list_area clearfix">
            <a name="product<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
"></a>
            <!--★仕事名★-->
            <h3>
                <a target="_blank" href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</a>
                <!--▼仕事ステータス-->
                <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['productStatus'][$this->_tpl_vars['id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['productStatus'][$this->_tpl_vars['id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status']):
?>
                        <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrSTATUS_IMAGE'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrSTATUS'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"/>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
                <!--▲仕事ステータス-->
            </h3>

            <div class="table">
                <div class="table_cell">
                    <p><b>雇用形態：</b><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrEmploymentStatus'][$this->_tpl_vars['arrProduct']['employment_status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</p>
                    <p><b>給与：</b><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['salary_full'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</p>
                    <p><b>勤務地：</b><?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['work_location'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</p>
                    <p><b>応募条件：</b><?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['skill'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />　<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['qualification'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</p>
                </div>
                <div class="table_cell">
                    <div class="listphoto">
                        <a target="_blank" href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
">
                            <img src="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfNoImageMainList', true, $_tmp) : SC_Utils_Ex::sfNoImageMainList($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" class="picture" /></a>
                    </div>
                </div>
            </div>

            <ul class="list_button">
                <?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['arrCheckedItems'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['l'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'keep'): ?>
                        <li><a href="#" onclick="fnInCart(this, 'delete'); return false;">キープから削除する</a></li>
                    <?php else: ?>
                        <li><a href="#">キープ済み</a></li>
                    <?php endif; ?>
                <?php else: ?>
                <li><a href="#" onclick="fnInCart(this, 'cart'); return false;">キープしておく</a></li>
                <?php endif; ?>
                <li><a target="_blank" href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
">詳細をもっと見る</a></li>
            </ul>
        </div>
    </form>
    <!--▲仕事-->
<?php endforeach; else: ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontparts/search_zero.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; unset($_from); ?>