  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [0, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>


  <script>
    document.getElementById('loadingButton').addEventListener('click', function () {
      let timerInterval;
      Swal.fire({
        title: 'Please wait a moment.',
        html: 'I will close in <b></b> milliseconds.',
        // timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading();
          const b = Swal.getHtmlContainer().querySelector('b');
          timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft();
          }, 100);
        },
        willClose: () => {
          clearInterval(timerInterval);
        }
      }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
          console.log('I was closed by the timer');
        }
      });
    });
  </script>

@if(session('success'))  <script>
    Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: 'บันทึกข้อมูลสำเร็จ',
  showConfirmButton: false,
  timer: 1500
})
  </script>
  @endif

  @if(session('error'))
  <script>
      Swal.fire({
          position: 'top-center',
          icon: 'warning',
          title: 'Warning!',
          text: '{{ session('error') }}',
          showConfirmButton: false,
          timer: 2500
      });
  </script>
@endif


  @if(session('del-success'))  <script>
    Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: 'Data deleted successfully.',
  showConfirmButton: false,
  timer: 1500
})
  </script>
  @endif

  @if(session('del-error'))  <script>
    Swal.fire({
  position: 'top-center',
  icon: 'error',
  title: 'Failed to delete content',
  showConfirmButton: false,
  timer: 1500
})
  </script>





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const thumbnailImageInput = document.getElementById("thumbnail_image");
    const urlValidationMessage = document.getElementById("urlValidationMessage");
    const imagePreview = document.getElementById("imagePreview");
    const imageErrorMessage = document.getElementById("imageErrorMessage");
    const pasteButton = document.getElementById("pasteButton");
    function validateURL(input) {
        const urlPattern = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;
        return urlPattern.test(input);
    }
    function handleImageURL(url) {
        if (validateURL(url)) {
            urlValidationMessage.textContent = "";
            thumbnailImageInput.style.borderColor = "";
            imageErrorMessage.textContent = "";
            const img = new Image();
            img.src = url;
            img.alt = "Thumbnail Preview";
            img.style.maxWidth = "300px";
            img.style.maxHeight = "300px";
            img.onerror = function() {
                imageErrorMessage.textContent = "Image load error";
                imageErrorMessage.style.color = "red";
                imagePreview.innerHTML = "";
                Swal.fire({
                    icon: 'error',
                    title: 'Image Load Error',
                    text: 'There was an error loading the image.',
                });
            };
            imagePreview.innerHTML = "";
            imagePreview.appendChild(img);
        } else {
            thumbnailImageInput.style.borderColor = "red";
            imagePreview.innerHTML = "";
            imageErrorMessage.textContent = "";
            Swal.fire({
                icon: 'error',
                title: 'Invalid URL',
                text: 'Please enter a valid URL for the image.',
            });
        }
    }
pasteButton.addEventListener("click", function() {
navigator.clipboard.readText().then(function(pastedText) {

thumbnailImageInput.value = pastedText;
handleImageURL(pastedText);
}).catch(function(error) {
console.error('Failed to read clipboard data: ', error);
});
});
    thumbnailImageInput.addEventListener("input", function() {
        const inputValue = thumbnailImageInput.value;
        handleImageURL(inputValue);
    });
</script>
<div class="form-group">
<label for="editor">Description<label for="*" class="text-danger">*</label></label>
@csrf
<div id="editor-container">
    <div id="editor44" name="description" class="rounded">
    </div>
</div>
</div>
<input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
</form>
</div>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
var quill = new Quill('#editor44', {
theme: 'snow',
modules: {
    toolbar: [

        [{
            header: [1, 2, 3, 4, 5, 6, false]
        }],
        ['bold', 'italic', 'underline', 'strike'],
        [{
            list: 'ordered'
        }, {
            list: 'bullet'
        }],

        ['link'],
        ['image'],

    ],
}
});
var form = document.querySelector("#form1");
form.addEventListener("submit", function(event) {
event.preventDefault();
var editorContent = quill.root.innerHTML;
var hiddenInput = document.createElement("input");
hiddenInput.setAttribute("type", "hidden");
hiddenInput.setAttribute("name", "description");
hiddenInput.setAttribute("value", editorContent);
form.appendChild(hiddenInput);
form.submit();
});
});
</script>

  @endif

