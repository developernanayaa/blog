<div class="portlet" >
    <div class="portlet-heading">
        <h2>{{count($comments)}} Comments on this article:</h2>
    </div>
    <div id="bg-primary1" class="panel-collapse collapse in">
        <div class="portlet-body comments">
            @include('comments.show')
            @include('comments.create')
            {{--@include('errors.main')--}}
        </div>
    </div>

</div>