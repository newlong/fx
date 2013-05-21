<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$sitebase->title?></title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="js/fx_jquery.min.js"></script>
<script src="js/product_list.js"></script>
</head>
<body>
<table width="1002" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="952" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="952" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="390" align="left" valign="top"><img src="images/fx_logo.jpg" width="302" height="74" border="0" usemap="#Map"></td>
            <td width="562" align="center" valign="top"><table width="525" border="0" align="left" cellpadding="0" cellspacing="0" height="74">
              <tr>
                <td width="210" align="left" valign="bottom"><table width="100%"  border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="60%" align="left" valign="bottom"><form id="" name="form1" method="post" ><input type="hidden" name="text1" class="textindex"/>
                    </form></td>
                    <td width="40%" align="left" valign="middle"><a href="indexweb/014cpss001.htm" target="_blank" style="display:none;"><img src="images/ruomeindex_04.gif" width="37" height="20" border="0" align="bottom"></a></td>
                  </tr>
                </table></td>
                <td width="170" align="left" valign="bottom"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="20" valign="bottom" class="jianti"><a href="index.htm" target="_parent">中文</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="indexen.htm" target="_blank">English</a></td>
                  </tr>
                </table></td>
                <td width="145" align="left" valign="bottom">
</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="background:#000;width:952px;height:38px;"><table width="900" border="0" align="center" cellpadding="0" cellspacing="0" class="indexmenu">
          <tr>
            <td width="211"><table width="210" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top" style="color:#EBDCB5;" class="bizijia"><a href="index.php">福祥家纺</a></td>
              </tr>
            </table></td>
            <td width="689"><table width="680" border="0" align="right" cellpadding="0" cellspacing="0" id="menu1">
              <tr>
                <td align="center"><a href="index.php" target="_parent">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></td>
                <td align="center"><a href="index.php?c=product&m=product_list">福祥家纺窗帘</a> </td>
                <td align="center"><a href="indexweb/008lxrm001.htm">联系家纺</a></td>
                <td align="center"><a href="indexweb/002ppyx001.htm"></a>&nbsp;<div style="width:20px;"></div></td>
                <td align="center"><a href="indexweb/003jmrm001.htm"></a>&nbsp;<div style="width:20px;"></div></td>
                <td align="center"><a href="indexweb/004clys001.htm"></a>&nbsp;<div style="width:20px;"></div></td>
                <td align="center"><a href="indexweb/005xwzx001.htm"></a>&nbsp;<div style="width:20px;"></div></td>
                <td align="center"><a href="indexweb/006gcjd001.htm"></a>&nbsp;<div style="width:20px;"></div></td>
                <td align="center"><a href="indexweb/007zlxz001.htm"></a>&nbsp;<div style="width:230px;"></div></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="8"></td>
      </tr>
      <tr>
        <td><table width="952" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td width="225" valign="top"><table width="225" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="top"><table width="187" border="0" align="right" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="xike">产品分类&nbsp;&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="10"></td>
                  </tr>
                  <tr>
                    <td height="10"><img src="images/xianruome_03.gif" width="184" height="1"></td>
                  </tr>
                <?if(!empty($category_list)){?>
                  <tr>
                    <td><table width="98%"  border="0" align="left" cellpadding="0" cellspacing="0" class="promenulist">
                <?foreach($category_list as $k=>$v){?>
                     <tr>
                         <td>
                         <a href="index.php?c=product&m=product_list&cate_id=<?=$v->id?>" style="cursor:pointer;">
                            <img src="<?=!empty($v->icon_url)?$v->icon_url:'images/logo/fx_logo.jpg'?>" width="100px"></img>
                        </a>
                         <div style="padding-left:35px;">
                            <a href="index.php?c=product&m=product_list&cate_id=<?=$v->id?>"><?=$v->cate_name?></a>
                        </div>
                        <div style="padding-top:5px;"></div>
                        </td>
                     </tr>
                <?}?>
                    </table></td>
                  </tr>
                <?}?>
                </table></td>
              </tr>
            </table></td>
            <td width="727" valign="top"><table width="715" border="0" align="right" cellpadding="0" cellspacing="0">
              <tr>
                  <td valign="top">
</td>
              </tr>
              <tr>
                <td valign="top" height="5"></td>
              </tr>
              <tr>
              <td valign="top" height="5"><?=!empty($cur_category_name)?$cur_category_name.'系列:':''?></td>
              </tr>
              <tr>
                <td valign="top"><table id="curtain_list_table" width="675" border="0" align="center" cellpadding="0" cellspacing="0">
                    <?
                        $index = 0;
                        foreach($curtain_list as $v){?>
                            <?echo ($index%4)==0?'<tr>':''?>
                            <td width="135" valign="top">
                                <table width="135" border="0" align="left" cellpadding="0" cellspacing="0" class="tulist">
                                  <tr>
                                    <td><div style="width:10px;padding-top:5px;"></div></td>
                                  </tr>
                                  <tr>
                                  <td><a href="index.php?c=product&m=product_detail&curtain_id=<?=$v->id?>" target="_blank">
                                        <img src="<?=$v->icon_url?>" width="135" height="166" border="0">
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                  <td>型号:<span style="font-weight:bold;">
                                        <a href="index.php?c=product&m=product_detail&curtain_id=<?=$v->id?>" target="_blank"><?=$v->curtain_no?></a>
                                    </span></td>
                                  </tr>
                                </table>
                            </td>

                            <?if(($index%4)!=3){?>
                            <td width="42" valign="top">&nbsp;</td>
                            <?}?>

                            <?echo ($index%4)==3?'</tr>':''?>
                            <?$index++?>
                    <?}?>
                </table></td>
              </tr>
              <tr>
                <td>
                <div style="text-align:center;">
                <div id="page_info" page="<?=$page?>" rec_count="<?=$rec_count?>" category_id="<?=$cur_category_id?>"></div>
                    <span id="loading_tips" style="display:none;">加载中...<img src="images/loading.gif"></span>
                    <span id="page_btns">
                    <a id="prev_page_btn" href="javascript:void(0);">上一页</a>
                    <a id="next_page_btn" href="javascript:void(0);" style="padding-left:5px;">下一页</a>
                    </span>
                </div>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="93%"  border="0" align="center" cellpadding="0" cellspacing="0" class="youqing">
          <tr>
            <td style="color:#A38431;font-weight:bold;font-size:12px; ">友情链接：</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="100px;"><a href="http://www.fuxiangjf.com" target="_blank">广州窗帘批发</a>&nbsp;</td>
            <td width="100px;">窗帘品牌&nbsp;</td>
            <td colspan="6">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="5"></td>
      </tr>
      <tr>
        <td><img src="images/ruomeindex_28.gif" width="952" height="12"></td>
      </tr>
      <tr>
        <td height="5"></td>
      </tr>
      <tr>
        <td valign="top"><table width="530" border="0" align="center" cellpadding="0" cellspacing="0" class="bottomlian">
          <tr>
            <td align="center"><a href="index.htm" target="_parent">首&nbsp;&nbsp;&nbsp;&nbsp;页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="indexweb/010wzdt001.htm">网站地图</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="indexweb/011rczp001.htm">人才招聘</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="indexweb/012yqlj001.htm">友情链接</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="indexweb/008lxrm001.htm">联系我们</a></td>
          </tr>
          <tr>
            <td align="center">版权所有 <a href="index.index">福祥家纺</a> </td>
          </tr>
          <tr>
            <td align="center">Copyright 2005-2013 <a href="index.htm" style="color:#f00;">www.fuxiangjf.com</a> All Rights Reserved</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
