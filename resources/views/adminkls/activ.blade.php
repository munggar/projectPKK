<!DOCTYPE html>
<html lang="en">
@include('include.head')

@include('include.loader')

<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>

    <div style="display:none;" id="myDiv" class="animate-bottom">

        <div class="container-scroller">
            <!-- sidebar -->
            @include('include.sidebar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- navbar -->
                @include('include.nav')
                
                <section>
                <div class="main-panel">
                    <div class="content-wrapper">
                                <div class="row ">
                                    <div class="col-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Kegiatan Para Siswa</h4>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Import Data
                                                    </button>
                                                    <a href="{{ route('mapelexport') }}"
                                                        class="btn btn-primary">Export Data</a>
                            
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Import</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <form action="/mapelimport" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlFile1">Input File Excel</label>
                                                                            <input type="file" name="file" class="form-control-file"
                                                                                id="exampleFormControlFile1" required="required">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                    </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    
                                                
    </section>
    {{-- js --}}
    @include('include.js')
    @include('sweetalert::alert')
</body>

</html>


<!-- Modal -->
