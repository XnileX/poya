@php
    $blogCaption = getContent('blog.content',true);
    $blogs = getContent('blog.element',false,3);
@endphp
@if($blogCaption)


    <!-- blog section start -->

    <!-- blog section end -->
@endif
