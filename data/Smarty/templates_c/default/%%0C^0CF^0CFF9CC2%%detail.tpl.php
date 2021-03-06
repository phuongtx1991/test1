<?php /* Smarty version 2.6.27, created on 2018-01-12 16:32:24
         compiled from /var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/products/detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/products/detail.tpl', 34, false),array('modifier', 'h', '/var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/products/detail.tpl', 77, false),array('modifier', 'date_format', '/var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/products/detail.tpl', 85, false),array('modifier', 'strtotime', '/var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/products/detail.tpl', 96, false),array('modifier', 'nl2br_html', '/var/www/testjp.hyperion-job.jp/html/../data/Smarty/templates/default/products/detail.tpl', 156, false),)), $this); ?>

<script type="text/javascript">//<![CDATA[
    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var $form = $(form);
        var product_id = $form.find('input[name=product_id]').val();
        var $sele1 = $form.find('select[name=classcategory_id1]');
        var $sele2 = $form.find('select[name=classcategory_id2]');
        eccube.setClassCategories($form, product_id, $sele1, $sele2, classcat_id2_selected);
    }

    function applyPopup(){
        $.colorbox({href:"<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=@USER_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
apply_popup.php", iframe:true, fastIframe:false, width:"600px", height:"360px", transition:"fade", scrolling:false});
    }

    $(function(){
        var detailHeader = $(".detail_header").clone();
        $('<div />', { class: 'detail_header_float' }).append(detailHeader).insertAfter("#detailarea");

        var detailHeaderVisibleHeight = $('#header_wrap').outerHeight() + $('#topcolumn').outerHeight() + 20 + $('.detail_header').outerHeight();
        var flag = false;
        $(window).scroll(function () {
            var scrollTop = $(this).scrollTop();
            if (scrollTop > detailHeaderVisibleHeight) {
                if (flag == false) {
                    flag = true;
                    $('.detail_header_float').stop().animate({
                        'top': '0'
                    }, 500);
                }
            } else {
                if (flag) {
                    flag = false;
                    $('.detail_header_float').stop().animate({
                        'top': '-100px'
                    }, 500);
                }
            }
        });
    });
//]]></script>

<div id="undercolumn">
    <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="cart" />
        <input type="hidden" name="product_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="product_class_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_product_class_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" id="product_class_id" />
        <input type="hidden" name="favorite_product_id" value="" />
        <input type="hidden" name="quantity" value="1" />
        <div id="detailarea" class="clearfix">
            <div class="detail_header">
                <div id="detailphotobloc">
                    <?php $this->assign('key', 'main_large_image'); ?>
                    <!--★画像★-->
                    <a href="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" class="expansion" target="_blank">
                        <img src="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                    </a>
                </div>
                <div id="detailrightbloc">
                    <!--★仕事名★-->
                    <h2><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>

                    <div class="end_date">終了日：<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['end_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日")); ?>
</div>

                    <div class="btn_area" id="detail_btn_area">
                        <?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['tpl_product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['arrCheckedItems'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?>
                        <button class="bttn" type="button" onClick=""><span>キープ済み</span></button>
                        <?php else: ?>
                        <button class="bttn" type="button" onClick="javascript:eccube.changeAction('?product_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
'); eccube.setModeAndSubmit('cart', '', '');"><span>キープ</span></button>
                        <?php endif; ?>
                        &nbsp; &nbsp;
                        <?php if (((is_array($_tmp=$this->_tpl_vars['isApplied'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <button class="bttn" type="button" onClick=""><span>応募済み</span></button>
                        <?php elseif (((is_array($_tmp=$this->_tpl_vars['arrProduct']['end_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != '' && ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['end_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strtotime', true, $_tmp) : strtotime($_tmp)) <= ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")))) ? $this->_run_mod_handler('strtotime', true, $_tmp) : strtotime($_tmp))): ?>
                            <button class="bttn" type="button" onClick=""><span>掲載期間が終了しています</span></button>
                        <?php else: ?>
                            <button class="bttn" type="button" onclick="javascript:eccube.changeAction('?product_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
'); eccube.setModeAndSubmit('cart_to_shopping', 'quantity', 1);"><span>応募</span></button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div id="detailphotobloc" style="display: none">
                <div class="photo">
                    <?php $this->assign('key', 'main_large_image'); ?>
                    <!--★画像★-->
                    <a href="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" class="expansion" target="_blank">
                        <img src="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" class="picture" />
                    </a>
                </div>
                <span class="mini">
                    <!--★拡大する★-->
                    <a href="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" class="expansion" target="_blank">画像を拡大する</a>
                </span>
            </div>
            <div id="detailrightbloc" style="display: none">
                <!--★仕事名★-->
                <h2><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>

                <div class="end_date">終了日：<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['end_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日")); ?>
</div>

                <div class="btn_area" id="detail_btn_area">
                    <?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['tpl_product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['arrCheckedItems'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) )): ?>
                    <button class="bttn" type="button" onClick=""><span>キープ済み</span></button>
                    <?php else: ?>
                    <button class="bttn" type="button" onClick="javascript:eccube.changeAction('?product_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
'); eccube.setModeAndSubmit('cart', '', '');"><span>キープ</span></button>
                    <?php endif; ?>
                    &nbsp; &nbsp;
                    <?php if (((is_array($_tmp=$this->_tpl_vars['isApplied'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <button class="bttn" type="button" onClick=""><span>応募済み</span></button>
                    <?php else: ?>
                        <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['end_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strtotime', true, $_tmp) : strtotime($_tmp)) <= ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")))) ? $this->_run_mod_handler('strtotime', true, $_tmp) : strtotime($_tmp))): ?>
                            <button class="bttn" type="button" onClick=""><span>掲載期間が終了しています</span></button>
                        <?php else: ?>
                            <button class="bttn" type="button" onclick="javascript:eccube.changeAction('?product_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
'); eccube.setModeAndSubmit('cart_to_shopping', 'quantity', 1);"><span>応募</span></button>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="table">
                <div class="table_cell">
                    <p class="detail_block_title">応募詳細</p>
                    <table class="detail_block_table">
                        <tr>
                            <th>雇用形態</th>
                            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrEmploymentStatus'][$this->_tpl_vars['arrProduct']['employment_status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>ポジション</th>
                            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrPosition'][$this->_tpl_vars['arrProduct']['position']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>給与</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['salary_full'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<br /><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['salary'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>勤務地</th>
                            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrRegion'][$this->_tpl_vars['arrProduct']['region']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['arrCity'][$this->_tpl_vars['arrProduct']['city']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br /><?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['work_location'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>交通アクセス</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['traffic_access'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>勤務時間</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['working_hour'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
<br />昼休み時間：<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['lunch_time'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>勤務曜日</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['working_day'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>試用期間</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['trial_period'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                    </table>

                    <p class="detail_block_title">仕事条件</p>
                    <table class="detail_block_table">
                        <tr>
                            <th>仕事数</th>
                            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['offer_number'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>性別</th>
                            <td>
                                <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrProduct']['sex'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
                                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrProduct']['sex'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arrSex'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) < count ( ((is_array($_tmp=$this->_tpl_vars['arrProduct']['sex'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) - 1): ?>, <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>資格</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['qualification'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>性格</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['personality'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>経験・スキルの詳細</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['skill'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                    </table>

                    <p class="detail_block_title">福利厚生・制度</p>
                    <table class="detail_block_table">
                        <tr>
                            <th>昇給</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['payrise'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>賞与</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['bonus'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>保険</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['insurance'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>福利</th>
                            <td>
                                <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrProduct']['welfare'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
                                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrProduct']['welfare'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['arrWelfare'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
                                    <?php endforeach; endif; unset($_from); ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>その他の福利</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['other_welfare'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                        <tr>
                            <th>健康診断</th>
                            <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['medical_checkup'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                        </tr>
                    </table>
                </div>
                <div class="table_cell">
                    <p class="detail_block_title">仕事詳細</p>
                    <div class="detail_block_area">
                        <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['main_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>

                    </div>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrProduct']['employment_status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
                    <p class="detail_block_title">会社紹介</p>
                    <div class="detail_block_area"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['client_introduction'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</div>
                    <?php endif; ?>
                </div>
            </div>

            <p class="detail_block_title">応募方法</p>
            <table class="detail_block_table">
                <tr>
                    <th>応募方法</th>
                    <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['applicate_method'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</td>
                </tr>
                <tr>
                    <th>選考プロセス</th>
                    <td>
                        <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrProduct']['selection_process'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
                            <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrProduct']['selection_process'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                            <div class="selection_process">
                                <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProcessImage'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProcess'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" id="icon<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <p><?php echo ((is_array($_tmp=$this->_tpl_vars['arrProcess'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</p>
                            </div><?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) < count ( ((is_array($_tmp=$this->_tpl_vars['arrProduct']['selection_process'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) - 1): ?><span class="selection_arrow">›</span><?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrProduct']['concierge_info'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ''): ?>
                <tr>
                    <th>担当者</th>
                    <td>
                        <div id="concierge_info">
                            <img src="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['concierge_info']['image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['concierge_info']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                            <span>仕事コンシェルジュ</span>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['concierge_info']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
                            <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/icon/ico_phone.png" alt="phone" /> <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['concierge_info']['tel'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
                            <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/icon/ico_mail.png" alt="mail" /> <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['concierge_info']['email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<br />
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['arrTarget'][$this->_tpl_vars['arrProduct']['concierge_info']['workplace']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
オフィス所属
                        </div>
                    </td>
                </tr>
                <?php endif; ?>
            </table>

        </div>
    </form>

    <!--詳細ここまで-->

</div>