{"filter":false,"title":"index.blade.php","tooltip":"/cms/resources/views/users/index.blade.php","undoManager":{"mark":23,"position":23,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"container\">","        <div class=\"row justify-content-center\">","            <div class=\"col-md-8\">","                @foreach ($all_users as $user)","                    <div class=\"card\">","                        <div class=\"card-haeder p-3 w-100 d-flex\">","                            <img src=\"{{ $user->profile_image }}\" class=\"rounded-circle\" width=\"50\" height=\"50\">","                            <div class=\"ml-2 d-flex flex-column\">","                                <p class=\"mb-0\">{{ $user->name }}</p>","                                <a href=\"{{ url('users/' .$user->id) }}\" class=\"text-secondary\">{{ $user->screen_name }}</a>","                            </div>","                        </div>","                    </div>","                @endforeach","            </div>","        </div>","        <div class=\"my-4 d-flex justify-content-center\">","            {{ $all_users->links() }}","        </div>","    </div>","@endsection"],"id":1}],[{"start":{"row":12,"column":112},"end":{"row":12,"column":113},"action":"remove","lines":["_"],"id":4},{"start":{"row":12,"column":111},"end":{"row":12,"column":112},"action":"remove","lines":["n"]},{"start":{"row":12,"column":110},"end":{"row":12,"column":111},"action":"remove","lines":["e"]},{"start":{"row":12,"column":109},"end":{"row":12,"column":110},"action":"remove","lines":["e"]},{"start":{"row":12,"column":108},"end":{"row":12,"column":109},"action":"remove","lines":["r"]},{"start":{"row":12,"column":107},"end":{"row":12,"column":108},"action":"remove","lines":["c"]},{"start":{"row":12,"column":106},"end":{"row":12,"column":107},"action":"remove","lines":["s"]}],[{"start":{"row":9,"column":112},"end":{"row":9,"column":115},"action":"insert","lines":["-->"],"id":5},{"start":{"row":9,"column":28},"end":{"row":9,"column":32},"action":"insert","lines":["<!--"]}],[{"start":{"row":0,"column":0},"end":{"row":23,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"container\">","        <div class=\"row justify-content-center\">","            <div class=\"col-md-8\">","                @foreach ($all_users as $user)","                    <div class=\"card\">","                        <div class=\"card-haeder p-3 w-100 d-flex\">","                            <!--<img src=\"{{ $user->profile_image }}\" class=\"rounded-circle\" width=\"50\" height=\"50\">-->","                            <div class=\"ml-2 d-flex flex-column\">","                                <p class=\"mb-0\">{{ $user->name }}</p>","                                <a href=\"{{ url('users/' .$user->id) }}\" class=\"text-secondary\">{{ $user->name }}</a>","                            </div>","                        </div>","                    </div>","                @endforeach","            </div>","        </div>","        <div class=\"my-4 d-flex justify-content-center\">","            {{ $all_users->links() }}","        </div>","    </div>","@endsection"],"id":6},{"start":{"row":0,"column":0},"end":{"row":44,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"container\">","        <div class=\"row justify-content-center\">","            <div class=\"col-md-8\">","                @foreach ($all_users as $user)","                    <div class=\"card\">","                        <div class=\"card-haeder p-3 w-100 d-flex\">","                            <img src=\"{{ $user->profile_image }}\" class=\"rounded-circle\" width=\"50\" height=\"50\">","                            <div class=\"ml-2 d-flex flex-column\">","                                <p class=\"mb-0\">{{ $user->name }}</p>","                                <a href=\"{{ url('users/' .$user->id) }}\" class=\"text-secondary\">{{ $user->screen_name }}</a>","                            </div>","                            @if (auth()->user()->isFollowed($user->id))","                                <div class=\"px-2\">","                                    <span class=\"px-1 bg-secondary text-light\">フォローされています</span>","                                </div>","                            @endif","                            <div class=\"d-flex justify-content-end flex-grow-1\">","                                @if (auth()->user()->isFollowing($user->id))","                                    <form action=\"{{ route('unfollow', ['id' => $user->id]) }}\" method=\"POST\">","                                        {{ csrf_field() }}","                                        {{ method_field('DELETE') }}","","                                        <button type=\"submit\" class=\"btn btn-danger\">フォロー解除</button>","                                    </form>","                                @else","                                    <form action=\"{{ route('follow', ['id' => $user->id]) }}\" method=\"POST\">","                                        {{ csrf_field() }}","","                                        <button type=\"submit\" class=\"btn btn-primary\">フォローする</button>","                                    </form>","                                @endif","                            </div>","                        </div>","                    </div>","                @endforeach","            </div>","        </div>","        <div class=\"my-4 d-flex justify-content-center\">","            {{ $all_users->links() }}","        </div>","    </div>","@endsection"]}],[{"start":{"row":9,"column":112},"end":{"row":9,"column":115},"action":"insert","lines":["-->"],"id":7},{"start":{"row":9,"column":28},"end":{"row":9,"column":32},"action":"insert","lines":["<!--"]}],[{"start":{"row":12,"column":112},"end":{"row":12,"column":113},"action":"remove","lines":["_"],"id":8},{"start":{"row":12,"column":111},"end":{"row":12,"column":112},"action":"remove","lines":["n"]},{"start":{"row":12,"column":110},"end":{"row":12,"column":111},"action":"remove","lines":["e"]},{"start":{"row":12,"column":109},"end":{"row":12,"column":110},"action":"remove","lines":["e"]},{"start":{"row":12,"column":108},"end":{"row":12,"column":109},"action":"remove","lines":["r"]},{"start":{"row":12,"column":107},"end":{"row":12,"column":108},"action":"remove","lines":["c"]},{"start":{"row":12,"column":106},"end":{"row":12,"column":107},"action":"remove","lines":["s"]}],[{"start":{"row":13,"column":34},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":14,"column":0},"end":{"row":14,"column":28},"action":"insert","lines":["                            "]},{"start":{"row":14,"column":28},"end":{"row":15,"column":0},"action":"insert","lines":["",""]},{"start":{"row":15,"column":0},"end":{"row":15,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":31},"action":"insert","lines":["-->"],"id":10},{"start":{"row":15,"column":28},"end":{"row":15,"column":32},"action":"insert","lines":["<!--"]}],[{"start":{"row":15,"column":32},"end":{"row":15,"column":36},"action":"insert","lines":["フォロー"],"id":11}],[{"start":{"row":21,"column":80},"end":{"row":22,"column":32},"action":"insert","lines":["","                                "],"id":12}],[{"start":{"row":22,"column":32},"end":{"row":22,"column":35},"action":"insert","lines":["-->"],"id":13},{"start":{"row":22,"column":32},"end":{"row":22,"column":36},"action":"insert","lines":["<!--"]}],[{"start":{"row":22,"column":36},"end":{"row":22,"column":39},"action":"insert","lines":["自分が"],"id":14},{"start":{"row":22,"column":39},"end":{"row":22,"column":48},"action":"insert","lines":["フォローしているか"]}],[{"start":{"row":22,"column":48},"end":{"row":22,"column":51},"action":"insert","lines":["どうか"],"id":15},{"start":{"row":22,"column":51},"end":{"row":22,"column":55},"action":"insert","lines":["チェック"]}],[{"start":{"row":22,"column":54},"end":{"row":22,"column":55},"action":"remove","lines":["ク"],"id":16},{"start":{"row":22,"column":53},"end":{"row":22,"column":54},"action":"remove","lines":["ッ"]},{"start":{"row":22,"column":52},"end":{"row":22,"column":53},"action":"remove","lines":["ェ"]},{"start":{"row":22,"column":51},"end":{"row":22,"column":52},"action":"remove","lines":["チ"]},{"start":{"row":22,"column":50},"end":{"row":22,"column":51},"action":"remove","lines":["か"]},{"start":{"row":22,"column":49},"end":{"row":22,"column":50},"action":"remove","lines":["う"]},{"start":{"row":22,"column":48},"end":{"row":22,"column":49},"action":"remove","lines":["ど"]},{"start":{"row":22,"column":47},"end":{"row":22,"column":48},"action":"remove","lines":["か"]}],[{"start":{"row":22,"column":47},"end":{"row":22,"column":48},"action":"insert","lines":["か"],"id":17},{"start":{"row":22,"column":48},"end":{"row":22,"column":52},"action":"insert","lines":["チェック"]}],[{"start":{"row":15,"column":39},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":16,"column":0},"end":{"row":16,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":16,"column":28},"end":{"row":16,"column":31},"action":"insert","lines":["-->"],"id":19},{"start":{"row":16,"column":28},"end":{"row":16,"column":32},"action":"insert","lines":["<!--"]}],[{"start":{"row":16,"column":32},"end":{"row":16,"column":42},"action":"insert","lines":["フォローされているか"],"id":20},{"start":{"row":16,"column":42},"end":{"row":16,"column":46},"action":"insert","lines":["チェック"]}],[{"start":{"row":16,"column":32},"end":{"row":16,"column":35},"action":"insert","lines":["自分が"],"id":21}],[{"start":{"row":25,"column":75},"end":{"row":25,"column":76},"action":"insert","lines":["s"],"id":22}],[{"start":{"row":25,"column":75},"end":{"row":25,"column":76},"action":"remove","lines":["s"],"id":23},{"start":{"row":25,"column":74},"end":{"row":25,"column":75},"action":"remove","lines":["d"]},{"start":{"row":25,"column":73},"end":{"row":25,"column":74},"action":"remove","lines":["i"]}],[{"start":{"row":25,"column":73},"end":{"row":25,"column":74},"action":"insert","lines":["u"],"id":24},{"start":{"row":25,"column":74},"end":{"row":25,"column":75},"action":"insert","lines":["s"]},{"start":{"row":25,"column":75},"end":{"row":25,"column":76},"action":"insert","lines":["e"]},{"start":{"row":25,"column":76},"end":{"row":25,"column":77},"action":"insert","lines":["r"]}],[{"start":{"row":32,"column":72},"end":{"row":32,"column":73},"action":"remove","lines":["d"],"id":25},{"start":{"row":32,"column":71},"end":{"row":32,"column":72},"action":"remove","lines":["i"]}],[{"start":{"row":32,"column":71},"end":{"row":32,"column":72},"action":"insert","lines":["u"],"id":26},{"start":{"row":32,"column":72},"end":{"row":32,"column":73},"action":"insert","lines":["s"]},{"start":{"row":32,"column":73},"end":{"row":32,"column":74},"action":"insert","lines":["e"]},{"start":{"row":32,"column":74},"end":{"row":32,"column":75},"action":"insert","lines":["r"]}]]},"ace":{"folds":[],"scrolltop":57,"scrollleft":0,"selection":{"start":{"row":26,"column":45},"end":{"row":26,"column":45},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1617117930435,"hash":"d5dc42a00c0dae3bbebca3e2af07bef360802b35"}