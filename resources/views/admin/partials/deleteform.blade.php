<form method="post" action="{{ route($route, $target)}}" id="delete-post">
    @csrf
    @method('DELETE')
</form>
<script>
    function submit_delete(e) {
            e.preventDefault()
            const deleteForm = document.getElementById('delete-post');
            deleteForm.submit();
        }
</script>
