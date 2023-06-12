@extends('dashboard.layout.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Form Tambah Gallery</h5>
                            <h6 class="card-subtitle text-muted">Anda dapat menambah gallery di form ini </h6>
                        </div>
                        <div class="card-body">
                            <form action="{{route('dashboard.galeries.update', $gallery->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$gallery->id}}">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="name" value="{{$gallery->name}}"  class="form-control" placeholder="Nama">
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="photo">Foto</label>
                                    <br>
                                        <img src="{{ asset('storage/' . $gallery->photo) }}" name="photo" style="max-width: 200px" alt="Current Photo">
                                        <br>
                                    <br>

                                    <input type="hidden" name="photo" value="{{$gallery->photo}}">
                                    <input type="file" class="form-control-file" id="photo" name="photo">
                                    <small>Format yang diterima: jpeg, png, jpg, gif. Ukuran maksimum file: 2MB</small>
                                </div> --}}
                                <div class="mb-3">
                                    <label for="photo">Foto</label>
                                    <br>
                                    <img src="{{ asset('storage/' . $gallery->photo) }}" name="photo" style="max-width: 200px" alt="Current Photo">
                                    <br>
                                    <br>
                                    <input type="hidden" name="photo" value="{{$gallery->photo}}">
                                    <input type="file" class="form-control-file" id="photo" name="photo">
                                    <small>Format yang diterima: jpeg, png, jpg, gif. Ukuran maksimum file: 2MB</small>
                                </div>

{{--                                <div class="mb-3">--}}
{{--                                    <label class="form-label w-100">Upload Photo</label>--}}
{{--                                    <input type="file" name="photo" value="{{$gallery->photo}}">--}}
{{--                                    <small class="form-text text-muted">Example block-level help text here.</small>--}}
{{--                                </div>--}}

                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea class="form-control" placeholder="Textarea" name="description" rows="3">{{$gallery->description}}</textarea>
                                </div>

                                <div class="col-12 col-xl-4">
                                    <div class="mb-3 mb-xl-0">
                                        <label class="form-label">Date</label>
                                        <input class="form-control" type="date" value="{{$gallery->date}}" name="date" />
                                    </div>
                                </div>
                                <div class="mt-3"></div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection



