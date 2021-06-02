@extends('layouts.default')

@section('content')
<div class="container-fluid py-4">
    <div class="mt-4">
        <div class="row mx-0">
            <div class="col-4 offset-4 border rounded px-5 py-3">
                <div class="font-24 font-weight-bold mb-4">Ubah Password</div>
                <div class="alert alert-success" role="alert">
                    Password berhasil diubah!
                </div>
                <div class="alert alert-danger" role="alert">
                    Password gagal diubah!
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Password Lama</label>
                        <input name="password" id="password" type="password" class="form-control form-control-sm" required><span class="far fa-eye field-icon" id="icon" onclick="showPass()"></span>
                    </div>
                    <div class="form-group mt-2">
                        <label>Password Baru</label>
                        <input id="password-baru" type="password" class="form-control form-control-sm" name="password-baru" required>
                        <span id="icon-baru" class="far fa-eye field-icon" onclick="showPassBaru()"></span>
                    </div>
                    <div class="form-group mt-5">
                        <button type="button" class="btn btn-sm btn-danger w-100">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('before-style')
<style>
    .grad-line {
        width: 32px;
        height: 5px;
        background: linear-gradient(258.28deg, #E53935 4.73%, #575988 94.22%);
        border-radius: 10px;
    }
    /* toggle password */
    .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: -25px;
        margin-right: 0.5rem;
        position: relative;
        z-index: 999;
    }

</style>
@endpush

@push('after-script')
<script>
        function showPass() {
            var pass = document.getElementById("password");
            var icon = document.getElementById("icon");
            if (pass.type === "password") {
                pass.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                pass.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }

        function showPassBaru() {
            var pass = document.getElementById("password-baru");
            var icon = document.getElementById("icon-baru");
            if (pass.type === "password") {
                pass.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                pass.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
</script>
@endpush
