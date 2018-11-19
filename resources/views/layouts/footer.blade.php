<!-- footer -->
</div>
</div>
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 450,   //set editable area's height
            codemirror: { // codemirror options
                theme: 'monokai'
            }
        });

    });
</script>
<!-- Mainly scripts -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/plugins/summernote/summernote.min.js') }}"></script>
<!-- Custom and plugin javascript -->
<script src="{{ asset('js/inspinia.js') }}"></script>
<script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>