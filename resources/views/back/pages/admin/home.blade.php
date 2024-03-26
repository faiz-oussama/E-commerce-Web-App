@extends('back.layout.pages-layout')
@section('pageTitle',isset($pageTitle) ?  $pageTitle : 'BokiShop')    
@section('content')
    content...
@endsection

<script>
    window.addEventListener('popstate', function () {
        if (window.location.href === '{{ route('admin.login') }}') {
            history.pushState(null, null, '{{ route('admin.home') }}');
        }
    });
</script>
