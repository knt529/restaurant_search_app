// ボタンを押した時の処理
document.getElementById("location-btn").onclick = function(){
  // ローディング表示を開始
  document.getElementById("loading").style.display = "block";
  // 位置情報を取得する
  navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
};

// 取得に成功した場合の処理
function successCallback(position){
    // 緯度を取得し画面に表示
    var latitude = position.coords.latitude;
    // 経度を取得し画面に表示
    var longitude = position.coords.longitude;

     //htmlを挿入するエレメント
     const number = document.querySelector('#number');
     const element = document.querySelector('#shopWrap');

     //一旦要素を削除
     while (number.firstChild) {
       number.removeChild(number.firstChild);
     }
     while (element.firstChild) {
       element.removeChild(element.firstChild);
     } 

     //入力値の取得
     let lat = latitude;
     let lng = longitude;
     let range = document.getElementById("range").value;
     let genre = document.getElementById("genre").value;

     //検索用URLの定義
     let searchUrl = `https://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=${key}&lat=${lat}&lng=${lng}&range=${range}&genre=${genre}&count=30&order=4&format=jsonp`;

     //値の取得＆HTMLの挿入
     $.ajax({
         url: searchUrl,
         type: 'GET',
         dataType: 'jsonp',
         jsonpCallback: 'callback'
     }).done(function(data) {
         //取得データを確認
         console.log(data);
         console.log(data.results.shop);

         // 結果件数をテンプレートリテラルでHTMLを定義
         let num = `<p class="f16">検索結果 <span class="f20 bold">${data.results.results_available}</span> 件　<br class="on480"/>${data.results.shop.length}件をオススメ順に表示。</p>`;
         number.insertAdjacentHTML('beforeend', num);

         //取得した店舗データをループ処理
         for (let i = 0; i < data.results.shop.length; ++i) {
             //テンプレートリテラルでHTMLを定義
             let insertHTML =        
            ` <div class="item flex_between align_ctr">
               <div class="left txt_ctr">
                 <a href="${data.results.shop[i]["urls"]["pc"]}" class="value f18">
                   <img src="${data.results.shop[i]["photo"]["pc"]["l"]}" alt="" />
                 </a>
               </div>
               <div class="right">
                 <ul>
                   <li class="name flex_between">
                     <p class="key f18">店舗名</p>
                     <a href="${data.results.shop[i]["urls"]["pc"]}" class="value f18">${data.results.shop[i]["name"]}</a>
                   </li>
                   <li class="flex_between">
                     <p class="key f18">住所</p>
                     <a href='https://maps.google.co.jp/maps?ll=${data.results.shop[i]["lat"]},${data.results.shop[i]
                     ["lng"]}'
                     class="value f18">${data.results.shop[i]["address"]}</a>
                   </li>
                   <li class="flex_between">
                     <p class="key f18">アクセス</p>
                     <p class="value f18">${data.results.shop[i]["access"]}</p>
                   </li>
                   <li class="flex_between">
                     <p class="key f18">営業時間</p>
                     <p class="value f18">${data.results.shop[i]["open"]}</p>
                   </li>
                   <li class="flex_between">
                     <p class="key f18">駐車場</p>
                     <p class="value f18">${data.results.shop[i]["parking"]}</p>
                   </li>
                 </ul>
               </div>
              </div>`;
             element.insertAdjacentHTML('beforeend', insertHTML);
           }
       }).fail(function(data) {
           console.log(data);
           // データの取得に失敗したことを表示
         let num = `<p>データを取得できませんでした。</p>`;
         number.insertAdjacentHTML('beforeend', num);
       });

       // ローディング表示を停止
       document.getElementById("loading").style.display = "none";
    };

    // 取得に失敗した場合の処理
    function errorCallback(error){
        console.log(error)
        alert("位置情報が取得できませんでした");

        // ローディング表示を停止
        document.getElementById("loading").style.display = "none";
    };



