        <!-- Bootstrap core JS-->
        <script src="{{ asset('js/js/jquery-3.6.0.js') }}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('assets/script/scripts.js') }}" defer></script>
     
        <script>
$(document).ready(function(){
            $("#img").mouseenter(function() {
            $("#set").toggleClass("d-none");
       
});
        $(".replybtn").click(function(){
        
        $(".reply").toggleClass("d-none");
         });
})
        </script>
</body>

</html>
