{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":29,"position":29,"stack":[[{"start":{"row":42,"column":59},"end":{"row":43,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":43,"column":0},"end":{"row":44,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":44,"column":0},"end":{"row":45,"column":48},"action":"insert","lines":["// ユーザ関連","    Route::resource('users', 'UsersController');"],"id":6}],[{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"remove","lines":["    "],"id":7}],[{"start":{"row":44,"column":3},"end":{"row":44,"column":6},"action":"insert","lines":["追加："],"id":8}],[{"start":{"row":45,"column":42},"end":{"row":45,"column":91},"action":"insert","lines":[", ['only' => ['index', 'show', 'edit', 'update']]"],"id":9}],[{"start":{"row":44,"column":11},"end":{"row":44,"column":12},"action":"insert","lines":["　"],"id":10}],[{"start":{"row":44,"column":12},"end":{"row":44,"column":23},"action":"insert","lines":["一覧/詳細/編集/更新"],"id":11}],[{"start":{"row":44,"column":12},"end":{"row":44,"column":20},"action":"insert","lines":["使うアクション："],"id":12}],[{"start":{"row":45,"column":93},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":46,"column":0},"end":{"row":47,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":47,"column":0},"end":{"row":49,"column":89},"action":"insert","lines":["// フォロー/フォロー解除を追加","    Route::post('users/{user}/follow', 'UsersController@follow')->name('follow');","    Route::delete('users/{user}/unfollow', 'UsersController@unfollow')->name('unfollow');"],"id":14}],[{"start":{"row":47,"column":3},"end":{"row":47,"column":6},"action":"insert","lines":["追加："],"id":15}],[{"start":{"row":47,"column":19},"end":{"row":47,"column":20},"action":"remove","lines":["加"],"id":16},{"start":{"row":47,"column":18},"end":{"row":47,"column":19},"action":"remove","lines":["追"]},{"start":{"row":47,"column":17},"end":{"row":47,"column":18},"action":"remove","lines":["を"]}],[{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"remove","lines":["    "],"id":17},{"start":{"row":48,"column":0},"end":{"row":49,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":48,"column":0},"end":{"row":49,"column":0},"action":"remove","lines":["",""],"id":18}],[{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"remove","lines":["    "],"id":19}],[{"start":{"row":26,"column":51},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":28,"column":0},"end":{"row":30,"column":11},"action":"insert","lines":["  @endif","    <!-- Book: 既に登録されてる内容のリスト -->","@endsection"],"id":21}],[{"start":{"row":28,"column":0},"end":{"row":30,"column":11},"action":"remove","lines":["  @endif","    <!-- Book: 既に登録されてる内容のリスト -->","@endsection"],"id":22}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":51},"action":"insert","lines":["Route::get('/category2', 'BooksController@index4');"],"id":23}],[{"start":{"row":28,"column":21},"end":{"row":28,"column":22},"action":"remove","lines":["2"],"id":24},{"start":{"row":28,"column":20},"end":{"row":28,"column":21},"action":"remove","lines":["y"]},{"start":{"row":28,"column":19},"end":{"row":28,"column":20},"action":"remove","lines":["r"]},{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"remove","lines":["o"]},{"start":{"row":28,"column":17},"end":{"row":28,"column":18},"action":"remove","lines":["g"]},{"start":{"row":28,"column":16},"end":{"row":28,"column":17},"action":"remove","lines":["e"]},{"start":{"row":28,"column":15},"end":{"row":28,"column":16},"action":"remove","lines":["t"]},{"start":{"row":28,"column":14},"end":{"row":28,"column":15},"action":"remove","lines":["a"]},{"start":{"row":28,"column":13},"end":{"row":28,"column":14},"action":"remove","lines":["c"]}],[{"start":{"row":28,"column":13},"end":{"row":28,"column":14},"action":"insert","lines":["u"],"id":25},{"start":{"row":28,"column":14},"end":{"row":28,"column":15},"action":"insert","lines":["s"]},{"start":{"row":28,"column":15},"end":{"row":28,"column":16},"action":"insert","lines":["e"]},{"start":{"row":28,"column":16},"end":{"row":28,"column":17},"action":"insert","lines":["r"]},{"start":{"row":28,"column":17},"end":{"row":28,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"insert","lines":["/"],"id":26},{"start":{"row":28,"column":19},"end":{"row":28,"column":20},"action":"insert","lines":["s"]},{"start":{"row":28,"column":20},"end":{"row":28,"column":21},"action":"insert","lines":["h"]},{"start":{"row":28,"column":21},"end":{"row":28,"column":22},"action":"insert","lines":["o"]},{"start":{"row":28,"column":22},"end":{"row":28,"column":23},"action":"insert","lines":["w"]}],[{"start":{"row":28,"column":48},"end":{"row":28,"column":49},"action":"remove","lines":["4"],"id":27}],[{"start":{"row":28,"column":48},"end":{"row":28,"column":49},"action":"insert","lines":["5"],"id":28}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"remove","lines":["/"],"id":29}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"insert","lines":["."],"id":30}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"remove","lines":["."],"id":31}],[{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"insert","lines":["/"],"id":32}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":3},"action":"insert","lines":["// "],"id":33}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":55},"action":"remove","lines":["// Route::get('/users/show', 'BooksController@index5');"],"id":34},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["",""]},{"start":{"row":26,"column":51},"end":{"row":27,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":536.5,"scrollleft":0,"selection":{"start":{"row":48,"column":13},"end":{"row":48,"column":25},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":37,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1617257805178,"hash":"b4112698c10a8477233ca72b922abe81df6332fe"}