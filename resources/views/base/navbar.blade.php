<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">BPS Check</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div>
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ route('welcome') }}">BPS Check</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('all')) ? 'active' : '' }}" href="{{ route('all') }}">All data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#uploadData">Upload data</a>
                </li>
            </ul>
        </div>

        <div class="modal fade" id="uploadData" tabindex="-1" aria-labelledby="uploadDataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload data BPS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">BPS Excel File</label>
                                <input class="form-control" type="file" id="formFile" name="bps" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Upload data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
