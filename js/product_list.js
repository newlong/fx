$(document).ready(function(){

    $('#prev_page_btn').click(function(){
        var pageInfo = $('#page_info');
        var page = pageInfo.attr('page');
        page = page/1;
        if(page <= 1){
            alert('已是首页');
            return false;
        }

        hiddenPageBtn(true);
        page = (page/1) -1;
        showPage(page, pageInfo.attr('category_id'));
    });

    $('#next_page_btn').click(function(){
        var pageInfo = $('#page_info');
        var page = pageInfo.attr('page')/1;
        if(page <= 0) page = 1;
        var recCount = pageInfo.attr('rec_count');
        if((page*12) >= recCount){
            alert('已是最后一页!');
            return false;
        }

        hiddenPageBtn(true);
        page = (page/1)+1;
        showPage(page, pageInfo.attr('category_id'));
    });
});

function hiddenPageBtn(isHidden){
    if(isHidden){
        $('#page_btns').hide();
        $('#loading_tips').show();
    }else{
        $('#page_btns').show();
        $('#loading_tips').hide();
    }
}

function showPage(page, cateId){
    var _url = 'index.php?c=product&m=products&page=' + page;
    if(cateId && cateId > 0){
        _url += '&cate_id=' + cateId;
    }

    $.ajax({
        url : _url,
        dataType : 'json',
        success : function(result){
            if(!result.curtain_list){
                return false;
            }

            $('#page_info').attr('page', result.page).attr('rec_count', result.rec_count);
            updateCurtaiList(result.curtain_list);
            hiddenPageBtn(false);
        }
    });
}

function updateCurtaiList(curtainList){
    var str = [];
    for(var i = 0; i < curtainList.length; i++){
        var curtain = curtainList[i];
        if((i%4) == 0){
            str[str.length] = '<tr>';
        }
        str[str.length]='<td width="135" valign="top">';
        str[str.length]='    <table width="135" border="0" align="left" cellpadding="0" cellspacing="0" class="tulist">';
        str[str.length]='      <tr>';
        str[str.length]='        <td><div style="width:10px;padding-top:5px;"></div></td>';
        str[str.length]='      </tr>';
        str[str.length]='      <tr>';
        str[str.length]='      <td><a href="index.php?c=product&m=product_detail&curtain_id='+curtain.id+'" target="_blank">';
        str[str.length]='            <img src="'+curtain.icon_url+'" width="135" height="166" border="0">';
        str[str.length]='          </a>';
        str[str.length]='        </td>';
        str[str.length]='      </tr>';
        str[str.length]='      <tr>';
        str[str.length]='      <td>型号:<span style="font-weight:bold;">';
        str[str.length]='         <a href="index.php?c=product&m=product_detail&curtain_id='+curtain.id+'" target="_blank">'+curtain.curtain_no+'</a>';
        str[str.length]='         </span></td>';
        str[str.length]='      </tr>';
        str[str.length]='    </table>';
        str[str.length]='</td>';

        if((i%4) != 3){
            str[str.length] = '<td width="42" valign="top">&nbsp;</td>';
        }
        if((i%4) == 3){
            str[str.length] = '</tr>';
        }
    }

    var idx = i%4;
    if(idx > 0){
        for(var j = 0; j < idx; j++){
            str[str.length] = '<td width="135">&nbsp;</td>';
            if((j+1) < idx){
                str[str.length] = '<td width="42" valign="top">&nbsp;</td>';
            }
        }
        str[str.length] = '</tr>';
    }

    $('#curtain_list_table').empty().append(str.join(''));

}
