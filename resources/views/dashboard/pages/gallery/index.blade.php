@extends('dashboard.layout.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Halaman Gallery</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Daftar Gallery</h5>
                            <h6 class="card-subtitle text-muted">Berisi Gallery yang ada padahalaman user.</h6>
                        </div>
                        <div class="card-body">
                            <a type="button" href="{{route('dashboard.galeries.create')}}" class="btn btn-success rounded-5 mb-3">Tambah Data</a>

                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>photo</th>
                                    <th>Description</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $i=1;
//                                @endphp
                                @foreach($galeries as $gallery)
                                    <tr>
                                        <td>{{ $i++}}</td>
                                        <td>{{ $gallery->name }}</td>
{{--                                        <td><a href="{{asset('storage/' . $gallery->photo)}}" data-toggle="lightbox" data-title="A random title" data-footer="A custom footer text">--}}
{{--                                                <img src="{{asset('storage/' . $gallery->photo)}}" class="img-fluid" style="max-width: 90px">--}}
{{--                                            </a></td>--}}
                                        <td>
                                            <a href="{{asset('storage/' . $gallery->photo)}}" data-lightbox="image-1" data-title="My caption"><img src="{{asset('storage/' . $gallery->photo)}}" class="img-fluid" style="max-width: 90px"></a>
                                        </td>
{{--                                        <td><img src="{{asset('storage/' . $gallery->photo)}}" height="100px"></td>--}}
                                        {{--                                        <td>{{ $gallery->photo }}</td>--}}
                                        <td>{{ $gallery->description }}</td>
{{--                                        <td>{{ $gallery->gallery_type }}</td>--}}
                                        <td>{{ \Carbon\Carbon::parse($gallery->date)->format('d M Y') }}</td>
                                        <td>
                                            <div>
                                            <a class="btn btn-info" href="{{ route('dashboard.galeries.edit',$gallery->id) }}"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a data-id="{{$gallery->id}}" class="btn btn-danger delete"><i class="align-middle" data-feather="trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <x-delete-modal></x-delete-modal>
    </main>
@endsection

@section('script')
    <script>
        $(document).on('click', '.delete', function () {
            $('#exampleModal').modal('show')
            const id = $(this).attr('data-id');
            let url = `{{ route('dashboard.galeries.destroy', ':id') }}`.replace(':id', id);
            $('#deleteForm').attr('action', url);
        });

        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })

        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Responsive
            $("#datatables-reponsive").DataTable({
                responsive: true
            });
        });
    </script>
@endsection

