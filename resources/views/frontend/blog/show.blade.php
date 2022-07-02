

@extends('layouts.app')

@section('content')
<main class="body container">
@php
    echo($post->post_content_detail );
@endphp
</main>

@endsection

@section('footerScripts')
    @parent
   <script>
let gettagA = document.getElementsByTagName('a');
        for (let item of gettagA) {
    item.href ='#';
}
let getAllImg = document.getElementsByTagName('img');
for (let item of getAllImg) {
    if(item.hasAttribute('data-src')){
        item.src = item.getAttribute('data-src');
    }
}
    </script>
    @endsection
