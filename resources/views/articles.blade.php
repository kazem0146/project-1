
@foreach($articles as $article)
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="dorehh">
        <h2>{{$article->title}}</h2>
<p>category</p>
            <p style="margin:5px">{{$article->body}}</p>
        <div class="clear"></div>
    </div>
</div>

<h6> aaaaaaaaaaaaa</h6>
    <hr>
@endforeach
