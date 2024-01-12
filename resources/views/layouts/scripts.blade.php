    {{-- <!-- JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            // Hide all sections except the first one
            $(".section:not(:first)").hide();

            // Handle sidebar menu item clicks
            $("nav#sidebar a").on("click", function() {
                // Get the target section ID from the data attribute
                var targetSection = $(this).data("section");

                // Hide all sections
                $(".section").hide();

                // Show the target section
                $("#" + targetSection).show();
            });
        });
    </script>
    <script>
        setTimeout(function() {
            document.getElementById("myDiv").style.display = "block";
        }, 2000); // Delay of 2000 milliseconds (2 seconds)
    </script>
    <script>
        document.getElementById("openModalBtn").addEventListener("click", function() {
          document.getElementById("modal").style.display = "block";
        });

        document.getElementsByClassName("close")[0].addEventListener("click", function() {
          document.getElementById("modal").style.display = "none";
        });
        </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>

 --}}
