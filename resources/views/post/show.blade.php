@extends('layouts.userLayout')
@section('content')
    <div class="primary">
        <div class="container-fluid mt-5">
            <div class="col-10 offset-1">
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
                                        {{-- @foreach ($dis as $d)
                                            {{ $d }}
                                        @endforeach --}}
                                      {{ $dis }}
                                        <p>fkffmvnnfjn</p>
                                    </div>
                                </div>

                          



                            </div>
                        
                    </div>
                    <div class="row offset-1">
                        <div class="col-1">
                            <img src="{{ url('/') }}/uploads/{{ $mypost->picture }}"
                                class="rounded-circle" width="50">
                        </div>
                        <div class="col-6">
                            <div class="border border-secondary">
                                {{-- <p>{{ $mypost->discussion }}</p> --}}
                            </div>
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
    </div>
@endsection
