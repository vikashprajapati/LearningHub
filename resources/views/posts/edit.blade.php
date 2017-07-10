@extends('/layouts/main')
@section('title','|post')
@section('stylesheets')
  <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection
@section('content')

<!--stylesheets for texteditor and design  -->
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script src="js/typew.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
  new nicEditor({fullPanel : true}).panelInstance('thread');
});
</script>
<!-- end of stylesheets -->

{!!Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT'])!!}
  <div class="container">
    <div class="panel panel-success">
      <div class="panel-body">
        <label class="col-lg-3 control-label" name="title" margin-bottom:"50px">Topic Title:</label>
        <div class="col-lg-9">
          {{Form::text('title',null,['class'=>'form-control'])}}
        </div>

    <div class="wrap m-t-50 m-b-50" style="width:100%">
    {{Form::textarea('body',null,['class'=>'form-control'])}}
  </div>
<div class="alert alert-info alert-dismissable">
  <a class="panel-close close" data-dismiss="alert">×</a>
<i class="fa fa-newspaper-o "></i>
Choose the appropriate tags for your thread.
</div>


<label class="col-lg-3 control-label" for="category">Category:</label>
    <select id="category" name="category" class="form-control">
      @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->category}}</option>
      @endforeach
    </select>

<label for="tags" class="col-lg-3 control-label p-t-10">Tags:</label>
<div class="col-lg-8">
<div class="ui-select p-t-10">
  <select id="tags" name="tags[]" multiple class="form-control select2-multi">
    @foreach ($tags as $tag)
      <option value="{{$tag->id}}">{{$tag->title}}</option>
    @endforeach
  </select>
</div>
</div>


<div class="col-md-8" >
  <button class="btn btn-primary" style="left" type="submit" >
    Save Changes<span class="fa fa-paper-plane" aria-hidden="true"></span></button>

    <a href="/" class="btn btn-danger">Cancel</a>
</div>
</div>
</div>
  </div>
</form>
{!!Form::close()!!}
@endsection
@section('scripts')
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script type="text/javascript">
  var x=
    $("#tags").select2({
      tags: true,
    })
    .val({!! json_encode($post->tags()->allRelatedIds()) !!})
    .trigger('change');

    $("#category").select2({
      tags: true,
    });
  </script>
@endsection
