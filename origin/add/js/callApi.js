  //apiキーの定義
  const key = "f8a7c3792c91300c";

  //初期位置に東京駅の緯度経度を定義
  const firstLat = "35.681236";
  const firstLng = "139.767125";

  //初期表示位置のURLの定義
  let url = `https://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=${key}&lat=${firstLat}&lng=${firstLng}&range=3&count=30&order=4&format=jsonp`;

  //初期表示位置
  $.ajax({
      url: url,
      type: 'GET',
      dataType: 'jsonp',
      jsonpCallback: 'callback'
  }).done(function(data) {
      //取得データを確認
      console.log(data);
      console.log(data.results.shop);

      // 初期件数を定義
      let num = '';
      number.insertAdjacentHTML('beforeend', num);

      //htmlを挿入するエレメント
      const firstElement = document.querySelector('#shopWrap');

      //取得した店舗データをループ処理
      for (let i = 0; i < data.results.shop.length; ++i) {
          //テンプレートリテラルでHTMLを定義
          let insertHTML =        
             `<div class="item flex_between align_ctr">
                <div class="left txt_ctr">
                  <a href="${data.results.shop[i]["urls"]["pc"]}" class="value">
                  <img src="${data.results.shop[i]["photo"]["pc"]["l"]}" alt="" />
                  </a>
                </div>
                <div class="right">
                  <ul>
                    <li class="name flex_between">
                      <p class="key f16">店舗名</p>
                      <a href="${data.results.shop[i]["urls"]["pc"]}" class="value f16">${data.results.shop[i]["name"]}</a>
                    </li>
                    <li class="flex_between">
                      <p class="key f16">住所</p>
                      <a href='https://maps.google.co.jp/maps?ll=${data.results.shop[i]["lat"]},${data.results.shop[i]
                      ["lng"]}'
                      class="value f16">${data.results.shop[i]["address"]}</a>
                    </li>
                    <li class="flex_between">
                      <p class="key f16">アクセス</p>
                      <p class="value f16">${data.results.shop[i]["access"]}</p>
                    </li>
                    <li class="flex_between">
                      <p class="key f16">営業時間</p>
                      <p class="value f16">${data.results.shop[i]["open"]}</p>
                    </li>
                    <li class="flex_between">
                      <p class="key f16">駐車場</p>
                      <p class="value f16">${data.results.shop[i]["parking"]}</p>
                    </li>
                  </ul>
                </div>
              </div>`;
          firstElement.insertAdjacentHTML('beforeend', insertHTML);
      }
    }).fail(function(data) {
        console.log(data);
    });

