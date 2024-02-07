<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if (Session::has('success'))
            Swal.fire({
                icon: 'warning',
                title: 'warning',
                text: '{{ Session::get('success') }}',
            });
        @elseif (Session::has('fail'))
            Swal.fire({
                icon: 'warning',
                title: 'warning',
                text: '{{ Session::get('fail') }}',
            });
        @endif
    });
</script>
