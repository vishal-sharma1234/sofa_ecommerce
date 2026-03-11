document.getElementById("statusToggle").onclick = function () {
    this.classList.toggle("active");

    if (this.classList.contains("active")) {
        document.getElementById("status").value = 1;
    } else {
        document.getElementById("status").value = 0;
    }
};

// $(document).on("submit", "#recordForm", function (e) {

//     alert("dsdsd");

//     e.preventDefault();

//     let form = $(this);
//     let formData = new FormData(this);

//     // Clear old errors
//     form.find("small.error-text").text("");

//     $.ajax({
//         url: form.attr("action"),
//         method: form.attr("method"),
//         data: formData,
//         processData: false,
//         contentType: false,
//         success: function (response) {
//             if (response.error) {
//                 toastr.error(response.message);
//             }
//             if (response.success) {
//                 form[0].reset();
//                 $('#update_id').val('');
//                 $("#recordModal").modal("hide");
//                 $('.datatables-basic').DataTable().ajax.reload(null, false);
//                 toastr.success(response.message);
//             }
//         },
//         error: function (xhr) {
//             if (xhr.status === 422) {
//                 let errors = xhr.responseJSON.errors;

//                 // Clear old errors
//                 $("small.error-text").text("");

//                 // Show new errors
//                 $.each(errors, function (key, messages) {
//                     $(form).find("." + key + "_error").text(messages[0]);
//                 });

//                 return;
//             }

//             // Other errors
//             console.log("Unexpected Error:", xhr.responseText);
//         }
//     });
// });