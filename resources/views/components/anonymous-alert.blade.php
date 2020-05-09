@props(['variant', 'body'])

<div {{$attributes->merge(["class" => "text-black bg-$variant-300 rounded px-3"])}} >{{$body}}</div>
