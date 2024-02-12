<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if (Session::has('success'))
            iziToast.success({
                title: 'Success', 
                message: '{{ Session::get('success') }}',
                position: 'topRight',
            });
        @elseif (Session::has('fail'))
            iziToast.warning({
                title: 'Warning',
                message: '{{ Session::get('fail') }}',
                position: 'topRight',
            });
        @endif
    });
</script>
