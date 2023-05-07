<?php get_header(); ?>


<div class="front flex">
  <!-- 検索条件エリア -->
  <div class="conditions">
   <div class="box">
      <div class="content">
        <div class="form">
           <div class="item keyword">
              <input type="text" name="keyword" id="keyword" class="f16" value="" placeholder="店名・キーワードで探す">
              <div class="item search_btn txt_ctr">
                <button id="search" onclick="searchKeyword()"  class="f22"></button>
              </div>
           </div>

           <div class="select flex align_end">
             <div class="item genre">
               <span>
                 <select name="genre" id="genre" class="f14" value="" title="選択肢を選んでください">
                   <option value="" selected>すべて</option>
                   <option value="G004">和食</option>
                   <option value="G005">洋食</option>
                   <option value="G007">中華</option>
                   <option value="G013">ラーメン</option>
                   <option value="G001">居酒屋</option>
                   <option value="G008">焼肉・ホルモン</option>
                  </select>
                </span>
              </div>
              
              <div class="item range">
               <span>
                 <select name="range" id="range" class="f14" value="" title="選択肢を選んでください">
                   <option value="" selected>検索範囲</option>
                   <option value="1">300m</option>
                   <option value="2">500m</option>
                   <option value="3">1000m</option>
                   <option value="4">2000m</option>
                   <option value="5">3000m</option>
                 </select>
               </span>
              </div>
           </div>
         </div>

        <div class="location">
          <button id="location-btn" class="location_btn f14 flex align_ctr" title="現在地周辺で検索">
            <img src="<?php echo get_template_directory_uri(); ?>/add/img/pin.png" alt="" class="pin">      
            近くのお店を探す
          </button>
          <p class="f12">※検索に数秒かかる場合があります。</p>
        </div>

      </div>
    </div>
  </div>

  <!-- 検索結果エリア -->
  <div class="result">
    <div class="container">
      <div class="ttl">
        <h3 class="f18">検索結果一覧</h3>
      </div>
  
      <div class="box">
        <div class="number" id="number"></div>
        <div id="paging"></div>
      
        <div class="result_content">
          <div class='shopWrap' id='shopWrap'></div>
        </div>
      </div>
    </div>
  </div>

  <!-- loading表示 -->
  <div id="loading" style="display:none;"></div>
</div>


<?php get_footer(); ?>
