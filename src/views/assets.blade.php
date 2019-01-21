<link rel="stylesheet" href="{{selectCssBasedOnTheme(config('star-rating-ui.theme','css-stars')) ?? ''}}" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>

<script type="text/javascript">
    $(function () {
        $("{{config('star-rating-ui.scriptSelector','.star')}}").barrating({
            theme: "{{config('star-rating-ui.theme','css-stars')}}",
        });
    });

</script>
