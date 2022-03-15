var faculty = {};
var columns = [];
function populateFields() {
	document.getElementById("AvailFields").innerHTML = "";
	for (let i = 0; i < columns.length; i++) {
		let o = document.createElement("option");
		o.value = columns[i];
		o.innerText = columns[i];
		document.getElementById("AvailFields").appendChild(o);
	}
}
function initData() {
	document.getElementById("name").value = faculty.name;
	document.getElementById("designation").value = faculty.designation;
	document.getElementById("email").value = faculty.emailID;
	document.getElementById("phone").value = faculty.phoneNumber;
	document.getElementById("profilePic").src =
		"." + faculty.image + "?t=" + new Date().getTime();
	document.getElementById("acoe").value = faculty.acoeSiteLink;
	document.getElementById("personal-site").value = faculty.personalSiteLink;
	columns = columns.filter((value) => {
		return !(value in faculty.details);
	});
	populateFields();
}
function updatePrimary() {
	//formData.append("id",ID);
	var formData = new FormData();
	var img = $("#image").prop("files")[0];
	formData.append("image", img);
	formData.append("fid", ID);
	formData.append("name", $("#name").val());
	formData.append("designation", $("#designation").val());
	formData.append("email", $("#email").val());
	formData.append("phoneNumber", $("#phone").val());
	formData.append("acoeSite", $("#acoe").val());
	formData.append("personalSite", $("#personal-site").val());

	$.ajax({
		type: "POST",
		url: "../PHP/updatePrimaryFaculty.php",
		data: formData,
		processData: false,
		contentType: false,
		complete: (d) => {
			console.log(d.responseText);
			$("#profilePic").src =
				$("#profilePic").src + "?t=" + new Date().getTime();
			$("#image").val(null);
			if (d.responseText.trim() == "true") {
				document.getElementById("updateMsg-P").style["transform"] = "scale(1)";
				setTimeout(() => {
					document.getElementById("updateMsg-P").style["transform"] =
						"scale(0)";
				}, 1500);
			}
		},
	});
}
window.onload = () => {
	$(
		$.ajax({
			type: "POST",
			url: "../PHP/getFaculty.php",
			data: {
				fid: 0,
			},
			complete: (d) => {
				try {
					let data = JSON.parse(d.responseText);
					columns = data.details.split("#");
				} catch (e) {
					alert("Counld Not Find Columns");
					window.loaction = "/";
				}
			},
		})
	);
	$(
		$.ajax({
			type: "POST",
			url: "../PHP/getFaculty.php",

			data: {
				fid: ID,
			},
			complete: (d) => {
				try {
					faculty = JSON.parse(d.responseText.replace(/\n/g, ""));
					if (faculty.details == null) faculty.details = [];
					initData();
				} catch (e) {
					alert("Faculty Not Found!!!");
					window.location = "/";
				}
			},
		})
	);
	$("#image").change(function () {
		if ($(this).val().split(".").pop() != "webp") {
			$(this).val(null);
			alert("Image must be of 'webp' type");
		}
	});
	$("#AvailFields").change(() => {
		console.log($("#AvailFields").val());
	});
};
