"use strict";
document.addEventListener("DOMContentLoaded", function(e) {
	{
		const o = document.querySelector("#formAccountSettings"),
			a = document.querySelector("#formAccountDeactivation") /*,i=a.querySelector(".deactivate-account")*/ ,
			s = (o && FormValidation.formValidation(o, {
				fields: {
					firstName: {
						validators: {
							notEmpty: {
								message: "Please enter first name"
							}
						}
					},
					lastName: {
						validators: {
							notEmpty: {
								message: "Please enter last name"
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap5: new FormValidation.plugins.Bootstrap5({
						eleValidClass: "",
						rowSelector: ".col-md-6"
					}),
					submitButton: new FormValidation.plugins.SubmitButton,
					autoFocus: new FormValidation.plugins.AutoFocus
				},
				init: e => {
					e.on("plugins.message.placed", function(e) {
						e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement)
					})
				}
			}), a && FormValidation.formValidation(a, {
				fields: {
					accountActivation: {
						validators: {
							notEmpty: {
								message: "Please confirm you want to delete account"
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap5: new FormValidation.plugins.Bootstrap5({
						eleValidClass: ""
					}),
					submitButton: new FormValidation.plugins.SubmitButton,
					fieldStatus: new FormValidation.plugins.FieldStatus({
						onStatusChanged: function(e) {
							e ? i.removeAttribute("disabled") : i.setAttribute("disabled", "disabled")
						}
					}),
					autoFocus: new FormValidation.plugins.AutoFocus
				},
				init: e => {
					e.on("plugins.message.placed", function(e) {
						e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement)
					})
				}
			}), document.querySelector("#accountActivation"));
		// i && (i.onclick = function() {
		// 	1 == s.checked && Swal.fire({
		// 		text: "Are you sure you would like to deactivate your account?",
		// 		icon: "warning",
		// 		showCancelButton: !0,
		// 		confirmButtonText: "Yes",
		// 		customClass: {
		// 			confirmButton: "btn btn-primary me-2 waves-effect waves-light",
		// 			cancelButton: "btn btn-label-secondary waves-effect waves-light"
		// 		},
		// 		buttonsStyling: !1
		// 	}).then(function(e) {
		// 		e.value ? Swal.fire({
		// 			icon: "success",
		// 			title: "Deleted!",
		// 			text: "Your file has been deleted.",
		// 			customClass: {
		// 				confirmButton: "btn btn-success waves-effect waves-light"
		// 			}
		// 		}) : e.dismiss === Swal.DismissReason.cancel && Swal.fire({
		// 			title: "Cancelled",
		// 			text: "Deactivation Cancelled!!",
		// 			icon: "error",
		// 			customClass: {
		// 				confirmButton: "btn btn-success waves-effect waves-light"
		// 			}
		// 		})
		// 	})
		// });
		var t = document.querySelector("#phoneNumber"),
			n = document.querySelector("#zipCode");
		t && new Cleave(t, {
			phone: !0,
			phoneRegionCode: "US"
		}), n && new Cleave(n, {
			delimiter: "",
			numeral: !0
		});
		// First image upload section
		let avatarImage = document.getElementById("uploadedAvatar");
		const avatarInput = document.querySelector(".account-file-input"),
		      avatarReset = document.querySelector(".account-image-reset");

		if (avatarImage) {
		    const originalAvatarSrc = avatarImage.src;
		    avatarInput.onchange = () => {
		        if (avatarInput.files[0]) {
		            avatarImage.src = window.URL.createObjectURL(avatarInput.files[0]);
		        }
		    };
		    avatarReset.onclick = () => {
		        avatarInput.value = "";
		        avatarImage.src = originalAvatarSrc;
		    };
		}

		// Second image upload section
		let faviconImage = document.getElementById("uploadedFaviconAvatar");
		const faviconInput = document.querySelector(".favicon-file-input"),
		      faviconReset = document.querySelector(".favicon-image-reset");

		if (faviconImage) {
		    const originalFaviconSrc = faviconImage.src;
		    faviconInput.onchange = () => {
		        if (faviconInput.files[0]) {
		            faviconImage.src = window.URL.createObjectURL(faviconInput.files[0]);
		        }
		    };
		    faviconReset.onclick = () => {
		        faviconInput.value = "";
		        faviconImage.src = originalFaviconSrc;
		    };
		}
		// Third image upload section
			let loginImage = document.getElementById("uploadedLoginaAvatar");
			const loginInput = document.querySelector(".login-file-input"),
			      loginReset = document.querySelector(".login-image-reset");

			if (loginImage) {
			    const originalLoginSrc = loginImage.src;
			    loginInput.onchange = () => {
			        if (loginInput.files[0]) {
			            loginImage.src = window.URL.createObjectURL(loginInput.files[0]);
			        }
			    };
			    loginReset.onclick = () => {
			        loginInput.value = "";
			        loginImage.src = originalLoginSrc;
			    };
			}

	}
}), $(function() {
	var e = $(".select2");
	e.length && e.each(function() {
		var e = $(this);
		e.wrap('<div class="position-relative"></div>'), e.select2({
			dropdownParent: e.parent()
		})
	})
});