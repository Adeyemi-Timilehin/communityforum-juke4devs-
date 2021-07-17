@extends('layouts.userLayout')
@section('content')
    <div class="primary">
        <div class="container-fluid mt-5">
            <div class="col-10">
                <div class="row border border-light border-2">
                    <div class="card bg-dark">
                        @foreach ($post as $mypost)
                            <div class="card-header">
                                <div class="col-sm-12">
                                    <div class="card-title">
                                        <h2> {{ $mypost->post_title }}</h2>
                                    </div>

                                    <div class="row col-8">
                                        <div class="col-sm-3">
                                            <img src="{{ url('/') }}/uploads/{{ $mypost->picture }}"
                                                class="rounded-circle" width="100">

                                        </div>
                                        <div class="col-sm-6">
                                            <h4>{{ strtoupper($mypost->Username) }}

                                            </h4>
                                            {{ $mypost->date_posted }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 mt-2">
                                    <img src="{{ url('/') }}/post_image/{{ $mypost->post_pics }}"
                                        class=" rounded-start img-thumbnail">
                                </div>
                            </div>
                            <div class="card-body border-top border-success">
                                <p> {{ $mypost->post_description }}</p>
                                <div class="row">
                                    <h2 class="text-light">Discussion</h2>
                                    <div class="col-2">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-4x fa-comment" style="color:white;background"></i>
                                        </a>
                                    </div>
                                    <div class="col-8">

                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="row offset-2">
                        <div class="d-none col-md-4 mx-auto reply">
                            <form method="get" action="/show/reply">
                                <div class="form-group">
                                    <textarea id="my-textarea" class="form-control bg-dark text-light" name="" rows="2"></textarea>
                                    <button type="submit">Post</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                            @foreach ($dis as $discussion)
                                <div class="row mb-3">
                                    <div class="col-1">
                                        <img src="{{ url('/') }}/uploads/{{ $discussion->picture }}"
                                            class="rounded-circle" width="50">
                                    </div>
                                    <div class="col-6">
                                        <div class="border border-secondary p-2">
                                            <p> {{ $discussion->discussion }}</p>
                                        </div>
                                    </div>
                                    <div class="col-10 mx-auto replybtn">
                                        <i class="fa fa-reply"></i><p class="d-inline-flex"> Reply</p>
                                    </div>
                                </div>
                            @endforeach
                           
                        </div>

                    </div>

                </div>
            </div>
        </div>
        







        @endforeach
        {{-- <div> <a href="#" data-toggle="modal" data-target="#exampleModal"> Discussions</a></div> --}}



        <!-- Modal -->
        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="exampleModal" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close mainbutton" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="disc/{{ $mypost->post_id }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="my-textarea">Text</label>
                                <textarea id="my-textarea" class="form-control" name="discuss" rows="3"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn mainbutton">Submit</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        {{-- Reply --}}
        
     
    </div>
@endsection
