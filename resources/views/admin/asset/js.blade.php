<script src="{{ url('asset_admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ url('asset_admin/js/bootstrap.bundle.min.js') }}"></script>

{{-- <script src="{{ url('asset_admin/vendors/apexcharts/apexcharts.js') }}"></script>
<script src="{{ url('asset_admin/js/pages/dashboard.js') }}"></script> --}}

<script src="{{ url('asset_admin/js/main.js') }}"></script>

<script src="{{ url('asset_admin/vendors/ckeditor/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#tentang'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#kontak'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#ipal'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#interior'))
        .catch(error => {
            console.error(error);
        });
</script>