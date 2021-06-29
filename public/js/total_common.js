function test() {
  alert('JavaScriptのアラート');
}

function button_press(button_id, proc_id, engineer_id, action_name) {

  alert(button_id);
  alert(proc_id);
  alert(engineer_id);

//「検索ボタンID」のエレメントの設定
if(button_id){
 var ele = document.createElement('input');
 ele.setAttribute('type', 'hidden');
 ele.setAttribute('name',  button_id);
 ele.setAttribute('value', 'OK');
 document.forms[0].appendChild(ele);　// 要素を追加
}

// 「次の処理ID」のエレメントの設定
if(proc_id){
  var ele2 = document.createElement('input');
  ele2.setAttribute('type', 'hidden');
  ele2.setAttribute('name', 'proc_id');
  ele2.setAttribute('value', proc_id);
  document.forms[0].appendChild(ele2);　// 要素を追加
}

// 「エンジニアID」のエレメントの設定
if(engineer_id){
  var ele3 = document.createElement('input');
  ele3.setAttribute('type', 'hidden');
  ele3.setAttribute('name', 'record_id');
  ele3.setAttribute('value', engineer_id);
  document.forms[0].appendChild(ele3);　// 要素を追加
}

 //アクション名の設定
 document.forms[0].action = action_name;
 document.forms[0].method="post";
 //document.forms[0].enctype="multipart/form-data";
 document.forms[0].submit();
}
