var faculty = {};
var columns = [];
var field = "";
function populateFields() {
	document.getElementById("AvailFields").innerHTML = "";
	let o = document.createElement("option");
	o.value = "";
	o.innerText = "choose a field";
	document.getElementById("AvailFields").appendChild(o);
	for (let i = 0; i < columns.length; i++) {
		let o = document.createElement("option");
		o.id = columns[i];
		o.value = columns[i];
		o.innerText = columns[i].replaceAll("_", " ");
		document.getElementById("AvailFields").appendChild(o);
	}
}
function updateContentToDB(val) {
	let j={
		data:val
	};
	$(
		$.ajax({
			type: "POST",
			url: "../PHP/updFacultyCol.php",
			data: {
				tableN: field,
				fid: faculty.id,
				data:JSON.stringify(j)
			},
			complete:(r)=>{
				console.log(r.responseText);
			}
		})
	);
}
function updateContent() {
	document.getElementById("upd-msg").style["transform"] = "scale(1.2)";
	setTimeout(() => {
		document.getElementById("upd-msg").style["transform"] = "scale(0)";
	}, 1000);
	let data = document.getElementById("display-contents");
	let inputs = data.getElementsByTagName("input");
	let values = [];
	for (let i = 0; i < inputs.length; i++) {
		values.push(inputs[i].value);
	}
	values = values.filter((v) => {
		return v != "";
	});
	updateContentToDB(values);
}
function appendContent(val = "") {
	let i = document.createElement("input");
	i.setAttribute("type", "text");
	i.value = val;
	document.getElementById("display-contents").appendChild(i);
}
function populateContent(d) {
	document.getElementById("display-contents").innerHTML = "";
	for (let i = 0; i < d.length; i++) {
		appendContent(d[i]);
	}
}
function appendList(a) {
	let inp = document.createElement("input");
	inp.setAttribute("type", "radio");
	inp.id = a;
	inp.name = "list";
	inp.onchange = () => {
		field = a;
		document.getElementById("field-title").innerHTML = a.replaceAll("_", " ");
		document
			.getElementById("display-contents")
			.scrollIntoView({ behavior: "smooth", block: "end", inline: "end" });
		$("h2 ~ button").css("visibility", "visible");
		$(
			$.ajax({
				type: "POST",
				url: "../PHP/getFacultyColDetails.php",
				data: {
					tableN: a,
					fid: faculty.id
				},
				complete: (r) => {
					try {
						let d = JSON.parse(r.responseText);
						populateContent(d.data);
					} catch (e) {
						populateContent([]);
					}
				},
			})
		);
	};
	let l = document.createElement("label");
	l.setAttribute("for", a);
	l.classList = "faculty-item";
	l.innerText = a.replaceAll("_", " ");
	document.getElementById("list").appendChild(inp);
	document.getElementById("list").appendChild(l);
}
function generateList() {
	document.getElementById("list").innerHTML = "";
	for (let i = 0; i < faculty.details.length; i++) {
		appendList(faculty.details[i]);
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
	
	if (faculty.details != null) {
		faculty.details.replace(" ", "_");
		faculty.details=faculty.details.split("#");
	} else faculty.details = [];
	columns = columns.filter((value) => {
		return !(faculty.details.includes(value));
	});
	console.log(columns);
	populateFields();
	generateList();
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
	formData.append("areaOfSpec", $("#AOS").val());

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
function addField() {
	let val = $("#AvailFields").val();
	faculty.details.push(val);
	$(
		$.ajax({
			type: "POST",
			url: "../PHP/addFacultyTo.php",
			data: {
				tableN: val,
				fid: faculty.id,
				details:faculty.details.join("#")
			},
		})
	);
	faculty.details.push(val);
	$(`#${val}`).remove();
	columns = columns.filter((value) => {
		return !(faculty.details.includes(value));
	});
	appendList(val);
	$("#AvailFields").val("");
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
		addField();
	});
};
