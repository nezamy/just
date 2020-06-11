<?php $pageName = 'home page';?>
<?php $this->section('pageTitle', function($ViewBag) { extract($this->data, EXTR_OVERWRITE|EXTR_REFS);?><?= $this->escape($pageName);?><?php });?>
<?php $this->section('content', function($ViewBag) { extract($this->data, EXTR_OVERWRITE|EXTR_REFS);?>
<?php pre('Hello World');?>
<?php });?>
<?php $this->section('scripts', function($ViewBag) { extract($this->data, EXTR_OVERWRITE|EXTR_REFS);?>
<script>

</script>
<?php });?>