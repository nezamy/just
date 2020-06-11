@{
    $pageName = 'home page';
}@
@section('pageTitle'){{ $pageName }}@end
@section('content')
<?php pre('Hello World');?>
@end
@section('scripts')
<script>

</script>
@end