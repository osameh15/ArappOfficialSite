<script>

    @if(session()->has("feedbacks"))
    @foreach(session()->get("feedbacks") as $feedback)
    $.toast({
        heading: '{{$feedback["title"]}}',
        text: "{{$feedback["body"]}}",
        showHideTransition: 'slide',
        icon: '{{$feedback['type']}}'
    });
    @endforeach
    @endif
    function handleDeleteItem(e, route, method) {
        e.preventDefault();
        $.post(route, {_method: method, _token: "{{csrf_token()}}"})
            .done(function (response) {
                e.target.closest("tr").remove();
                $.toast({
                    heading: response.title,
                    text: response.message,
                    showHideTransition: 'slide',
                    icon: 'success'
                })

            })
            .fail(function (response) {
                $.toast({
                    heading: response.title,
                    text: response.message,
                    showHideTransition: 'fade',
                    icon: 'error'
                })
            });
    }
</script>