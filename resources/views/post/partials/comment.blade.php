<?php

$traverse = function ($comments) use(&$traverse){

foreach($comments as $comment):
?>

<div class="comment">
  <div class="media">
    <a class="pull-left"> <img class="media-object" src="{{ $comment->user->avatar() }}" alt=""> </a>
    <div class="media-body">
        <h4 class="media-heading">{{ $comment->user->name }}
          @if($comment->parent_id)
          <small>In reply to {{ $comment->parent->user->name }} </small>
          @endif
        </h4>
        {{ $comment->body }}

        <hr>

        @if($comment->children)
          <?php $traverse($comment->children) ?>
        @endif
    </div>
  </div>
</div>

<hr>

<?php
endforeach;

};

$traverse($comments);

?>
