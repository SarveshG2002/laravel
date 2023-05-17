@php
    
    $keyExists = session()->has('data');
    print_r('key: ',$keyExists);
@endphp

@if ($keyExists)
    <p>The key exists in the session.</p>
    @php
        print_r(session()->get('data'));
        
    @endphp
    
@else
    <p>The key does not exist in the session.</p>
   
@endif
