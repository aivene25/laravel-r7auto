@extends('layouts.admin') @section('content') @include('includes.admin-header')


<div class="col-md-8">
    <div class="card-box">
        <h4 class="header-title m-t-0 m-b-30">Recent Users</h4>

        <div class="table-responsive">
            <table class="table table table-hover m-0">
                <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Published Date</th>
                    </tr>
                </thead>
                <tbody>
                    @if( count($posts)>0 ) @foreach( $posts as $post )
                    <tr>
                        <td>
                            <img src="{{ $post->post_image}}" style="height:100px; width:100px;"
                            />
                        </td>
                        <td>
                            <h5 class="m-0">{{ $post->title}}</h5>
                        </td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->category}}</td>
                        <td>{{ $post->created_at}}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post->id)}}">
                                <button class="btn btn-primary waves-effect waves-light" style="width:100%">EDIT</button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('posts.destroy', $post->id )}}" onsubmit="event.preventDefault()" id="form">
                                {{ csrf_field() }} {{ method_field('DELETE') }}

                                <input name="_method" type="hidden" value="PATCH">

                                <button class="btn btn-primary waves-effect waves-light" type="submit" data-toggle="modal" data-target=".bs-example-modal-lg"
                                    style="width:100%; background-color:red !important; color:red;">DELETE</button>
                            </form>

                        </td>
                    </tr>


                    @endforeach @else
                    <p>No Posts Found </p>
                    @endif

                </tbody>
            </table>
        </div>
        <div style="margin-top:30px">
            <button class="btn btn-primary">
                <a href="/posts/create" style="color:white;"> ADD POST</a>
            </button>
        </div>
        <!-- table-responsive -->
    </div>
    <!-- end card -->
</div>
<!-- end col -->

</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myLargeModalLabel">Are you sure you want to delete this post ?</h4>
            </div>
            <div class="modal-body" style="text-align:center; margin:10px 0px 10px px ;">
                <div style="margin-left:10px; display:inline-block;">
                    <button class="btn btn-lg btn-danger" style="width:100px; margin-left:10px;" onclick="submit()">YES</button>

                </div>
                <div style="display:inline-block;">
                    <button class="btn btn-lg btn-primary " style="width:100px" type="button" data-dismiss="modal" aria-hidden="true">NO</button>
                </div>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- /.modal -->
<script>
    function submit() {
        document.getElementById('form').submit();

    }
</script> @include('includes.admin-footer') @endsection