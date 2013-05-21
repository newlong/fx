<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$sitebase->title?></title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--<script src="js/index.js"></script>-->
</head>
<body>
<table width="1002" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="952" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-top:5px;">
      <tr>
        <td>
        <!--
         <table width="952" border="0" align="center" cellpadding="0" cellspacing="0">
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
        </table>
-->
            <img src="images/fx_compay.jpg" >
        </td>
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
                <td align="center"><a href="#">联系家纺</a></td>
                <td align="center"><a href="#"></a>&nbsp;<div style="width:20px;"></div></td>
                <td align="center"><a href="#"></a>&nbsp;<div style="width:20px;"></div></td>
                <td align="center"><a href="#"></a>&nbsp;<div style="width:20px;"></div></td>
                <td align="center"><a href="#"></a>&nbsp;<div style="width:20px;"></div></td>
                <td align="center"><a href="#"></a>&nbsp;<div style="width:20px;"></div></td>
                <td align="center"><a href="#"></a>&nbsp;<div style="width:230px;"></div></td>
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
                      <SCRIPT type=text/javascript>
var preloadedimages = new Array() ; 
var cpAD=new Array();
var cpADlink=new Array();
var cpADmsg=new Array();
//var adNum=5; 
var adNum=<?=count($flash_curtain)?>; 
var coll=0;

<?
$index = 0;
foreach($flash_curtain as $v){
    $index++;
?>
    cpAD[<?=$index?>]='<?=$v->file_url?>';
cpADlink[5]="";
cpADmsg[5]="";
<?}?>


for( i=1 ; i<cpAD.length ; i++ )
{ 
	preloadedimages[i] = new Image() ; 
	preloadedimages[i].src = cpAD[i] ; 
} 
function jump2url()
{ 
	jumpUrl = cpADlink[adNum] ; 
	jumpTarget = '_blank' ; 
	if( jumpUrl != '' )
	{ 
		if(	jumpTarget != '' )
			window.open(jumpUrl,jumpTarget) ; 
		else location.href = jumpUrl ; 
	} 
}
function nextAd()
{
	if(adNum<cpAD.length-1)
	{
		document.images.cpADrush.src=cpAD[adNum]; 
		adNum++ ; 
	}
	else 
	{
		adNum=1;
		document.images.cpADrush.src=cpAD[adNum]; 
	}
	setTransition() ;
	document.images.cpADrush.src=cpAD[adNum] ; 
	playTransition() ; 
	displayStatusMsg() ;
	theTimer = setTimeout("nextAd()", 5000) ; 
}
function setTransition()
{ 
	if (document.all)
	{ 
		document.images.cpADrush.filters.revealTrans.Transition=23; 
		document.images.cpADrush.filters.revealTrans.apply(); 
	} 
}
function playTransition()
{ 
	if (document.all) 
	document.images.cpADrush.filters.revealTrans.play() 
}
function displayStatusMsg() 
{ 
	status = cpADmsg[adNum] ; 
	document.returnValue = true; 
}
</SCRIPT>
			<DIV align=center><IMG id=cpADrush style="FILTER: revealTrans(duration=2,transition=23);" height="328" src="" width="715" border=0 name=cpADrush> </DIV>
          <SCRIPT language=JavaScript>nextAd()</SCRIPT></td>
              </tr>
              <tr>
                <td valign="top" height="5"></td>
              </tr>
              <tr>
                <td valign="top" height="5">最新产品</td>
              </tr>
              <tr>
                <td valign="top"><table width="675" border="0" align="center" cellpadding="0" cellspacing="0">
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
                                  <td><a href="index.php?c=product&m=product_detail&curtain_id=<?=$v->id?>" target="_blank"><img src="<?=$v->icon_url?>" width="135" height="166" border="0"></a></td>
                                  </tr>
                                  <tr>
                                  <td>型号:<span style="font-weight:bold;"><a href="index.php?c=product&m=product_detail&curtain_id=<?=$v->id?>" target="_blank"><?=$v->curtain_no?></a></span></td>
                                  </tr>
                                </table>
                            </td>

                            <?if(($index%4)!=3){?>
                            <td width="42" valign="top">&nbsp;</td>
                            <?}?>

                            <?echo ($index%4)==3?'</tr>':''?>
                            <?$index++?>
                            <?if($index>=8)break;?>
                    <?}?>
                </table></td>
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
