
@foreach($articles as $article)
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="dorehh">
        <h2>{{$article->title}}</h2>

      <p>{{$article->body}}</p>
        <div class="clear"></div>
    </div>
</div>
    <hr>
@endforeach
