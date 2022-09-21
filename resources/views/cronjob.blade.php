@php

$links = App\Models\Myshell::all();


foreach ($links as $link) {
    $check = file_get_contents($link->link);
    if ($check == 0) {
        $link->active = '0';
        $link->save();
        echo $link->sitename . "| Not Active <br>";
    }else {
        $link->active = '1';
        $link->save();
        echo $link->sitename . "| Active <br>";
    }
}





@endphp




