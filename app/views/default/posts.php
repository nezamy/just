@{
    $pageName = 'home page';
}@
@section('pageTitle'){{ $pageName }}@end
@section('content')
<br>
<h2 class="text-center">Hello it's come from view file</h2>
<div class="row">

<?php foreach($news as $item):?>
    <div class="col-6">
        <div class="card" >
            <img src="http://placekitten.com/480/480" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $item['title'] }}</h5>
                <p class="card-text">{! $item['content'] !}</p>
            </div>
        </div>
    </div>

<?php endforeach;?>

</div>
@end
@section('scripts')
<script>

</script>
@end